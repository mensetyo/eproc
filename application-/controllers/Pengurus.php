<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

    
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
		$data['query'] = $this->db->query("select * from drt_pengurus where id_peserta=".$id_peserta." and status_delete=0");
		$this->load->view('backend/pengurus/pengurus_list',$data);
	}

	
	function hapus()
	{
	    $id=$this->uri->segment(3);
	    
	    $this->db->where('id', $id);
	    $this->db->update('drt_pengurus', array('status_delete'=>1));
	    
	    //$this->db->delete('drt_ijin_usaha', array('id' => $id));
	    $this->session->set_flashdata('success', 'Data Telah terhapus');
	    redirect(base_url('pengurus'));
	}
	
	

	public function form()
	{

		$id_peserta=$this->session->userdata('id_peserta');
		// $data['kualifikasi'] = $this->kualifikasi();

		$query = $this->db->query("select * from drt_pengurus where id_peserta=".$id_peserta." and id='".$this->uri->segment(3)."'");

			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
				  $data['nama']= $row->nama;
				  $data['id']= $row->id;
				  $data['no_ktp']= $row->no_ktp;
				  $data['alamat']= $row->alamat;
				  $data['jabatan']= $row->jabatan;
				  $data['sjabat']= $row->sjabat;
				  $data['ejabat']= $row->ejabat;
				  $data['notaris']= $row->notaris;
				  // $data['dok']= $row->dok;
				  $data['dok']= '<li><a href="#myModal" data-toggle="modal" data-img-url="'.base_url('uploads/pengurus/'.$row->dok).'">Lihat</a></li>';
				  
				   //$data['dok']= "<a href=".base_url('uploads/pengurus/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";

			   }
			}else{
				  $data['id']= "";
				  $data['nama']= "";
				  $data['no_ktp']= "";
				  $data['alamat']= "";
				  $data['jabatan']= "";
				  $data['sjabat']= "";
				  $data['ejabat']= "";
				  $data['notaris']= "";
				  $data['dok']= "";
			}


		$this->load->view('backend/pengurus/pengurus_form',$data);
	}

	function simpan()
	{
			date_default_timezone_set('Asia/Jakarta');
			$datetime= date("Y-m-d H:i:s");
			$id_peserta=$this->session->userdata('id_peserta');
			$update=$this->input->post('id');
			if (!empty($_FILES['file']['tmp_name'])) {
			//	$this->db->delete('pengurus', array('id_peserta' => $id_peserta));
				$tempFile = $_FILES['file']['tmp_name'];
				$temp = $_FILES["file"]["name"];
				$path_parts = pathinfo($temp);
				$t = preg_replace('/\s+/', '', microtime());
				$fileName = $id_peserta.'_pengurus_'.$t.'_'. '.' . $path_parts['extension'];
				//$fileName = $id_peserta.'_pengurus'. '.' . $path_parts['extension'];
				$targetPath = './uploads/pengurus/';
				$targetFile = $targetPath . $fileName ;
				//echo $fileName;
				move_uploaded_file($tempFile, $targetFile);


				$data = array(
					   'id_peserta' => $id_peserta ,
					   'nama' => $this->input->post('nama'),
					   'no_ktp' => $this->input->post('no_ktp'),
					   'alamat' => $this->input->post('alamat'),
					   'jabatan' => $this->input->post('jabatan'),
					   'sjabat' => $this->input->post('sjabat'),
					   'ejabat' => $this->input->post('ejabat'),
					   'notaris' => $this->input->post('notaris'),
					   'dok' => $fileName,
					   'created' => $datetime,
					);

				$this->db->insert('drt_pengurus', $data);
			}else{
				$data = array(
					    'nama' => $this->input->post('nama'),
					   'no_ktp' => $this->input->post('no_ktp'),
					   'alamat' => $this->input->post('alamat'),
					   'jabatan' => $this->input->post('jabatan'),
					   'sjabat' => $this->input->post('sjabat'),
					   'ejabat' => $this->input->post('ejabat'),
					   'notaris' => $this->input->post('notaris'),
					   'updated' => $datetime,
					);

				$this->db->where('id_peserta', $id_peserta);
				$this->db->update('drt_pengurus', $data);
			}
		$this->session->set_flashdata('success', 'Data Telah tersimpan');
		redirect(base_url('pengurus'));


	}



}
