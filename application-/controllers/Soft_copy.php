<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soft_copy extends CI_Controller {


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
		$query = $this->db->query("select * from drt_soft_copy where id_peserta='".$id_peserta."'");

		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $data['id']= $row->id;
		      $data['file_surat_kuasa']= $row->file_surat_kuasa;
					$data['file_pakta_integritas']=$row->file_pakta_integritas;
					$data['file_pernyataan_minat']=$row->file_pernyataan_minat;
					$data['file_pernyataan_kebenaran_data']=$row->file_pernyataan_kebenaran_data;
					$data['file_isian_pq']=$row->file_isian_pq;
					$data['file_pengalaman_kerja']=$row->file_pengalaman_kerja;
					$data['file_copy_rekening']=$row->file_copy_rekening;
					$data['file_copy_lapkeu']=$row->file_copy_lapkeu;
					$data['no_npwp']=$row->no_npwp;
					$data['file_npwp']=$row->file_npwp;
					$data['no_sp_pkp']=$row->no_sp_pkp;
					$data['file_sp_pkp']=$row->file_sp_pkp;
					$data['no_spt_badan']=$row->no_spt_badan;
					$data['file_spt_badan']=$row->file_spt_badan;
					$data['no_siup']=$row->no_siup;
					$data['tgl_akhir_siup']=$row->tgl_akhir_siup;
					$data['file_siup']=$row->file_siup;
					$data['no_siujk']=$row->no_siujk;
					$data['tgl_akhir_siujk']=$row->tgl_akhir_siujk;
					$data['file_siujk']=$row->file_siujk;
					$data['no_ijin_usaha_lainnya']=$row->no_ijin_usaha_lainnya;
					$data['tgl_akhir_ijin_usaha_lainnya']=$row->tgl_akhir_ijin_usaha_lainnya;
					$data['file_ijin_usaha_lainnya']=$row->file_ijin_usaha_lainnya;
					$data['no_tdp']=$row->no_tdp;
					$data['tgl_akhir_tdp']=$row->tgl_akhir_tdp;
					$data['file_tdp']=$row->file_tdp;
					$data['no_akta_pendirian']=$row->no_akta_pendirian;
					$data['tgl_akhir_akta_pendirian']=$row->tgl_akhir_akta_pendirian;
					$data['file_akta_pendirian']=$row->file_akta_pendirian;
					$data['no_surat_domisili']=$row->no_surat_domisili;
					$data['tgl_akhir_surat_domisili']=$row->tgl_akhir_surat_domisili;
					$data['file_akhir_surat_domisili']=$row->file_akhir_surat_domisili;
					$data['no_sbu']=$row->no_sbu;
					$data['tgl_akhir_sbu']=$row->tgl_akhir_sbu;
					$data['file_sbu']=$row->file_sbu;

		   }
		}else{
			$data['id']="";
			$data['file_surat_kuasa']="";
			$data['file_pakta_integritas']="";
			$data['file_pernyataan_minat']="";
			$data['file_pernyataan_kebenaran_data']="";
			$data['file_isian_pq']="";
			$data['file_pengalaman_kerja']="";
			$data['file_copy_rekening']="";
			$data['file_copy_lapkeu']="";
			$data['no_npwp']="";
			$data['file_npwp']="";
			$data['no_sp_pkp']="";
			$data['file_sp_pkp']="";
			$data['no_spt_badan']="";
			$data['file_spt_badan']="";
			$data['no_siup']="";
			$data['tgl_akhir_siup']="";
			$data['file_siup']="";
			$data['no_siujk']="";
			$data['tgl_akhir_siujk']="";
			$data['file_siujk']="";
			$data['no_ijin_usaha_lainnya']="";
			$data['tgl_akhir_ijin_usaha_lainnya']="";
			$data['file_ijin_usaha_lainnya']="";
			$data['no_tdp']="";
			$data['tgl_akhir_tdp']="";
			$data['file_tdp']="";
			$data['no_akta_pendirian']="";
			$data['tgl_akhir_akta_pendirian']="";
			$data['file_akta_pendirian']="";
			$data['no_surat_domisili']="";
			$data['tgl_akhir_surat_domisili']="";
			$data['file_akhir_surat_domisili']="";
			$data['no_sbu']="";
			$data['tgl_akhir_sbu']="";
			$data['file_sbu']="";

		}


		$this->load->view('backend/soft_copy/soft_copy_form',$data);
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
if(is_uploaded_file($_FILES['file_surat_kuasa']['tmp_name'])){
	$tempFile1 = $_FILES['file_surat_kuasa']['tmp_name'];
	$temp1 = $_FILES["file_surat_kuasa"]["name"];
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
if(is_uploaded_file($_FILES['file_pakta_integritas']['tmp_name'])){
		$tempFile2 = $_FILES['file_pakta_integritas']['tmp_name'];
		$temp2 = $_FILES["file_pakta_integritas"]["name"];
		$path_parts2 = pathinfo($temp2);
		$t2 = preg_replace("/[^0-9]/", "",  microtime());
		$file2 = $id_peserta.'_file_pakta_integritas_'.$t2.'_'. '.' . $path_parts2['extension'];
		$targetFile2 = $targetPath . $file2 ;
		move_uploaded_file($tempFile2, $targetFile2);
	}else{
		$file2="0";
	}

		//file_pernyataan_minat
if(is_uploaded_file($_FILES['file_pernyataan_minat']['tmp_name'])){
			$tempFile3 = $_FILES['file_pernyataan_minat']['tmp_name'];
			$temp3 = $_FILES["file_pernyataan_minat"]["name"];
			$path_parts3 = pathinfo($temp3);
			$t3 = preg_replace("/[^0-9]/", "",  microtime());
			$file3 = $id_peserta.'_file_pernyataan_minat_'.$t3.'_'. '.' . $path_parts3['extension'];
			$targetFile3 = $targetPath . $file3 ;
			move_uploaded_file($tempFile3, $targetFile3);
		}else{
			$file3="0";
		}


			//file_pernyataan_kebenaran_data
if(is_uploaded_file($_FILES['file_pernyataan_kebenaran_data']['tmp_name'])){
				$tempFile4 = $_FILES['file_pernyataan_kebenaran_data']['tmp_name'];
				$temp4 = $_FILES["file_pernyataan_kebenaran_data"]["name"];
				$path_parts4 = pathinfo($temp4);
				$t4 = preg_replace("/[^0-9]/", "",  microtime());
				$file4 = $id_peserta.'_file_pernyataan_kebenaran_data_'.$t4.'_'. '.' . $path_parts4['extension'];
				$targetFile4 = $targetPath . $file4 ;
				move_uploaded_file($tempFile4, $targetFile4);
			}else{
				$file4="0";
			}
				//file_isian_pq
if(is_uploaded_file($_FILES['file_isian_pq']['tmp_name'])){
					$tempFile5 = $_FILES['file_isian_pq']['tmp_name'];
					$temp5 = $_FILES["file_isian_pq"]["name"];
					$path_parts5 = pathinfo($temp5);
					$t5 = preg_replace("/[^0-9]/", "",  microtime());
					$file5 = $id_peserta.'_file_isian_pq_'.$t5.'_'. '.' . $path_parts5['extension'];
					$targetFile5 = $targetPath . $file5 ;
					move_uploaded_file($tempFile5, $targetFile5);
				}else{
					$file5="0";
				}
					//file_pengalaman_kerja
		if(is_uploaded_file($_FILES['file_pengalaman_kerja']['tmp_name'])){
						$tempFile6 = $_FILES['file_pengalaman_kerja']['tmp_name'];
						$temp6 = $_FILES["file_pengalaman_kerja"]["name"];
						$path_parts6 = pathinfo($temp6);
						$t6 = preg_replace("/[^0-9]/", "",  microtime());
						$file6 = $id_peserta.'_file_pengalaman_kerja_'.$t6.'_'. '.' . $path_parts6['extension'];
						$targetFile6 = $targetPath . $file6 ;
						move_uploaded_file($tempFile6, $targetFile6);
					}else{
						$file6="0";
					}

						//file_copy_rekening
		if(is_uploaded_file($_FILES['file_copy_rekening']['tmp_name'])){
							$tempFile7 = $_FILES['file_copy_rekening']['tmp_name'];
							$temp7 = $_FILES["file_copy_rekening"]["name"];
							$path_parts7 = pathinfo($temp7);
							$t7 = preg_replace("/[^0-9]/", "",  microtime());
							$file7 = $id_peserta.'_file_copy_rekening_'.$t7.'_'. '.' . $path_parts7['extension'];
							$targetFile7 = $targetPath . $file7 ;
							move_uploaded_file($tempFile7, $targetFile7);
						}else{
							$file7="0";
						}

		if(is_uploaded_file($_FILES['file_copy_lapkeu']['tmp_name'])){
							//file_copy_lapkeu
								$tempFile8 = $_FILES['file_copy_lapkeu']['tmp_name'];
								$temp8 = $_FILES["file_copy_lapkeu"]["name"];
								$path_parts8 = pathinfo($temp8);
								$t8 = preg_replace("/[^0-9]/", "",  microtime());
								$file8 = $id_peserta.'_file_copy_lapkeu_'.$t8.'_'. '.' . $path_parts8['extension'];
								$targetFile8 = $targetPath . $file8 ;
								move_uploaded_file($tempFile8, $targetFile8);
							}else{
								$file8="0";
							}
								//file_npwp

				if(is_uploaded_file($_FILES['file_npwp']['tmp_name'])){
									$tempFile9 = $_FILES['file_npwp']['tmp_name'];
									$temp9 = $_FILES["file_npwp"]["name"];
									$path_parts9 = pathinfo($temp9);
									$t9 = preg_replace("/[^0-9]/", "",  microtime());
									$file9 = $id_peserta.'_file_npwp_'.$t9.'_'. '.' . $path_parts9['extension'];
									$targetFile9 = $targetPath . $file9 ;
									move_uploaded_file($tempFile9, $targetFile9);
								}else{
									$file9="0";
								}
									//file_sp_pkp

					if(is_uploaded_file($_FILES['file_sp_pkp']['tmp_name'])){
										$tempFile10 = $_FILES['file_sp_pkp']['tmp_name'];
										$temp10 = $_FILES["file_sp_pkp"]["name"];
										$path_parts10 = pathinfo($temp10);
										$t10 = preg_replace("/[^0-9]/", "",  microtime());
										$file10 = $id_peserta.'_file_sp_pkp_'.$t10.'_'. '.' . $path_parts10['extension'];
										$targetFile10 = $targetPath . $file10 ;
										move_uploaded_file($tempFile10, $targetFile10);
									}else{
										$file10="0";
									}

										//file_spt_badan
				if(is_uploaded_file($_FILES['file_spt_badan']['tmp_name'])){
											$tempFile11 = $_FILES['file_spt_badan']['tmp_name'];
											$temp11 = $_FILES["file_spt_badan"]["name"];
											$path_parts11 = pathinfo($temp11);
											$t11 = preg_replace("/[^0-9]/", "",  microtime());
											$file11 = $id_peserta.'_file_spt_badan_'.$t11.'_'. '.' . $path_parts11['extension'];
											$targetFile11 = $targetPath . $file11 ;
											move_uploaded_file($tempFile11, $targetFile11);
										}else{
											$file11="0";
										}
											//file_siup

				if(is_uploaded_file($_FILES['file_siup']['tmp_name'])){
												$tempFile12 = $_FILES['file_siup']['tmp_name'];
												$temp12 = $_FILES["file_siup"]["name"];
												$path_parts12 = pathinfo($temp12);
												$t12 = preg_replace("/[^0-9]/", "",  microtime());
												$file12 = $id_peserta.'_file_siup_'.$t12.'_'. '.' . $path_parts12['extension'];
												$targetFile12 = $targetPath . $file12 ;
												move_uploaded_file($tempFile12, $targetFile12);
											}else{
												$file12="0";
											}
												//file_siujk

								if(is_uploaded_file($_FILES['file_siujk']['tmp_name'])){
													$tempFile13 = $_FILES['file_siujk']['tmp_name'];
													$temp13 = $_FILES["file_siujk"]["name"];
													$path_parts13 = pathinfo($temp13);
													$t13 = preg_replace("/[^0-9]/", "",  microtime());
													$file13 = $id_peserta.'_file_siujk_'.$t13.'_'. '.' . $path_parts13['extension'];
													$targetFile13 = $targetPath . $file13 ;
													move_uploaded_file($tempFile13, $targetFile13);
												}else{
													$file13="0";
												}
													//file_siujk
										if(is_uploaded_file($_FILES['file_ijin_usaha_lainnya']['tmp_name'])){
														$tempFile14 = $_FILES['file_ijin_usaha_lainnya']['tmp_name'];
														$temp14 = $_FILES["file_ijin_usaha_lainnya"]["name"];
														$path_parts14 = pathinfo($temp14);
														$t14 = preg_replace("/[^0-9]/", "",  microtime());
														$file14 = $id_peserta.'_file__ijin_usaha_lainnya_'.$t14.'_'. '.' . $path_parts14['extension'];
														$targetFile14 = $targetPath . $file14 ;
														move_uploaded_file($tempFile14, $targetFile14);
													}else{
														$file14="0";
													}
														//file_siujk

														//file_siujk
											if(is_uploaded_file($_FILES['file_tdp']['tmp_name'])){
															$tempFile15 = $_FILES['file_tdp']['tmp_name'];
															$temp15 = $_FILES["file_tdp"]["name"];
															$path_parts15 = pathinfo($temp15);
															$t15 = preg_replace("/[^0-9]/", "",  microtime());
															$file15 = $id_peserta.'_file_tdp_'.$t15.'_'. '.' . $path_parts15['extension'];
															$targetFile15 = $targetPath . $file15 ;
															move_uploaded_file($tempFile15, $targetFile15);
														}else{
															$file15="0";
														}
														//file_akta_pendirian

											if(is_uploaded_file($_FILES['file_akta_pendirian']['tmp_name'])){
															$tempFile16 = $_FILES['file_akta_pendirian']['tmp_name'];
															$temp16 = $_FILES["file_akta_pendirian"]["name"];
															$path_parts16 = pathinfo($temp16);
															$t16 = preg_replace("/[^0-9]/", "",  microtime());
															$file16 = $id_peserta.'_file_akta_pendirian_'.$t16.'_'. '.' . $path_parts16['extension'];
															$targetFile16 = $targetPath . $file16 ;
															move_uploaded_file($tempFile16, $targetFile16);
														}else{
															$file16="0";
														}
														//file_akhir_surat_domisili

											if(is_uploaded_file($_FILES['file_akhir_surat_domisili']['tmp_name'])){
															$tempFile17 = $_FILES['file_akhir_surat_domisili']['tmp_name'];
															$temp17 = $_FILES["file_akhir_surat_domisili"]["name"];
															$path_parts17 = pathinfo($temp17);
															$t17 = preg_replace("/[^0-9]/", "",  microtime());
															$file17 = $id_peserta.'_file_akhir_surat_domisili_'.$t17.'_'. '.' . $path_parts17['extension'];
															$targetFile17 = $targetPath . $file17 ;
															move_uploaded_file($tempFile17, $targetFile17);
														}else{
															$file17="0";
														}
														//file_akhir_surat_domisili

										if(is_uploaded_file($_FILES['file_sbu']['tmp_name'])){
															$tempFile18 = $_FILES['file_sbu']['tmp_name'];
															$temp18 = $_FILES["file_sbu"]["name"];
															$path_parts18 = pathinfo($temp18);
															$t18 = preg_replace("/[^0-9]/", "",  microtime());
															$file18 = $id_peserta.'_file_sbu_'.$t18.'_'. '.' . $path_parts18['extension'];
															$targetFile18 = $targetPath . $file18 ;
															move_uploaded_file($tempFile18, $targetFile18);
														}else{
															$file18="0";
														}


														if($this->input->post('id')==""){
															$data = array(
															               'id_peserta' => $id_peserta,
															               'file_surat_kuasa' => $file11,
															               'file_pakta_integritas' => $file2,
															               'file_pernyataan_minat' => $file3 ,
															               'file_pernyataan_kebenaran_data' => $file4 ,
															               'file_isian_pq' => $file5 ,
															               'file_pengalaman_kerja' => $file6 ,
															               'file_copy_rekening' => $file7 ,
															               'file_copy_lapkeu' => $file8 ,
															               'file_npwp' => $file9 ,
															               'file_sp_pkp' => $file10 ,
															               'file_spt_badan' => $file11 ,
															               'file_siup' => $file12 ,
															               'file_siujk' => $file13 ,
															               'file_ijin_usaha_lainnya' => $file14 ,
															               'file_tdp' => $file15 ,
															               'file_akta_pendirian' => $file16 ,
															               'file_akhir_surat_domisili' => $file17 ,
															               'file_sbu' => $file18 ,
															               'no_npwp' => $this->input->post('no_npwp') ,
															               'no_sp_pkp' => $this->input->post('no_sp_pkp') ,
															               'no_spt_badan' => $this->input->post('no_spt_badan') ,
															               'no_siup' => $this->input->post('no_siup') ,
															               'tgl_akhir_siup' => $this->input->post('tgl_akhir_siup') ,
															               'no_siujk' => $this->input->post('tgl_akhir_siujk') ,
															               'no_ijin_usaha_lainnya' => $this->input->post('no_ijin_usaha_lainnya') ,
															               'tgl_akhir_ijin_usaha_lainnya' => $this->input->post('tgl_akhir_ijin_usaha_lainnya') ,
															               'no_tdp' => $this->input->post('no_tdp') ,
															               'tgl_akhir_akta_pendirian' => $this->input->post('tgl_akhir_akta_pendirian') ,
															               'no_akta_pendirian' => $this->input->post('no_akta_pendirian') ,
															               'tgl_akhir_tdp' => $this->input->post('tgl_akhir_tdp') ,
															               'no_surat_domisili' => $this->input->post('no_surat_domisili') ,
															               'tgl_akhir_surat_domisili' => $this->input->post('tgl_akhir_surat_domisili') ,
															               'no_sbu' => $this->input->post('no_sbu') ,
															               'tgl_akhir_sbu' => $this->input->post('tgl_akhir_sbu') ,
															            );

															$this->db->insert('drt_soft_copy', $data);
															$this->session->set_flashdata('success', 'Data Telah tersimpan');

														}else{


															$data = array(
																						 'id_peserta' => $id_peserta,
																						 'file_surat_kuasa' => $file11,
																						 'file_pakta_integritas' => $file2,
																						 'file_pernyataan_minat' => $file3 ,
																						 'file_pernyataan_kebenaran_data' => $file4 ,
																						 'file_isian_pq' => $file5 ,
																						 'file_pengalaman_kerja' => $file6 ,
																						 'file_copy_rekening' => $file7 ,
																						 'file_copy_lapkeu' => $file8 ,
																						 'file_npwp' => $file9 ,
																						 'file_sp_pkp' => $file10 ,
																						 'file_spt_badan' => $file11 ,
																						 'file_siup' => $file12 ,
																						 'file_siujk' => $file13 ,
																						 'file_ijin_usaha_lainnya' => $file14 ,
																						 'file_tdp' => $file15 ,
																						 'file_akta_pendirian' => $file16 ,
																						 'file_akhir_surat_domisili' => $file17 ,
																						 'file_sbu' => $file18 ,
																						 'no_npwp' => $this->input->post('no_npwp') ,
																						 'no_sp_pkp' => $this->input->post('no_sp_pkp') ,
																						 'no_spt_badan' => $this->input->post('no_spt_badan') ,
																						 'no_siup' => $this->input->post('no_siup') ,
																						 'tgl_akhir_siup' => $this->input->post('tgl_akhir_siup') ,
																						 'no_siujk' => $this->input->post('no_siujk') ,
																						 'tgl_akhir_siujk' => $this->input->post('tgl_akhir_siujk') ,
																						 'no_ijin_usaha_lainnya' => $this->input->post('no_ijin_usaha_lainnya') ,
																						 'tgl_akhir_ijin_usaha_lainnya' => $this->input->post('tgl_akhir_ijin_usaha_lainnya') ,
																						 'no_tdp' => $this->input->post('no_tdp') ,
																						 'tgl_akhir_akta_pendirian' => $this->input->post('tgl_akhir_akta_pendirian') ,
																						 'no_akta_pendirian' => $this->input->post('no_akta_pendirian') ,
																						 'tgl_akhir_tdp' => $this->input->post('tgl_akhir_tdp') ,
																						 'no_surat_domisili' => $this->input->post('no_surat_domisili') ,
																						 'tgl_akhir_surat_domisili' => $this->input->post('tgl_akhir_surat_domisili') ,
																						 'no_sbu' => $this->input->post('no_sbu') ,
																						 'tgl_akhir_sbu' => $this->input->post('tgl_akhir_sbu') ,
																					);


															$this->db->where('id', $this->input->post('id'));
															$this->db->update('drt_soft_copy', $data);
															$this->session->set_flashdata('success', 'Data Telah terupdate');

														}

redirect(base_url('soft_copy'));

}


}
