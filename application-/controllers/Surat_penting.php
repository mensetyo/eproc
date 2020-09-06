<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_penting extends CI_Controller {


	//var $controller="drt/koefisien_drt_b";
    function __construct()
    {
        parent::__construct();
        if(!is_login()) {
          $this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
          redirect(base_url());
          exit;
          }
         //$this->load->model('koefisien_b_model');
        // $this->load->library('form_validation');
	    // $this->load->library('datatables');
	}
	


	function index()
	{
		$data['kualifikasi'] = $this->kualifikasi();
		$id_peserta=$this->session->userdata('id_peserta');
		$data['query'] = $this->db->query("select * from drt_surat_penting
		where id_peserta='".$id_peserta."' order by id ");

		$this->load->view('backend/surat_penting/surat_penting_list',$data);
		
	}
	
	
	public function form()
	{
		$data['kualifikasi'] = $this->kualifikasi();
		$data['klasifikasi'] = $this->klasifikasi();
		
		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		
		$query = $this->db->query("select * from drt_ijin_usaha 
			where id_peserta='".$id_peserta."'
		 	and id='".$this->uri->segment(3)."'
		 ");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['jenis_ijin']= $row->jenis_ijin;
				  $data['nomor_surat']= $row->nomor_surat;
				  $data['berlaku_sampai']= date('d-m-Y', strtotime($row->berlaku_sampai));
				  $data['instansi_pemberi']= $row->instansi_pemberi;
				  $data['vkualifikasi']= $row->kualifikasi;
				  $data['vklasifikasi']= $row->klasifikasi;
				  $data['klasifikasi_lainnya']= $row->klasifikasi_lainnya;
				  $data['dok']=$row->dok;
				  $data['created']= $row->created;
			}
		}else{
				  $data['id']= "";
				  $data['jenis_ijin']= "";
				  $data['nomor_surat']= "";
				  $data['berlaku_sampai']=  "";
				  $data['instansi_pemberi']=  "";
				  $data['vkualifikasi']=  "";
				  $data['klasifikasi_lainnya']="";
				  $data['vklasifikasi']=  "";
				  $data['dok']= "";
				  $data['created']= "";
		}

		$this->load->view('backend/surat_penting/surat_penting_form',$data);
	}
	
	function kualifikasi(){
		$query = $this->db->query('select * from drt_ijin_usaha_kualifikasi where status=1');
		return $query;
	}
	
	function klasifikasi(){
	    $query = $this->db->query('select * from drt_ijin_usaha_klasifikasi where status=1');
	    return $query;
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
					   'jenis' => $this->input->post('jenis'),
					   'nomor' =>   $this->input->post('nomor'),
					   'instansi_pemberi' => $this->input->post('instansi_pemberi'),
					   'tgl_terbit' =>date('Y-m-d', strtotime($this->input->post('tgl_terbit'))),
					   'masa_berlaku' =>date('Y-m-d', strtotime($this->input->post('masa_berlaku'))),
					   'ringkasan_surat' => $this->input->post('ringkasan_isi_surat'),
					   'file' => $fileName,
					   'status'=>0,
					   'created' => $datetime,
					);

		$this->db->insert('drt_surat_penting', $data); 
		
		$this->session->set_flashdata('success', 'Data Telah tersimpan');
		redirect(base_url('surat_penting'));

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
					   'jenis' => $this->input->post('jenis'),
					   'nomor' => $this->input->post('nomor'),
					   'tgl_terbit' =>  date('Y-m-d', strtotime($this->input->post('tgl_terbit'))),
					   'instansi_pemberi' => $this->input->post('instansi_pemberi'),
					   'ringkasan_surat' => $this->input->post('ringkasan_surat'),
					   'status'=>0,
					);

					$this->db->where('id', $this->input->post('id'));
					$this->db->update('drt_surat_penting', array_merge($data,$a1)); 
					
					$this->session->set_flashdata('success', 'Data Telah terupdate');
					redirect(base_url('surat_penting'));
	}
	
	}
	
	function hapus()
	{
		$id=$this->uri->segment(3);
		$this->db->delete('drt_surat_penting', array('id' => $id)); 
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('surat_penting'));
	}
	
	/*
	function lihat()
	{
		$data['kualifikasi'] = $this->kualifikasi();
		$id_peserta=$this->session->userdata('id_peserta');

		$query = $this->db->query("select a.*,b.kualifikasi from drt_ijin_usaha a 
		left join drt_ijin_usaha_kualifikasi b on a.kualifikasi=b.id
		where a.id_peserta='".$id_peserta."'  and a.id=".$this->uri->segment(3)."");

			foreach ($query->result() as $row)
			{
				  $data['jenis_ijin']= $row->jenis_ijin;
				  $data['nomor_surat']= $row->nomor_surat;
				  $data['berlaku_sampai']= $row->berlaku_sampai;
				  $data['instansi_pemberi']= $row->instansi_pemberi;
				  $data['kualifikasi']= $row->kualifikasi;
				  $data['klasifikasi']= $row->klasifikasi;
				  $data['dok']= "<a href=".base_url('uploads/ijin_usaha/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
				  $data['created']= $row->created;
			}
			
		$this->load->view('backend/ijin_usaha/ijin_usaha_view',$data);
		
	}
	*/

	
	
}
