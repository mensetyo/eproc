<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tdp extends CI_Controller {

	//var $controller="drt/koefisien_drt_b";
    function __construct()
    {
        parent::__construct();
        if(!is_login()) {
			$this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
			redirect(base_url());
			exit;
          }
	}
	


	function index()
	{
		//$data['kualifikasi'] = $this->kualifikasi();
		$id_peserta=$this->session->userdata('id_peserta');
		$data['query'] = $this->db->query("select a.* from drt_tdp a
		where a.id_peserta='".$id_peserta."' order by a.id ");

		$this->load->view('backend/tdp/tdp_list',$data);
	}
	
	
	public function form()
	{
		//$data['kualifikasi'] = $this->kualifikasi();
		//$data['klasifikasi'] = $this->klasifikasi();
		
		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		
		$query = $this->db->query("select * from drt_tdp 
			where id_peserta='".$id_peserta."'
		 	and id='".$this->uri->segment(3)."'
		 ");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['nomor']= $row->nomor;
				  $data['instansi_penerbit']= $row->instansi_penerbit;
				  $data['tgl_terbit']= date('d-m-Y', strtotime($row->tgl_terbit));
				  $data['masa_berlaku']= date('d-m-Y', strtotime($row->masa_berlaku));
				  $data['kegiatan_usaha_pokok']= $row->kegiatan_usaha_pokok;
				  $data['file']= $row->file;
				 
			}
		}else{
				  $data['id']= "";
				  $data['nomor']= "";
				  $data['instansi_penerbit']= "";
				  $data['tgl_terbit']=  "";
				  $data['masa_berlaku']=  "";
				  $data['kegiatan_usaha_pokok']=  "";
				  $data['file']="";
		}

		$this->load->view('backend/tdp/tdp_form',$data);
	}
	

	
	function simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime=date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
	
	if($update==""){
		//if (!empty($_FILES['file']['tmp_name'])) {
			$tempFile = $_FILES['file']['tmp_name'];
			$temp = $_FILES["file"]["name"];
			$path_parts = pathinfo($temp);
			$t = preg_replace('/\s+/', '', microtime());
			$fileName = $id_peserta.'_ijin_usaha_'.$t. '.' . $path_parts['extension'];
			$targetPath = './uploads/ijin_usaha/';
			$targetFile = $targetPath . $fileName ;
			
			if(move_uploaded_file($tempFile, $targetFile)){
				$fileName=$fileName;
			}else{
				$fileName="0";
			}

				$data = array(
					   'id_peserta' => $id_peserta,
					   'nomor' => $this->input->post('nomor'),
					   'tgl_terbit' =>  date('Y-m-d', strtotime($this->input->post('tgl_terbit'))),
					   'masa_berlaku' =>  date('Y-m-d', strtotime($this->input->post('masa_berlaku'))),
					   'instansi_penerbit' => $this->input->post('instansi_penerbit'),
					   'kegiatan_usaha_pokok' => $this->input->post('kegiatan_usaha_pokok'),
					   'file' => $fileName,
					);

				$this->db->insert('drt_tdp', $data); 
				
				$this->session->set_flashdata('success', 'Data Telah tersimpan');
				redirect(base_url('tdp'));

	}else{
		
					$tempFile = $_FILES['file']['tmp_name'];
					$temp = $_FILES["file"]["name"];
					$path_parts = pathinfo($temp);
					$t = preg_replace('/\s+/', '', microtime());
					$fileName = $id_peserta.'_ijin_usaha_'.$t. '.' . $path_parts['extension'];
					$targetPath = './uploads/ijin_usaha/';
					$targetFile = $targetPath . $fileName ;

					if(!empty($_FILES['file']['tmp_name'])){
						move_uploaded_file($tempFile, $targetFile);
						$a1=array("file"=>$fileName);
					}else{
						$a1 = array();
					}
			
					$data = array(
					   'id_peserta' => $id_peserta,
					   'nomor' => $this->input->post('nomor'),
					   'tgl_terbit' =>  date('Y-m-d', strtotime($this->input->post('tgl_terbit'))),
					   'masa_berlaku' =>  date('Y-m-d', strtotime($this->input->post('masa_berlaku'))),
					   'instansi_penerbit' => $this->input->post('instansi_penerbit'),
					   'kegiatan_usaha_pokok' => $this->input->post('kegiatan_usaha_pokok'),
					  // 'file' => $fileName,
					);

					$this->db->where('id', $this->input->post('id'));
					$this->db->update('drt_tdp', array_merge($data,$a1)); 
					
					$this->session->set_flashdata('success', 'Data Telah terupdate');
					redirect(base_url('tdp'));
	}
	
	}
	
	function hapus()
	{
		$id=$this->uri->segment(3);
		$this->db->delete('drt_tdp', array('id' => $id)); 
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('tdp'));
	}
	


	
	
}
