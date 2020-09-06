<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct() {
		parent::__construct();
    }
  
	
  

	public function setujui()
	{
		$id=$this->uri->segment(3);
		
		$from_email = "info_eproc@jmto.co.id";
		//$to_email="ahmad_shoehib@yahoo.com";
		 $to_email="ismail.proyek@gmail.com";
		
		$config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.jmto.co.id',
                'smtp_port' => 26,
                'smtp_user' => $from_email,
                'smtp_pass' => 'Ibra030684',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");   
		// $comment=$this->input->post('comment', TRUE);
         //$this->email->from($from_email, 'Hubungi Kami JMTO Web '.$this->input->post('phone', TRUE).'_'.$this->input->post('email', TRUE)); 
		 $this->email->from($from_email, 'JMTO Support ');
         $this->email->to($to_email);
         $this->email->subject('support'); 
		 $data['username']="xxxx";
		 $data['password']="pass";
		 
		// $body = $this->load->view('email',$data);
         
		 $this->email->message('sssssss'); 
		
         //Send mail 
         if($this->email->send()){
				//echo "Email berhasil terkirim.";
				redirect('http://panitia-eproc.jmto.co.id/drt/pra_pendaftaran');
                //$this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
				echo "Email gagal terkirim.";
                //$this->session->set_flashdata("notif","Email gagal dikirim."); 
         } 
		 
		//$this->load->view('admin/main/tpl_main');
	}
	
	
	
	


}
