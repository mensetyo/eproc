<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webpage extends CI_Controller {

	function __construct() {
		parent::__construct();

	   $this->load->library('form_validation');
	   $this->load->helper(array('captcha','form'));
  }



	public function index()
	{
		$this->load->view('webpage/tpl_home');
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


}
