<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengalaman extends CI_Controller {


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
			$data['query'] = $this->db->query("select * from drt_pengalaman where id_peserta=".$id_peserta." and status_delete=0");
			$this->load->view('backend/pengalaman/pengalaman_list',$data);

	}


	public function form()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		if($this->uri->segment(3)<>""){

		$query = $this->db->query("select * from drt_pengalaman where id_peserta=".$id_peserta." and id=".$this->uri->segment(3)."");

			   foreach ($query->result() as $row)
			   {
				  $data['id']= $row->id;
				  $data['nama_kontrak']= $row->nama_kontrak;
				  $data['lokasi']= $row->lokasi;
				  $data['instansi']= $row->instansi;
				  $data['alamat']= $row->alamat;
				  $data['telepon']= $row->telepon;
				  $data['nomor_kontrak']= $row->nomor_kontrak;
				  $data['nilai_kontrak']= $row->nilai_kontrak;
				  $data['tanggal_pelaksanaan']= $row->tanggal_pelaksanaan;
				  $data['persentase_pelaksanaan']= $row->persentase_pelaksanaan;
				  $data['selesai_kontrak']= $row->selesai_kontrak;
				  $data['tanggal_serah_terima']= $row->tanggal_serah_terima;
				  $data['keterangan']= $row->keterangan;
				  $data['persen_sharing']= $row->persen_sharing;
				  $data['nilai_project']= $row->nilai_project;
				   $data['dok']= $row->file;


			   }
			}else{
			    $data['persen_sharing']="";
			    $data['nilai_project']="";
				  $data['id']= "";
				  $data['nama_kontrak']= "";
				  $data['dok']= "";
				  $data['lokasi']= "";
				  $data['instansi']= "";
				  $data['alamat']= "";
				  $data['telepon']= "";
				  $data['nomor_kontrak']= "";
				  $data['nilai_kontrak']= "";
				  $data['tanggal_pelaksanaan']= "";
				  $data['persentase_pelaksanaan']= "";
				  $data['selesai_kontrak']= "";
				  $data['tanggal_serah_terima']= "";
				  $data['keterangan']= "";
			}

		$this->load->view('backend/pengalaman/pengalaman_form',$data);
	}



	function simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
		// $this->db->delete('peralatan', array('id_peserta' => $id_peserta));
		if($update==""){


			if (!empty($_FILES['file']['tmp_name'])) {
				$tempFile = $_FILES['file']['tmp_name'];
				$temp = $_FILES["file"]["name"];
				$path_parts = pathinfo($temp);
				$t = preg_replace('/\s+/', '', microtime());
				$fileName = $id_peserta.'_pengalaman_'.$t.'_'. '.' . $path_parts['extension'];
				$targetPath = './uploads/akta/';
				$targetFile = $targetPath . $fileName ;

				//echo $fileName;
				move_uploaded_file($tempFile, $targetFile);
		$data = array(
						 'id_peserta' => $id_peserta ,
						 'file' => $fileName,
						 'nama_kontrak' => $this->input->post('nama_kontrak'),
						 'lokasi' => $this->input->post('lokasi'),
						 'instansi' => $this->input->post('instansi'),
						 'alamat' => $this->input->post('alamat'),
						 'telepon' => $this->input->post('telepon'),
						 'nomor_kontrak' => $this->input->post('nomor_kontrak'),
						 'nilai_kontrak' => $this->input->post('nilai_kontrak'),
						 'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
						 'persentase_pelaksanaan' => 0,
						 'selesai_kontrak' => $this->input->post('selesai_kontrak'),
						 'tanggal_serah_terima' => $this->input->post('tanggal_serah_terima'),
						 'keterangan' => $this->input->post('keterangan'),
		                  'persen_sharing' => $this->input->post('persen_sharing'),
		                  'nilai_project' => $this->input->post('nilai_project'),
						 'status'=>0,
						 'status_delete'=>0,
						 'created' => $datetime,
					);

					$this->db->insert('drt_pengalaman', $data);
			}
					$this->session->set_flashdata('success', 'Data Telah tersimpan');
			}else{
					$data = array(
									 'id_peserta' => $id_peserta ,
									 'nama_kontrak' => $this->input->post('nama_kontrak'),
									 'lokasi' => $this->input->post('lokasi'),
									 'instansi' => $this->input->post('instansi'),
									 'alamat' => $this->input->post('alamat'),
									 'telepon' => $this->input->post('telepon'),
									 'nomor_kontrak' => $this->input->post('nomor_kontrak'),
									 'nilai_kontrak' => $this->input->post('nilai_kontrak'),
									 'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
									 'persentase_pelaksanaan' => 0,
									 'selesai_kontrak' => $this->input->post('selesai_kontrak'),
									 'tanggal_serah_terima' => $this->input->post('tanggal_serah_terima'),
									 'keterangan' => $this->input->post('keterangan'),
                					    'persen_sharing' => $this->input->post('persen_sharing'),
                					    'nilai_project' => $this->input->post('nilai_project'),
									 'status'=>0,
									 'status_delete'=>0,
									 'updated' => $datetime,
								);

						//$this->db->insert('drt_peralatan', $data);
						$this->db->where('id', $update);
						$this->db->update('drt_pengalaman', $data);
						$this->session->set_flashdata('success', 'Data Telah terupdate');
			}

		redirect(base_url('pengalaman'));

	}

	function lihat()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_pengalaman where id_peserta=".$id_peserta." and id=".$this->uri->segment(3)."");

				 foreach ($query->result() as $row)
				 {
					 $data['id']= $row->id;
					 $data['nama_kontrak']= $row->nama_kontrak;
					 $data['lokasi']= $row->lokasi;
					 $data['instansi']= $row->instansi;
					 $data['alamat']= $row->alamat;
					 $data['telepon']= $row->telepon;
					 $data['nomor_kontrak']= $row->nomor_kontrak;
					 $data['nilai_kontrak']= $row->nilai_kontrak;
					 $data['tanggal_pelaksanaan']= $row->tanggal_pelaksanaan;
					 $data['persentase_pelaksanaan']= $row->persentase_pelaksanaan;
					 $data['selesai_kontrak']= $row->selesai_kontrak;
					 $data['tanggal_serah_terima']= $row->tanggal_serah_terima;
					 $data['keterangan']= $row->keterangan;
				 }

		$this->load->view('backend/pengalaman/pengalaman_view',$data);
	}



		function hapus()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		$id=$this->uri->segment(3);
		$this->db->where('id', $id);
		$this->db->where('id_peserta', $id_peserta);
		$this->db->update('drt_pengalaman', array('status_delete'=>1));
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('pemilik'));
	}


}
