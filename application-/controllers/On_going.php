<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class On_going extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!is_login()) {
            $this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
            redirect(base_url());
            exit;
        }    
    }
    

function  index()
	{
		$id_peserta=$this->session->userdata('id_peserta');
		$data['query'] = $this->db->query("select * from drt_pekerjaan_on_going where id_peserta=".$id_peserta." and status_delete=0");
		$this->load->view('backend/on_going/on_going_list',$data);
	}
	
function hapus()
	{
	    $id=$this->uri->segment(3);
	    $this->db->where('id', $id);
	    $this->db->update('drt_pekerjaan_on_going', array('status_delete'=>1));
	    
	    //$this->db->delete('drt_ijin_usaha', array('id' => $id));
	    $this->session->set_flashdata('success', 'Data Telah terhapus');
	    redirect(base_url('on_going'));
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
				$fileName = $id_peserta.'_on_going_'.$t.'_'. '.' . $path_parts['extension'];
				$targetPath = './uploads/akta/';
				$targetFile = $targetPath . $fileName ;
							
				//echo $fileName;
				move_uploaded_file($tempFile, $targetFile);
				
				
				$data = array(
								 'id_peserta' => $id_peserta ,
								 'file'=>$fileName,
								 'nama_kontrak' => $this->input->post('nama_kontrak'),
								 'lokasi' => $this->input->post('lokasi'),
								 'instansi' => $this->input->post('instansi'),
								 'alamat' => $this->input->post('alamat'),
								 'telepon' => $this->input->post('telepon'),
								 'nomor_kontrak' => $this->input->post('nomor_kontrak'),
								 'nilai_kontrak' =>str_replace('.' , '', $this->input->post('nilai_kontrak')),
								 'tanggal_kontrak' => date('Y-m-d', strtotime($this->input->post('tanggal_kontrak'))),
								 'presentase_progress' => $this->input->post('presentase_progress'),
								 'tanggal_progress' => date('Y-m-d', strtotime($this->input->post('tanggal_progress'))),
								 'prosentase_sharing'=>$this->input->post('prosentase_sharing'),
								 'nominal_sharing'=>$this->input->post('nominal_sharing'),
								 'keterangan' => $this->input->post('keterangan'),
								 'status'=>0,
								 'status_delete'=>0,
								 'created' => $datetime,
							);

						$this->db->insert('drt_pekerjaan_on_going', $data);
				}
						$this->session->set_flashdata('success', 'Data Telah tersimpan');
				}else{
					$data = array(
								'id_peserta' => $id_peserta ,
								'file'=>$fileName,
								'nama_kontrak' => $this->input->post('nama_kontrak'),
								'lokasi' => $this->input->post('lokasi'),
								'instansi' => $this->input->post('instansi'),
								'alamat' => $this->input->post('alamat'),
								'telepon' => $this->input->post('telepon'),
								'nomor_kontrak' => $this->input->post('nomor_kontrak'),
								'nilai_kontrak' =>str_replace('.' , '', $this->input->post('nilai_kontrak')),
								'tanggal_kontrak' => date('Y-m-d', strtotime($this->input->post('tanggal_kontrak'))),
								'presentase_progress' => $this->input->post('presentase_progress'),
								'tanggal_progress' => date('Y-m-d', strtotime($this->input->post('tanggal_progress'))),
								'prosentase_sharing'=>$this->input->post('prosentase_sharing'),
								'nominal_sharing'=>$this->input->post('nominal_sharing'),
								'keterangan' => $this->input->post('keterangan'),
								'status'=>0,
								'status_delete'=>0,
								'created' => $datetime,
						);
							//$this->db->insert('drt_peralatan', $data);
							$this->db->where('id', $update);
							$this->db->update('drt_pekerjaan_on_going', $data);
							$this->session->set_flashdata('success', 'Data Telah terupdate');
				}

			redirect(base_url('on_going'));

		}



	public function form()
	{
		//$data['kualifikasi'] = "";

		$id_peserta=$this->session->userdata('id_peserta');
		if($this->uri->segment(3)<>""){

		$query = $this->db->query("select * from drt_pekerjaan_on_going where id_peserta=".$id_peserta." and id=".$this->uri->segment(3)."");

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
					$data['tanggal_kontrak']= $row->tanggal_kontrak;
					$data['prosentase_sharing']= $row->prosentase_sharing;
					$data['tanggal_progress']= $row->tanggal_progress;
					$data['keterangan']= $row->keterangan;
					$data['prosentase_sharing']= $row->prosentase_sharing;
					$data['nominal_sharing']= $row->nominal_sharing;
					$data['file']= $row->file;

					//$data['prosentase_sharing']= $row->prosentase_sharing;
					//$data['nominal_sharing']= $row->nominal_sharing;
					//$data['keterangan']= $row->keterangan;
				 }
			}else{
					$data['id']= "";
					$data['nama_kontrak']= "";
					$data['lokasi']= "";
					$data['instansi']= "";
					$data['alamat']= "";
					$data['telepon']= "";
					$data['nomor_kontrak']= "";
					$data['nilai_kontrak']= "";
					$data['tanggal_kontrak']= "";
					$data['prosentase_sharing']= "";
					$data['nominal_sharing']= "";
					$data['tanggal_progress']= "";
					$data['keterangan']= "";
					$data['file']= "";


				//	$data['keterangan']= "";
			}


		$this->load->view('backend/on_going/on_going_form',$data);
	}






}
