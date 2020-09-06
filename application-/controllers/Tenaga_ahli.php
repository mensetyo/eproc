<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tenaga_ahli extends CI_Controller {

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
        	//$data['kualifikasi'] = $this->kualifikasi();
        	$id_peserta=$this->session->userdata('id_peserta');
        	$data['query'] = $this->db->query("select * from drt_tenaga_ahli where id_peserta='".$id_peserta."' and status_delete=0");
        	$this->load->view('backend/tenaga_ahli/tenaga_ahli_list',$data);
        }

	public function form()
	{
		
			if ($this->uri->segment(3)<>"")
			{
				$query = $this->db->query("select * from drt_tenaga_ahli where id_peserta=".$this->session->userdata('id_peserta')." and id=".$this->uri->segment(3)."");

		
			   foreach ($query->result() as $row)
			   {
			      $data['id']= $row->id;
			      $data['nama']= $row->nama;
			      $data['tgl_lahir']= $row->tgl_lahir;
			      $data['jenis_kelamin']= $row->jenis_kelamin;
			      $data['alamat']= $row->alamat;
			      $data['pendidikan_terakhir']= $row->pendidikan_terakhir;
			      $data['kewarganegaraan']= $row->kewarganegaraan;
			      $data['pengalaman_kerja']= $row->pengalaman_kerja;
			      $data['email']= $row->email;
			      $data['status_pegawaian']= $row->status_pegawaian;
			      $data['keahlian']= $row->keahlian;
			      $data['jabatan']= $row->jabatan;
			      $data['pengalaman_tahun_1']= $row->pengalaman_tahun_1;
			      $data['pengalaman_tahun_2']= $row->pengalaman_tahun_2;
			      $data['pengalaman_tahun_3']= $row->pengalaman_tahun_3;
			      $data['pengalaman_tahun_4']= $row->pengalaman_tahun_4;
			      $data['pengalaman_tahun_5']= $row->pengalaman_tahun_5;
			      $data['pengalaman_uraian_1']= $row->pengalaman_uraian_1;
			      $data['pengalaman_uraian_2']= $row->pengalaman_uraian_2;
			      $data['pengalaman_uraian_3']= $row->pengalaman_uraian_3;
			      $data['pengalaman_uraian_4']= $row->pengalaman_uraian_4;
			      $data['pengalaman_uraian_5']= $row->pengalaman_uraian_5;
			      $data['sertifitikat_tahun_1']= $row->sertifitikat_tahun_1;
			      $data['sertifitikat_tahun_2']= $row->sertifitikat_tahun_2;
			      $data['sertifitikat_tahun_3']= $row->sertifitikat_tahun_3;
			      $data['sertifitikat_tahun_4']= $row->sertifitikat_tahun_4;
			      $data['sertifitikat_tahun_5']= $row->sertifitikat_tahun_5;
			      $data['sertifitikat_uraian_1']= $row->sertifitikat_uraian_1;
			      $data['sertifitikat_uraian_2']= $row->sertifitikat_uraian_2;
			      $data['sertifitikat_uraian_3']= $row->sertifitikat_uraian_3;
			      $data['sertifitikat_uraian_4']= $row->sertifitikat_uraian_4;
			      $data['sertifitikat_uraian_5']= $row->sertifitikat_uraian_5;
			      $data['bahasa_uraian_1']= $row->bahasa_uraian_1;
			      $data['bahasa_uraian_2']= $row->bahasa_uraian_2;
			      $data['bahasa_uraian_3']= $row->bahasa_uraian_3;
				   $data['file']= $row->file;

			   }
			}else{

				$data['id']="";
			  $data['nama']= "";
			  $data['tgl_lahir']= "";
			  $data['jenis_kelamin']= "";
			  $data['alamat']= "";
			  $data['pendidikan_terakhir']= "";
			  $data['kewarganegaraan']="";
			  $data['pengalaman_kerja']="";
			  $data['email']= "";
			  $data['status_pegawaian']="";
			  $data['keahlian']="";
			  $data['jabatan']= "";
			  $data['pengalaman_tahun_1']= "";
			  $data['pengalaman_tahun_2']= "";
			  $data['pengalaman_tahun_3']= "";;
			  $data['pengalaman_tahun_4']= "";;
			  $data['pengalaman_tahun_5']= "";
			  $data['pengalaman_uraian_1']="";
			  $data['pengalaman_uraian_2']= "";
			  $data['pengalaman_uraian_3']= "";
			  $data['pengalaman_uraian_4']= "";
			  $data['pengalaman_uraian_5']= "";
			  $data['sertifitikat_tahun_1']= "";
			  $data['sertifitikat_tahun_2']= "";
			  $data['sertifitikat_tahun_3']= "";
			  $data['sertifitikat_tahun_4']= "";
			  $data['sertifitikat_tahun_5']= "";
			  $data['sertifitikat_uraian_1']="";
			  $data['sertifitikat_uraian_2']="";
			  $data['sertifitikat_uraian_3']="";
			  $data['sertifitikat_uraian_4']="";
			  $data['sertifitikat_uraian_5']= "";
			  $data['bahasa_uraian_1']= "";
			  $data['bahasa_uraian_2']= "";
			  $data['bahasa_uraian_3']="";
			   $data['file']="";

			}



		$this->load->view('backend/tenaga_ahli/tenaga_ahli_form',$data);
	}

	function hapus()
	{
		$id=$this->uri->segment(3);

		$this->db->where('id', $id);
		$this->db->update('drt_tenaga_ahli', array('status_delete'=>1));

		//$this->db->delete('drt_ijin_usaha', array('id' => $id));
		$this->session->set_flashdata('success', 'Data Telah terhapus');
		redirect(base_url('tenaga_ahli'));
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
				$fileName = $id_peserta.'_tenaga_ahli_'.$t.'_'. '.' . $path_parts['extension'];
				$targetPath = './uploads/akta/';
				$targetFile = $targetPath . $fileName ;
							
				//echo $fileName;
				move_uploaded_file($tempFile, $targetFile);
				
				
			$data = array(
					 'id_peserta' => $id_peserta ,
					 'file' => $fileName,
					 'nama' => $this->input->post('nama'),
					 'tgl_lahir' => $this->input->post('tgl_lahir'),
					 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					 'alamat' => $this->input->post('alamat'),
					 'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
					 'kewarganegaraan' => $this->input->post('kewarganegaraan'),
					 'pengalaman_kerja' => $this->input->post('pengalaman_kerja'),
					 'email' => $this->input->post('email'),
					 'status_pegawaian' => $this->input->post('status_pegawaian'),
					 'keahlian' => $this->input->post('keahlian'),
					 'jabatan' => $this->input->post('jabatan'),
					 'pengalaman_tahun_1' => $this->input->post('pengalaman_tahun_1'),
					 'pengalaman_tahun_2' => $this->input->post('pengalaman_tahun_2'),
					 'pengalaman_tahun_3' => $this->input->post('pengalaman_tahun_3'),
					 'pengalaman_tahun_4' => $this->input->post('pengalaman_tahun_4'),
					 'pengalaman_tahun_5' => $this->input->post('pengalaman_tahun_5'),
					 'pengalaman_uraian_1' => $this->input->post('pengalaman_uraian_1'),
					 'pengalaman_uraian_2' => $this->input->post('pengalaman_uraian_2'),
					 'pengalaman_uraian_3' => $this->input->post('pengalaman_uraian_3'),
					 'pengalaman_uraian_4' => $this->input->post('pengalaman_uraian_4'),
					 'pengalaman_uraian_5' => $this->input->post('pengalaman_uraian_5'),
					 'sertifitikat_tahun_1' => $this->input->post('sertifitikat_tahun_1'),
					 'sertifitikat_tahun_2' => $this->input->post('sertifitikat_tahun_2'),
					 'sertifitikat_tahun_3' => $this->input->post('sertifitikat_tahun_3'),
					 'sertifitikat_tahun_4' => $this->input->post('sertifitikat_tahun_4'),
					 'sertifitikat_tahun_5' => $this->input->post('sertifitikat_tahun_5'),
					 'sertifitikat_uraian_1' => $this->input->post('sertifitikat_uraian_1'),
					 'sertifitikat_uraian_2' => $this->input->post('sertifitikat_uraian_2'),
					 'sertifitikat_uraian_3' => $this->input->post('sertifitikat_uraian_3'),
					 'sertifitikat_uraian_4' => $this->input->post('sertifitikat_uraian_4'),
					 'sertifitikat_uraian_5' => $this->input->post('sertifitikat_uraian_5'),
					 'bahasa_uraian_1' => $this->input->post('bahasa_uraian_1'),
					 'bahasa_uraian_2' => $this->input->post('bahasa_uraian_2'),
					 'status'=>0,
					 'status_delete'=>0,
					 'created' => $datetime,
				);

			$this->db->insert('drt_tenaga_ahli', $data);
				}
		}else{
			
			
		}

			//echo $this->db->last_query();exit;
			$this->session->set_flashdata('success', 'Data Telah tersimpan');
			redirect(base_url('tenaga_ahli'));

}



}
