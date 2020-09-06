<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspek_keuangan extends CI_Controller {

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
		$data['query'] = $this->db->query("select * from drt_lapkeu_aspek where id_peserta=".$id_peserta." and status_delete=0");
		$this->load->view('backend/aspek_keuangan/aspek_keuangan_list',$data);
	}
	
	
function hapus()
	{
	    $id=$this->uri->segment(3);
	    
	    $this->db->where('id', $id);
	    $this->db->update('drt_lapkeu_aspek', array('status_delete'=>1));
	    
	    //$this->db->delete('drt_ijin_usaha', array('id' => $id));
	    $this->session->set_flashdata('success', 'Data Telah terhapus');
	    redirect(base_url('aspek_keuangan'));
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
				
					}else{
						$fileName ="";
						}
				$data = array(
								 'id_peserta' => $id_peserta ,
								 'file'=>$fileName,
								 'thn' => $this->input->post('thn'),
								 'uraian_1' => $this->input->post('uraian_1'),
								 'uraian_2' => $this->input->post('uraian_2'),
								 'uraian_3' => $this->input->post('uraian_3'),
								 'uraian_4' => $this->input->post('uraian_4'),
								 'uraian_5' => $this->input->post('uraian_5'),
								 'uraian_6' => $this->input->post('uraian_6'),
								 'uraian_7' => $this->input->post('uraian_7'),
							);

						$this->db->insert('drt_lapkeu_aspek', $data);
						$this->session->set_flashdata('success', 'Data Telah tersimpan');
				}else{
						$data = array(
								    'id_peserta' => $id_peserta ,
								    'thn' => $this->input->post('thn'),
								    'uraian_1' => $this->input->post('uraian_1'),
									'uraian_2' => $this->input->post('uraian_2'),
									'uraian_3' => $this->input->post('uraian_3'),
								    'uraian_4' => $this->input->post('uraian_4'),
								    'uraian_5' => $this->input->post('uraian_5'),
									'uraian_6' => $this->input->post('uraian_6'),
									 'uraian_7' => $this->input->post('uraian_7'),
									);

							//$this->db->insert('drt_peralatan', $data);
							$this->db->where('id', $update);
							$this->db->update('drt_lapkeu_aspek', $data);
							$this->session->set_flashdata('success', 'Data Telah terupdate');
				}

			redirect(base_url('aspek_keuangan'));

		}



	public function form()
	{
		//$data['kualifikasi'] = "";
		$id_peserta=$this->session->userdata('id_peserta');
		if($this->uri->segment(3)<>""){

		         $query = $this->db->query("select * from drt_lapkeu_aspek where id_peserta=".$id_peserta." and id=".$this->uri->segment(3)."");

				 foreach ($query->result() as $row)
				 {
					$data['id']= $row->id;
					$data['thn']= $row->thn;
					$data['uraian_1']= $row->uraian_1;
					$data['uraian_2']= $row->uraian_2;
					$data['uraian_3']= $row->uraian_3;
					$data['uraian_4']= $row->uraian_4;
					$data['uraian_5']= $row->uraian_5;
					$data['uraian_6']= $row->uraian_6;
					$data['uraian_7']= $row->uraian_7;
					$data['file']=$row->file;
				 }
			}else{
					$data['id']="";
					$data['thn']="";
					$data['file']="";
					$data['uraian_1']="";
					$data['uraian_2']="";
					$data['uraian_3']="";
					$data['uraian_4']="";
					$data['uraian_5']="";
					$data['uraian_6']="";
					$data['uraian_7']="";
			}


		  $this->load->view('backend/aspek_keuangan/aspek_keuangan_form',$data);
	}



}
