<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct() {
		parent::__construct();
	   $this->load->library('form_validation');
	   $this->load->helper(array('captcha','form'));
  }
  
  

	public function index()
	{
		$this->load->view('admin/tpl_login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'administrator');
	}

	public function proses_login()
	{
		$username=$this->input->post('userid');
		$password=$this->input->post('password');

		$query = $this->db->query("select * from adm_user where username='".$username."' and pass='".$password."'");

		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
				{
					$data['group_id']= $row->group_id;
					$data['username'] =$row->username;
					$data['nama']= $row->nama;
					$data['logged_in']=TRUE;
				}

				$this->session->set_userdata($data);
				redirect(base_url('main'));
		}else{
				redirect(base_url().'administrator');
		} 



	}
	
	
	
	


}
