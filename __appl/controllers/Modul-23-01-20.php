<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Controller {
	function __construct(){
        parent::__construct();
		header("Expires: Mon, 26 Jul 1999 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("If-Modified-Since: Mon, 22 Jan 2008 00:00:00 GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Cache-Control: private");
		header("Pragma: no-cache");
		$this->auth = unserialize(base64_decode($this->session->userdata($this->config->item('user_data'))));
		$this->host	= $this->config->item('base_url');
		$this->smarty->assign('host',$this->host);
		$this->smarty->assign('auth', $this->auth);
		$this->load->model('mmodul');
		$this->load->library(array('lib','encrypt'));
		$this->smarty->assign("acak", md5(date('H:i:s')));
		
	}
	public function index()
	{
		if($this->auth){
			$data = $this->mmodul->getdata('list_dash','result_array');
			$flag=array();
			foreach ($data as $v=>$k){
				$flag[$k['flag']]=$k["jml"];
			}
			$this->smarty->assign('flag', $flag);
			$this->smarty->assign('data', $data);
			$this->smarty->display('main.html');
		}else{
			if($this->session->flashdata('error')){
				$this->smarty->assign("error", $this->session->flashdata('error'));
			}
			$this->smarty->display('main-login.html');
		}
	}
	function save(){
		echo "<pre>";print_r($_POST);
	}
	
	function modul($p1,$p2){
		if($this->auth){
			$this->smarty->assign("main", $p1);
			$this->smarty->assign("mod", $p2);
			$temp='template/'.$p2.'.html';
			if(!file_exists($this->config->item('appl').APPPATH.'views/'.$temp)){$this->smarty->display('konstruksi.html');}
			else{$this->smarty->display($temp);}	
		}
	}	
	function get_konten($p1=""){
		$sts="add";
		if($this->input->post('editstatus'))$sts=$this->input->post('editstatus');
		
		switch($p1){
			//case "ijin_usaha":
			/*case "form_ganti_pwd":
				return $this->smarty->display($temp);
			break;
			*/
			case "ta":
				if($this->input->post('editstatus')=='edit'){
					$data=$this->mmodul->getdata('ta','row_array','edit');
					$pengalaman=$this->mmodul->getdata('pengalaman_na','result_array','edit');
					$serti=$this->mmodul->getdata('sertifikat','result_array','edit');
					$this->smarty->assign("data", $data);
					$this->smarty->assign("pengalaman", $pengalaman);
					$this->smarty->assign("jml_row", count($pengalaman));
					$this->smarty->assign("jml_row_serti", count($serti));
					$this->smarty->assign("serti", $serti);
				}
			break;
			case "domisili":
			case "akta":
				
				//if($this->input->post('editstatus')=='edit'){
					$ck=$data=$this->mmodul->getdata($p1,'row_array');
					if(isset($ck["id"])){
						$sts='edit';
						$_POST['id']=$ck["id"];
						$data=$this->mmodul->getdata($p1,'row_array','edit');
						$this->smarty->assign("data", $data);
					}
				//}
			break;
			case "tdp":
				$tdp=$this->mmodul->getdata('peserta','row_array');
				//print_r($siup);
				$this->smarty->assign("tdp", $tdp);
				//if($this->input->post('editstatus')=='edit'){
					$ck=$data=$this->mmodul->getdata($p1,'row_array');
					if(isset($ck["id"])){
						$sts='edit';
						$_POST['id']=$ck["id"];
						$data=$this->mmodul->getdata($p1,'row_array','edit');
						$this->smarty->assign("data", $data);
					}
				//}
			break;
			case "konfirmasi":
				$data=$this->mmodul->getdata($p1,'result_array','edit');
				$dt=array();
				foreach($data as $x=>$v){
					$dt[$v["jenis_dok"]]=array('status'=>$v["status"],'ket'=>$v["ket"]);
				}
				$this->smarty->assign("data", $dt);
			break;
			case "ijin_usaha":
				$kualifikasi=$this->mmodul->getdata('kualifikasi','result_array','get');
				$klasifikasi=$this->mmodul->getdata('klasifikasi','result_array','get');
				$m_klbi=$this->mmodul->getdata('m_klbi','result_array','get');
				$this->smarty->assign("kualifikasi", $kualifikasi);
				$this->smarty->assign("klasifikasi", $klasifikasi);
				$this->smarty->assign("m_klbi", $m_klbi);
				$ck=$data=$this->mmodul->getdata($p1,'row_array');
				$siup=$this->mmodul->getdata('peserta','row_array');
				//print_r($siup);
				$this->smarty->assign("siup", $siup);
				if(isset($ck["id"])){
				//if($this->input->post('editstatus')=='edit'){
					$sts='edit';
					$_POST['id']=$ck["id"];
					$data=$this->mmodul->getdata($p1,'row_array','edit');
					$drt_klbi=$this->mmodul->getdata('drt_klbi','result_array','get');
				//	print_r($drt_klbi);
					$this->smarty->assign("data", $data);
					$this->smarty->assign("data_klbi", $drt_klbi);
				}
			break;
			case "data_perusahaan":
				//if($this->input->post('editstatus')=='edit'){
					$data=$this->mmodul->getdata('data_perusahaan','row_array','get');
					//print_r($data);
					$bentuk=$this->mmodul->getdata('bentuk_perusahaan','result_array','get');
					$propinsi=$this->mmodul->getdata('propinsi','result_array','get');
					if(isset($data["id"])){$sts='edit';}
					$this->smarty->assign("propinsi", $propinsi);
					$this->smarty->assign("bentuk", $bentuk);
					$this->smarty->assign("data", $data);
					
				//}
			break;
			case "upload_dok":
				//if($this->input->post('editstatus')=='edit'){
					$data=$this->mmodul->getdata('upload_dok','row_array','get');
					if(isset($data["id"]))$this->smarty->assign("sts_crud", 'edit');
					$this->smarty->assign("data", $data);
					
				//}
			break;
			case "input":
				$cabang=$this->mmodul->getdata("cl_kantor_cabang", "result_array");
				if($this->input->post('editstatus')=='edit'){
					$data=$this->mmodul->getdata('projek','row_array','edit');
					$no_penawaran=$data["no_penawaran"];
					$this->smarty->assign("data", $data);
				}else{
				$idx=$this->mmodul->getdata("get_idx", "row_array");
					if(isset($idx['idx']) && $idx['idx']!=""){
						if($idx['idx'] < 10 )$no_penawaran='P.reg/00'.$idx['idx'].'/BC/'.date('Y.m.d');
						else if($idx['idx'] < 100 )$no_penawaran='P.reg/0'.$idx['idx'].'/BC/'.date('Y.m.d');
						else $no_penawaran=$no_penawaran='P.reg/'.$idx['idx'].'/BC/'.date('Y.m.d');
					}else{
						$no_penawaran=$no_penawaran='P.reg/001/BC/'.date('Y.m.d');
					}
				}
				$this->smarty->assign("cabang", $cabang);
				$this->smarty->assign("no_penawaran", $no_penawaran);
				//$data = $this->mmodul->getdata("get_tingkat_kepuasan", "row_array", $skor);
				//echo $data["deskripsi"];
				//exit;
			break;
			default:
				if($this->input->post('editstatus')=='edit'){
					$data=$this->mmodul->getdata($p1,'row_array','edit');
					$this->smarty->assign("data", $data);
				}
			break;
		}
		$this->smarty->assign("sts_crud", $sts);
		$this->smarty->assign("mod", $p1);
		$temp='main/'.$p1.'.html';
		if(!file_exists($this->config->item('appl').APPPATH.'views/'.$temp)){$this->smarty->display('konstruksi.html');}
		else{$this->smarty->display($temp);}	
	}
	function getdata($p1){
		echo $this->mmodul->getdata($p1,"json");
	}	
	function cruddata($p1){
		$post = array();
        foreach($_POST as $k=>$v){
			if($this->input->post($k)!=""){
				//$post[$k] = $this->db->escape_str($this->input->post($k));
				$post[$k] = $this->input->post($k);
			}
			
		}
		echo $this->mmodul->simpan_data($p1, $post);
	}
	function tes(){
		$sql="SELECT * FROM tbl_jawaban_responden 
			  WHERE tingkat_kepentingan IS NOT NULL AND tingkat_kinerja IS NOT NULL
			  ORDER BY tbl_responden_id,tbl_pertanyaan_id ASC";
		$res=$this->db->query($sql)->result_array();
		$kat=$this->mmodul->getdata("get_kategori","result_array");
		$resp=$this->mmodul->getdata("responden","result_array");
		$rata=$this->mmodul->getdata("get_rata_rata","result_array");
		$total=$this->mmodul->getdata("get_total","result_array");
		$data=array();
		foreach($res as $v=>$x){
			if(isset($data[$x["tbl_responden_id"]]))$data[$x["tbl_responden_id"]][$x["tbl_pertanyaan_id"]]=array('tk'=>$x["tingkat_kepentingan"],'tn'=>$x["tingkat_kinerja"]);
			else{
				$data[$x["tbl_responden_id"]]=array();
				$data[$x["tbl_responden_id"]][$x["tbl_pertanyaan_id"]]=array('tk'=>$x["tingkat_kepentingan"],'tn'=>$x["tingkat_kinerja"]);
			}
				
			
		}
		$this->smarty->assign("rata", $rata);
		$this->smarty->assign("total", $total);
		$this->smarty->assign("resp", $resp);
		$this->smarty->assign("kat", $kat);
		$this->smarty->assign("data", $data);
		$this->smarty->display('bo/rekap.html');
		echo "<pre>";print_r($data);
	}
	
	
	function export_excel(){
		$mod=$this->input->post('mod');
		//print_r($_POST);exit;
		switch($mod){
			case "input":
				//$arrCol[] = array('urutan'=>1, 'nilai'=>'No.','fontsize'=> '12', 'bold'=>true, 'namanya'=>'rowID', 'format'=>'string');
				$arrCol[] = array('urutan'=>2, 'nilai'=>'No Penawaran','fontsize'=> '12', 'bold'=>true,'namanya'=>'no_penawaran','format'=>'string');
				$arrCol[] = array('urutan'=>3, 'nilai'=>'Kantor Cabang/Pusat','fontsize'=> '12', 'bold'=>true,'namanya'=>'kantor_cabang','format'=>'string');
				$arrCol[] = array('urutan'=>4, 'nilai'=>'Pemberi Tugas','fontsize'=> '12', 'bold'=>true,'namanya'=>'nama_pemberi_tugas','format'=>'string');
				$arrCol[] = array('urutan'=>5, 'nilai'=>'Alamat','fontsize'=> '12', 'bold'=>true,'namanya'=>'alamat','format'=>'string');
				$arrCol[] = array('urutan'=>6, 'nilai'=>'Telp.','fontsize'=> '12', 'bold'=>true, 'namanya'=>'tlp','format'=>'string');
				$arrCol[] = array('urutan'=>7, 'nilai'=>'Pengguna Laporan','fontsize'=> '12', 'bold'=>true, 'namanya'=>'nama_pengguna_laporan','format'=>'string');
				$arrCol[] = array('urutan'=>8, 'nilai'=>'Alamat','fontsize'=> '12', 'bold'=>true, 'namanya'=>'alamat_pengguna_laporan','format'=>'string');
				$arrCol[] = array('urutan'=>9, 'nilai'=>'Telp.','fontsize'=> '12', 'bold'=>true, 'namanya'=>'tlp_pengguna_laporan','format'=>'string');
				$arrCol[] = array('urutan'=>10, 'nilai'=>'Email','fontsize'=> '12', 'bold'=>true, 'namanya'=>'email','format'=>'string');
				$arrCol[] = array('urutan'=>11, 'nilai'=>'Objek Penilain','fontsize'=> '12', 'bold'=>true, 'namanya'=>'obj_penilaian','format'=>'string');
				$arrCol[] = array('urutan'=>12, 'nilai'=>'Luas Tanah','fontsize'=> '12', 'bold'=>true, 'namanya'=>'luas_tanah','format'=>'string');
				$arrCol[] = array('urutan'=>13, 'nilai'=>'Luas Banunan','fontsize'=> '12', 'bold'=>true, 'namanya'=>'luas_bangunan','format'=>'string');
				$arrCol[] = array('urutan'=>14, 'nilai'=>'Alamat Objek','fontsize'=> '12', 'bold'=>true, 'namanya'=>'alamat_obj','format'=>'string');
				$arrCol[] = array('urutan'=>15, 'nilai'=>'FEE Penawaran','fontsize'=> '12', 'bold'=>true, 'namanya'=>'fee_projek','format'=>'money');
				$arrCol[] = array('urutan'=>16, 'nilai'=>'PPN(10%)','fontsize'=> '12', 'bold'=>true, 'namanya'=>'ppn','format'=>'string');
				$arrCol[] = array('urutan'=>17, 'nilai'=>'PPH(1.2%)','fontsize'=> '12', 'bold'=>true, 'namanya'=>'pph','format'=>'string');
				$arrCol[] = array('urutan'=>18, 'nilai'=>'FEE Marketing(%)','fontsize'=> '12', 'bold'=>true, 'namanya'=>'fee_marketing','format'=>'string');
				$arrCol[] = array('urutan'=>19, 'nilai'=>'FEE Marketing(Rp)','fontsize'=> '12', 'bold'=>true, 'namanya'=>'fee_marketing_rp','format'=>'string');
				$arrCol[] = array('urutan'=>20, 'nilai'=>'Commitmen Fee(%)','fontsize'=> '12', 'bold'=>true, 'namanya'=>'comitmen_fee','format'=>'string');
				$arrCol[] = array('urutan'=>21, 'nilai'=>'Commitmen Fee(Rp)','fontsize'=> '12', 'bold'=>true, 'namanya'=>'commitmen_fee_rp','format'=>'string');
				//$rsl = $this->db->get('vpti2_log_upload_sln')->result_array();
				$rsl = $this->mmodul->getdata('projek','result_array');
				$arrExcel = array('sNAMESS'=>'DLS', 'sFILNAM'=>'dls_'.date('YmdHis'),'col'=>$arrCol, 'rsl'=>$rsl);
			break;
			case "report_doc":
				$arrCol[] = array('urutan'=>1, 'nilai'=>'No.','fontsize'=> '12', 'bold'=>true, 'namanya'=>'rowID', 'format'=>'string');
				$arrCol[] = array('urutan'=>2, 'nilai'=>'Vo. Number','fontsize'=> '12', 'bold'=>true,'namanya'=>'vo_number','format'=>'string');
				$arrCol[] = array('urutan'=>3, 'nilai'=>'LS. Number','fontsize'=> '12', 'bold'=>true,'namanya'=>'ls_number','format'=>'string');
				$arrCol[] = array('urutan'=>4, 'nilai'=>'Commodity','fontsize'=> '12', 'bold'=>true,'namanya'=>'description2','format'=>'string');
				$arrCol[] = array('urutan'=>5, 'nilai'=>'Partial','fontsize'=> '12', 'bold'=>true,'namanya'=>'partial','format'=>'string');
				$arrCol[] = array('urutan'=>6, 'nilai'=>'File','fontsize'=> '12', 'bold'=>true,'namanya'=>'nama_file','format'=>'string');
				$arrCol[] = array('urutan'=>7, 'nilai'=>'Upload Date','fontsize'=> '12', 'bold'=>true, 'namanya'=>'tanggal_upload','format'=>'datetime');
				//$rsl = $this->db->get('vpti2_log_upload_sln')->result_array();
				$rsl = $this->mkso->getdata('histori_doc','report');
				$arrExcel = array('sNAMESS'=>'DOC', 'sFILNAM'=>'doc_'.date('YmdHis'),'col'=>$arrCol, 'rsl'=>$rsl);
			break;
			case "report_vo_xml":
				$arrCol[] = array('urutan'=>1, 'nilai'=>'No.','fontsize'=> '12', 'bold'=>true, 'namanya'=>'rowID', 'format'=>'string');
				$arrCol[] = array('urutan'=>2, 'nilai'=>'Vo. Number','fontsize'=> '12', 'bold'=>true,'namanya'=>'vo_number','format'=>'string');
				$arrCol[] = array('urutan'=>3, 'nilai'=>'Download Date','fontsize'=> '12', 'bold'=>true, 'namanya'=>'tanggal_download_vo','format'=>'datetime');
				$arrCol[] = array('urutan'=>4, 'nilai'=>'Tot. Download','fontsize'=> '12', 'bold'=>true,'namanya'=>'jml_download_vo','format'=>'string');
				$arrCol[] = array('urutan'=>5, 'nilai'=>'Download Rev. Date','fontsize'=> '12', 'bold'=>true, 'namanya'=>'tanggal_download_vo_rev','format'=>'datetime');
				$arrCol[] = array('urutan'=>6, 'nilai'=>'Tot. Download Rev.','fontsize'=> '12', 'bold'=>true,'namanya'=>'jml_download_vo_rev','format'=>'string');
				$arrCol[] = array('urutan'=>7, 'nilai'=>'Notes','fontsize'=> '12', 'bold'=>true,'namanya'=>'remark_to_inspec_office','format'=>'string');
				//$rsl = $this->db->get('vpti2_log_upload_sln')->result_array();
				$rsl = $this->mkso->getdata('histori_vo','report');
				$arrExcel = array('sNAMESS'=>'List', 'sFILNAM'=>'download_vo_'.date('YmdHis'),'col'=>$arrCol, 'rsl'=>$rsl);
			break;
		}

		$this->lib->buat_excel($arrExcel);	
	} 
	function get_combo(){
		$mod=$this->input->post('v');
		$val=$this->input->post('v3');
		$bind=$this->input->post('v2');
		$data=$this->mmodul->getdata($mod,'result_array','get',$bind);
		$opt="<option value=''>--Pilih--</option>";
		
		foreach($data as $v){
			if($v['id']==$val)$sel="selected"; else $sel="";
			$opt .="<option value='".$v['id']."' ".$sel.">".$v['txt']."</option>";
		}
		echo $opt;
	}
	function download_temp($p1=""){
		$this->load->helper('download');
		switch($p1){
			case "formulir":
				$data = file_get_contents('/opt/aplikasi/eproc/__repo/template/formulir_keikutsertaan.doc');
				$name = 'formulir_keikutsertaan.doc';
			break;
			case "pakta_integritas":
				$data = file_get_contents('/opt/aplikasi/eproc/__repo/template/pakta_integritas.doc');
				$name = 'pakta_integritas.doc';
			break;
			case "surat_kuasa":
				$data = file_get_contents('/opt/aplikasi/eproc/__repo/template/surat_kuasa.doc');
				$name = 'surat_kuasa.doc';
			break;
			case "minat":
				$data = file_get_contents('/opt/aplikasi/eproc/__repo/template/surat_pernyataan_minat.doc');
				$name = 'surat_pernyataan_minat.doc';
			break;
		}
		if(!file_exists('__repo/template/'.$name)){
			echo "Ooooppppsss File NOT EXIST !!!!!";
		}else{
			force_download($name, $data);
		}
	}
	function cek_pwd_lama(){
		$pwd_lama=$this->input->post('pwd');
		$ex_pwd=$this->encrypt->decode($this->auth["pass"]);
		if($pwd_lama==$ex_pwd){
			echo 1;exit;
		}else{
			echo 2;exit;
		}
	}
}
