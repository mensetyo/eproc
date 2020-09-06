<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_upload extends CI_Controller {


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
		// $data['kualifikasi'] = $this->kualifikasi();
		$id_peserta=$this->session->userdata('id_peserta');
		//echo $id_peserta;exit;

		//echo $id_peserta;exit;
		$query = $this->db->query("select * from drt_soft_copy where id_peserta='".$id_peserta."'");

		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {





		      $data['id']= $row->id;
		     // $data['surat_kuasa']= "<a href='".base_url('uploads/soft_copy/'.$row->surat_kuasa)."' >Download</a>";
		     // $data['pakta_integritas']="<a href='".base_url('uploads/soft_copy/'.$row->pakta_integritas)."'>Download</a>";
		     // $data['surat_pernyataan_minat']="<a href='".base_url('uploads/soft_copy/'.$row->surat_pernyataan_minat)."'>Download</a>";
		     // $data['formulir_keikutsertaan']="<a href='".base_url('uploads/soft_copy/'.$row->formulir_keikutsertaan)."'>Download</a>";

          $data['surat_kuasa']= $row->surat_kuasa;
         $data['pakta_integritas']=$row->pakta_integritas;
         $data['surat_pernyataan_minat']=$row->surat_pernyataan_minat;
         $data['formulir_keikutsertaan']=$row->formulir_keikutsertaan;
		   }
		}else{
			$data['id']="";
			$data['surat_kuasa']="";
			$data['pakta_integritas']="";
			$data['surat_pernyataan_minat']="";
			$data['formulir_keikutsertaan']="";
		}

		$this->load->view('backend/download_upload/download_upload_form',$data);
	}

	function kualifikasi(){
		$query = $this->db->query('select * from kualifikasi_perusahaan where status=1');
		return $query;
	}


function simpan()
{
	date_default_timezone_set('Asia/Jakarta');
	$datetime= date("Y-m-d H:i:s");
	$id_peserta=$this->session->userdata('id_peserta');
	$targetPath = './uploads/soft_copy/';

//file surat kuasa
if(is_uploaded_file($_FILES['surat_kuasa']['tmp_name'])){
	$tempFile1 = $_FILES['surat_kuasa']['tmp_name'];
	$temp1 = $_FILES["surat_kuasa"]["name"];
	$path_parts1 = pathinfo($temp1);
	$t1 = preg_replace("/[^0-9]/", "",  microtime());
	$file1 = $id_peserta.'_file_surat_kuasa_'.$t1.'_'. '.' . $path_parts1['extension'];
	$targetFile1 = $targetPath . $file1 ;
	move_uploaded_file($tempFile1, $targetFile1);
}else{
	$file1="0";
}

//echo $file1;exit;
//file_pakta_integritas

if(is_uploaded_file($_FILES['pakta_integritas']['tmp_name'])){
		$tempFile2 = $_FILES['pakta_integritas']['tmp_name'];
		$temp2 = $_FILES["pakta_integritas"]["name"];
		$path_parts2 = pathinfo($temp2);
		$t2 = preg_replace("/[^0-9]/", "",  microtime());
		$file2 = $id_peserta.'_file_pakta_integritas_'.$t2.'_'. '.' . $path_parts2['extension'];
		$targetFile2 = $targetPath . $file2 ;
		move_uploaded_file($tempFile2, $targetFile2);
	}else{
		$file2="0";
	}

		//file_pernyataan_minat
if(is_uploaded_file($_FILES['surat_pernyataan_minat']['tmp_name'])){
			$tempFile3 = $_FILES['surat_pernyataan_minat']['tmp_name'];
			$temp3 = $_FILES["surat_pernyataan_minat"]["name"];
			$path_parts3 = pathinfo($temp3);
			$t3 = preg_replace("/[^0-9]/", "",  microtime());
			$file3 = $id_peserta.'_file_pernyataan_minat_'.$t3.'_'. '.' . $path_parts3['extension'];
			$targetFile3 = $targetPath . $file3 ;
			move_uploaded_file($tempFile3, $targetFile3);
		}else{
			$file3="0";
		}


			//file_pernyataan_kebenaran_data
if(is_uploaded_file($_FILES['formulir_keikutsertaan']['tmp_name'])){
				$tempFile4 = $_FILES['formulir_keikutsertaan']['tmp_name'];
				$temp4 = $_FILES["formulir_keikutsertaan"]["name"];
				$path_parts4 = pathinfo($temp4);
				$t4 = preg_replace("/[^0-9]/", "",  microtime());
				$file4 = $id_peserta.'_file_formulir_keikutsertaan_'.$t4.'_'. '.' . $path_parts4['extension'];
				$targetFile4 = $targetPath . $file4 ;
				move_uploaded_file($tempFile4, $targetFile4);
			}else{
				$file4="0";
			}
				//file_isian_pq
					if($this->input->post('id')==""){
										$data = array(
													 'id_peserta' => $id_peserta,
													 'surat_kuasa' => $file1,
													 'pakta_integritas' => $file2,
													 'surat_pernyataan_minat' => $file3,
													'formulir_keikutsertaan' => $file4,
										 );

											$this->db->insert('drt_soft_copy', $data);
										  $this->session->set_flashdata('success', 'Data Telah tersimpan');

											}else{


														    $data = array(
														        'id_peserta' => $id_peserta,
														        'surat_kuasa' => $file1,
														        'pakta_integritas' => $file2,
														        'surat_pernyataan_minat' => $file3,
														        'formulir_keikutsertaan' => $file4,
														    );

															$this->db->where('id', $this->input->post('id'));
															$this->db->update('drt_soft_copy', $data);
															$this->session->set_flashdata('success', 'Data Telah terupdate');

														}

                    redirect(base_url('download_upload'));

}


}
