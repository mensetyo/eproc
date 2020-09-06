<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_domisili extends CI_Controller {


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
		$data['query'] = $this->db->query("select a.* from drt_domisili a
		where a.id_peserta='".$id_peserta."' order by a.id ");

		$this->load->view('backend/ijin_domisili/ijin_domisili_list',$data);
		
	}
	
	
	public function form()
	{
		//$data['kualifikasi'] = $this->kualifikasi();
		//$data['klasifikasi'] = $this->klasifikasi();
		
		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		
		$query = $this->db->query("select * from drt_domisili
			where id_peserta='".$id_peserta."'
		 	and id='".$this->uri->segment(3)."'
		 ");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['nomor']= $row->nomor;
				  $data['instansi_penerbit']= $row->instansi_penerbit;
				  $data['tgl_terbit']= date('d-m-Y', strtotime($row->tgl_terbit));
				  $data['tgl_sampai']= date('d-m-Y', strtotime($row->tgl_sampai));
			
				  $data['file']=$row->file;
			}
		}else{
				  $data['id']= "";
				  $data['nomor']= "";
				  $data['instansi_penerbit']= "";
				  $data['tgl_terbit']=  "";
				  $data['tgl_sampai']=  "";
				  $data['file']=  "";
				 
		}

		$this->load->view('backend/ijin_domisili/ijin_domisili_form',$data);
	}
	
	/* function kualifikasi(){
		$query = $this->db->query('select * from drt_ijin_usaha_kualifikasi where status=1');
		return $query;
	}
	
	function klasifikasi(){
	    $query = $this->db->query('select * from drt_ijin_usaha_klasifikasi where status=1');
	    return $query;
	} */
	
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
						   'instansi_penerbit' => $this->input->post('instansi_penerbit'),
						   'tgl_terbit' =>  date('Y-m-d', strtotime($this->input->post('tgl_terbit'))),
						   'tgl_sampai' =>  date('Y-m-d', strtotime($this->input->post('tgl_sampai'))),
						   'file' => $fileName,
						);

			$this->db->insert('drt_domisili', $data); 
			
			$this->session->set_flashdata('success', 'Data Telah tersimpan');
			redirect(base_url('ijin_domisili'));

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
						   'instansi_penerbit' => $this->input->post('instansi_penerbit'),
						   'tgl_terbit' =>  date('Y-m-d', strtotime($this->input->post('tgl_terbit'))),
						   'tgl_sampai' =>  date('Y-m-d', strtotime($this->input->post('tgl_sampai'))),
						   'file' => $fileName,
						);

						$this->db->where('id', $this->input->post('id'));
						$this->db->update('drt_domisili', array_merge($data,$a1)); 
						
						$this->session->set_flashdata('success', 'Data Telah terupdate');
						redirect(base_url('ijin_domisili'));
		}
	
	}
	
	function hapus()
	{
		$id=$this->uri->segment(3);
		$this->db->delete('drt_domisili', array('id' => $id)); 
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('ijin_domisili'));
	}
	
	

	
	
}
