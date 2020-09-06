<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        if(!is_login()) {
            $this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
            redirect(base_url());
            exit;
        }
        
    }
    
   
	public function index()
	{	
        //$data="";
	    $id_peserta=$this->session->userdata('id_peserta');
	    
	    $query = $this->db->query("select * from drt_soft_copy2 where id_peserta='".$id_peserta."'");
	    
	    if ($query->num_rows() > 0)
	    {
	        foreach ($query->result() as $row)
	        {
	            $data['tgl_akhir_siup'] =$row->tgl_akhir_siup;
	            $data['tgl_akhir_siujk']= $row->tgl_akhir_siujk;
	            $data['tgl_akhir_tdp']= $row->tgl_akhir_tdp;
	            $data['tgl_akhir_surat_domisili']=$row->tgl_akhir_surat_domisili;
	            $data['tgl_akhir_sbu']=$row->tgl_akhir_sbu;
	        }
	    }else{
	        $data['tgl_akhir_siup'] ="";
	        $data['tgl_akhir_siujk']= "";
	        $data['tgl_akhir_tdp']= "";
	        $data['tgl_akhir_surat_domisili']="";
	        $data['tgl_akhir_sbu']="";
	        
	    }
	    
	    
	    
		$this->load->view('backend/dashboard/dashboard_list',$data);
	}

	


}
