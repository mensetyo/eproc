<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firstpage extends CI_Controller {

	function __construct() {
		parent::__construct();
   
	   // load library dan helper
	   // $this->load->library('session');
	   $this->load->library('form_validation');
	   $this->load->helper(array('captcha','form'));
  }
  
  

	public function index()
	{
		$this->load->view('firstpage/firstpage');
	}
	
	public function login()
	{
		$this->load->view('drt_login/drt_login_form');
	}
	

	public function after_registrasi()
	{
		$this->session->unset_userdata('mycaptcha');
		$this->load->view('drt_pra_reg/drt_pra_reg_sukses');
	}
	
	public function pra_registrasi()
	{
		// $this->load->helper('captcha');
		
		$original_string = array_merge(range(0,9), range('a','z'), range('A', 'Z'));
        $original_string = implode("", $original_string);
        $captcha = substr(str_shuffle($original_string), 0, 6);
		//$data=array('user_id'=>'');

		
		$vals = array(
        'word'          => $captcha,
        'img_path'      => './captcha/',
        'img_url'       => base_url('captcha'),
        'font_path'     => base_url('system/fonts/texb.ttf'),
        'img_width'     => '150',
        'img_height'    => 30,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 16,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
		);

		$cap = create_captcha($vals);
		//$data['captcha']= $cap['image'];
		$this->session->set_userdata('mycaptcha', $cap['word']);
		
					$data=array(
							'user_id'=>"",
							'tipe_perusahaan'=>"",
							'nm_perusahaan'=>"",
							'alamat'=>"",
							'propinsi'=>"",
							'kota'=>"",
							'password'=>"",
							'konfirmasi_password'=>"",
							'nama_lengkap'=>"",
							'email'=>"",
							'konfirmasi_email'=>"",
							'security_code'=>"",
							'setuju'=>"",
							'captcha'=>$cap['image'],
							'captcha_error'=>''
						);
						
						
		$this->load->view('drt_pra_reg/drt_pra_reg_form',$data);
	}
	
	function save_peserta()
	{
        
	
		date_default_timezone_set('Asia/Jakarta');
		$agree = $this->input->post('agree');
	    $mycaptcha = $this->session->userdata('mycaptcha');

	
		$data = array(
				'user_id' => $this->input->post('user_id'),
				'pass' => md5($this->input->post('password')),
				'rpass' =>$this->input->post('password'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'tipe_perusahaan' => $this->input->post('tipe_perusahaan'),
				'nm_perusahaan' => $this->input->post('nm_perusahaan'),
				'alamat' =>$this->input->post('alamat'),
				'propinsi' => $this->input->post('propinsi'),
				'kota' => $this->input->post('kota'),
				'captcha' => $this->input->post('security_code'),
				'created' => date("Y-m-d H:i:s")
			);

			$this->db->insert('peserta', $data);
			$this->session->set_flashdata('after_save', 'Pre registrasi selesai. Email konfirmasi sudah dikirim ke '.$this->input->post('email').' silahkan buka dan ikuti instruksi dalam email tersebut untuk melanjutkan pendaftaran');
			redirect(base_url('firstpage/after_registrasi'));
		
	}
	
	


}
