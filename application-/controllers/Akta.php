<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akta extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!is_login()) {
            $this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
            redirect(base_url());
            exit;
        }
 
    }
    

	function  showlist()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		$data['query'] = $this->db->query("select * from drt_akta where id_peserta=".$id_peserta." and status_delete=0");
		$this->load->view('backend/akta/akta_list',$data);
		
	}
	
	
		
		public function form()
	{
		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_akta where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");

		foreach ($query->result() as $row)
			{
				 $data['id']= $row->id;
				 $data['nomor']= $row->nomor;
				 $data['tgl_srt']= $row->tgl_srt;
				 $data['notaris']= $row->notaris;
				 $data['alamat_notaris']=$row->alamat_notaris;
				 $data['perubahan_alamat_notaris']=$row->perubahan_alamat_notaris;
				 //$data['dok']= "<a href=".base_url('uploads/akta/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
				 $data['dok']= '<li><a href="#myModal" data-toggle="modal" data-img-url="'.base_url('uploads/akta/'.$row->dok).'">Lihat</a></li>';
				 $data['perubahan_dok']= '<li><a href="#myModal" data-toggle="modal" data-img-url="'.base_url('uploads/akta/'.$row->perubahan_dok).'">Lihat</a></li>';
				// $data['perubahan_dok']= "<a href=".base_url('uploads/akta/'.$row->perubahan_dok)."><i class=\"far fa-file-pdf\"></i>".$row->perubahan_dok."</a>";
				 $data['perubahan_nomor']= $row->perubahan_nomor;
				 $data['perubahan_tgl_srt']= $row->perubahan_tgl_srt;
				 $data['perubahan_notaris']= $row->perubahan_notaris;
			}
		}else{
				 $data['id']= "";
				 $data['nomor']= "";
				 $data['tgl_srt']="";
				 $data['dok']= "";
				 $data['notaris']= "";
				 $data['perubahan_nomor']= "";
				 $data['perubahan_tgl_srt']="";
				 $data['perubahan_notaris']= "";
				 $data['perubahan_dok']= "";
				 $data['alamat_notaris']="";
				 $data['perubahan_alamat_notaris']="";
		}

		$this->load->view('backend/akta/akta_form',$data);
	}
	
	
	
	
	public function index()
	{
		$id_peserta=$this->session->userdata('id_peserta');

		$query = $this->db->query("select * from drt_akta where id_peserta=".$id_peserta."");

			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
				 $data['nomor']= $row->nomor;
				 $data['tgl_srt']= $row->tgl_srt;
				 $data['notaris']= $row->notaris;
				 $data['alamat_notaris']=$row->alamat_notaris;
				 $data['perubahan_alamat_notaris']=$row->perubahan_alamat_notaris;
				 //$data['dok']= $row->dok;
				 $data['dok']= "<a href=".base_url('uploads/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
				 $data['perubahan_dok']= "<a href=".base_url('uploads/'.$row->perubahan_dok)."><i class=\"far fa-file-pdf\"></i>".$row->perubahan_dok."</a>";
				 $data['perubahan_nomor']= $row->perubahan_nomor;
				 $data['perubahan_tgl_srt']= $row->perubahan_tgl_srt;
				 $data['perubahan_notaris']= $row->perubahan_notaris;
				 // $data['perubahan_dok']= $row->perubahan_dok;
			   }
			}else{
				 $data['nomor']= "";
				 $data['tgl_srt']="";
				 $data['dok']= "";
				 $data['notaris']= "";
				 $data['perubahan_nomor']= "";
				 $data['perubahan_tgl_srt']="";
				 $data['perubahan_notaris']= "";
				 $data['perubahan_dok']= "";
				 $data['alamat_notaris']="";
				 $data['perubahan_alamat_notaris']="";
			} 


		$this->load->view('backend/akta/akta_form',$data);
	}
	
	function simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
		
		if($update==""){
			if (!empty($_FILES['file']['tmp_name'])) {
				$tempFile = $_FILES['file']['tmp_name'];
				$temp = $_FILES["file"]["name"];
				$path_parts = pathinfo($temp);
				$t = preg_replace('/\s+/', '', microtime());
				$fileName = $id_peserta.'_akta_'.$t.'_'. '.' . $path_parts['extension'];
				$targetPath = './uploads/akta/';
				$targetFile = $targetPath . $fileName ;
				
				$tempFile2 = $_FILES['file2']['tmp_name'];
				$temp2 = $_FILES["file2"]["name"];
				$path_parts2 = pathinfo($temp2);
				$t2 = preg_replace('/\s+/', '', microtime());
				$fileName2 = $id_peserta.'_akta2_'.$t2.'_'. '.' . $path_parts['extension'];
				$targetPath = './uploads/akta/';
				$targetFile2 = $targetPath . $fileName2 ;
				
				//echo $fileName;
				move_uploaded_file($tempFile, $targetFile);
				move_uploaded_file($tempFile2, $targetFile2);

				$data = array(
					   'id_peserta' => $id_peserta ,
					   'nomor' => $this->input->post('nomor'),
					   'tgl_srt' => $this->input->post('tgl_srt'),
					   'notaris' => $this->input->post('notaris'),
				        'alamat_notaris' => $this->input->post('alamat_notaris'),
					   'dok' => $fileName,
					   'perubahan_nomor' => $this->input->post('perubahan_nomor'),
					   'perubahan_tgl_srt' => $this->input->post('perubahan_tgl_srt'),
					   'perubahan_notaris' => $this->input->post('perubahan_notaris'),
				       'perubahan_alamat_notaris' => $this->input->post('perubahan_alamat_notaris'),
					   'perubahan_dok' => $fileName2,
					   'created' => $datetime,
					);

				$this->db->insert('drt_akta', $data); 
			}else{
				$data = array(
					   'nomor' => $this->input->post('nomor'),
					   'tgl_srt' => $this->input->post('tgl_srt'),
					   'notaris' => $this->input->post('notaris'),
				       'alamat_notaris' => $this->input->post('alamat_notaris'),
					   'perubahan_nomor' => $this->input->post('perubahan_nomor'),
					   'perubahan_tgl_srt' => $this->input->post('perubahan_tgl_srt'),
					   'perubahan_notaris' => $this->input->post('perubahan_notaris'),
				       'perubahan_alamat_notaris' => $this->input->post('perubahan_alamat_notaris'),
					   'created' => $datetime,
					);

				$this->db->insert('drt_akta', $data); 
			}
			
				$this->session->set_flashdata('success', 'Data Telah tersimpan');
				redirect(base_url('akta'));
		}else{
			
			if (!empty($_FILES['file']['tmp_name'])) {
				
							$tempFile = $_FILES['file']['tmp_name'];
							$temp = $_FILES["file"]["name"];
							$path_parts = pathinfo($temp);
							$t = preg_replace('/\s+/', '', microtime());
							$fileName = $id_peserta.'_akta_'.$t.'_'. '.' . $path_parts['extension'];
							$targetPath = './uploads/akta/';
							$targetFile = $targetPath . $fileName ;
						
							$tempFile2 = $_FILES['file2']['tmp_name'];
							$temp2 = $_FILES["file2"]["name"];
							$path_parts2 = pathinfo($temp2);
							$t2 = preg_replace('/\s+/', '', microtime());
							$fileName2 = $id_peserta.'_akta2_'.$t2.'_'. '.' . $path_parts['extension'];
							$targetPath = './uploads/akta/';
							$targetFile2 = $targetPath . $fileName2 ;
						
							//echo $fileName;
							move_uploaded_file($tempFile, $targetFile);
							move_uploaded_file($tempFile2, $targetFile2);
				
						
							$data = array(
							   'id_peserta' => $id_peserta ,
							   'nomor' => $this->input->post('nomor'),
							   'tgl_srt' => $this->input->post('tgl_srt'),
							   'notaris' => $this->input->post('notaris'),
							   'alamat_notaris' => $this->input->post('alamat_notaris'),
							   'dok' => $fileName,
							   'perubahan_nomor' => $this->input->post('perubahan_nomor'),
							   'perubahan_tgl_srt' => $this->input->post('perubahan_tgl_srt'),
							   'perubahan_notaris' => $this->input->post('perubahan_notaris'),
							   'perubahan_alamat_notaris' => $this->input->post('perubahan_alamat_notaris'),
							   'perubahan_dok' => $fileName2,
							   'created' => $datetime,
							);

							
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('drt_akta', $data); 
								
					}else{
								
							$data = array(
							   'id_peserta' => $id_peserta ,
							   'nomor' => $this->input->post('nomor'),
							   'tgl_srt' => $this->input->post('tgl_srt'),
							   'notaris' => $this->input->post('notaris'),
							   'perubahan_notaris' => $this->input->post('perubahan_notaris'),
							   'perubahan_nomor' => $this->input->post('perubahan_nomor'),
							   'perubahan_tgl_srt' => $this->input->post('perubahan_tgl_srt'),
							   'perubahan_notaris' => $this->input->post('perubahan_notaris'),
							   'perubahan_alamat_notaris' => $this->input->post('perubahan_alamat_notaris'),
							   'created' => $datetime,
							);
							
								$this->db->where('id', $this->input->post('id'));
								$this->db->update('drt_akta', $data); 
					}
							
				$this->session->set_flashdata('success', 'Data Telah terupdate');
				redirect(base_url('akta'));
		}
		
	}
	

		function hapus()
	{
		$id=$this->uri->segment(3);
	
		$this->db->where('id', $id);
		$this->db->update('drt_akta', array('status_delete'=>1)); 

		//$this->db->delete('drt_ijin_usaha', array('id' => $id)); 
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('akta'));
	}
	
	
		function lihat()
	{
		
		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_akta where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");
			foreach ($query->result() as $row)
			{	  
				$data['nomor']= $row->nomor;
				 $data['tgl_srt']= $row->tgl_srt;
				 $data['notaris']= $row->notaris;
				 $data['dok']= "<a href=".base_url('uploads/akta/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
				 $data['perubahan_dok']= "<a href=".base_url('uploads/akta/'.$row->perubahan_dok)."><i class=\"far fa-file-pdf\"></i>".$row->perubahan_dok."</a>";
				 $data['perubahan_nomor']= $row->perubahan_nomor;
				 $data['perubahan_tgl_srt']= $row->perubahan_tgl_srt;
				 $data['perubahan_notaris']= $row->perubahan_notaris;
				   
				   
			}
			
		$this->load->view('backend/akta/akta_view',$data);
	}
	

	
	
}
