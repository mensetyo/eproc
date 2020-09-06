<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_data extends CI_Controller {


	function get_status_data($id)
		{
			$query = $this->db->query("select * from drt_status_konfirmasi where id='$id'");
			$description="";
			foreach ($query->result() as $row)
			{
			   $description= $row->description; 
			}
			return $description;
		}

	public function index()
	{
		//$data['kualifikasi'] = $this->kualifikasi();  
	    //$query = $this->db->query("select * from drt_konfirmasi_penilaian where id_peserta='".$this->session->userdata('id_peserta')."'");
	    $query = $this->db->query("select * from drt_konfirmasi_data where id_peserta='".$this->session->userdata('id_peserta')."'");
	    
	
	    if ($query->num_rows() > 0)
	    {
	        foreach ($query->result() as $row)
	        {
				//$data['id_peserta'] = $id_peserta;
				$data['akta'] = $this->get_status_data($row->akta);
				$data['akta_ket'] = $row->akta_ket;
				$data['tdp'] = $this->get_status_data($row->tdp);
				$data['tdp_ket'] = $row->tdp_ket;
				$data['domisili'] =  $this->get_status_data($row->domisili);
				$data['domisili_ket'] = $row->domisili_ket;
				$data['ijin_usaha'] = $this->get_status_data($row->ijin_usaha);
				$data['ijin_usaha_ket'] = $row->ijin_usaha_ket;
				$data['sbu'] =  $this->get_status_data($row->sbu);
				$data['sbu_ket'] = $row->sbu_ket;
				$data['upload_dokumen'] =  $this->get_status_data($row->upload_dokumen);
				$data['upload_dokumen_ket'] = $row->upload_dokumen_ket;
				$data['data_perusahaan'] =  $this->get_status_data($row->data_perusahaan);
				$data['data_perusahaan_ket'] =$row->data_perusahaan_ket;
				$data['pajak'] =  $this->get_status_data($row->pajak);
				$data['pajak_ket'] = $row->pajak_ket;
				$data['pengurus'] =  $this->get_status_data($row->pengurus);
				$data['pengurus_ket'] = $row->pengurus_ket;
				$data['tenaga_ahli'] =  $this->get_status_data($row->tenaga_ahli);
				$data['tenaga_ahli_ket'] = $row->tenaga_ahli_ket;
				$data['peralatan'] =  $this->get_status_data($row->peralatan);
				$data['peralatan_ket'] = $row->peralatan_ket;
				$data['pengalaman'] =  $this->get_status_data($row->pengalaman);
				$data['pengalaman_ket'] = $row->pengalaman_ket;
				$data['pekerjaan_berjalan'] =  $this->get_status_data($row->pekerjaan_berjalan);
				$data['pekerjaan_berjalan_ket'] = $row->pekerjaan_berjalan_ket;
				$data['aspek_keuangan'] =  $this->get_status_data($row->aspek_keuangan);
				$data['aspek_keuangan_ket'] = $row->aspek_keuangan_ket;
				$data['surat_penting'] =  $this->get_status_data($row->surat_penting);
				$data['surat_penting_ket'] = $row->surat_penting_ket;
				$data['created'] = $row->created;
	        }
	    }else{
				$data['id_peserta'] = "";
				$data['akta'] = "";
				$data['akta_ket'] = "";
				$data['tdp'] ="";
				$data['tdp_ket'] = "";
				$data['domisili'] ="";
				$data['domisili_ket'] = "";
				$data['ijin_usaha'] ="";
				$data['ijin_usaha_ket'] = "";
				$data['sbu'] = "";
				$data['sbu_ket'] = "";
				$data['upload_dokumen'] ="";
				$data['upload_dokumen_ket'] = "";
				$data['data_perusahaan'] = "";
				$data['data_perusahaan_ket'] ="";
				$data['pajak'] = "";
				$data['pajak_ket'] = "";
				$data['pengurus'] ="";
				$data['pengurus_ket'] = "";
				$data['tenaga_ahli'] = "";
				$data['tenaga_ahli_ket'] ="";
				$data['peralatan'] = "";
				$data['peralatan_ket'] = "";
				$data['pengalaman'] ="";
				$data['pengalaman_ket'] = "";
				$data['pekerjaan_berjalan'] = "";
				$data['pekerjaan_berjalan_ket'] = "";
				$data['aspek_keuangan'] ="";
				$data['aspek_keuangan_ket'] = "";
				$data['surat_penting'] = "";
				$data['surat_penting_ket'] = "";
				$data['created'] = "";
	    }
	    
	    
		$this->load->view('backend/konfirmasi_data/konfirmasi_data_form',$data);
	}
	
	function kualifikasi(){
		$query = $this->db->query('select * from kualifikasi_perusahaan where status=1');
		return $query;
	}
	

	
	
}
