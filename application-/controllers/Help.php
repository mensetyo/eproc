<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {


	public function index()
	{

	    $query = $this->db->query("select * from drt_konfirmasi_penilaian where id_peserta='".$this->session->userdata('id_peserta')."'");
	    
	    if ($query->num_rows() > 0)
	    {
	        foreach ($query->result() as $row)
	        {
	            $data['stat_data_perusahaan']= $row->stat_data_perusahaan;
	            $data['ket_data_perusahaan']= $row->ket_data_perusahaan;
	            $data['stat_ijin_usaha']= $row->stat_ijin_usaha;
	            $data['ket_ijin_usaha']= $row->ket_ijin_usaha;
	            $data['stat_pajak']= $row->stat_pajak;
	            $data['ket_pajak']= $row->ket_pajak;
	            $data['stat_akta']= $row->stat_akta;
	            $data['ket_akta']= $row->ket_akta;
	            $data['stat_pemilik']= $row->stat_pemilik;
	            $data['ket_pemilik']= $row->ket_pemilik;
	            $data['stat_tenaga_ahli']= $row->stat_tenaga_ahli;
	            $data['ket_tenaga_ahli']= $row->ket_tenaga_ahli;
	            $data['stat_peralatan']= $row->stat_peralatan;
	            $data['ket_peralatan']= $row->ket_peralatan;
	            $data['stat_pengalaman']= $row->stat_pengalaman;
	            $data['ket_pengalaman']= $row->ket_pengalaman;
	            $data['stat_ongoing']= $row->stat_ongoing;
	            $data['ket_ongoing']= $row->ket_ongoing;
	            $data['stat_lap_keu']= $row->stat_lap_keu;
	            $data['ket_lap_keu']= $row->ket_lap_keu;
	            $data['stat_soft_copy']= $row->stat_soft_copy;
	            $data['ket_soft_copy']= $row->ket_soft_copy;
	           
	        }
	    }else{
	        $data['stat_data_perusahaan']= "";
	        $data['ket_data_perusahaan']= "";
	        $data['stat_ijin_usaha']= "";
	        $data['ket_ijin_usaha']= "";
	        $data['stat_pajak']="";
	        $data['ket_pajak']= "";
	        $data['stat_akta']= "";
	        $data['ket_akta']= "";
	        $data['stat_pemilik']="";
	        $data['ket_pemilik']="";
	        $data['stat_tenaga_ahli']= "";
	        $data['ket_tenaga_ahli']= "";
	        $data['stat_peralatan']= "";
	        $data['ket_peralatan']= "";
	        $data['stat_pengalaman']="";
	        $data['ket_pengalaman']= "";
	        $data['stat_ongoing']= "";
	        $data['ket_ongoing']="";
	        $data['stat_lap_keu']= "";
	        $data['ket_lap_keu']= "";
	        $data['stat_soft_copy']= "";
	        $data['ket_soft_copy']= "";
	        
	    }
	    
	    
		$this->load->view('backend/help/help',$data);
	}
	
	function kualifikasi(){
		$query = $this->db->query('select * from kualifikasi_perusahaan where status=1');
		return $query;
	}
	

	
	
}
