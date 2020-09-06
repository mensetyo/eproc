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
	    
		//$this->load->helper(array('captcha','url'));
		$this->load->library('recaptcha');
		

		$config_captcha = array(
				'img_path'  => './captcha/',
				'img_url'  => base_url().'captcha/',
				'img_width'  => '200',
		       'font_size' => 32,
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


    

		// $this->load->view('webpage/tpl_register');
		$this->load->view('webpage/tpl_new_register',$data);

	}

	public function register_sukses()
	{
		$this->load->view('webpage/tpl_register_sukses');
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
