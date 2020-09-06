<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webpage extends CI_Controller {

	function __construct() {
		parent::__construct();
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("If-Modified-Since: Mon, 22 Jan 2008 00:00:00 GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Cache-Control: private"); 
		header("Pragma: no-cache"); 
	   $this->host	= $this->config->item('base_url');
	   $this->smarty->assign('host',$this->host);
	   $this->load->library(array('form_validation','encrypt'));
	   $this->load->helper(array('captcha','form'));
	   $this->load->model("mmodul");
	   $this->smarty->assign("acak", md5(date('H:i:s')));
	   $this->captcha = $this->session->userdata('captcha');
	   $this->auth = unserialize(base64_decode($this->session->userdata($this->config->item('user_data'))));
	   $this->smarty->assign('auth', $this->auth);
	   ini_set( 'date.timezone', 'Asia/Jakarta' );
  }

	public function index()
	{
		
		$tentang_kami=$this->mmodul->getdata ("tentang_kami", "result_array");
		$this->smarty->assign("tentang_kami",$tentang_kami);

		$panduan = $this->mmodul->getdata('web_panduan','result_array');
		$this->smarty->assign('web_panduan', $panduan);

		$alur_gambar=$this->mmodul->getdata ("alur_gambar", "result_array");
		$this->smarty->assign("alur_gambar",$alur_gambar);
		
		$timeline=$this->mmodul->getdata ("timeline", "result_array");
		$this->smarty->assign("timeline",$timeline);
		
		$maksud_tujuan=$this->mmodul->getdata ("maksud_tujuan", "result_array");
		$this->smarty->assign("maksud_tujuan",$maksud_tujuan);
		
		$faq=$this->mmodul->getdata ("faq", "result_array");
		$this->smarty->assign("faq",$faq);

		$kontak=$this->mmodul->getdata ("kontak", "result_array");
		$this->smarty->assign("kontak",$kontak);
		
		
		$this->smarty->display('webpage/tpl_home.php');
	}
	function getkonten($p1="",$p2=""){
		switch($p1){
			case "form_lupa":
				$kontak=$this->mmodul->getdata ("kontak", "result_array");
				$this->smarty->assign("kontak",$kontak);
				$this->smarty->assign("modul",'form_lupa.php');
			break;
			case "pengumuman":
				$unit=$this->mmodul->getdata ("unit", "result_array");
				$this->smarty->assign("unit",$unit);
				$this->smarty->assign("modul",'pengumuman_pengadaan_ls.php');
				$p1="pengumuman_pengadaan_ls";
			break;
			case "detil_pemenang":
				$projek=$this->mmodul->getdata('pemenang','row_array','edit',$p2);
				$get_rekap_thp2=$this->mmodul->getdata('get_pemenang_sementara_all','result_array',$projek["id"]);
				$this->smarty->assign("jml", count($get_rekap_thp2));
				$this->smarty->assign("rekap_thp2", $get_rekap_thp2);
				$this->smarty->assign("id_pengadaan", $p2);
				$this->smarty->assign("projek",$projek);
				$this->smarty->assign("modul",'detil_pemenang.php');
			break;
			case "detil_projek":
				$projek=$this->mmodul->getdata('pengadaan','row_array','edit',$p2);
				$kri_adm=$this->mmodul->getdata('eproc_pengadaan_kriteria','result_array','ADM',$p2);
				$kri_keu=$this->mmodul->getdata('eproc_pengadaan_kriteria','result_array','KEU',$p2);
				$kri_tk=$this->mmodul->getdata('eproc_pengadaan_kriteria','result_array','TK',$p2);
				$this->smarty->assign("kri_keu",$kri_keu);
				$this->smarty->assign("kri_tk",$kri_tk);
				$this->smarty->assign("kri_adm",$kri_adm);
				$this->smarty->assign("projek",$projek);
				$this->smarty->assign("modul",'detil_projek.php');
			break;
			
		}
		if(!file_exists($this->config->item('appl').APPPATH.'views/webpage/'.$p1.'.php')){
			$this->smarty->assign("msg",'MAAF TIDAK DAPAT MENGAKSES HALAMAN INI ');
			$this->smarty->display('invalid.html');
		}else{
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
		    $this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}
	}

	function getdata($p1){
		echo $this->mmodul->getdata($p1,"json");
	}	
	
	public function syarat()
	{
		$panduan = $this->mmodul->getdata('web_panduan','result_array');
		$this->smarty->assign('web_panduan', $panduan);
		$syarat_ketentuan=$this->mmodul->getdata ("syarat_ketentuan", "result_array");
		$this->smarty->assign("syarat_ketentuan",$syarat_ketentuan);
		
		$kontak=$this->mmodul->getdata ("kontak", "result_array");
		$this->smarty->assign("kontak",$kontak);
		
		$this->smarty->display('webpage/syarat.php');
	}
	
	public function buku()
	{
		$panduan=$this->mmodul->getdata ("panduan", "result_array");
		$this->smarty->assign("panduan",$panduan);
		$kontak=$this->mmodul->getdata ("kontak", "result_array");
		$this->smarty->assign("kontak",$kontak);
		$this->smarty->display('webpage/buku.php');
	}
	
	public function dokumen()
	{
		$tentang_kami=$this->mmodul->getdata ("tentang_kami", "result_array");
		$this->smarty->assign("tentang_kami",$tentang_kami);
		
		$dokumen=$this->mmodul->getdata ("dokumen", "result_array");
		$this->smarty->assign("dokumen",$dokumen);
		$kontak=$this->mmodul->getdata ("kontak", "result_array");
		$this->smarty->assign("kontak",$kontak);
		$this->smarty->display('webpage/dokumen.php');
	}
	
	public function pengumuman_pengadaan()
	{
		$tentang_kami=$this->mmodul->getdata ("tentang_kami", "result_array");
		$unit=$this->mmodul->getdata ("unit", "result_array");
		$this->smarty->assign("unit",$unit);
		$this->smarty->assign("tentang_kami",$tentang_kami);
		
		$pengumuman_pengadaan=$this->mmodul->getdata ("pengumuman_pengadaan", "result_array");
		$this->smarty->assign("pengumuman_pengadaan",$pengumuman_pengadaan);
		
		$kontak=$this->mmodul->getdata ("kontak", "result_array");
		$this->smarty->assign("kontak",$kontak);
		$this->smarty->display('webpage/pengumuman_pengadaan.php');
	}
	
	public function pengumuman_dpt()
	{
		$tentang_kami=$this->mmodul->getdata ("tentang_kami", "result_array");
		$this->smarty->assign("tentang_kami",$tentang_kami);
		
		$pengumuman_dpt=$this->mmodul->getdata ("pengumuman_dpt", "result_array");
		$this->smarty->assign("pengumuman_dpt",$pengumuman_dpt);
		$kontak=$this->mmodul->getdata ("kontak", "result_array");
		$this->smarty->assign("kontak",$kontak);
		$this->smarty->display('webpage/pengumuman_dpt.php');
	}
	
	public function hasil_pengadaan()
	{
		$tentang_kami=$this->mmodul->getdata ("tentang_kami", "result_array");
		$this->smarty->assign("tentang_kami",$tentang_kami);
		$unit=$this->mmodul->getdata ("unit", "result_array");
		$this->smarty->assign("unit",$unit);
		$hasil_pengadaan=$this->mmodul->getdata ("hasil_pengadaan", "result_array");
		$this->smarty->assign("hasil_pengadaan",$hasil_pengadaan);
		
		$this->smarty->display('webpage/hasil_pengadaan.php');
	}
	
	public function hasil_dpt()
	{
		$tentang_kami=$this->mmodul->getdata ("tentang_kami", "result_array");
		$this->smarty->assign("tentang_kami",$tentang_kami);
		
		$hasil_dpt=$this->mmodul->getdata ("hasil_dpt", "result_array");
		$this->smarty->assign("hasil_dpt",$hasil_dpt);
		
		$this->smarty->display('webpage/hasil_dpt.php');
	}
	
	public function berita()
	{
		$berita=$this->mmodul->getdata ("berita", "result_array");
		$this->smarty->assign("berita",$berita);
		
		$this->smarty->display('webpage/berita.php');
	}


	public function login()
	{
		// $this->load->view('webpage/tpl_login');
	          
				$this->load->helper(array('captcha','url'));

		      $config_captcha = array(
				'img_path'  => './captcha/',
				'img_url'  => base_url().'captcha/',
				'img_width'  => '200',
				'img_height' => 60,
				'border' => 0,
				'expiration' => 7200
	);

   // create captcha image
   $cap = create_captcha($config_captcha);

   // store image html code in a variable
   $data['img'] = $cap['image'];

   // store the captcha word in a session
    $this->session->set_userdata('mycaptcha', $cap['word']);


		$this->load->view('webpage/tpl_new_login',$data);

	}

	public function register()
	{
		$data['disable']="disabled";
		// $this->load->view('webpage/tpl_register');
	
		$this->load->view('webpage/tpl_new_register',$data);

	}

	public function register_sukses()
	{
		$this->load->view('webpage/tpl_register_sukses');
	}
	
	function keterangan()
	{
		
		$table="<table width='100%' border='0'>";
		$table.="<tr><td><font style=\"font-family: arial; font-size: 13px;\"><strong>Barang </strong> adalah setiap benda baik berwujud maupun tidak berwujud, bergerak maupun tidak bergerak, yang dapat
diperdagangkan, dipakai, dipergunakan atau dimanfaatkan oleh pengguna Barang.</td></tr>";
		$table.="<tr><td>&nbsp;</td></tr>";
		$table.="<tr><td><font style=\"font-family: arial; font-size: 13px;\"><strong>Pekerjaan Konstruksi</strong> adalah keseluruhan atau sebagian kegiatan yang meliputi pembangunan, pengoperasian,
pemeliharaan, pembongkaran, dan pembangunan kembali suatu bangunan.</td></tr>";
		$table.="<tr><td>&nbsp;</td></tr>";
		$table.="<tr><td><font style=\"font-family: arial; font-size: 13px;\"><strong>Jasa Konsultansi</strong> adalah jasa layanan profesional yang membutuhkan keahlian tertentu diberbagai bidang keilmuan
yang mengutamakan adanya olah pikir.</td></tr>";
		$table.="<tr><td>&nbsp;</td></tr>";
		$table.="<tr><td><font style=\"font-family: arial; font-size: 13px;\"><strong>Jasa lainnya</strong> adalah jasa non-konsultansi atau jasa yang membutuhkan peralatan, metodologi khusus,dan/atau keterampilan dalam suatu
sistem tata kelola yang telah dikenal luas di dunia usaha untuk menyelesaikan suatu pekerjaan.</td></tr>";
		$table.="</table>";
		
		echo $table;
		//echo "sss";exit;
	}

	function aturan_kondisi()
	{
		$this->load->view('webpage/tpl_aturan_kondisi');
	}


	    public function recaptcha()
    {

         $this->load->library('recaptcha');

        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                echo "You got it!";
            }
        }

        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );
        $this->load->view('recaptcha', $data);
	}
	

	function reg($p1=""){
		if($p1==""){
			$bulan = array (
				1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);			

			$tglnow = date('Y-m-d');
			$expired = '';
			$btssampai= '';
			$btsmulai='';
			$timeline=$this->mmodul->getdata ("timeline_reg", "result_array");
			if(empty($timeline)){
				$expired = 'expired';
			}else{
				foreach($timeline as $val){
					if($val['status_reg']==1){
						$tglreg = date('Y-m-d',strtotime($val['batas_sampai']));
						$tglregawl = date('Y-m-d', strtotime($val['batas_dari']));
						$btsmulai = $val['batas_dari'];
						$btssampai = $val['batas_sampai'];
						if($tglnow >= $tglregawl && $tglnow <= $tglreg){
							$expired = 'agree';
						}else{
							$expired = 'expired';
						}
						$pecahkan = explode('-', $btssampai);
						$btssampai = $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	
						$pecahkan1 = explode('-', $btsmulai);
						$btsmulai = $pecahkan1[2] . ' ' . $bulan[ (int)$pecahkan1[1] ] . ' ' . $pecahkan1[0];
					}

							
					$this->smarty->assign("btsmulai",$btsmulai);
					$this->smarty->assign("btssampai",$btssampai);
					$this->smarty->assign("tglnow",$tglnow);
					$this->smarty->assign("tglreg",$tglreg);
					$this->smarty->assign("tglregawl",$tglregawl);

				}
	
			}
			$tipe=$this->mmodul->getdata ("tipe", "result_array");
			$propinsi=$this->mmodul->getdata('propinsi','result_array','get');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$panduan = $this->mmodul->getdata('web_panduan','result_array');
			$this->smarty->assign('web_panduan', $panduan);

			$this->smarty->assign("expired",$expired);
			$this->smarty->assign("timeline",$timeline);
			$this->smarty->assign("tipe",$tipe);
			$this->smarty->assign("propinsi",$propinsi);
			$this->smarty->assign("modul",'registrasi.php');
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			$post = array();
			foreach($_POST as $k=>$v){
				if($this->input->post($k)!=""){
					$post[$k] = $this->input->post($k);
				}
			}
			$simpan_reg = $this->mmodul->simpan_data("registrasi", $post);
			if($simpan_reg){
			//if($this->lib->kirimemail($this->input->post("email"),$subject,$isi)){
				$subject="Pendaftaran DRT PT. Jasamarga Tollroad Operator Jam  ".date('Y-m-d H:i');
						$isi='
							<!doctype html>
							<html>
							<head>
							<meta charset="UTF-8">
							<title>Untitled Document</title>
							</head>

							<body>
							<blockquote>&nbsp;</blockquote>
							<table width="100%" height="246" border="0">
							  <tbody>
								<tr>
								  <td width="277">&nbsp;<img src="'.$this->host.'__assets/img/logo.png"></td>
								  <td width="81">&nbsp;</td>
								  <td width="11">&nbsp;</td>
								  <td width="442">&nbsp;</td>
								  <td width="224">&nbsp;</td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td>Terima Kasih</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td colspan="5">
								  	<p style="text-align:justify">
									Pendaftaran calon rekanan berhasil disubmit.<br>
									Selanjutnya panitia akan melakukan Verifikasi terhadap Dokumen awal pendaftaran.<br>
									Hasil verifikasi pendaftaran tersebut akan kami kirimkan melalui email yang sudah didaftarkan.					
								  	</p>
								</td>
								</tr>
								
								<tr>
								  <td height="30" colspan="5"><p style="text-align:justify">Jika ada pertanyaan lebih lanjut Anda dapat menghubungi helpdesk kami.</p>
								  <br></td>
								</tr>
								<tr>
								  <td colspan="3">HelpDesk E-procurement</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td colspan="3">PT. Jasamarga Tollroad Operator</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td colspan="5">&nbsp;Gedung Cabang Jagorawi Lt. 4, Plaza Tol Taman Mini Indonesia Indah, 
								  </td>
								</tr>
								<tr>
								  <td colspan="3">Jakarta 13550 Indonesia</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td colspan="3">Email : procurement@jmto.co.id</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td colspan="3">Telp:(021)22984722</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								</tr>
								<tr>
									<td colspan="3">* Mohon untuk tidak membalas karena email ini dikirim secara otomatis melalui sistem.</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							  </tbody>
							</table>
							</body>
							</html>
							';
				echo $this->lib->kirimemail($this->input->post("email"),$subject,$isi);
			}
		}
	}
	function tes_email(){
		$subject="Pendaftaran DRT PT. Jasamarga Tollroad Operator Jam  ".date('Y-m-d H:i');
		$isi='
			<!doctype html>
			<html>
			<head>
			<meta charset="UTF-8">
			<title>Untitled Document</title>
			</head>

			<body>
			<blockquote>&nbsp;</blockquote>
			<table width="100%" height="246" border="0">
			  <tbody>
				<tr>
				  <td width="277">&nbsp;<img src="'.$this->host.'__assets/img/logo.png"></td>
				  <td width="81">&nbsp;</td>
				  <td width="11">&nbsp;</td>
				  <td width="442">&nbsp;</td>
				  <td width="224">&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Terima Kasih</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="5">
					  <p style="text-align:justify">
					Pendaftaran calon rekanan berhasil disubmit.<br>
					Selanjutnya panitia akan melakukan Verifikasi terhadap Dokumen awal pendaftaran.<br>
					Hasil verifikasi pendaftaran tersebut akan kami kirimkan melalui email yang sudah didaftarkan.					
					  </p>
				</td>
				</tr>
				
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td height="30" colspan="5"><p style="text-align:justify">Jika ada pertanyaan lebih lanjut Anda dapat menghubungi helpdesk kami.</p>
				  <br></td>
				</tr>
				<tr>
				  <td colspan="3">HelpDesk E-procurement</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="3">PT. Jasamarga Tollroad Operator</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="5">&nbsp;Gedung Cabang Jagorawi Lt. 4, Plaza Tol Taman Mini Indonesia Indah, 
				  </td>
				</tr>
				<tr>
				  <td colspan="3">Jakarta 13550 Indonesia</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="3">Email : procurement@jmto.co.id</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="3">Telp:(021)22984722</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="3">* Mohon untuk tidak membalas karena email ini dikirim secara otomatis melalui sistem.</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			  </tbody>
			</table>
			</body>
			</html>
			';
			echo $this->lib->kirimemail('goyz87@gmail.com','TES',$isi);
	}
	function remainder($p1="",$p2=""){
		//$p1=base64_decode('I2RtMzNuSk1UTyM=');
		//echo $p1;exit;
		//echo base64_decode($p1);exit;
		$ck=$this->db->get_where('drt_peserta',array('email'=>$this->db->escape_str(base64_decode($p1))))->row_array();
		if(isset($ck["email"])){
			$this->smarty->assign("usr",base64_decode($p1));
			$this->smarty->assign("modul",'new_pwd.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
		    $this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			$this->smarty->assign("msg",'Ops User Anda Tidak Terdaftar!!!');
			$this->smarty->display('invalid.html');
		}
		//echo $user;exit;
		//echo uniqid();exit;
	}
	function updt_pwd(){
		$this->db->trans_begin();
		$usr=$this->input->post('email');
		$pwd=$this->input->post('pwd');
		$sql="UPDATE drt_peserta set pass='".$this->encrypt->encode($pwd)."' WHERE email='".$usr."'";
		$this->db->query($sql);
		if($this->db->trans_status() == false){
			$this->db->trans_rollback();
			echo 0;
		}else{
			echo $this->db->trans_commit();	
		}
	}
	function get_combo(){
		$mod=$this->input->post('v');
		$val=$this->input->post('v3');
		$bind=$this->input->post('v2');
		$data=$this->mmodul->getdata($mod,'result_array','get',$bind);
		$opt="<option value=''>--Pilih--</option>";
		
		foreach($data as $v){
			if($v['id']==$val)$sel="selected"; else $sel="";
			$opt .="<option value='".$v['id']."' ".$sel.">".$v['txt']."</option>";
		}
		echo $opt;
	}
	
	function genCaptcha($rand){
		header("Content-type: image/jpeg");// out out the image
		$RandomStr = md5(microtime());// md5 to generate the random string
		$ResultStr = substr($RandomStr,0,5);//trim 5 digit
		$NewImage = imagecreatefromjpeg("__assets/img/back_captcha.jpg");//image create by existing image and as back ground
		$font='__assets/font/ROCCB.ttf';
		//echo "capcha:".$ResultStr ; exit();
		$TextColor = imagecolorallocate($NewImage, 1, 34, 128);//text color-white
		
		imagettftext($NewImage, 22, 4, 25, 25, $TextColor, $font, $ResultStr);

		$this->session->set_userdata("captcha", $ResultStr);
		imagejpeg($NewImage);//Output image to browser/**/
		ImageDestroy($NewImage); //Free up resources
		exit();
	}
	function checkCaptcha($txt){
		if($txt==$this->captcha){
			echo "sama";
		} else {
			echo "tidak sama";
		}	
	}
	function penawaran($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_ls", "row_array",$p2);
			$penawaran=$this->mmodul->getdata("penawaran", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("projek",$data);
			//$dt1 = new DateTime($data["tgl_max_penawaran"].' 23:59:00');
			//$dt2 = new DateTime(date('Y-m-d H:i:s'));
			$dt1 = strtotime($data["tgl_max_penawaran"].' 23:59:00');
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
			//if ($dt1 < $dt2) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'penawaran.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
		    $this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function penawaran_tahap1($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_ls", "row_array",$p2);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_1", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("projek",$data);
			//$dt1 = new DateTime($data["tgl_akhir"]);
			//$dt2 = new DateTime(date('Y-m-d H:i:s'));
			$dt1 = strtotime($data["tgl_akhir"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
			//if ($dt1 < $dt2) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'penawaran_tahap1.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function download($p1,$p2,$p3){
		$this->load->helper('download');
		switch ($p1){
			case "dokumen_lelang":
				if($p2=='LS')$path='lelang_ls';
				else $path='lelang_ll';
				//$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.$this->config->item('url_pusat').'/__repo/'.$path.'/'.$p3; 
				$data = file_get_contents(PATH_PANITIA.'__repo/'.$path.'/'.$p3); 
				$name = $p3;
			break;
		}
		force_download($name, $data); 
	}
	function upload_penawaran($p1=""){
		echo $this->mmodul->simpan_data("penawaran", $_POST,$p1);
	}
	function undang($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_ls", "row_array",$p2);
			$this->smarty->assign("projek",$data);
			$dt1 = strtotime($data["tgl_max_penawaran"].' 23:59:00');
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'undang.html');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function penawaran_tahap2($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("projek",$data);
			$dt1 = strtotime($data["tgl_akhir"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
			//if ($dt1 < $dt2) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'penawaran_tahap2.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_ts($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_ts.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_ulang_ts($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_ulang_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_ulang_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego_ulang", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_ulang_ts.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_ulang($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_ulang_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_ulang_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego_ulang", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_ulang.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_ulang_ll($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_ulang_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_ulang_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego_ulang", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_ulang_ll.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_deal_ts($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_deal_ts.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_deal($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_deal.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_deal_ll($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_deal_ll.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_ulang_deal_ts($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_ulang_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_ulang_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego_ulang", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_ulang_deal_ts.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function negosiasi_ll($p1="",$p2=""){
		if($this->auth){
			$prj=$this->db->get_where('eproc_pengadaan',array('id'=>base64_decode($p2)))->row_array();
			if($prj["cl_jenis_dokumen_id"]==2){
				$data=$this->mmodul->getdata("lelang_tahap2", "row_array",$p2);
			}else{
				$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			}
			$nego_h=$this->mmodul->getdata("negosiasi_h", "row_array",$p2);
			//print_r($nego_h);exit;
			$nego_d=$this->mmodul->getdata("negosiasi_d", "result_array",$nego_h["id"]);
			$tahap_nego=$this->mmodul->getdata("tahap_nego", "row_array",$p2,$nego_h["id"]);
			$penawaran=$this->mmodul->getdata("eproc_penawaran_thp_2", "row_array",$p2);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("nego_h",$nego_h);
			$this->smarty->assign("tahap_nego",$tahap_nego);
			$this->smarty->assign("nego_d",$nego_d);
			$this->smarty->assign("projek",$data);
			$this->smarty->assign("id_pengadaan",base64_decode($p2));
			$dt1 = strtotime($nego_h["batas_waktu"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Negosiasi Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'negosiasi_ll.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function sanggah($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("sanggah", "row_array",$p2);
			$data_dt=$this->mmodul->getdata("sanggah_dt", "row_array",$p2,$data["id_sanggah"]);
			if(isset($data_dt["id"])){
				$sts='edit';
				$this->smarty->assign("sts_crud",$sts);
			}
			$this->smarty->assign("dt",$data_dt);
			$this->smarty->assign("projek",$data);
			$dt1 = strtotime($data["tgl_akhir_sanggah"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Sanggah Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'sanggah.html');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function penawaran_st($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_st", "row_array",$p2);
			$penawaran=$this->mmodul->getdata("eproc_penawaran", "row_array",$p2,$data["id"]);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("projek",$data);
			//$dt1 = new DateTime($data["tgl_akhir"]);
			//$dt2 = new DateTime(date('Y-m-d H:i:s'));
			$dt1 = strtotime($data["tgl_akhir"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
			//if ($dt1 < $dt2) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'penawaran_st.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function penawaran_ts($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_ts", "row_array",$p2);
			$penawaran=$this->mmodul->getdata("eproc_penawaran", "row_array",$p2,$data["id"]);
			//print_r($penawaran);exit;
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("projek",$data);
			//$dt1 = new DateTime($data["tgl_akhir"]);
			//$dt2 = new DateTime(date('Y-m-d H:i:s'));
		
			$dt1 = strtotime($data["tgl_akhir"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			/*if ($subTime < 0) {
			//if ($dt1 < $dt2) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'penawaran_ts.php');
			*/
			 $this->smarty->assign("modul",'penawaran_ts.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function penawaran_ll($p1="",$p2=""){
		if($this->auth){
			$data=$this->mmodul->getdata("lelang_ll", "row_array",$p2);
			$penawaran=$this->mmodul->getdata("eproc_penawaran", "row_array",$p2,$data["id"]);
			$this->smarty->assign("penawaran",$penawaran);
			$this->smarty->assign("projek",$data);
			//$dt1 = new DateTime($data["tgl_akhir"]);
			//$dt2 = new DateTime(date('Y-m-d H:i:s'));
			$dt1 = strtotime($data["tgl_akhir"]);
			$dt2 = strtotime(date('Y-m-d H:i:s'));
			$subTime = $dt1 - $dt2;
			if ($subTime < 0) {
			//if ($dt1 < $dt2) {
				$this->smarty->assign("msg",'Mohon Maaf Masa Penyampaian Dokumen Penawaran Sudah Selesai');
				$this->smarty->assign("modul",'invalid.html');
			}
			else $this->smarty->assign("modul",'penawaran_ll.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			$this->smarty->display('main-login2.html');
		}
	}
	function daftar_lelang($p1="",$p2=""){
		if($this->auth){
			//echo base64_decode($p1).'->'.base64_decode($p2);exit;
			$projek=$this->mmodul->getdata('pengadaan','row_array','edit',base64_decode($p2));
			$data = $this->mmodul->getdata('list_dash','result_array');
			$ex=$this->db->get_where('eproc_pengadaan_ls_rekanan',array('eproc_pengadaan_id'=>base64_decode($p2),'drt_peserta_id'=>$this->auth["id"]))->row_array();
			$sts_daftar=0;
			if(isset($ex["eproc_pengadaan_id"]))$sts_daftar=1;
			$flag=array();
			foreach ($data as $v=>$k){
				$flag[$k['flag']]=$k["jml"];
			}
			$this->smarty->assign('sts_daftar', $sts_daftar);
			$this->smarty->assign('ex', $ex);
			$this->smarty->assign('flag', $flag);
			$this->smarty->assign('data', $data);
			$this->smarty->assign("projek",$projek);
			$this->smarty->assign("modul",base64_decode($p1).'.php');
			$kontak=$this->mmodul->getdata ("kontak", "result_array");
			$this->smarty->assign("kontak",$kontak);
			$this->smarty->display('webpage/tpl_main.php');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->assign("mod_na",$p1);
			$this->smarty->assign("id_na",$p2);
			return $this->smarty->display('main-login2.html');
		}
	}
	function crud_all($p1){
		$post = array();
		foreach($_POST as $k=>$v){
			if($this->input->post($k)!=""){
				$post[$k] = $this->input->post($k);
			}
		}
		echo $this->mmodul->simpan_data($p1, $post);
	}
	function re_pwd(){
		//$isi="TESSSS";
		//print_r($_POST);exit;
		$sql="SELECT * FROM drt_peserta where email='".$this->db->escape_str($this->input->post('email'))."'";
		$rs=$this->db->query($sql)->row_array();
		if(isset($rs["email"])){
			$subject="Pengajuan Reset Password Jam  ".date('Y-m-d H:i');
			$isi='
						<!doctype html>
						<html>
						<head>
						<meta charset="UTF-8">
						<title>Untitled Document</title>
						</head>

						<body>
						<blockquote>&nbsp;</blockquote>
						<table width="100%" height="246" border="0">
						  <tbody>
							<tr>
							  <td width="277">&nbsp;<img src="'.$this->host.'__assets/img/logo.png"></td>
							  <td width="81">&nbsp;</td>
							  <td width="11">&nbsp;</td>
							  <td width="442">&nbsp;</td>
							  <td width="224">&nbsp;</td>
							</tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td>Terima Kasih</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="5">
								Sehubungan dengan permintaan Reset Password yang Rekanan ajukan maka silahkan klik Link Dibawah ini.<br><br>
								User/Email : '.$this->db->escape_str($this->input->post('email')).'<br>
								Untuk Merubah Password anda user id anda silahkan klik url ini&nbsp;&nbsp;
								<a href="'.$this->host.'webpage/Remainder/'.base64_encode($this->db->escape_str($this->input->post('email'))).'" target="_blank">'.$this->host.'webpage/Remainder</a>						
							  </td>
							</tr>
							
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td height="30" colspan="5">Jika ada pertanyaan lebih lanjut Anda dapat menghubungi helpdesk kami.
							  <br></td>
							</tr>
							<tr>
							  <td colspan="3">HelpDesk E-procurement</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="3">PT. Jasamarga Tollroad Operator</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="5">&nbsp;Gedung Cabang Jagorawi Lt. 4, Plaza Tol Taman Mini Indonesia Indah, 
							  </td>
							</tr>
							<tr>
							  <td colspan="3">Jakarta 13550 Indonesia</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="3">Email : procurement@jmto.co.id</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="3">Telp:(021)22984722</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="3">* Mohon untuk tidak membalas karena email ini dikirim secara otomatis melalui sistem.</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						  </tbody>
						</table>
						</body>
						</html>
						';
			echo $this->lib->kirimemail($this->db->escape_str($this->input->post('email')),$subject,$isi);
		}else{
			echo 2;exit;
		}
		
	}
}
