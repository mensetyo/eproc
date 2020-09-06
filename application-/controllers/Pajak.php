<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pajak extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        if(!is_login()) {
          $this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
          redirect(base_url());
          exit;
          }
 
	}
	


	function showlist()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		$data['query'] = $this->db->query("select * from drt_pajak where id_peserta=".$id_peserta." and status_delete=0");
		$this->load->view('backend/pajak/pajak_list',$data);
	}
	
	
	
		public function form()
	{
		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_pajak where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['jenis_pajak']= $row->jenis_pajak;
				  $data['masa_pajak_tahunan']= $row->masa_pajak_tahunan;
				  $data['no_bkti_penerimaan_srt']= $row->no_bkti_penerimaan_srt;
				  $data['tgl_bkt_penerimaan_srt']= $row->tgl_bkt_penerimaan_srt;
				  // $data['dok']= $row->dok;
				//   $data['dok']= "<a href=".base_url('uploads/pajak/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
				  $data['dok']= '<li><a href="#myModal" data-toggle="modal" data-img-url="'.base_url('uploads/pajak/'.$row->dok).'">Lihat</a></li>';
				   
			}
		}else{
				  $data['id']= "";
				  $data['jenis_pajak']= "";
				  $data['masa_pajak_tahunan']= "";
				  $data['no_bkti_penerimaan_srt']= "";
				  $data['tgl_bkt_penerimaan_srt']= "";
				  $data['dok']= "";
		}

		
		$this->load->view('backend/pajak/pajak_form',$data);
	}
	
	



	function simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
			
			
			if($update==""){
				if (!empty($_FILES['file']['tmp_name'])) {
						//$this->db->delete('pajak', array('id_peserta' => $id_peserta)); 
						$tempFile = $_FILES['file']['tmp_name'];
						$temp = $_FILES["file"]["name"];
						$path_parts = pathinfo($temp);
						$t = preg_replace('/\s+/', '', microtime());
						$fileName = $id_peserta.'_pajak_'.$t.'_'. '.' . $path_parts['extension'];
						$targetPath = './uploads/pajak/';
						$targetFile = $targetPath . $fileName;
						//echo $fileName;
						move_uploaded_file($tempFile, $targetFile);

					
						$data = array(
							   'id_peserta' => $id_peserta ,
							   'jenis_pajak' => $this->input->post('jenis_pajak'),
							   'masa_pajak_tahunan' => $this->input->post('masa_pajak_tahunan'),
							   'no_bkti_penerimaan_srt' => $this->input->post('no_bkti_penerimaan_srt'),
							   'tgl_bkt_penerimaan_srt' => $this->input->post('tgl_bkt_penerimaan_srt'),
							   'dok' => $fileName,
							   'created' => $datetime,
							);

						$this->db->insert('drt_pajak', $data); 
					}else{
						$data = array(
							   'jenis_pajak' => $this->input->post('jenis_pajak'),
							   'masa_pajak_tahunan' => $this->input->post('masa_pajak_tahunan'),
							   'no_bkti_penerimaan_srt' => $this->input->post('no_bkti_penerimaan_srt'),
							   'tgl_bkt_penerimaan_srt' => $this->input->post('tgl_bkt_penerimaan_srt'),
							   'updated' => $datetime,
							);

						$this->db->insert('drt_pajak', $data); 
					}
				$this->session->set_flashdata('success', 'Data Telah tersimpan');
				redirect(base_url('pajak'));
			}else{
			//echo $this->input->post('tgl_bkt_penerimaan_srt');exit;
					if (!empty($_FILES['file']['tmp_name'])) {
										$tempFile = $_FILES['file']['tmp_name'];
										$temp = $_FILES["file"]["name"];
										$path_parts = pathinfo($temp);
										$t = preg_replace('/\s+/', '', microtime());
										$fileName = $id_peserta.'_pajak_'.$t.'_'. '.' . $path_parts['extension'];
										$targetPath = './uploads/pajak/';
										$targetFile = $targetPath . $fileName ;
										move_uploaded_file($tempFile, $targetFile);
								
											$data = array(
										   'id_peserta' => $id_peserta ,
										   'jenis_pajak' => $this->input->post('jenis_pajak'),
										   'masa_pajak_tahunan' => $this->input->post('masa_pajak_tahunan'),
										   'no_bkti_penerimaan_srt' => $this->input->post('no_bkti_penerimaan_srt'),
										   'tgl_bkt_penerimaan_srt' => $this->input->post('tgl_bkt_penerimaan_srt'),
										   'dok' => $fileName,
										   'created' => $datetime,
										);
							
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('drt_pajak', $data); 
								
					}else{
								$data = array(
										   'jenis_pajak' => $this->input->post('jenis_pajak'),
										   'masa_pajak_tahunan' => $this->input->post('masa_pajak_tahunan'),
										   'no_bkti_penerimaan_srt' => $this->input->post('no_bkti_penerimaan_srt'),
										   'tgl_bkt_penerimaan_srt' => $this->input->post('tgl_bkt_penerimaan_srt'),
										   'updated' => $datetime,
										);
										
								$this->db->where('id', $this->input->post('id'));
								$this->db->update('drt_pajak', $data); 
					}
							
						$this->session->set_flashdata('success', 'Data Telah terupdate');
						redirect(base_url('pajak'));
			}
		
	}

	function hapus()
	{
		$id=$this->uri->segment(3);
	
		$this->db->where('id', $id);
		$this->db->update('drt_pajak', array('status_delete'=>1)); 

		//$this->db->delete('drt_ijin_usaha', array('id' => $id)); 
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('pajak'));
	}
	
	
		function lihat()
	{
		
		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_pajak where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");
			foreach ($query->result() as $row)
			{	  
				  $data['id']= $row->id;
				  $data['jenis_pajak']= $row->jenis_pajak;
				  $data['masa_pajak_tahunan']= $row->masa_pajak_tahunan;
				  $data['no_bkti_penerimaan_srt']= $row->no_bkti_penerimaan_srt;
				  $data['tgl_bkt_penerimaan_srt']= $row->tgl_bkt_penerimaan_srt;
				  $data['dok']= "<a href=".base_url('uploads/pajak/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
				   
				   
			}
			
		$this->load->view('backend/pajak/pajak_view',$data);
	}
	
	
}
