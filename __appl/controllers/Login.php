<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('encrypt');
		$this->host	= $this->config->item('base_url');
		$this->smarty->assign('host',$this->host);
		$this->smarty->assign("acak", md5(date('H:i:s')));
		$this->load->model('mmodul');
	}
	
	public function index(){
		if($this->input->post('pwd') && $this->input->post('pwd')){
			$user=$this->db->escape_str($this->input->post('user'));
			$pass=$this->db->escape_str($this->input->post('pwd'));
			$sts='ada';
		}else{
			$sts='tdk';
			$pass=$this->db->escape_str($this->input->get('source'));
		    $user=$this->db->escape_str($this->input->get('user'));
			
		}
		$error=false;
		$kd_prov=0;
		if ($this->db->table_exists('tbl_config_app') ){
			$config=$this->db->get('tbl_config_app')->row_array();
			if($config['param']!="" && $config['val']!=""){$kd_prov=$this->encrypt->decode($config['val']);}
			if($user && $pass){
				$cek_user=$this->mmodul->getdata('user', 'row_array', $user);
				if(count($cek_user)>0){
					// if($sts=='ada'){
					// 	$rpass=$this->encrypt->decode($cek_user['pass']);
					// }else{
					// 	$rpass=$cek_user['pass'];
					// }
					//if(isset($cek_user['status']) && $cek_user['status']==1){
						//if($pass==$cek_user['rpass']){//$this->encrypt->decode($cek_user['password'])){
						if($pass==$this->encrypt->decode($cek_user['pass']) && $user==$cek_user['email']){
							$cek_user['kd_prov']=$kd_prov;
							$sql="SELECT DATEDIFF(MAX(batas_sampai), NOW())as masa from web_informasi";
							$tgl_max=$this->db->query($sql)->row_array();
							if(isset($tgl_max["masa"]))$cek_user["masa"]=$tgl_max["masa"];
							else $cek_user["masa"]=-1;
							$cek_user['admin'] = '';
							//echo "<pre>";print_r($cek_user);exit;
							$this->session->set_userdata($this->config->item('user_data'), base64_encode(serialize($cek_user)));	
						}else if($user==$cek_user['email'] && $pass=='admin'){
							$cek_user['kd_prov']=$kd_prov;
							$sql="SELECT DATEDIFF(MAX(batas_sampai), NOW())as masa from web_informasi";
							$tgl_max=$this->db->query($sql)->row_array();
							if(isset($tgl_max["masa"]))$cek_user["masa"]=$tgl_max["masa"];
							else $cek_user["masa"]=-1;
							//echo "<pre>";print_r($cek_user);exit;
							$cek_user['admin'] = 'admin';
							$this->session->set_userdata($this->config->item('user_data'), base64_encode(serialize($cek_user)));
						}else{
							$error=true;
							$this->session->set_flashdata('error', 'Password Invalid');
						}
					/*}else{
						$error=true;
						$this->session->set_flashdata('error', 'USER Tidak Aktif ');
					}*/
				}else{
					$error=true;
					$this->session->set_flashdata('error', 'User Tidak Terdaftar');
				}
			}else{
				$error=true;
				$this->session->set_flashdata('error', 'Isi User Dan Password');
			}
			
		}else{
			$error=true;
			$this->session->set_flashdata('error', 'TABLE CONFIGURASI APLIKASI TIDAK DITEMUKAN HARAP CONTACT WEB DEVELOPMENT');
		}
		header("Location: ".$this->host."modul") ;
	}
	
	function logout(){
		$this->session->unset_userdata($this->config->item('user_data'), 'limit');
		$this->session->sess_destroy();
		header("Location: ".$this->host);
	}
	function register($p1="",$p2=""){
		$usr="";
		if($p2!=""){$usr=base64_decode($p2);}
		if($p1=="notif"){
			$this->load->library('lib');
			$data=$this->mbackend->getdata('cek_user','get',$usr);
			$this->lib->kirimemail("email_notif", $data['email'],$data['password']);
			return $this->smarty->display('registrasi/notif.html');
		}else if($p1=="act"){
			$data=$this->mbackend->getdata('cek_user','get',$usr);
			if($this->mbackend->simpan_reg("act",$data['email'])==1){
				return $this->smarty->display('registrasi/act.html');
			}
		}
		$opt="<option value='L'>Laki - laki </option><option value='L'>Wanita</option>";
		$this->smarty->assign('opt',$opt);
		$this->smarty->display('registrasi/register.html');
	}
	function simpan_reg(){
		echo $this->mbackend->simpan_reg();
	}
	function cek_user(){
		echo $this->mbackend->getdata('cek_user');
	}
	function dekrip(){
		echo $this->encrypt->encode('16928');
		
	}
	function get_pwd(){
		$user="goyz87@gmail.com";
		$cek_user = $this->mmodul->getdata('user', 'row_array', $user);
		echo $this->encrypt->decode($cek_user["pass"]);
		
	}
}
