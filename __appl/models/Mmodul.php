<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Mmodul extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getdata($type="", $balikan="", $p1="", $p2=""){
		$where = " WHERE 1=1 ";
		switch($type){
			case "list_jenis_dokumen":
				$sql="SELECT * FROM drt_jenis_dokumen WHERE flag NOT IN ('IJIN_USAHA','TDP') AND flag_awal=0";
				$dt=array();
				$dt["jenis"]=$this->db->query($sql)->result_array();
				foreach($dt["jenis"] as $x=>$v){
					$sql="SELECT COUNT(id)as jml FROM ".$v["tabel"]." WHERE id_peserta=".$this->auth["id"];
					$dt["jenis"][$x]['sts_upload']=$this->db->query($sql)->row("jml");
					//GET STATUS VERIFIKASI SUDAH DILAKUKAN ATAU BELUM
					$dt["jenis"][$x]['sts_ver']=2;//2 ARTINYA BELUM DIVERIFIKASI
					$sql="SELECT A.*,E.nama as ver_oleh 
						  FROM drt_ceklist_header A 
						  LEFT JOIN users E ON A.verifikasi_oleh=E.username
						  WHERE A.drt_peserta_id=".$this->auth["id"]." 
						  AND A.drt_jenis_dokumen_id=".$v["id"];
					$rs=$this->db->query($sql)->row_array();
					$dt["jenis"][$x]['header_ver']=$rs;//HEADER VERIFIKASI
					$dt["jenis"][$x]['detil_ver']=array();//DETIL VERIFIKASI
					
					if(isset($rs["status"])){
						$dt["jenis"][$x]['sts_ver']=$rs["status"];
						$sql="SELECT A.*,E.nama as ver_oleh,B.verifikasi_tgl,C.kriteria,D.pilihan 
								FROM drt_ceklist_detil A
								LEFT JOIN drt_ceklist_header B ON A.drt_ceklist_header_id=B.id
								LEFT JOIN drt_master_cheklist C ON A.drt_master_cheklist=C.id
								LEFT JOIN drt_master_pilihan D ON A.drt_pilihan_id=D.id
								LEFT JOIN users E ON B.verifikasi_oleh=E.username
								WHERE A.drt_ceklist_header_id=".$rs["id"]; //GET DETIL VERIFIKASI
						$dt["jenis"][$x]['detil_ver']=$this->db->query($sql)->result_array();
					}
				}
				return $dt;
				//echo "<pre>";print_r($dt);exit;
			break;
			case "get_ver":
				$sql="SELECT A.* 
							FROM drt_ceklist_header A 
							LEFT JOIN drt_jenis_dokumen B ON A.drt_jenis_dokumen_id=B.id
							WHERE A.drt_peserta_id=".$this->auth["id"]." AND B.flag='".$p1."'";
			break;
			case "pengalaman_na":
				$sql="SELECT * FROM drt_pengalaman_ta WHERE drt_tenaga_ahli_id=".$this->input->post('id');
			break;

			case "web_informasi":
				$sql="SELECT * FROM web_informasi WHERE status_inp=1 ORDER BY batas_dari DESC";
			break;

			case "sertifikat":
				$sql="SELECT * FROM drt_sertifikat_ta WHERE drt_tenaga_ahli_id=".$this->input->post('id');
			break;
			case "lelang_ts":
				$sql="SELECT A.*,B.kategori_pengadaan,C.kualifikasi_pengadaan,
						D.jenis_dokumen,E.evaluasi_penawaran,F.metode_penawaran,G.description,H.tahapan,
						I.tgl_anwijing,J.tgl_mulai,J.tgl_akhir
					  FROM eproc_pengadaan A 
					  LEFT JOIN eproc_cl_kategori_pengadaan B ON A.cl_kategori_pengadaan_id=B.id
					  LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					  LEFT JOIN eproc_cl_jenis_dokumen D ON A.cl_jenis_dokumen_id=D.id
					  LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					  LEFT JOIN eproc_cl_metode_penawaran F ON A.cl_metode_penawaran_id=F.id 
					  LEFT JOIN eproc_cost_center G ON A.eproc_cost_center_id=G.id 
					  LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id
					  LEFT JOIN eproc_pengadaan_anwijing I ON I.eproc_pengadaan_id=A.id
					  LEFT JOIN (
							SELECT * FROM eproc_pengadaan_undang_penawaran 
							WHERE eproc_pengadaan_id=".base64_decode($p1)." 
							AND eproc_tahapan_id=33 limit 0,1
					  )J ON J.eproc_pengadaan_id=A.id
					  WHERE A.id=".base64_decode($p1);
					  //echo base64_encode('penawaran_ts');exit;
			break;
			case "lelang_ll":
				$sql="SELECT A.*,B.kategori_pengadaan,C.kualifikasi_pengadaan,
						D.jenis_dokumen,E.evaluasi_penawaran,F.metode_penawaran,G.description,H.tahapan,
						I.tgl_anwijing,J.tgl_mulai,J.tgl_akhir
					  FROM eproc_pengadaan A 
					  LEFT JOIN eproc_cl_kategori_pengadaan B ON A.cl_kategori_pengadaan_id=B.id
					  LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					  LEFT JOIN eproc_cl_jenis_dokumen D ON A.cl_jenis_dokumen_id=D.id
					  LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					  LEFT JOIN eproc_cl_metode_penawaran F ON A.cl_metode_penawaran_id=F.id 
					  LEFT JOIN eproc_cost_center G ON A.eproc_cost_center_id=G.id 
					  LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id
					  LEFT JOIN eproc_pengadaan_anwijing I ON I.eproc_pengadaan_id=A.id
					  LEFT JOIN (
							SELECT * FROM eproc_pengadaan_undang_penawaran 
							WHERE eproc_pengadaan_id=".base64_decode($p1)." 
							AND eproc_tahapan_id=20 limit 0,1
					  )J ON J.eproc_pengadaan_id=A.id
					  WHERE A.id=".base64_decode($p1);
					 // echo $sql;exit;
			break;
			case "lelang_st":
				$sql="SELECT A.*,B.kategori_pengadaan,C.kualifikasi_pengadaan,
						D.jenis_dokumen,E.evaluasi_penawaran,F.metode_penawaran,G.description,H.tahapan,
						I.tgl_anwijing,J.tgl_mulai,J.tgl_akhir
					  FROM eproc_pengadaan A 
					  LEFT JOIN eproc_cl_kategori_pengadaan B ON A.cl_kategori_pengadaan_id=B.id
					  LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					  LEFT JOIN eproc_cl_jenis_dokumen D ON A.cl_jenis_dokumen_id=D.id
					  LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					  LEFT JOIN eproc_cl_metode_penawaran F ON A.cl_metode_penawaran_id=F.id 
					  LEFT JOIN eproc_cost_center G ON A.eproc_cost_center_id=G.id 
					  LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id
					  LEFT JOIN eproc_pengadaan_anwijing I ON I.eproc_pengadaan_id=A.id
					  LEFT JOIN (
							SELECT * FROM eproc_pengadaan_undang_penawaran 
							WHERE eproc_pengadaan_id=".base64_decode($p1)." 
							AND eproc_tahapan_id=8 limit 0,1
					  )J ON J.eproc_pengadaan_id=A.id
					  WHERE A.id=".base64_decode($p1);
					 // echo $sql;exit;
			break;
			case "eproc_penawaran":
				$sql="SELECT * FROM eproc_penawaran WHERE drt_peserta_id=".$this->auth["id"]." AND eproc_pengadaan_id=".$p2;
			break;
			case "sanggah_dt":
				$sql="SELECT * FROM eproc_sanggah_detil 
					  WHERE eproc_sanggah_id=".$p2." 
					  AND drt_peserta_id=".$this->auth["id"];
				//	  echo $sql;exit;
			break;
			case "sanggah":
				$sql="SELECT A.*,B.kategori_pengadaan,C.kualifikasi_pengadaan,
						D.jenis_dokumen,E.evaluasi_penawaran,F.metode_penawaran,G.description,H.tahapan,
						I.tgl_anwijing,J.tgl_mulai_sanggah,J.tgl_akhir_sanggah,J.id as id_sanggah
					  FROM eproc_pengadaan A 
					  LEFT JOIN eproc_cl_kategori_pengadaan B ON A.cl_kategori_pengadaan_id=B.id
					  LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					  LEFT JOIN eproc_cl_jenis_dokumen D ON A.cl_jenis_dokumen_id=D.id
					  LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					  LEFT JOIN eproc_cl_metode_penawaran F ON A.cl_metode_penawaran_id=F.id 
					  LEFT JOIN eproc_cost_center G ON A.eproc_cost_center_id=G.id 
					  LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id
					  LEFT JOIN eproc_pengadaan_anwijing I ON I.eproc_pengadaan_id=A.id
					  LEFT JOIN (
							SELECT * FROM eproc_pengadaan_sanggah
							WHERE eproc_pengadaan_id=".base64_decode($p1)."
					  )J ON J.eproc_pengadaan_id=A.id
					  WHERE A.id=".base64_decode($p1);
			break;
			case "get_pemenang_sementara_all":
				$sql="SELECT A.*,A.seq_pemenang as pemenang,B.nm_perusahaan,C.adm_nilai,C.adm_ket,C.keuangan_nilai,C.keuangan_ket,C.pengalaman_nilai,C.pengalaman_ket,
					  C.makalah_nilai,C.makalah_ket,C.harga,C.nilai_harga,C.grand_tot,C.ket_penawaran
					  FROM eproc_pengadaan_pemenang A 
					  LEFT JOIN drt_peserta B ON A.drt_peserta_id=B.id
					  LEFT JOIN eproc_rekap_penawaran C ON (A.eproc_pengadaan_id=C.eproc_pengadaan_id AND A.drt_peserta_id=C.drt_peserta_id)
					  WHERE A.eproc_pengadaan_id=".$p1."
					  ORDER BY A.seq_pemenang ASC ";
			break;
			case "pemenang":
				if($p1=='edit'){
					$where .=" AND A.id=".$p2;
				}
				$sql="SELECT A.*,H.nm_perusahaan as pemenang,B.description,
						D.metode_penawaran,E.evaluasi_penawaran,G.jenis_dokumen
						FROM eproc_pengadaan A
						LEFT JOIN (
							SELECT A.*,B.nm_perusahaan 
							FROM eproc_pengadaan_pemenang A 
							LEFT JOIN drt_peserta B ON A.drt_peserta_id=B.id
							WHERE A.seq_pemenang=1
						)H ON H.eproc_pengadaan_id=A.id
						LEFT JOIN eproc_cost_center B ON A.eproc_cost_center_id=B.id
						LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
						LEFT JOIN eproc_cl_metode_penawaran D ON A.cl_metode_penawaran_id=D.id
						LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
						LEFT JOIN eproc_cl_kategori_pengadaan F ON A.cl_kategori_pengadaan_id=F.id
						LEFT JOIN eproc_cl_jenis_dokumen G ON A.cl_jenis_dokumen_id=G.id
						".$where." AND A.flag_lelang='LS' AND A.eproc_tahapan_id >=15 ";
			break;
			case "tahap_nego":
				$sql="SELECT eproc_negosiasi_id,drt_peserta_id,tahap 
					  FROM eproc_pengadaan_negosiasi_detil 
					  WHERE eproc_negosiasi_id=".$p2." 
					  AND drt_peserta_id=".$this->auth["id"]."  
					  GROUP BY eproc_negosiasi_id,drt_peserta_id,tahap 
					  ORDER BY tahap DESC ";
			break;
			case "tahap_nego_ulang":
				$sql="SELECT eproc_negosiasi_id,drt_peserta_id,tahap 
					  FROM eproc_pengadaan_negosiasi_ulang_detil 
					  WHERE eproc_negosiasi_id=".$p2." 
					  AND drt_peserta_id=".$this->auth["id"]."  
					  GROUP BY eproc_negosiasi_id,drt_peserta_id,tahap 
					  ORDER BY tahap DESC ";
			break;

			// file_panduan
			case "web_panduan":
				$sql="SELECT judul,file_panduan FROM web_panduan where id=9";
			break;
			case "web_panduan_dua":
				$sql="SELECT judul,file_panduan FROM web_panduan where id=10";
			break;
			case "web_panduan_masa":
				$sql="SELECT batas_dari, batas_sampai from web_informasi WHERE agenda LIKE 'Pengisian%' OR
				agenda LIKE 'kelengkapan%'";
			break;

			// klasifikasi
			case "kalsifikasi_l2":
				$sql="SELECT * FROM drt_klasifikasi_perusahaan_l2 WHERE idlevel1=".$this->input->post('idlevel1');
				$rs=$this->db->query($sql)->result_array();
				return json_encode($rs);
			break;
			case "kalsifikasi_l3":
				$sql="SELECT * FROM drt_klasifikasi_perusahaan_l3 WHERE idlevel2=".$this->input->post('idlevel2')." AND idlevel1=".$this->input->post('idlevel1');
				$rs=$this->db->query($sql)->result_array();
				return json_encode($rs);
			break;

			case "getData":
				$sql="SELECT * FROM drt_ijin_usaha_klasifikasi_detail WHERE id_peserta=".$this->auth["id"];
				$rs=$this->db->query($sql)->result_array();
				return json_encode($rs);
			break;

			case "negosiasi_d":
				/*$sql="SELECT * FROM eproc_pengadaan_negosiasi_detil 
					  WHERE eproc_negosiasi_id =".$p1." 
					  AND drt_peserta_id=".$this->auth["id"];
					  */
				$data=array();
				$sql="SELECT * FROM eproc_pengadaan_negosiasi_detil 
					  WHERE eproc_negosiasi_id =".$p1." 
					  AND drt_peserta_id=".$this->auth["id"];
				$rs=$this->db->query($sql)->result_array();
				foreach($rs as $x=>$v){
					if(isset($data[$v["tahap"]])){
						$data[$v["tahap"]][]=array('id'=>$v["id"],
												   'eproc_negosiasi_id'=>$v["eproc_negosiasi_id"],
												   'drt_peserta_id'=>$v["drt_peserta_id"],
												   'uraian'=>$v["uraian"],
												   'vol'=>$v["vol"],
												   'nilai_penawaran'=>$v["nilai_penawaran"],
												   'nilai_nego_panitia'=>$v["nilai_nego_panitia"],
												   'nilai_nego_peserta'=>$v["nilai_nego_peserta"],
												   'tot_penawaran'=>$v["tot_penawaran"],
												   'tot_nego'=>$v["tot_nego"],
												   'tot_nego_peserta'=>$v["tot_nego_peserta"],
												   'status'=>$v["status"],
												   'ket_drt'=>$v["ket_drt"],
												   'ket_panitia'=>$v["ket_panitia"],
												   'tahap'=>$v["tahap"],
						);
					}else{
						$data[$v["tahap"]]=array();
						$data[$v["tahap"]][]=array('id'=>$v["id"],
												   'eproc_negosiasi_id'=>$v["eproc_negosiasi_id"],
												   'drt_peserta_id'=>$v["drt_peserta_id"],
												   'uraian'=>$v["uraian"],
												   'vol'=>$v["vol"],
												   'nilai_penawaran'=>$v["nilai_penawaran"],
												   'nilai_nego_panitia'=>$v["nilai_nego_panitia"],
												   'nilai_nego_peserta'=>$v["nilai_nego_peserta"],
												   'tot_penawaran'=>$v["tot_penawaran"],
												   'tot_nego'=>$v["tot_nego"],
												   'tot_nego_peserta'=>$v["tot_nego_peserta"],
												   'status'=>$v["status"],
												   'ket_drt'=>$v["ket_drt"],
												   'ket_panitia'=>$v["ket_panitia"],
												   'tahap'=>$v["tahap"],
						);
					}
				}
				//echo "<pre>";print_r($data);exit;
				return $data;
			break;
			case "negosiasi_ulang_d":
				/*$sql="SELECT * FROM eproc_pengadaan_negosiasi_detil 
					  WHERE eproc_negosiasi_id =".$p1." 
					  AND drt_peserta_id=".$this->auth["id"];
					  */
				$data=array();
				$sql="SELECT * FROM eproc_pengadaan_negosiasi_ulang_detil 
					  WHERE eproc_negosiasi_id =".$p1." 
					  AND drt_peserta_id=".$this->auth["id"];
				$rs=$this->db->query($sql)->result_array();
				foreach($rs as $x=>$v){
					if(isset($data[$v["tahap"]])){
						$data[$v["tahap"]][]=array('id'=>$v["id"],
												   'eproc_negosiasi_id'=>$v["eproc_negosiasi_id"],
												   'drt_peserta_id'=>$v["drt_peserta_id"],
												   'uraian'=>$v["uraian"],
												   'vol'=>$v["vol"],
												   'nilai_penawaran'=>$v["nilai_penawaran"],
												   'nilai_nego_panitia'=>$v["nilai_nego_panitia"],
												   'nilai_nego_peserta'=>$v["nilai_nego_peserta"],
												   'tot_penawaran'=>$v["tot_penawaran"],
												   'tot_nego'=>$v["tot_nego"],
												   'tot_nego_peserta'=>$v["tot_nego_peserta"],
												   'status'=>$v["status"],
												   'ket_drt'=>$v["ket_drt"],
												   'ket_panitia'=>$v["ket_panitia"],
												   'tahap'=>$v["tahap"],
						);
					}else{
						$data[$v["tahap"]]=array();
						$data[$v["tahap"]][]=array('id'=>$v["id"],
												   'eproc_negosiasi_id'=>$v["eproc_negosiasi_id"],
												   'drt_peserta_id'=>$v["drt_peserta_id"],
												   'uraian'=>$v["uraian"],
												   'vol'=>$v["vol"],
												   'nilai_penawaran'=>$v["nilai_penawaran"],
												   'nilai_nego_panitia'=>$v["nilai_nego_panitia"],
												   'nilai_nego_peserta'=>$v["nilai_nego_peserta"],
												   'tot_penawaran'=>$v["tot_penawaran"],
												   'tot_nego'=>$v["tot_nego"],
												   'tot_nego_peserta'=>$v["tot_nego_peserta"],
												   'status'=>$v["status"],
												   'ket_drt'=>$v["ket_drt"],
												   'ket_panitia'=>$v["ket_panitia"],
												   'tahap'=>$v["tahap"],
						);
					}
				}
				//echo "<pre>";print_r($data);exit;
				return $data;
			break;
			case "negosiasi_ulang_h":
				$sql="SELECT * FROM eproc_pengadaan_negosiasi_ulang 
					  WHERE eproc_pengadaan_id =".base64_decode($p1)." 
					  AND drt_peserta_id=".$this->auth["id"];
					// echo $sql;exit;
			break;
			case "negosiasi_h":
				$sql="SELECT * FROM eproc_pengadaan_negosiasi 
					  WHERE eproc_pengadaan_id =".base64_decode($p1)." 
					  AND drt_peserta_id=".$this->auth["id"];
					// echo $sql;exit;
			break;
			case "eproc_penawaran_thp_1":
				$sql="SELECT * FROM eproc_penawaran_thp_1 WHERE drt_peserta_id=".$this->auth["id"];
			break;
			case "eproc_penawaran_thp_2":
				$sql="SELECT * FROM eproc_penawaran_thp_2 WHERE drt_peserta_id=".$this->auth["id"];
			break;
			case "lelang_tahap2":
				$sql="SELECT A.*,B.kategori_pengadaan,C.kualifikasi_pengadaan,
						D.jenis_dokumen,E.evaluasi_penawaran,F.metode_penawaran,G.description,H.tahapan,
						I.tgl_anwijing,J.tgl_mulai,J.tgl_akhir
					  FROM eproc_pengadaan A 
					  LEFT JOIN eproc_cl_kategori_pengadaan B ON A.cl_kategori_pengadaan_id=B.id
					  LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					  LEFT JOIN eproc_cl_jenis_dokumen D ON A.cl_jenis_dokumen_id=D.id
					  LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					  LEFT JOIN eproc_cl_metode_penawaran F ON A.cl_metode_penawaran_id=F.id 
					  LEFT JOIN eproc_cost_center G ON A.eproc_cost_center_id=G.id 
					  LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id
					  LEFT JOIN eproc_pengadaan_anwijing I ON I.eproc_pengadaan_id=A.id
					  LEFT JOIN (
							SELECT * FROM eproc_pengadaan_undang_penawaran 
							WHERE eproc_pengadaan_id=".base64_decode($p1)." 
							AND eproc_tahapan_id=6 limit 0,1
					  )J ON J.eproc_pengadaan_id=A.id
					  WHERE A.id=".base64_decode($p1);
			break;
			case "lelang_ls":
				$sql="SELECT A.*,B.kategori_pengadaan,C.kualifikasi_pengadaan,
						D.jenis_dokumen,E.evaluasi_penawaran,F.metode_penawaran,G.description,H.tahapan,
						I.tgl_anwijing,J.tgl_mulai,J.tgl_akhir
					  FROM eproc_pengadaan A 
					  LEFT JOIN eproc_cl_kategori_pengadaan B ON A.cl_kategori_pengadaan_id=B.id
					  LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					  LEFT JOIN eproc_cl_jenis_dokumen D ON A.cl_jenis_dokumen_id=D.id
					  LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					  LEFT JOIN eproc_cl_metode_penawaran F ON A.cl_metode_penawaran_id=F.id 
					  LEFT JOIN eproc_cost_center G ON A.eproc_cost_center_id=G.id 
					  LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id
					  LEFT JOIN eproc_pengadaan_anwijing I ON I.eproc_pengadaan_id=A.id
					  LEFT JOIN (
							SELECT * FROM eproc_pengadaan_undang_penawaran 
							WHERE eproc_pengadaan_id=".base64_decode($p1)." 
							AND eproc_tahapan_id=4 limit 0,1
					  )J ON J.eproc_pengadaan_id=A.id
					  WHERE A.id=".base64_decode($p1);
			break;
			case "eproc_pengadaan_kriteria":
				$sql="SELECT * FROM eproc_pengadaan_kriteria WHERE flag='".$p1."' AND eproc_pengadaan_id =".$p2;
			break;
			case "pengadaan":
				if($p1=='edit'){
					$where .=" AND A.id=".$p2;
				}
				$sql="SELECT A.*,B.description,C.kualifikasi_pengadaan,
					D.metode_penawaran,E.evaluasi_penawaran,F.kategori_pengadaan,G.jenis_dokumen,H.tahapan 
					FROM eproc_pengadaan A 
					LEFT JOIN eproc_cost_center B ON A.eproc_cost_center_id=B.id
					LEFT JOIN eproc_cl_kualifikasi C ON A.cl_kualifikasi_id=C.id
					LEFT JOIN eproc_cl_metode_penawaran D ON A.cl_metode_penawaran_id=D.id
					LEFT JOIN eproc_cl_evaluasi_penawaran E ON A.cl_evaluasi_penawaran_id=E.id
					LEFT JOIN eproc_cl_kategori_pengadaan F ON A.cl_kategori_pengadaan_id=F.id
					LEFT JOIN eproc_cl_jenis_dokumen G ON A.cl_jenis_dokumen_id=G.id
					LEFT JOIN eproc_tahapan_lelang H ON A.eproc_tahapan_id=H.id 
					".$where." AND A.flag_lelang='LL' AND A.tgl_posting IS NOT NULL";
			break;
			case "unit":
				$sql="SELECT * FROM eproc_cost_center ";
			break;
			case "tipe":
				$sql="SELECT * FROM drt_tipe_perusahaan ";
			break;

			case "timeline":
				$sql="SELECT * FROM web_informasi ORDER BY batas_dari DESC";
			break;
			case "timeline_reg":
				$sql = "SELECT * from web_informasi WHERE NOW() >= batas_dari and NOW() <= batas_sampai and status_reg=1";
			break;

			case "timeline_inp":
				$sql = "SELECT * from web_informasi WHERE NOW() >= batas_dari and NOW() <= batas_sampai and status_inp=1";
			break;

			case "alur_gambar":
				$sql="select * from  web_alur_daftar";
			break;

			case "tentang_kami":
				$sql="select * from  web_tentang_kami where status=1";
			break;
			
			case "syarat_ketentuan":
				$sql="select * from  web_syarat_ketentuan where status=1";
			break;
			
			case "maksud_tujuan":
				$sql="select * from  web_maksud_tujuan where status=1";
			break;
			
			case "faq":
				$sql="select * from web_faq where status=1";
			break;
			
			case "kontak":
				$sql="select * from web_kontak where status=1";
			break;

			case "dokumen":
				$sql="select * from web_dokumen";
			break;
			
			case "pengumuman_pengadaan":
				$sql="select * from provinces ";
			break;
			
			case "pengumuman_dpt":
				$sql="select * from drt_tipe_perusahaan limit 1";
			break;
			
			case "hasil_pengadaan":
				$sql="select * from drt_tipe_perusahaan limit 1";
			break;
			
			case "hasil_dpt":
				$sql="select * from drt_tipe_perusahaan limit 1";
			break;
			
			case "berita":
				$sql="select * from web_berita";
			break;
			
			case "panduan":
				$sql="select * from web_panduan";
			break;
			
			case "list_dash":
				$sql="SELECT 'DATA_PERUSAHAAN' as flag,'DATA PERUS.' as txt,COUNT(id)as jml FROM drt_peserta WHERE id=".$this->auth["id"]."
						UNION ALl

						SELECT 'AKTA' as flag,'AKTA' as txt,COUNT(id)as jml FROM drt_akta WHERE id_peserta=".$this->auth["id"]." AND status_delete=0 AND nomor !=''
						UNION ALl

						SELECT 'TDP' as flag,'TDP' as txt,COUNT(id)as jml FROM drt_tdp WHERE id_peserta=".$this->auth["id"]."
						UNION ALl
						SELECT 'DOMISILI' as flag,'DOMISILI' as txt,COUNT(id)as jml FROM drt_domisili WHERE id_peserta=".$this->auth["id"]."
						UNION ALl
						SELECT 'IJIN_USAHA' as flag,'IJIN USAHA' as txt,COUNT(id)as jml FROM drt_ijin_usaha WHERE id_peserta=".$this->auth["id"]." AND status_delete=0 
						
						UNION ALl
						SELECT 'UPLOAD_DOK' as flag,'UPLOAD DOK.' as txt,COUNT(id)as jml FROM drt_soft_copy WHERE id_peserta=".$this->auth["id"]." AND status_delete=0
						UNION ALl
						
						SELECT 'PAJAK' as flag,'PAJAK' as txt,COUNT(id)as jml FROM drt_pajak WHERE id_peserta=".$this->auth["id"]." AND status_delete=0
						UNION ALl
						SELECT 'PENGURUS' as flag,'PENGURUS' as txt,COUNT(id)as jml FROM drt_pengurus WHERE id_peserta=".$this->auth["id"]." AND status_delete=0
						UNION ALl
						SELECT 'TA' as flag,'TENAGA AHLI' as txt,COUNT(id)as jml FROM drt_tenaga_ahli WHERE id_peserta=".$this->auth["id"]." AND status_delete=0
						
						UNION ALl
						SELECT 'PENGALAMAN' as flag,'PENGALAMAN' as txt,COUNT(id)as jml FROM drt_pengalaman WHERE id_peserta=".$this->auth["id"]." AND status_delete=0
						UNION ALl
						SELECT 'PEKERJAAN_BERJALAN' as flag,'PEK. BERJALAN' as txt,COUNT(id)as jml FROM drt_pekerjaan_on_going WHERE id_peserta=".$this->auth["id"]." AND status_delete=0
						UNION ALl
						SELECT 'KEUANGAN' as flag,'ASPEK KEUANGAN' as txt,COUNT(id)as jml FROM drt_lapkeu_aspek WHERE id_peserta=".$this->auth["id"]." AND status_delete=0";
			break;
			case "konfirmasi":
				$sql="SELECT A.* 
				FROM drt_ceklist_adm A  
				WHERE A.id_peserta='".$this->auth["id"]."'";
			break;
			case "drt_klbi":
				$sql="SELECT * FROM drt_ijin_usaha_klbi  WHERE  drt_ijin_usaha_id=".$this->input->post('id');
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;

			case "klasifikasi":
				$sql="SELECT * FROM drt_klasifikasi_perusahaan";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "klasifikasi1":
				$sql="SELECT * FROM drt_klasifikasi_perusahaan_l2";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "klasifikasi2":
				$sql="SELECT * FROM drt_klasifikasi_perusahaan_l3";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;

			case "m_klbi":
				$sql="SELECT * FROM drt_m_klbi  WHERE kode NOT IN('A','')  ";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;

			case "drt_ijin_usaha_klasifikasi_detail":
				$sql="SELECT * FROM drt_ijin_usaha_klasifikasi_detail WHERE drt_ijin_usaha_id=".$this->input->post('id');
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;

			case "kualifikasi":
				$sql="SELECT * FROM drt_ijin_usaha_kualifikasi WHERE status=1";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "ijin_usaha":
				$sql="SELECT A.*,B.klasifikasi as t_klasifikasi ,C.kualifikasi as t_kualifikasi
						FROM drt_ijin_usaha A 
						LEFT JOIN drt_ijin_usaha_klasifikasi B ON A.klasifikasi=B.id
						LEFT JOIN drt_ijin_usaha_kualifikasi C ON A.kualifikasi=C.id 
						WHERE A.id_peserta='".$this->auth["id"]."' and A.status_delete=0 ";
				if($p1=='edit'){
					$sql .=" AND A.id=".$this->input->post('id');
				}
			break;
			case "surat":
				$sql="SELECT * FROM drt_surat_penting WHERE id_peserta='".$this->auth["id"]."'";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "keuangan":
				$sql="SELECT * FROM drt_lapkeu_aspek WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "pekerjaan_berjalan":
				$sql="SELECT * FROM drt_pekerjaan_on_going WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "pengalaman":
				$sql="SELECT * FROM drt_pengalaman WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "peralatan":
				$sql="SELECT * FROM drt_peralatan WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "ta":
				$sql="SELECT * FROM drt_tenaga_ahli WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "pengurus":
				$sql="SELECT * FROM drt_pengurus WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "pajak":
				$sql="SELECT * FROM drt_pajak WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "kabkota":
				$sql="SELECT id,name as txt FROM regencies WHERE province_id=".$this->input->post('v2');
			break;
			case "propinsi":
				$sql="SELECT * FROM provinces ";
			break;
			case "bentuk_perusahaan":
				$sql="SELECT * FROM drt_tipe_perusahaan ";
			break;
			case "data_perusahaan":
				//$sql="SELECT * FROM drt_data_perusahaan WHERE id_peserta='".$this->auth["id"]."'";
				$sql="SELECT * FROM drt_peserta WHERE id='".$this->auth["id"]."'";
				//echo $sql;
			break;
			case "upload_dok":
				$sql="SELECT * FROM drt_soft_copy WHERE id_peserta='".$this->auth["id"]."'";
			break;
			case "user":
				$sql = " 
					SELECT A.*
					FROM drt_peserta A WHERE A.email='".$p1."'
				";
				
			break;
			case "akta":
				$sql="SELECT * FROM drt_akta WHERE id_peserta='".$this->auth["id"]."' and status_delete=0";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "tdp":
				$sql="SELECT * FROM drt_tdp WHERE id_peserta='".$this->auth["id"]."'";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "domisili":
				$sql="SELECT * FROM drt_domisili WHERE id_peserta='".$this->auth["id"]."'";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "sbu":
				$sql="SELECT * FROM drt_sbu WHERE id_peserta='".$this->auth["id"]."'";
				if($p1=='edit'){
					$sql .=" AND id=".$this->input->post('id');
				}
			break;
			case "peserta":
				$sql="SELECT * FROM drt_peserta WHERE id='".$this->auth["id"]."'";
			break;
		}
		if($balikan == 'row_array'){
			return $this->result_query($sql,'row_array');
		}elseif($balikan == 'result_array'){
			return $this->result_query($sql);
		}else{
			return $this->result_query($sql,'json');
		}
	}
	function result_query($sql,$type=""){
		switch($type){
			case "json":
				$page = (integer) (($this->input->post('page')) ? $this->input->post('page') : "1");
				$limit = (integer) (($this->input->post('rows')) ? $this->input->post('rows') : "10");
				$count = $this->db->query($sql)->num_rows();
				if( $count >0 ) { $total_pages = ceil($count/$limit); } else { $total_pages = 0; } 
				if ($page > $total_pages) $page=$total_pages; 
				$start = $limit*$page - $limit; // do not put $limit*($page - 1)
				if($start<0) $start=0;
				  
				$sql = $sql . " LIMIT $start,$limit";
			
				$data=$this->db->query($sql)->result_array();  
						
				if($data){
				   $responce = new stdClass();
				   $responce->rows= $data;
				   $responce->total =$count;
				   return json_encode($responce);
				}else{ 
				   $responce = new stdClass();
				   $responce->rows = 0;
				   $responce->total = 0;
				   return json_encode($responce);
				} 
			break;
			case "row_obj":return $this->db->query($sql)->row();break;
			case "row_array":return $this->db->query($sql)->row_array();break;
			default:return $this->db->query($sql)->result_array();break;
		}
	}
	
	// GOYZ CROTZZZ
	function simpan_data($table,$data,$get_id=""){ //$sts_crud --> STATUS NYEE INSERT, UPDATE, DELETE
		//echo $table;exit;
		//print_r($data);exit;
		$this->db->trans_begin();
		$post = array();
		$id = $this->input->post('id');
		$field_id = "id";
		$sts_crud = $this->input->post('sts_crud');
		unset($data['sts_crud']);
		
		switch ($table){
			case "ganti_pwd":
				$table="drt_peserta";
				$data["pass"]=$this->encrypt->encode($data['pwd_baru']);
				unset($data['pwd_baru']);
				unset($data['pwd_lama']);
				unset($data['u_pwd_baru']);
			break;
			case "sanggah":
				if(isset($_FILES['file']) && $_FILES['file']['name']!="")$data["file"]=$this->upload_single("file_sanggah","file");
				unset($data["eproc_pengadaan_id"]);
				unset($data["edVRCaptcha"]);
				$table="eproc_sanggah_detil";
			break;
			/*case "negosiasi_deal":
				//print_r($data);exit;
				if($data["jenis_nego"]==1){
					$uraian=$data["uraian"];
					$nego_panitia=$data["nilai_nego_panitia"];
					$nego_peserta=$data["nilai_nego_peserta"];
					$ket_peserta=$data["ket_peserta"];
				}else{
					$uraian=$data["uraian"];
					$nego_panitia=$data["nilai_nego_panitia"];
					$nego_peserta=$data["nilai_nego_peserta"];
					$ket_peserta=$data["ket_peserta"];
					$vol=$data["vol"];
					$tot_nego_peserta=$data["tot_nego_peserta"];
				}
				$tot=0;
				foreach($uraian as $x=>$v){
					if($data["jenis_nego"]==1){
						$tot=$tot+(float)$nego_panitia[$x];
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
							  SET nilai_nego_peserta=".$nego_peserta[$x].",
							  status=1,
							  ket_drt='".$ket_peserta[$x]."' 
							  WHERE id=".$x;
						$this->db->query($sql);
					}else{
						$tot=$tot+(float)$tot_nego_peserta[$x];
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
							  SET nilai_nego_peserta=".$nego_peserta[$x].",
							  tot_nego_peserta=".$tot_nego_peserta[$x].",
							  status=1,
							  ket_drt='".$ket_peserta[$x]."' 
							  WHERE id=".$x;
						$this->db->query($sql);
					}
				}
				$sql="UPDATE eproc_pengadaan_negosiasi SET 
					  nilai_deal=".$tot.",
					  flag='F' 
					  WHERE id=".$data["eproc_negosiasi_id"];
				$this->db->query($sql);
				
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=11 ";
							  
				$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
				
				$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>12,'hasil'=>'Upload BA Negosiasi','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
				$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>12))->row_array();
				if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 12
				else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 12
				
				$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=12
					  WHERE id=".$data["eproc_pengadaan_id"];
					  
				$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
				
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
			break;
			*/
			case "negosiasi_deal_ts":
			case "negosiasi_deal_ll":
			case "negosiasi_deal":
				//print_r($data);exit;
				$nego=$this->db->get_where('eproc_pengadaan_negosiasi',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->row_array();
				$_POST['deal_rekanan']=1;
				$data["deal_rekanan"]=1;
				if(isset($nego["eproc_pengadaan_id"])){//CEK NEGO ADA GA ?
					if($nego["deal_panitia"]==1){//CEK APAKAH DARI SISI REKANAN SUDAH DEAL
						if($data["jenis_nego"]==1){
							$uraian=$data["uraian"];
							$nego_panitia=$data["nilai_nego_panitia"];
							$nego_peserta=$data["nilai_nego_peserta"];
							$ket_peserta=$data["ket_peserta"];
						}else{
							$uraian=$data["uraian"];
							$nego_panitia=$data["nilai_nego_panitia"];
							$nego_peserta=$data["nilai_nego_peserta"];
							$ket_peserta=$data["ket_peserta"];
							$vol=$data["vol"];
							$tot_nego_peserta=$data["tot_nego_peserta"];
						}
						$tot=0;
						foreach($uraian as $x=>$v){
							if($data["jenis_nego"]==1){
								$tot=$tot+(float)$nego_panitia[$x];
								$sql="UPDATE eproc_pengadaan_negosiasi_detil 
									  SET nilai_nego_peserta=".$nego_peserta[$x].",
									  status=1,
									  ket_drt='".$ket_peserta[$x]."' 
									  WHERE id=".$x;
								$this->db->query($sql);
							}else{
								$tot=$tot+(float)$tot_nego_peserta[$x];
								$sql="UPDATE eproc_pengadaan_negosiasi_detil 
									  SET nilai_nego_peserta=".$nego_peserta[$x].",
									  tot_nego_peserta=".$tot_nego_peserta[$x].",
									  status=1,
									  ket_drt='".$ket_peserta[$x]."' 
									  WHERE id=".$x;
								$this->db->query($sql);
							}
						}
						$sql="UPDATE eproc_pengadaan_negosiasi SET 
							  nilai_deal=".$tot.",
							  deal_rekanan=".$data["deal_rekanan"].",
							  flag='F' 
							  WHERE id=".$data["eproc_negosiasi_id"];
						$this->db->query($sql);
						if($table=="negosiasi_deal_ts"){
							$dt=array('eproc_pengadaan_id'=>$data['eproc_pengadaan_id'],
									'drt_peserta_id'=>$this->auth["id"],
									'seq_pemenang'=>1,
									'ket'=>'-',
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>$this->auth['nm_perusahaan']
							);
							
							$this->db->insert('eproc_pengadaan_pemenang',$dt);
							$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
										  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
										  AND eproc_tahapan_id=35 ";
							$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
							
							$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>36,'hasil'=>'Upload BA Negosiasi','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
							$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>36))->row_array();
							if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 36
							else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 36
							
							$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=36
								  WHERE id=".$data["eproc_pengadaan_id"];
								  
							$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
							
						}elseif($table=="negosiasi_deal"){
							$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
										  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
										  AND eproc_tahapan_id=11 ";
							$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
							$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>12,'hasil'=>'Upload BA Negosiasi','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
							$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>12))->row_array();
							if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 36
							else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 36
							
							$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=12
								  WHERE id=".$data["eproc_pengadaan_id"];
								  
							$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
						}else{
							$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
										  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
										  AND eproc_tahapan_id=25 ";
							$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
							$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>26,'hasil'=>'Upload BA Negosiasi','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
							$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>26))->row_array();
							if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 36
							else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 36
							
							$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=26
								  WHERE id=".$data["eproc_pengadaan_id"];
								  
							$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
							
						}
									  
					}else{
						$sql="UPDATE eproc_pengadaan_negosiasi SET 
							  deal_rekanan=".$data["deal_rekanan"]."
							  WHERE id=".$data["eproc_negosiasi_id"];
						$this->db->query($sql);
						if($table=="negosiasi_deal_ts")$this->simpan_data('negosiasi_ts',$data);
						elseif($table=="negosiasi_deal")$this->simpan_data('negosiasi',$data);
						else $this->simpan_data('negosiasi_ll',$data);
					}
				}else{
					$sql="UPDATE eproc_pengadaan_negosiasi SET 
							  deal_rekanan=".$data["deal_rekanan"]."
							  WHERE id=".$data["eproc_negosiasi_id"];
					$this->db->query($sql);
					if($table=="negosiasi_deal_ts")$this->simpan_data('negosiasi_ts',$data);
					elseif($table=="negosiasi_deal")$this->simpan_data('negosiasi',$data);
					else $this->simpan_data('negosiasi_ll',$data);
				}
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
				
			break;
			case "negosiasi_ulang_deal_ts":
			case "negosiasi_ulang_deal":
			case "negosiasi_ulang_deal_ll":
				//print_r($data);exit;
				$nego=$this->db->get_where('eproc_pengadaan_negosiasi_ulang',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->row_array();
				$_POST['deal_rekanan']=1;
				$data["deal_rekanan"]=1;
				if(isset($nego["eproc_pengadaan_id"])){//CEK NEGO ADA GA ?
					if($nego["deal_panitia"]==1){//CEK APAKAH DARI SISI REKANAN SUDAH DEAL
						if($data["jenis_nego"]==1){
							$uraian=$data["uraian"];
							$nego_panitia=$data["nilai_nego_panitia"];
							$nego_peserta=$data["nilai_nego_peserta"];
							$ket_peserta=$data["ket_peserta"];
						}else{
							$uraian=$data["uraian"];
							$nego_panitia=$data["nilai_nego_panitia"];
							$nego_peserta=$data["nilai_nego_peserta"];
							$ket_peserta=$data["ket_peserta"];
							$vol=$data["vol"];
							$tot_nego_peserta=$data["tot_nego_peserta"];
						}
						$tot=0;
						foreach($uraian as $x=>$v){
							if($data["jenis_nego"]==1){
								$tot=$tot+(float)$nego_panitia[$x];
								$sql="UPDATE eproc_pengadaan_negosiasi_ulang_detil 
									  SET nilai_nego_peserta=".$nego_peserta[$x].",
									  status=1,
									  ket_drt='".$ket_peserta[$x]."' 
									  WHERE id=".$x;
								$this->db->query($sql);
							}else{
								$tot=$tot+(float)$tot_nego_peserta[$x];
								$sql="UPDATE eproc_pengadaan_negosiasi_ulang_detil 
									  SET nilai_nego_peserta=".$nego_peserta[$x].",
									  tot_nego_peserta=".$tot_nego_peserta[$x].",
									  status=1,
									  ket_drt='".$ket_peserta[$x]."' 
									  WHERE id=".$x;
								$this->db->query($sql);
							}
						}
						$sql="UPDATE eproc_pengadaan_negosiasi_ulang SET 
							  nilai_deal=".$tot.",
							  deal_rekanan=".$data["deal_rekanan"].",
							  flag='F' 
							  WHERE id=".$data["eproc_negosiasi_id"];
						$this->db->query($sql);
						if($table=="negosiasi_ulang_deal_ts"){
							$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
										  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
										  AND eproc_tahapan_id=46 ";
						}elseif($table=="negosiasi_ulang_deal"){
							$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
										  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
										  AND eproc_tahapan_id=42 ";
						}else{
							$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
										  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
										  AND eproc_tahapan_id=44 ";
						}
									  
						$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
						if($table=="negosiasi_ulang_deal_ts"){
							$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>47,'hasil'=>'Upload BA Negosiasi Ulang','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
							$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>47))->row_array();
							if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 47
							else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 47
							
							$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=47
								  WHERE id=".$data["eproc_pengadaan_id"];
								  
							$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
						}elseif($table=="negosiasi_ulang_deal"){
							$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>43,'hasil'=>'Upload BA Negosiasi Ulang','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
							$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>43))->row_array();
							if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 47
							else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 47
							
							$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=43
								  WHERE id=".$data["eproc_pengadaan_id"];
								  
							$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
						}else{
							$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>45,'hasil'=>'Upload BA Negosiasi Ulang','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
							$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>45))->row_array();
							if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 47
							else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 47
							
							$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=45
								  WHERE id=".$data["eproc_pengadaan_id"];
								  
							$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
						}
					}else{
						$sql="UPDATE eproc_pengadaan_negosiasi_ulang SET 
							  deal_rekanan=".$data["deal_rekanan"]."
							  WHERE id=".$data["eproc_negosiasi_id"];
						$this->db->query($sql);
						if($table=="negosiasi_ulang_deal_ts")$this->simpan_data('negosiasi_ulang_ts',$data);
						elseif($table=="negosiasi_ulang_deal")$this->simpan_data('negosiasi_ulang',$data);
						else $this->simpan_data('negosiasi_ulang_ll',$data);
					}
				}else{
					$sql="UPDATE eproc_pengadaan_negosiasi_ulang SET 
							  deal_rekanan=".$data["deal_rekanan"]."
							  WHERE id=".$data["eproc_negosiasi_id"];
					$this->db->query($sql);
					if($table=="negosiasi_ulang_deal_ts")$this->simpan_data('negosiasi_ulang_ts',$data);
					elseif($table=="negosiasi_ulang_deal")$this->simpan_data('negosiasi_ulang',$data);
					else $this->simpan_data('negosiasi_ulang_ll',$data);
				}
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
				
			break;
			/*case "negosiasi_deal_ll":
				//print_r($data);exit;
				if($data["jenis_nego"]==1){
					$uraian=$data["uraian"];
					$nego_panitia=$data["nilai_nego_panitia"];
					$nego_peserta=$data["nilai_nego_peserta"];
					$ket_peserta=$data["ket_peserta"];
				}else{
					$uraian=$data["uraian"];
					$nego_panitia=$data["nilai_nego_panitia"];
					$nego_peserta=$data["nilai_nego_peserta"];
					$ket_peserta=$data["ket_peserta"];
					$vol=$data["vol"];
					$tot_nego_peserta=$data["tot_nego_peserta"];
				}
				$tot=0;
				foreach($uraian as $x=>$v){
					if($data["jenis_nego"]==1){
						$tot=$tot+(float)$nego_panitia[$x];
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
							  SET nilai_nego_peserta=".$nego_peserta[$x].",
							  status=1,
							  ket_drt='".$ket_peserta[$x]."' 
							  WHERE id=".$x;
						$this->db->query($sql);
					}else{
						$tot=$tot+(float)$tot_nego_peserta[$x];
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
							  SET nilai_nego_peserta=".$nego_peserta[$x].",
							  tot_nego_peserta=".$tot_nego_peserta[$x].",
							  status=1,
							  ket_drt='".$ket_peserta[$x]."' 
							  WHERE id=".$x;
						$this->db->query($sql);
					}
				}
				$sql="UPDATE eproc_pengadaan_negosiasi SET 
					  nilai_deal=".$tot.",
					  flag='F' 
					  WHERE id=".$data["eproc_negosiasi_id"];
				$this->db->query($sql);
				
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Selesai Dengan Harga :  ".number_format($tot,2)."' , status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=25 ";
							  
				$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
				
				$dt=array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>26,'hasil'=>'Upload BA Negosiasi','create_date'=>date('Y-m-d H:i:s'),'create_by'=>'DRT SYS');
				$ex=$this->db->get_where('eproc_rekap_tahapan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"],'eproc_tahapan_id'=>26))->row_array();
				if(isset($ex["eproc_tahapan_id"]))$this->db->update('eproc_rekap_tahapan',$dt,array('id'=>$ex["id"]));// UPDATE KE TAHAP 36
				else $this->db->insert('eproc_rekap_tahapan',$dt);// INSERT KE TAHAP 36
				
				$sql="UPDATE eproc_pengadaan SET eproc_tahapan_id=26
					  WHERE id=".$data["eproc_pengadaan_id"];
					  
				$this->db->query($sql); // UPDATE TAHAPAN DI PENGADAAN
				
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
			break;
			case "negosiasi":
				$nego_peserta=$data["nilai_nego_peserta"];
				$ket_peserta=$data["ket_peserta"];
				$uraian=$data["uraian"];
				$nilai_nego_panitia=$data["uraian"];
				if($data["jenis_nego"]==2){//HARSAT
					$tot_nego_peserta=$data["tot_nego_peserta"];
					$vol=$data["vol"];
				}
				$dt=array();
				foreach($nego_peserta as $x=>$v){
					if($data["jenis_nego"]==1){//LUMSUM
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}else{//HARSAT
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'vol'=>$vol[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'tot_penawaran'=>$tot_nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  tot_nego_peserta=".$tot_nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}
					
				}
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=11 ";
							  
				$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
				$this->db->insert_batch('eproc_pengadaan_negosiasi_detil',$dt);
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
			break;
			case "negosiasi_ll":
				$nego_peserta=$data["nilai_nego_peserta"];
				$ket_peserta=$data["ket_peserta"];
				$uraian=$data["uraian"];
				$nilai_nego_panitia=$data["uraian"];
				if($data["jenis_nego"]==2){//HARSAT
					$tot_nego_peserta=$data["tot_nego_peserta"];
					$vol=$data["vol"];
				}
				$dt=array();
				foreach($nego_peserta as $x=>$v){
					if($data["jenis_nego"]==1){//LUMSUM
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}else{//HARSAT
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'vol'=>$vol[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'tot_penawaran'=>$tot_nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  tot_nego_peserta=".$tot_nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}
					
				}
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=25 ";
							  
				$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
				$this->db->insert_batch('eproc_pengadaan_negosiasi_detil',$dt);
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
			break;
			*/
			case "negosiasi_ts":
			case "negosiasi_ll":
			case "negosiasi":
				$nego_peserta=$data["nilai_nego_peserta"];
				$ket_peserta=$data["ket_peserta"];
				$uraian=$data["uraian"];
				$nilai_nego_panitia=$data["uraian"];
				if($data["jenis_nego"]==2){//HARSAT
					$tot_nego_peserta=$data["tot_nego_peserta"];
					$vol=$data["vol"];
				}
				$dt=array();
				foreach($nego_peserta as $x=>$v){
					if($data["jenis_nego"]==1){//LUMSUM
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}else{//HARSAT
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'vol'=>$vol[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'tot_penawaran'=>$tot_nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  tot_nego_peserta=".$tot_nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}
					
				}
				if($table="negosiasi_ts"){
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=35 ";
				}elseif($table="negosiasi"){
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=11 ";
				}else{
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=25 ";
				}
							  
				$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
				$this->db->insert_batch('eproc_pengadaan_negosiasi_detil',$dt);
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
			break;
			case "negosiasi_ulang_ts":
			case "negosiasi_ulang":
			case "negosiasi_ulang_ll":
				$nego_peserta=$data["nilai_nego_peserta"];
				$ket_peserta=$data["ket_peserta"];
				$uraian=$data["uraian"];
				$nilai_nego_panitia=$data["uraian"];
				if($data["jenis_nego"]==2){//HARSAT
					$tot_nego_peserta=$data["tot_nego_peserta"];
					$vol=$data["vol"];
				}
				$dt=array();
				foreach($nego_peserta as $x=>$v){
					if($data["jenis_nego"]==1){//LUMSUM
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_ulang_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}else{//HARSAT
						$dt[]=array('eproc_negosiasi_id'=>$data["eproc_negosiasi_id"],
									'drt_peserta_id'=>$data["drt_peserta_id"],
									'uraian'=>$uraian[$x],
									'vol'=>$vol[$x],
									'nilai_penawaran'=>$nego_peserta[$x],
									'tot_penawaran'=>$tot_nego_peserta[$x],
									'ket_drt'=>$ket_peserta[$x],
									'tahap'=>($data["tahap"]+1),
									'create_date'=>date('Y-m-d H:i:s'),
									'create_by'=>'DRT SYS',
						);
						$sql="UPDATE eproc_pengadaan_negosiasi_ulang_detil 
						  SET nilai_nego_peserta=".$nego_peserta[$x].",
						  tot_nego_peserta=".$tot_nego_peserta[$x].",
						  status=1,
						  ket_drt='".$ket_peserta[$x]."' 
						  WHERE id=".$x;
						$this->db->query($sql);
					}
					
				}
				if($table=="negosiasi_ulang_ts"){
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=46 ";
				}elseif($table=="negosiasi_ulang"){
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=42 ";
				} else{
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Negosiasi Tahap ".($data["tahap"]+1)."' , status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=44 ";
				}
				$this->db->query($sql); // UPDATE TAHAP NEGOSIASI
				
				$this->db->insert_batch('eproc_pengadaan_negosiasi_ulang_detil',$dt);
				if($this->db->trans_status() == false){
					$this->db->trans_rollback();
					return 0;
				}else{
					return $this->db->trans_commit();	
				}
			break;
			case "penawaran":
				if($get_id=='thp1'){
					$table='eproc_penawaran_thp_1';
					if(isset($_FILES['file']) && $_FILES['file']['name']!="")$data["file"]=$this->upload_single("file_penawaran_ls_thp1","file");
				}
				if($get_id=='thp2'){
					$table='eproc_penawaran_thp_2';
					if(isset($_FILES['file']) && $_FILES['file']['name']!="")$data["file"]=$this->upload_single("file_penawaran_ls_thp2","file");
				}
				if($get_id=='st'){
					$table='eproc_penawaran';
					if(isset($_FILES['file']) && $_FILES['file']['name']!="")$data["file"]=$this->upload_single("file_penawaran_st","file");
				}
				if($get_id=='ll'){
					$table='eproc_penawaran';
					if(isset($_FILES['file']) && $_FILES['file']['name']!="")$data["file"]=$this->upload_single("file_penawaran_ll","file");
				}
				if($get_id=='ts'){
					$table='eproc_penawaran';
					if(isset($_FILES['file']) && $_FILES['file']['name']!="")$data["file"]=$this->upload_single("file_penawaran_ts","file");
				}
				unset($data['edVRCaptcha']);
				$sts_crud='add';
				$data['drt_peserta_id']=$this->auth["id"];
				$data['tgl_penawaran']=date('Y-m-d');
				$data['flag']='P';//BARU UPLOAD
				
				
			break;
			case "registrasi":
				//print_r($_FILES);exit;
				
				$sql="SELECT * FROM drt_peserta WHERE email='".$data["email"]."'";
				$rs=$this->db->query($sql)->row_array();
				if(isset($rs["email"])){
					echo 3;
					exit;
				}

				$sql1="SELECT * FROM drt_peserta WHERE nm_perusahaan='".$data['nm_perusahaan']."'";
				$rs1=$this->db->query($sql1)->row_array();
				if(isset($rs1["nm_perusahaan"])){
					echo 4;
					exit;
				}
				
				if(isset($_FILES['file_akta']) && $_FILES['file_akta']['name']!="")$data["file_akta"]=$this->upload_single("file_akta_reg","file_akta");
				if(isset($_FILES['file_ktp']) && $_FILES['file_ktp']['name']!="")$data["file_ktp"]=$this->upload_single("file_ktp_reg","file_ktp");
				if(isset($_FILES['file_pkp']) && $_FILES['file_pkp']['name']!="")$data["file_pkp"]=$this->upload_single("file_pkp_reg","file_pkp");
				if(isset($_FILES['file_tdp']) && $_FILES['file_tdp']['name']!="")$data["file_tdp"]=$this->upload_single("file_tdp_reg","file_tdp");
				if(isset($_FILES['file_siup']) && $_FILES['file_siup']['name']!="")$data["file_siup"]=$this->upload_single("file_siup_reg","file_siup");
				if(isset($_FILES['file_npwp']) && $_FILES['file_npwp']['name']!="")$data["file_npwp"]=$this->upload_single("file_npwp_reg","file_npwp");
				if(isset($_FILES['file_rekening']) && $_FILES['file_rekening']['name']!="")$data["file_rekening"]=$this->upload_single("file_rekening_reg","file_rekening");

				$table="drt_peserta";
				$data['status']=0;//AWAL DAFTAR
				$data['pass']=$this->encrypt->encode(uniqid());//AWAL DAFTAR
				$sts_crud ='add';
			break;
			case "ijin_usaha":
				// unset($data['m_klbi']);
				// unset($data['klasilvl1']);
				// unset($data['klasilvl2']);
				// unset($data['klasilvl3']);
				$table="drt_ijin_usaha";
								
				$data["id_peserta"]=$this->auth['id'];
				$data["status_delete"]=0;
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				
								
			break;
			case "surat":
				$table="drt_surat_penting";
				$data["id_peserta"]=$this->auth['id'];
				$ck=$this->getdata('surat','row_array','get');
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/surat_penting/".$ck['file']);
					}
					$data["file"]=$this->upload_single("file_surat","file");
				}
			break;
			case "keuangan":
				$table="drt_lapkeu_aspek";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$ck=$this->getdata('keuangan','row_array','get');
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/keuangan/".$ck['file']);
					}
					$data["file"]=$this->upload_single("file_keuangan","file");
				}
			break;
			case "pengalaman":
			case "pekerjaan_berjalan":
				if($table=="pengalaman")$table="drt_pengalaman";
				else $table="drt_pekerjaan_on_going";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				
				if($table=="drt_pengalaman"){
					$ck=$this->getdata('pengalaman','row_array','get');
					if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
						if($ck['id_peserta']!=""){
							unlink("__repo/pengalaman/".$ck['file']);
						}
						$data["file"]=$this->upload_single("file_pengalaman","file");
					}
				}
				else {
					$ck=$this->getdata('pekerjaan_berjalan','row_array','get');
					if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
						if($ck['id_peserta']!=""){
							unlink("__repo/pekerjaan_berjalan/".$ck['file']);
						}
						$data["file"]=$this->upload_single("file_pekerjaan_berjalan","file");
					}
				}
			break;
			case "peralatan":
				$table="drt_peralatan";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				$ck=$this->getdata('peralatan','row_array','get');
				if(isset($_FILES['bukti_milik']) && $_FILES['bukti_milik']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/peralatan/".$ck['bukti_milik']);
					}
					$data["bukti_milik"]=$this->upload_single("file_peralatan","bukti_milik");
				}
			break;
			case "ta":
				$table="drt_tenaga_ahli";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				$t_pengalaman=array();
				$t_serti=array();
				$d_pengalaman=array();
				$d_serti=array();
				if(isset($data["p_tahun"])){$t_pengalaman=$data["p_tahun"];unset($data["p_tahun"]);}
				if(isset($data["p_desc"])){$d_pengalaman=$data["p_desc"];unset($data["p_desc"]);}
				if(isset($data["s_tahun"])){$t_serti=$data["s_tahun"];unset($data["s_tahun"]);}
				if(isset($data["s_desc"])){$d_serti=$data["s_desc"];unset($data["s_desc"]);}
				$ck=$this->getdata('ta','row_array','get');
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/tenaga_ahli/".$ck['file']);
					}
					$data["file"]=$this->upload_single("file_ta","file");
				}
			break;
			case "pengurus":
				$table="drt_pengurus";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				$ck=$this->getdata('pengurus','row_array','get');
				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/pengurus/".$ck['dok']);
					}
					$data["dok"]=$this->upload_single("file_pengurus","dok");
				}
			break;
			case "pajak":
				$table="drt_pajak";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				$ck=$this->getdata('pajak','row_array','get');
				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/pajak/".$ck['dok']);
					}
					$data["dok"]=$this->upload_single("file_pajak","dok");
				}
			break;
			case "data_perusahaan":
				$table="drt_peserta";
				// $data["id_peserta"]=$this->auth['id'];
				$sql="SELECT * FROM drt_peserta WHERE id='".$this->auth['id']."'";
				$rs=$this->db->query($sql)->row_array();
		
				if(isset($_FILES['file_ktp']) && $_FILES['file_ktp']['name']!=""){
					unlink("__repo/pra_daftar/".$rs['file_ktp']);
					$data["file_ktp"]=$this->upload_single("file_ktp","file_ktp");
				}
				if(isset($_FILES['file_npwp']) && $_FILES['file_npwp']['name']!=""){
					unlink("__repo/pra_daftar/".$rs['file_npwp']);
					$data["file_npwp"]=$this->upload_single("file_npwp","file_npwp");
				}
				if(isset($_FILES['file_pkp']) && $_FILES['file_pkp']['name']!=""){
					unlink("__repo/pra_daftar/".$rs['file_pkp']);
					$data["file_pkp"]=$this->upload_single("file_pkp","file_pkp");
				}
				if(isset($_FILES['file_rekening']) && $_FILES['file_rekening']['name']!=""){
					unlink("__repo/pra_daftar/".$rs['file_rekening']);
					$data["file_rekening"]=$this->upload_single("file_rekening","file_rekening");
				}
			break;
			case "upload_dok":
				$table="drt_soft_copy";
				$data["id_peserta"]=$this->auth['id'];
				$ck=$this->getdata('upload_dok','row_array','get');
				if(isset($ck["id"]))$sts_crud='edit';

				if(isset($_FILES['surat_kuasa']) && $_FILES['surat_kuasa']['name']!=""){
					if($ck['id_peserta']!=""){
						unlink("__repo/dok/".$ck['surat_kuasa']);
					}
					$data["surat_kuasa"]=$this->upload_single("file_surat_kuasa","surat_kuasa");
				}
				if(isset($_FILES['pakta_integritas']) && $_FILES['pakta_integritas']['name']!=""){
					if($ck['id_peserta']!=""){
					unlink("__repo/dok/".$ck['pakta_integritas']);}
					$data["pakta_integritas"]=$this->upload_single("file_pakta_integritas","pakta_integritas");
				}
				if(isset($_FILES['surat_pernyataan_minat']) && $_FILES['surat_pernyataan_minat']['name']!=""){
					if($ck['id_peserta']!=""){
					unlink("__repo/dok/".$ck['surat_pernyataan_minat']);}
					$data["surat_pernyataan_minat"]=$this->upload_single("file_surat_pernyataan_minat","surat_pernyataan_minat");
				}
				if(isset($_FILES['formulir_keikutsertaan']) && $_FILES['formulir_keikutsertaan']['name']!=""){
					if($ck['id_peserta']!=""){
					unlink("__repo/dok/".$ck['formulir_keikutsertaan']);}
					$data["formulir_keikutsertaan"]=$this->upload_single("file_formulir_keikutsertaan","formulir_keikutsertaan");
				}
				
			break;
			case "akta":
				$table="drt_akta";
				$data["status_delete"]=0;
				$data["id_peserta"]=$this->auth['id'];
				$data['created'] = date('Y-m-d H:i:s');
				$data['updated'] = date('Y-m-d H:i:s');
				
				$sql="SELECT * FROM drt_akta WHERE id_peserta='".$this->auth['id']."'";
				$rs=$this->db->query($sql)->row_array();
				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					unlink("__repo/akta/".$rs['dok']);
					$data["dok"]=$this->upload_single("file_akta","dok");
				}

				if(isset($_FILES['perubahan_dok']) && $_FILES['perubahan_dok']['name']!="")$data["perubahan_dok"]=$this->upload_single("file_akta_perubahan","perubahan_dok");
			break;
			case "tdp":
				$table="drt_tdp";
				$data["id_peserta"]=$this->auth['id'];
				$sql="SELECT * FROM drt_peserta WHERE id='".$this->auth['id']."'";
				$rs=$this->db->query($sql)->row_array();
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					unlink("__repo/tdp/".$rs['file_tdp']);
					$data["file"]=$this->upload_single("file_tdp","file");
				}
			break;
			case "domisili":
				$table="drt_domisili";
				$data["id_peserta"]=$this->auth['id'];
				$sql="SELECT * FROM drt_domisili WHERE id_peserta='".$this->auth['id']."'";
				$rs=$this->db->query($sql)->row_array();
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					if($rs['id_peserta']!=""){
					unlink("__repo/domisili/".$rs['file']);}
					$data["file"]=$this->upload_single("file_domisili","file");
				}
			break;
			case "sbu":
				$table="drt_sbu";
				$data["id_peserta"]=$this->auth['id'];
				$sql="SELECT * FROM drt_sbu WHERE id_peserta='".$this->auth['id']."'";
				$rs=$this->db->query($sql)->row_array();
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					if($rs['id_peserta']!=""){
						unlink("__repo/sbu/".$rs['file']);
					}
					$data["file"]=$this->upload_single("file_sbu","file");
				}
			break;
			case "input":
				//echo "<pre>";print_r($data);exit;
				$table ="tbl_projek";
			break;
			default:$table = $table;break;
		}
		
		if($sts_crud == 'add'){
						
			if($table=="drt_ijin_usaha"){
				$klbi=$data['m_klbi'];
				$lvl1=$data['klasilvl1'];
				$lvl2=$data['klasilvl2'];
				$lvl3=$data['klasilvl3'];

				$ijn = array(
					'id_peserta'=>$this->auth['id'],
					'jenis_ijin'=>$data['jenis_ijin'],
					'nomor_surat'=>$data['nomor_surat'],
					'berlaku_sampai'=>$data['berlaku_sampai'],
					'instansi_pemberi'=>$data['instansi_pemberi'],
					'kualifikasi'=>$data['kualifikasi'],
					'klasifikasi_lainnya'=>$data['klasifikasi_lainnya'],
					'created'=>date('Y-m-d H:i:s'),
					'updated'=> date('Y-m-d H:i:s'),
					'jenis_dokumen'=>$data['jenis_dokumen']
				);
				$this->db->insert($table, $ijn);

				$id=$this->db->insert_id();

				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					$upload = array(
						'dok'=> $this->auth['id']."_ijin_usaha_".date('YmdHis').'.pdf'
					);
					$sql="SELECT * FROM drt_peserta WHERE id='".$this->auth['id']."'";
					$rs=$this->db->query($sql)->row_array();
					$delsiup = unlink("__repo/ijin_usaha/".$rs['file_siup']);
					if($delsiup){
						$this->db->update($table, $upload, array($field_id=>$id) );
						$data["dok"]=$this->upload_single("file_ijin_usaha","dok");
					}
					
					$field = array(
						'file_siup' => $this->auth['id']."_ijin_usaha_".date('YmdHis').'.pdf'
					);
					$this->db->update("drt_peserta", $field, array("id"=>$this->auth['id']) );
				}
	
				$tbl='drt_ijin_usaha_klasifikasi_detail';

				foreach($klbi as $v){
					if($v!=""){
						$data_klbi=array("drt_ijin_usaha_id"=>$id,
										 "id_peserta"=>$this->auth['id'],
										 "kode_klbi"=>$v
						);
						$this->db->insert("drt_ijin_usaha_klbi", $data_klbi);
					}
				}

				for($i=0; $i< count($lvl1);$i++){
					$data_lvl=array("drt_ijin_usaha_id"=>$id,
									"id_peserta"=>$this->auth['id'],
									"key_lvl"=>$lvl1[$i].$lvl2[$i].$lvl3[$i],
									"level1"=>$lvl1[$i],
									"level2"=>$lvl2[$i],
									"level3"=>$lvl3[$i]
					);
					$this->db->insert($tbl, $data_lvl);
				}

			}else if($table=="drt_tenaga_ahli"){
				$this->db->insert($table, $data);

				$id=$this->db->insert_id();
				$dt_pengalaman=array();
				$dt_serti=array();
				if(count($t_pengalaman)>0){
					foreach($t_pengalaman as $a=>$b){
						$dt_pengalaman[]=array('drt_tenaga_ahli_id'=>$id,'tahun'=>$b,'pengalaman'=>$d_pengalaman[$a]);
					}
					$this->db->insert_batch('drt_pengalaman_ta',$dt_pengalaman);
				}
				if(count($t_serti)>0){
					foreach($t_serti as $a=>$b){
						$dt_serti[]=array('drt_tenaga_ahli_id'=>$id,'tahun'=>$b,'sertifikat'=>$d_serti[$a]);
					}
					$this->db->insert_batch('drt_sertifikat_ta',$dt_serti);
				}
			}else if($table=="eproc_pengadaan_ls_rekanan"){
				$this->db->insert($table, $data);

				$tot=$this->db->get_where('eproc_pengadaan_ls_rekanan',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->result_array();
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Daftar Rekanan : ".count($tot)."', status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=17 ";
				
							  
				$this->db->query($sql); // UPDATE TAHAP PEMASUKAN  9
			}else if($table=="eproc_penawaran"){
				$this->db->insert($table, $data);

				if($get_id=='st'){
					$tot=$this->db->get_where('eproc_penawaran',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->result_array();
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Evaluasi Penawaran - Total Upload Penawaran (".count($tot).")', status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=9 ";
				}else if($get_id=='ll'){
					$tot=$this->db->get_where('eproc_penawaran',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->result_array();
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Evaluasi Penawaran - Total Upload Penawaran (".count($tot).")', status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=21 ";
				}else if($get_id=='ts'){
					$tot=$this->db->get_where('eproc_penawaran',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->result_array();
					$sql="UPDATE eproc_rekap_tahapan SET hasil='Evaluasi Penawaran - Total Upload Penawaran (".count($tot).")', status=0 
								  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
								  AND eproc_tahapan_id=34 ";
				}
				
							  
				$this->db->query($sql); // UPDATE TAHAP PEMASUKAN  9
			}else if($table=="eproc_penawaran_thp_1"){
				$this->db->insert($table, $data);

				$tot=$this->db->get_where('eproc_penawaran_thp_1',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->result_array();
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Evaluasi Penawaran Tahap 1 - Total Upload Penawaran (".count($tot).")', status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=5 ";
				
							  
				$this->db->query($sql); // UPDATE TAHAP PEMASUKAN DOK TAHAP 1
			}else if($table=="eproc_penawaran_thp_2"){
				$this->db->insert($table, $data);

				$tot=$this->db->get_where('eproc_penawaran_thp_2',array('eproc_pengadaan_id'=>$data["eproc_pengadaan_id"]))->result_array();
				$sql="UPDATE eproc_rekap_tahapan SET hasil='Evaluasi Penawaran Tahap 2 - Total Upload Penawaran (".count($tot).")', status=0 
							  WHERE eproc_pengadaan_id=".$data["eproc_pengadaan_id"]." 
							  AND eproc_tahapan_id=7 ";
				
							  
				$this->db->query($sql); // UPDATE TAHAP PEMASUKAN DOK TAHAP 2
			}else if($table=='drt_peserta'){
				unset($data['edVRCaptcha']);
				$this->db->insert($table, $data);
				$id=$this->db->insert_id();		
				$file="file_akta_reg_".date('YmdHis').'.pdf';	
				$field = array(
					'id_peserta' => $id,
					'dok' => $file
				);
				$this->db->insert('drt_akta', $field);
				if(isset($_FILES['file_akta']) && $_FILES['file_akta']['name']!="")$data["file_akta"]=$this->upload_single("file_akta","file_akta");
			}else if($table=='drt_akta'){
				$this->db->insert($table, $data);
				$this->db->update($table, $data, array($field_id=>$id) );
				$file="file_akta_".date('YmdHis').'.pdf';	
				$field = array(
					'file_akta' => $file
				);
				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					$this->db->update("drt_peserta", $field, array("id"=>$this->auth['id'])) ;
				}
				
			}else if($table=='drt_tdp'){
				$this->db->insert($table, $data);
				$file=date('YmdHis').'.pdf';	
				$field = array(
					'file_tdp' => $file
				);
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					$this->db->update("drt_peserta", $field, array("id"=>$this->auth['id']));
				}
				
			}else{
				$this->db->insert($table, $data);
			}
			
			
		}elseif($sts_crud == 'edit'){
			
			if($table=="drt_ijin_usaha"){
				$klbi=$data['m_klbi'];
				$lvl1=$data['klasilvl1'];
				$lvl2=$data['klasilvl2'];
				$lvl3=$data['klasilvl3'];

				
				$ijin = array(
					'jenis_ijin'=>$data['jenis_ijin'],
					'nomor_surat'=>$data['nomor_surat'],
					'berlaku_sampai'=>$data['berlaku_sampai'],
					'instansi_pemberi'=>$data['instansi_pemberi'],
					'kualifikasi'=>$data['kualifikasi'],
					'klasifikasi_lainnya'=>$data['klasifikasi_lainnya'],
					'created'=>date('Y-m-d H:i:s'),
					'updated'=> date('Y-m-d H:i:s'),
					'jenis_dokumen'=>$data['jenis_dokumen']
				);
				
				$this->db->update($table, $ijin, array($field_id=>$id) );

				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					$upload = array(
						'dok'=> $this->auth['id']."_ijin_usaha_".date('YmdHis').'.pdf'
					);
					$sql="SELECT * FROM drt_peserta WHERE id='".$this->auth['id']."'";
					$rs=$this->db->query($sql)->row_array();
					$delsiup = unlink("__repo/ijin_usaha/".$rs['file_siup']);
					if($delsiup){
						$this->db->update($table, $upload, array($field_id=>$id) );
						$data["dok"]=$this->upload_single("file_ijin_usaha","dok");
					}
			
					$field = array(
						'file_siup' => $this->auth['id']."_ijin_usaha_".date('YmdHis').'.pdf'
					);
					$this->db->update("drt_peserta", $field, array("id"=>$this->auth['id']) );
				}

				$tbl='drt_ijin_usaha_klasifikasi_detail';

				$this->db->delete("drt_ijin_usaha_klbi",array('drt_ijin_usaha_id'=>$id));
				foreach($klbi as $v){
					if($v!=""){
						$data_klbi=array("drt_ijin_usaha_id"=>$id,
										 "id_peserta"=>$this->auth['id'],
										 "kode_klbi"=>$v
						);
						$this->db->insert("drt_ijin_usaha_klbi", $data_klbi);
					}
				}

				$this->db->delete($tbl,array('drt_ijin_usaha_id'=>$id));
				for($i=0; $i< count($lvl1);$i++){
					$data_lvl=array("drt_ijin_usaha_id"=>$id,
									"id_peserta"=>$this->auth['id'],
									"key_lvl"=>$lvl1[$i].$lvl2[$i].$lvl3[$i],
									"level1"=>$lvl1[$i],
									"level2"=>$lvl2[$i],
									"level3"=>$lvl3[$i]
					);
					$this->db->insert($tbl, $data_lvl);
				}

				

			}else if($table=="drt_tenaga_ahli"){
				$this->db->update($table, $data, array($field_id=>$id) );
				//$id=$this->db->insert_id();
				$dt_pengalaman=array();
				$dt_serti=array();
				if(count($t_pengalaman)>0){
					foreach($t_pengalaman as $a=>$b){
						$dt_pengalaman[]=array('drt_tenaga_ahli_id'=>$id,'tahun'=>$b,'pengalaman'=>$d_pengalaman[$a]);
					}
					$this->db->delete('drt_pengalaman_ta',array('drt_tenaga_ahli_id'=>$id));
					$this->db->insert_batch('drt_pengalaman_ta',$dt_pengalaman);
				}
				if(count($t_serti)>0){
					foreach($t_serti as $a=>$b){
						$dt_serti[]=array('drt_tenaga_ahli_id'=>$id,'tahun'=>$b,'sertifikat'=>$d_serti[$a]);
					}
					$this->db->delete('drt_sertifikat_ta',array('drt_tenaga_ahli_id'=>$id));
					$this->db->insert_batch('drt_sertifikat_ta',$dt_serti);
				}
			}else if($table=='drt_akta'){
				$this->db->update($table, $data, array($field_id=>$id) );
				$file="file_akta_".date('YmdHis').'.pdf';	
				$field = array(
					'file_akta' => $file
				);
				if(isset($_FILES['dok']) && $_FILES['dok']['name']!=""){
					$this->db->update("drt_peserta", $field, array("id"=>$this->auth['id'])) ;
				}
			}else if($table=='drt_tdp'){
				$this->db->update($table, $data, array($field_id=>$id) );
				$file=date('YmdHis').'.pdf';	
				$field = array(
					'file_tdp' => $file
				);
				if(isset($_FILES['file']) && $_FILES['file']['name']!=""){
					$this->db->update("drt_peserta", $field, array("id"=>$this->auth['id']));
				}
			}else{
				$this->db->update($table, $data, array($field_id=>$id) );
			}
		}elseif($sts_crud == 'delete'){
			if($table=="drt_ijin_usaha"){
				$this->db->delete("drt_ijin_usaha_klbi",array('drt_ijin_usaha_id'=>$id));
			}else if($table=="drt_tenaga_ahli"){
				$this->db->delete('drt_sertifikat_ta',array('drt_tenaga_ahli_id'=>$id));
				$this->db->delete('drt_pengalaman_ta',array('drt_tenaga_ahli_id'=>$id));
			}
			$this->db->delete($table, array($field_id=>$id) );
		}
		
		if($this->db->trans_status() == false){
			$this->db->trans_rollback();
			return 0;
		}else{
			return $this->db->trans_commit();	
		}
	}
	
	function upload_single($mod,$object){
		$file=date('YmdHis');
		switch($mod){
			case "file_sbu" : $upload_path='__repo/sbu/'; break;
			case "file_akta": 
				$upload_path='__repo/akta/';$file=$mod."_".date('YmdHis'); 
			break;
			case "file_akta_perubahan": $upload_path='__repo/akta/'; break;
			case "file_tdp": $upload_path='__repo/tdp/'; break;
			case "file_domisili": $upload_path='__repo/domisili/'; break;
			case "file_sbu": $upload_path='__repo/sbu/'; break;
			case "file_surat_kuasa": $upload_path='__repo/dok/';$file=$this->auth["id"]."_surat_kuasa_".date('YmdHis'); break;
			case "file_pakta_integritas": $upload_path='__repo/dok/';$file=$this->auth["id"]."_pakta_integritas_".date('YmdHis');  break;
			case "file_surat_pernyataan_minat": $upload_path='__repo/dok/';$file=$this->auth["id"]."_pernyataan_minat_".date('YmdHis');  break;
			case "file_formulir_keikutsertaan": $upload_path='__repo/dok/';$file=$this->auth["id"]."_keikutsertaan_".date('YmdHis');  break;
			case "file_npwp": $upload_path='__repo/pra_daftar/';$file=$this->auth["id"]."_npwp_".date('YmdHis');  break;
			case "file_pkp": $upload_path='__repo/pra_daftar/';$file=$this->auth["id"]."_pkp_".date('YmdHis');  break;
			case "file_ktp": $upload_path='__repo/pra_daftar/';$file=$this->auth["id"]."_ktp_".date('YmdHis');  break;
			case "file_rekening": $upload_path='__repo/pra_daftar/';$file=$this->auth["id"]."_file_rekening_".date('YmdHis');  break;

			case "file_pajak": $upload_path='__repo/pajak/';$file=$this->auth["id"]."_pajak_".date('YmdHis');  break;
			case "file_pengurus": $upload_path='__repo/pengurus/';$file=$this->auth["id"]."_pengurus_".date('YmdHis');  break;
			case "file_ta": $upload_path='__repo/tenaga_ahli/';$file=$this->auth["id"]."_tenaga_ahli_".date('YmdHis');  break;
			case "file_peralatan": $upload_path='__repo/peralatan/';$file=$this->auth["id"]."_peralatan_".date('YmdHis');  break;
			case "file_pengalaman": $upload_path='__repo/pengalaman/';$file=$this->auth["id"]."_pengalaman_".date('YmdHis');  break;
			case "file_pekerjaan_berjalan": $upload_path='__repo/pekerjaan_berjalan/';$file=$this->auth["id"]."_pekerjaan_berjalan_".date('YmdHis');  break;
			case "file_keuangan": $upload_path='__repo/keuangan/';$file=$this->auth["id"]."_keuangan_".date('YmdHis');  break;
			case "file_surat": $upload_path='__repo/surat_penting/';$file=$this->auth["id"]."_surat_penting_".date('YmdHis');  break;
			case "file_ijin_usaha": $upload_path='__repo/ijin_usaha/';$file=$this->auth["id"]."_ijin_usaha_".date('YmdHis');  break;
			case "file_ktp_reg":
			case "file_pkp_reg": 
			case "file_npwp_reg": 
			case "file_rekening_reg": 
				$upload_path='__repo/pra_daftar/';$file=$mod."_".date('YmdHis');  
			break;
			case "file_akta_reg": 
				$upload_path='__repo/pra_daftar/';$file=$mod."_".date('YmdHis');
				$upload_path='__repo/akta/';$file=$mod."_".date('YmdHis');
			break; 
			case "file_siup_reg": 
				$upload_path='__repo/pra_daftar/';$file=$mod."_".date('YmdHis');
				$upload_path='__repo/ijin_usaha/';$file=$mod."_".date('YmdHis');
			break;
			case "file_tdp_reg": 
				$upload_path='__repo/pra_daftar/';$file=$mod."_".date('YmdHis');
				$upload_path='__repo/tdp/';$file=$mod."_".date('YmdHis');
			break;
			case "file_penawaran_ls": 
				$upload_path='__repo/penawaran_ls/';$file=$file=$this->auth["id"]."_penawaran_ls_".date('YmdHis');
			break;
			case "file_penawaran_st": 
				$upload_path='__repo/penawaran_st/';$file=$file=$this->auth["id"]."_penawaran_st_".date('YmdHis');
			break;
			case "file_penawaran_ts": 
				$upload_path='__repo/penawaran_ts/';$file=$file=$this->auth["id"]."_penawaran_st_".date('YmdHis');
			break;
			case "file_penawaran_ll": 
				$upload_path='__repo/penawaran_ll/';$file=$file=$this->auth["id"]."_penawaran_ll_".date('YmdHis');
			break;
			case "file_penawaran_ls_thp1": 
				$upload_path='__repo/penawaran_thp1/';$file=$file=$this->auth["id"]."_penawaran_ls_thp1_".date('YmdHis');
			break;
			case "file_penawaran_ls_thp2": 
				$upload_path='__repo/penawaran_thp2/';$file=$file=$this->auth["id"]."_penawaran_ls_thp2_".date('YmdHis');
			break;
			case "file_sanggah": 
				$upload_path='__repo/sanggah/';$file=$file=$this->auth["id"]."_sanggah_".date('YmdHis');
			break;
		}
		
		$upload=$this->lib->uploadnong($upload_path, $object, $file);
		if($upload){return $upload;}
		else{echo 2;exit;}
	}
}