<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_keuangan extends CI_Controller {

    
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
		if($this->uri->segment(3)<>""){

		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_lapkeu_pasiva_aktiva where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['tahun']= $row->tahun;
				  $data['kas']= $row->kas;
				  $data['persediaan']= $row->persediaan;
				  $data['aktiva_lancar_lainnya']= $row->aktiva_lancar_lainnya;
				  $data['kendaraan']= $row->kendaraan;
				  $data['mesin_besar']= $row->mesin_besar;
				  $data['mesin_kecil']= $row->mesin_kecil;
				  $data['aktiva_tetap_lainnya']= $row->aktiva_tetap_lainnya;
				  $data['perabot']= $row->perabot;
				  $data['total_aktiva']= $row->total_aktiva;
				  $data['hutang_jangka_pendek']= $row->hutang_jangka_pendek;
				  $data['hutang_jangka_panjang']= $row->hutang_jangka_panjang;
				  $data['laba_ditahan']= $row->laba_ditahan;
				  $data['modal_saham']= $row->modal_saham;
				  $data['total_passiva']= $row->total_passiva;
				  $data['diaudit_akuntan']= $row->diaudit_akuntan;
			}
		}else{
			$data['id']= "";
			$data['tahun']=  "";
			$data['kas']=  "";
			$data['persediaan']=  "";
			$data['aktiva_lancar_lainnya']= "";
			$data['kendaraan']=  "";
			$data['mesin_besar']= "";
			$data['mesin_kecil']=  "";
			$data['aktiva_tetap_lainnya']= "";
			$data['perabot']=  "";
			$data['total_aktiva']=  "";
			$data['hutang_jangka_pendek']=  "";
			$data['hutang_jangka_panjang']=  "";
			$data['laba_ditahan']= "";
			$data['modal_saham']=  "";
			$data['total_passiva']= "";
			$data['diaudit_akuntan']= "";
		}


		$this->load->view('backend/lap_keuangan/lap_keuangan_form',$data);
	}


public function aktiva_passiva_list()
{
	$id_peserta=$this->session->userdata('id_peserta');
	$data['query'] = $this->db->query("select *  from drt_lapkeu_pasiva_aktiva where id_peserta='".$id_peserta."' and status_delete=0");


			$this->load->view('backend/lap_keuangan/lap_keuangan_list',$data);
}


public function laba_rugi_list()
{
	$id_peserta=$this->session->userdata('id_peserta');
	$data['query'] = $this->db->query("select *  from drt_lapkeu_laba_rugi where id_peserta='".$id_peserta."' and status_delete=0");
	$this->load->view('backend/lap_keuangan/lap_keuangan_laba_rugi_list',$data);
	
}


	public function aktiva_passiva_simpan()
	{
		//echo "sss";
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
		//echo $update;exit;
		// $this->db->delete('peralatan', array('id_peserta' => $id_peserta));
		if($update==""){
		    
		    if (!empty($_FILES['file']['tmp_name'])) {
		        $tempFile = $_FILES['file']['tmp_name'];
		        $temp = $_FILES["file"]["name"];
		        $path_parts = pathinfo($temp);
		        $t = preg_replace('/\s+/', '', microtime());
		        $fileName = $id_peserta.'_lap_keu_'.$t.'_'. '.' . $path_parts['extension'];
		        $targetPath = './uploads/lap_keu/';
		        $targetFile = $targetPath . $fileName ;
		        
		        move_uploaded_file($tempFile, $targetFile);
		        
		        $data = array(
		            'id_peserta' => $id_peserta ,
		            'tahun' => $this->input->post('tahun'),
		            'kas' => $this->input->post('kas'),
		            'persediaan' => $this->input->post('persediaan'),
		            'aktiva_lancar_lainnya' => $this->input->post('aktiva_lancar_lainnya'),
		            'kendaraan' => $this->input->post('kendaraan'),
		            'mesin_besar' => $this->input->post('mesin_besar'),
		            'mesin_kecil' => $this->input->post('mesin_kecil'),
		            'aktiva_tetap_lainnya' => $this->input->post('aktiva_tetap_lainnya'),
		            'perabot' => $this->input->post('perabot'),
		            'total_aktiva' => $this->input->post('total_aktiva'),
		            'hutang_jangka_pendek' => $this->input->post('hutang_jangka_pendek'),
		            'hutang_jangka_panjang' => $this->input->post('hutang_jangka_panjang'),
		            'laba_ditahan' => $this->input->post('laba_ditahan'),
		            'modal_saham' => $this->input->post('modal_saham'),
		            'total_passiva' => $this->input->post('total_passiva'),
		            'diaudit_akuntan' => $this->input->post('diaudit_akuntan'),
		            'dok'=> $fileName,
		            'status'=>0,
		            'status_delete'=>0,
		            'created' => $datetime,
		        );
		        
		        $this->db->insert('drt_lapkeu_pasiva_aktiva', $data);
		        
		        
		    }else{
			$data = array(
							 'id_peserta' => $id_peserta ,
							 'tahun' => $this->input->post('tahun'),
							 'kas' => $this->input->post('kas'),
							 'persediaan' => $this->input->post('persediaan'),
							 'aktiva_lancar_lainnya' => $this->input->post('aktiva_lancar_lainnya'),
							 'kendaraan' => $this->input->post('kendaraan'),
							 'mesin_besar' => $this->input->post('mesin_besar'),
							 'mesin_kecil' => $this->input->post('mesin_kecil'),
							 'aktiva_tetap_lainnya' => $this->input->post('aktiva_tetap_lainnya'),
							 'perabot' => $this->input->post('perabot'),
							 'total_aktiva' => $this->input->post('total_aktiva'),
							 'hutang_jangka_pendek' => $this->input->post('hutang_jangka_pendek'),
							 'hutang_jangka_panjang' => $this->input->post('hutang_jangka_panjang'),
							 'laba_ditahan' => $this->input->post('laba_ditahan'),
							 'modal_saham' => $this->input->post('modal_saham'),
							 'total_passiva' => $this->input->post('total_passiva'),
							 'diaudit_akuntan' => $this->input->post('diaudit_akuntan'),
							 'status'=>0,
							 'status_delete'=>0,
							 'created' => $datetime,
						);

					$this->db->insert('drt_lapkeu_pasiva_aktiva', $data);
		    }
					$this->session->set_flashdata('success', 'Data Telah tersimpan');
			}else{
				$data = array(
								 'id_peserta' => $id_peserta ,
								 'tahun' => $this->input->post('tahun'),
								 'kas' => $this->input->post('kas'),
								 'persediaan' => $this->input->post('persediaan'),
								 'aktiva_lancar_lainnya' => $this->input->post('aktiva_lancar_lainnya'),
								 'kendaraan' => $this->input->post('kendaraan'),
								 'mesin_besar' => $this->input->post('mesin_besar'),
								 'mesin_kecil' => $this->input->post('mesin_kecil'),
								 'aktiva_tetap_lainnya' => $this->input->post('aktiva_tetap_lainnya'),
								 'perabot' => $this->input->post('perabot'),
								 'total_aktiva' => $this->input->post('total_aktiva'),
								 'hutang_jangka_pendek' => $this->input->post('hutang_jangka_pendek'),
								 'hutang_jangka_panjang' => $this->input->post('hutang_jangka_panjang'),
								 'laba_ditahan' => $this->input->post('laba_ditahan'),
								 'modal_saham' => $this->input->post('modal_saham'),
								 'total_passiva' => $this->input->post('total_passiva'),
								 'diaudit_akuntan' => $this->input->post('diaudit_akuntan'),
								 'status'=>0,
								 'status_delete'=>0,
								 'updated' => $datetime,
							);

						//$this->db->insert('drt_peralatan', $data);
						$this->db->where('id', $update);
						$this->db->update('drt_lapkeu_pasiva_aktiva', $data);
						$this->session->set_flashdata('success', 'Data Telah terupdate');
			}

		redirect(base_url('lap_keuangan/aktiva_passiva_list'));

	}

function aktiva_passiva_hapus()
{
	$id=$this->uri->segment(3);
	$this->db->where('id', $id);
	$this->db->update('drt_lapkeu_pasiva_aktiva', array('status_delete'=>1));
	$this->session->set_flashdata('success', 'Data Telah terhapus');
	redirect(base_url('lap_keuangan/aktiva_passiva_list'));
}

	public function laba_rugi()
	{

		if($this->uri->segment(3)<>""){
		$id_peserta=$this->session->userdata('id_peserta');
		$query = $this->db->query("select * from drt_lapkeu_laba_rugi where id_peserta='".$id_peserta."' and id=".$this->uri->segment(3)."");

		foreach ($query->result() as $row)
			{
				  $data['id']= $row->id;
				  $data['tahun']= $row->tahun;
				  $data['penjualan']= $row->penjualan;
				  $data['hpp']= $row->hpp;
				  $data['laba_bruto']= $row->laba_bruto;
				  $data['beban_operasional']= $row->beban_operasional;
				  $data['laba_operasional']= $row->laba_operasional;
				  $data['pendapatan_beban_lainnya']= $row->pendapatan_beban_lainnya;
				  $data['laba_rugi_sebelum_pajak']= $row->laba_rugi_sebelum_pajak;
				  $data['diaudit_akuntan']= $row->diaudit_akuntan;
			}
		}else{
			$data['id']= "";
			$data['tahun']= "";
			$data['penjualan']= "";
			$data['hpp']= "";
			$data['laba_bruto']= "";
			$data['beban_operasional']= "";
			$data['laba_operasional']= "";
			$data['pendapatan_beban_lainnya']= "";
			$data['laba_rugi_sebelum_pajak']= "";
			$data['diaudit_akuntan']= "";
		}

		$this->load->view('backend/lap_keuangan/lap_keuangan_laba_rugi_form',$data);
	}


	function laba_rugi_simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$update=$this->input->post('id');
		//echo $update;exit;
		// $this->db->delete('peralatan', array('id_peserta' => $id_peserta));
		if($update==""){
		    
		    if (!empty($_FILES['file']['tmp_name'])) {
		        $tempFile = $_FILES['file']['tmp_name'];
		        $temp = $_FILES["file"]["name"];
		        $path_parts = pathinfo($temp);
		        $t = preg_replace('/\s+/', '', microtime());
		        $fileName = $id_peserta.'_lap_keu_lab_rug_'.$t.'_'. '.' . $path_parts['extension'];
		        $targetPath = './uploads/lap_keu/';
		        $targetFile = $targetPath . $fileName ;
		        
		        move_uploaded_file($tempFile, $targetFile);
		        $data = array(
		            'id_peserta' => $id_peserta ,
		            'tahun' => $this->input->post('tahun'),
		            'penjualan' => $this->input->post('penjualan'),
		            'hpp' => $this->input->post('hpp'),
		            'laba_bruto' => $this->input->post('laba_bruto'),
		            'beban_operasional' => $this->input->post('beban_operasional'),
		            'laba_operasional' => $this->input->post('laba_operasional'),
		            'pendapatan_beban_lainnya' => $this->input->post('pendapatan_beban_lainnya'),
		            'laba_rugi_sebelum_pajak' => $this->input->post('laba_rugi_sebelum_pajak'),
		            'diaudit_akuntan' => $this->input->post('diaudit_akuntan'),
		            'dok'=> $fileName,
		            'status'=>0,
		            'status_delete'=>0,
		            'created' => $datetime,
		        );
		        
		        $this->db->insert('drt_lapkeu_laba_rugi', $data);
		        
		    }else{
			$data = array(
							 'id_peserta' => $id_peserta ,
							 'tahun' => $this->input->post('tahun'),
							 'penjualan' => $this->input->post('penjualan'),
							 'hpp' => $this->input->post('hpp'),
							 'laba_bruto' => $this->input->post('laba_bruto'),
							 'beban_operasional' => $this->input->post('beban_operasional'),
							 'laba_operasional' => $this->input->post('laba_operasional'),
							 'pendapatan_beban_lainnya' => $this->input->post('pendapatan_beban_lainnya'),
							 'laba_rugi_sebelum_pajak' => $this->input->post('laba_rugi_sebelum_pajak'),
							 'diaudit_akuntan' => $this->input->post('diaudit_akuntan'),
							 'status'=>0,
							 'status_delete'=>0,
							 'created' => $datetime,
						);

					$this->db->insert('drt_lapkeu_laba_rugi', $data);
		    }
					$this->session->set_flashdata('success', 'Data Telah tersimpan');
			}else{
				$data = array(
								 'id_peserta' => $id_peserta ,
								 'tahun' => $this->input->post('tahun'),
								 'penjualan' => $this->input->post('penjualan'),
								 'hpp' => $this->input->post('hpp'),
								 'laba_bruto' => $this->input->post('laba_bruto'),
								 'beban_operasional' => $this->input->post('beban_operasional'),
								 'laba_operasional' => $this->input->post('laba_operasional'),
								 'pendapatan_beban_lainnya' => $this->input->post('pendapatan_beban_lainnya'),
								 'laba_rugi_sebelum_pajak' => $this->input->post('laba_rugi_sebelum_pajak'),
								 'diaudit_akuntan' => $this->input->post('diaudit_akuntan'),
								 'status'=>0,
								 'status_delete'=>0,
								 'created' => $datetime,
							);
						//$this->db->insert('drt_peralatan', $data);
						$this->db->where('id', $update);
						$this->db->update('drt_lapkeu_laba_rugi', $data);
						$this->session->set_flashdata('success', 'Data Telah terupdate');
			}

		redirect(base_url('lap_keuangan/laba_rugi'));
	}

	// function kualifikasi(){
		// $query = $this->db->query('select * from kualifikasi_perusahaan where status=1');
		// return $query;
	// }




}
