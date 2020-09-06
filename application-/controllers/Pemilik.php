<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {


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
		$id_peserta=$this->session->userdata('id_peserta');
		$this->db->where('id_peserta',$id_peserta);
		$this->db->where('status_delete','0');
		$query = $this->db->get('drt_pemilik');
		$data['arrayData']=$query;
		$this->load->view('backend/pemilik/pemilik_list2',$data);
	}

	function simpan()
	{
		//echo "sss";exit;
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');

		if (!empty($_FILES['file']['tmp_name'])) {

				$tempFile = $_FILES['file']['tmp_name'];
				$temp = $_FILES["file"]["name"];
				$path_parts = pathinfo($temp);
				$t = preg_replace('/\s+/', '', microtime());
				//$fileName = $id_peserta.'_pemilik_'.$t.'.' . $path_parts['extension'];
				$fileName = $id_peserta.'_pemilik_'.$t.'_'. '.' . $path_parts['extension'];
				$targetPath = './uploads/pemilik/';
				$targetFile = $targetPath . $fileName ;
				//echo $fileName;
				move_uploaded_file($tempFile, $targetFile);


				$data = array(
					   'id_peserta' => $id_peserta ,
					   'nama' => $this->input->post('nama'),
					   'no_ktp' => $this->input->post('no_ktp'),
					   'alamat' => $this->input->post('alamat'),
					   'saham' => $this->input->post('saham'),
					   'satuan' => $this->input->post('satuan'),
					   'dok' => $fileName,
					     'status'=>0,
					   'created' => $datetime,
					);

				$this->db->insert('drt_pemilik', $data);
			}else{
				$data = array(
					    'nama' => $this->input->post('nama'),
					   'no_ktp' => $this->input->post('no_ktp'),
					   'alamat' => $this->input->post('alamat'),
					   'saham' => $this->input->post('saham'),
					   'satuan' => $this->input->post('satuan'),
					     'status'=>0,
					   'updated' => $datetime,
					);

				$this->db->where('id_peserta', $id_peserta);
				$this->db->update('drt_pemilik', $data);
			}
		$this->session->set_flashdata('success', 'Data Telah tersimpan');
		redirect(base_url('pemilik'));


	}


	function tambah()
	{

		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_pemilik where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['nama']= $row->nama;
				  $data['no_ktp']= $row->no_ktp;
				  $data['alamat']= $row->alamat;
				  $data['saham']= $row->saham;
				  $data['satuan']= $row->satuan;
				  $data['dok']= '<li><a href="#myModal" data-toggle="modal" data-img-url="'.base_url('uploads/pemilik/'.$row->dok).'">Lihat</a></li>';
				  
				 // $data['dok']= "<a href=".base_url('uploads/pemilik/'.$row->dok)."><i class=\"far fa-file-pdf\"></i>".$row->dok."</a>";
			}
		}else{
				  $data['id']= "";
				  $data['id']=  "";
				  $data['nama']= "";
				  $data['no_ktp']= "";
				  $data['alamat']=  "";
				  $data['saham']= "";
				  $data['satuan']= "";
				  $data['dok']= "";
		}

		//$this->load->view('backend/pajak/pajak_form',$data);
		$this->load->view('backend/pemilik/pemilik_form',$data);

	}

	function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id', $id);
		$this->db->update('drt_pemilik', array('status_delete'=>1));
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('pemilik'));
	}



	function update()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		$id=$this->uri->segment(3);

		$query = $this->db->query("select * from drt_pemilik where id='".$id."'");

		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
			  $data['id']= $row->id;
			  $data['nama']= $row->nama;
			  $data['no_ktp']= $row->no_ktp;
			  $data['alamat']= $row->alamat;
			  $data['saham']= $row->saham;
			  $data['satuan']= $row->satuan;
			 // $data['dok']= $row->dok;
			  $data['dok']= '<li><a href="#myModal" data-toggle="modal" data-img-url="'.base_url('uploads/pemilik/'.$row->dok).'">Lihat</a></li>';
			  

		   }
		}

		$this->load->view('backend/pemilik/pemilik_form',$data);

	}



}
