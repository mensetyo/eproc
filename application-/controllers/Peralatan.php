<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peralatan extends CI_Controller {

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
    
    
    		$id_peserta=$this->session->userdata('id_peserta');
    		$data['query'] = $this->db->query("select * from drt_peralatan where id_peserta=".$id_peserta." and status_delete=0");
    		$this->load->view('backend/peralatan/peralatan_list',$data);
    
    }

	public function form()
	{

		$id_peserta=$this->session->userdata('id_peserta');
		if($this->uri->segment(3)<>""){

		$query = $this->db->query("select * from drt_peralatan where id_peserta=".$id_peserta." and id=".$this->uri->segment(3)."");

			   foreach ($query->result() as $row)
			   {
				  $data['id']= $row->id;
				  $data['nama_alat']= $row->nama_alat;
				  $data['jumlah']= $row->jumlah;
				  $data['kapasitas']= $row->kapasitas;
				  $data['merk']= $row->merk;
				  $data['tahun']= $row->tahun;
				  $data['kondisi']= $row->kondisi;
				  $data['lokasi']= $row->lokasi;
				  $data['status_milik']= $row->status_milik;
				  $data['bukti_milik']= $row->bukti_milik;
			   }
			}else{
				  $data['id']= "";
				  $data['nama_alat']= "";
				  $data['jumlah']= "";
				  $data['kapasitas']= "";
				  $data['merk']= "";
				  $data['tahun']= "";
				  $data['kondisi']= "";
				  $data['lokasi']= "";
				  $data['status_milik']= "";
				  $data['bukti_milik']= "";
			}

		$this->load->view('backend/peralatan/peralatan_form',$data);
	}

	
	
	function simpan()
	{
	    date_default_timezone_set('Asia/Jakarta');
	    $datetime=date("Y-m-d H:i:s");
	    $id_peserta=$this->session->userdata('id_peserta');
	    $update=$this->input->post('id');
	    
	    if($update==""){
	        if (!empty($_FILES['file']['tmp_name'])) {
	            $tempFile = $_FILES['file']['tmp_name'];
	            $temp = $_FILES["file"]["name"];
	            $path_parts = pathinfo($temp);
	            $t = preg_replace('/\s+/', '', microtime());
	            $fileName = $id_peserta.'_peralatan_'.$t.'_'. '.' . $path_parts['extension'];
	            $targetPath = './uploads/peralatan/';
	            $targetFile = $targetPath . $fileName ;
	            
	            move_uploaded_file($tempFile, $targetFile);
	            
	            $data = array(
	                'id_peserta' => $id_peserta ,
	                'nama_alat' => $this->input->post('nama_alat'),
	                'jumlah' => $this->input->post('jumlah'),
	                'kapasitas' => $this->input->post('kapasitas'),
	                'merk' => $this->input->post('merk'),
	                'tahun' => $this->input->post('tahun'),
	                'kondisi' => $this->input->post('kondisi'),
	                'lokasi' => $this->input->post('lokasi'),
	                'status_milik' => $this->input->post('status_milik'),
	                'bukti_milik' => $fileName,
	                'status'=>0,
	                'created' => $datetime,
	            );
	            
	            $this->db->insert('drt_peralatan', $data);
	            
	            
	        }else{
	            $data = array(
	                'id_peserta' => $id_peserta ,
	                'nama_alat' => $this->input->post('nama_alat'),
	                'jumlah' => $this->input->post('jumlah'),
	                'kapasitas' => $this->input->post('kapasitas'),
	                'merk' => $this->input->post('merk'),
	                'tahun' => $this->input->post('tahun'),
	                'kondisi' => $this->input->post('kondisi'),
	                'lokasi' => $this->input->post('lokasi'),
	                'status_milik' => $this->input->post('status_milik'),
	                //'bukti_milik' => $fileName,
	                'status'=>0,
	                'updated' => $datetime,
	            );
	            
	            $this->db->insert('drt_peralatan', $data);
	        }
	        $this->session->set_flashdata('success', 'Data Telah tersimpan');
	        redirect(base_url('peralatan'));
	    }else{
	        
	        if (!empty($_FILES['file']['tmp_name'])) {
	            $tempFile = $_FILES['file']['tmp_name'];
	            $temp = $_FILES["file"]["name"];
	            $path_parts = pathinfo($temp);
	            $t = preg_replace('/\s+/', '', microtime());
	            $fileName = $id_peserta.'_ijin_usaha_'.$t.'_'. '.' . $path_parts['extension'];
	            $targetPath = './uploads/ijin_usaha/';
	            $targetFile = $targetPath . $fileName ;
	            move_uploaded_file($tempFile, $targetFile);
	            
	          
	            
	            $data = array(
	                'id_peserta' => $id_peserta ,
	                'nama_alat' => $this->input->post('nama_alat'),
	                'jumlah' => $this->input->post('jumlah'),
	                'kapasitas' => $this->input->post('kapasitas'),
	                'merk' => $this->input->post('merk'),
	                'tahun' => $this->input->post('tahun'),
	                'kondisi' => $this->input->post('kondisi'),
	                'lokasi' => $this->input->post('lokasi'),
	                'status_milik' => $this->input->post('status_milik'),
	                'bukti_milik' => $fileName,
	                'status'=>0,
	                'updated' => $datetime,
	            );
	            $this->db->where('id', $this->input->post('id'));
	            $this->db->update('drt_peralatan', $data);
	            
	        }else{
	            $data = array(
	                'id_peserta' => $id_peserta ,
	                'nama_alat' => $this->input->post('nama_alat'),
	                'jumlah' => $this->input->post('jumlah'),
	                'kapasitas' => $this->input->post('kapasitas'),
	                'merk' => $this->input->post('merk'),
	                'tahun' => $this->input->post('tahun'),
	                'kondisi' => $this->input->post('kondisi'),
	                'lokasi' => $this->input->post('lokasi'),
	                'status_milik' => $this->input->post('status_milik'),
	                'status'=>0,
	                'updated' => $datetime,
	            );
	            $this->db->where('id', $this->input->post('id'));
	            $this->db->update('drt_peralatan', $data);
	        }
	        
	        $this->session->set_flashdata('success', 'Data Telah terupdate');
	        redirect(base_url('peralatan'));
	        
	    }
	    
	}
	
	
	
	function simpan2()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
		//echo $update;exit;
		// $this->db->delete('peralatan', array('id_peserta' => $id_peserta));
		if($update==""){
		$data = array(
					   'id_peserta' => $id_peserta ,
					   'nama_alat' => $this->input->post('nama_alat'),
					   'jumlah' => $this->input->post('jumlah'),
					   'kapasitas' => $this->input->post('kapasitas'),
					   'merk' => $this->input->post('merk'),
					   'tahun' => $this->input->post('tahun'),
					   'kondisi' => $this->input->post('kondisi'),
					   'lokasi' => $this->input->post('lokasi'),
					   'status_milik' => $this->input->post('status_milik'),
					   'bukti_milik' => $this->input->post('bukti_milik'),
						 'status'=>0,
					   'created' => $datetime,
					);

				$this->db->insert('drt_peralatan', $data);
					$this->session->set_flashdata('success', 'Data Telah tersimpan');
			}else{
				$data = array(
								 'id_peserta' => $id_peserta ,
								 'nama_alat' => $this->input->post('nama_alat'),
								 'jumlah' => $this->input->post('jumlah'),
								 'kapasitas' => $this->input->post('kapasitas'),
								 'merk' => $this->input->post('merk'),
								 'tahun' => $this->input->post('tahun'),
								 'kondisi' => $this->input->post('kondisi'),
								 'lokasi' => $this->input->post('lokasi'),
								 'status_milik' => $this->input->post('status_milik'),
								 'bukti_milik' => $this->input->post('bukti_milik'),
								 'status'=>0,
								 'created' => $datetime,
							);

						//$this->db->insert('drt_peralatan', $data);
						$this->db->where('id', $update);
						$this->db->update('drt_peralatan', $data);
	$this->session->set_flashdata('success', 'Data Telah terupdate');
			}

		redirect(base_url('peralatan'));

	}

	function lihat()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		//$data="";
		$query = $this->db->query("select * from drt_peralatan where id_peserta=".$id_peserta." and id=".$this->uri->segment(3)."");

				 foreach ($query->result() as $row)
				 {
					$data['id']= $row->id;
					$data['nama_alat']= $row->nama_alat;
					$data['jumlah']= $row->jumlah;
					$data['kapasitas']= $row->kapasitas;
					$data['merk']= $row->merk;
					$data['tahun']= $row->tahun;
					$data['kondisi']= $row->kondisi;
					$data['lokasi']= $row->lokasi;
					$data['status_milik']= $row->status_milik;
					$data['bukti_milik']= $row->bukti_milik;
				 }
				 
		$this->load->view('backend/peralatan/peralatan_view',$data);
	}


	function hapus()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id', $id);
		$this->db->update('drt_peralatan', array('status_delete'=>1));
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('peralatan'));
	}



}
