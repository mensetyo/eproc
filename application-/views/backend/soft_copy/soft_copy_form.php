
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->



        <!-- CSS INCLUDE -->
             <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
<style>
.control-label {text-align:left!important;padding-left:7px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>

 <body>
    <!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img class="" src="#" width="500px"/>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
    </div>
</div>


        <!-- START PAGE CONTAINER -->
        <div class="page-container">

    		<?php $this->load->view('include/backend/sidebar'); ?>

            <!-- PAGE CONTENT -->
            <div class="page-content">

                        <!-- START X-NAVIGATION VERTICAL -->
        <?php $this->load->view('include/backend/header'); ?>
                <!-- END X-NAVIGATION VERTICAL -->



                <!-- PAGE CONTENT WRAPPER -->
           <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                          <?php if ($this->session->flashdata('success')) {?>

                              <div class="alert alert-info" id="success-alert">
                                <strong>Informasi !</strong> <?php echo $this->session->flashdata('success');?>
                              </div>

                  <?php }?>

                            <form class="form-horizontal" method="post" action="<?php echo base_url('soft_copy/simpan');?>" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Softcopy Dokumen</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
									&nbsp;



                                </div>
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">



                                    <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">1. Surat Kuasa</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_surat_kuasa" id="file_surat_kuasa" title="Browse file"/>
                                              <?php
                                              if($file_surat_kuasa<>0){
                                                ?>
                                                
                                                <li><a href="#myModal" data-toggle="modal" data-img-url="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_surat_kuasa;?>">Lihat</a></li>
                                                
                                                <?php
                                              }
                                              ?>
                                        </div>
                                    </div>


                                    <input type="hidden" name="id" value="<?php echo $id;?>">

                                    <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">2. Pakta Integritas</label>
                                         <div class="col-md-6 col-xs-12">
                                        <input type="file" class="fileinput btn-primary" name="file_pakta_integritas" id="file_pakta_integritas" title="Browse file"/>
                                            <?php
                                            if($file_pakta_integritas<>0){
                                              ?>
                                             <!--   <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_pakta_integritas;?>"  target="_blank">View</a>-->
                                              
                                              <a href="#myModal" data-toggle="modal" data-img-url="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_pakta_integritas;?>">Lihat</a>
                                              <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

									   <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">3. Surat Pernyataan Minat</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_pernyataan_minat" id="file_pernyataan_minat" title="Browse file"/>

                                            <?php
                                            if($file_pernyataan_minat<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_pernyataan_minat;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>


                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">4. Surat Pernyataan Kebenaran data</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_pernyataan_kebenaran_data" id="file_pernyataan_kebenaran_data" title="Browse file"/>
                                            <?php
                                            if($file_pernyataan_kebenaran_data<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_pernyataan_kebenaran_data;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">5. Dokumen Isian PQ</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_isian_pq" id="file_isian_pq" title="Browse file"/>
                                            <?php
                                            if($file_isian_pq<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_isian_pq;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>


                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">6. Data Pengalaman Pekerjaan</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_pengalaman_kerja" id="file_pengalaman_kerja" title="Browse file"/>
                                            <?php
                                            if($file_pengalaman_kerja<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_pengalaman_kerja;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">7. Copy Rekening 3 bln Terakhir</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_copy_rekening" id="file_copy_rekening" title="Browse file"/>
                                            <?php
                                            if($file_copy_rekening<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_copy_rekening;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">8. Copy laporan Keuangan terakhir</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_copy_lapkeu" id="file_copy_lapkeu" title="Browse file"/>
                                            <?php
                                            if($file_copy_lapkeu<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_copy_lapkeu;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">9. Nomor NPWP</label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_npwp" id="no_npwp" value="<?php echo $no_npwp;?>" placeholder=""/>


										</div> &nbsp;

                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">10. Nomor SP PKP</label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_sp_pkp" id="no_sp_pkp"  value="<?php echo $no_sp_pkp;?>"  placeholder=""/>

										</div> &nbsp;

										</div>


									 	<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">11. Nomor SPT Badan tahun terakhir</label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_spt_badan" id="no_spt_badan" value="<?php echo $no_spt_badan;?>"  placeholder=""/>
										</div> &nbsp;

										</div>

										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">12. Nomor SIUP</label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_siup" id="no_siup" value="<?php echo $no_siup;?>" placeholder=""/>

										</div> &nbsp;

										</div>

									   <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">13. Nomor SIUJK</label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_siujk" id="no_siujk"  value="<?php echo $no_siujk;?>" placeholder=""/>

										</div> &nbsp;

										</div>

										 <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">14. Nomor Surat ijin usaha lainnya</label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_ijin_usaha_lainnya" id="no_ijin_usaha_lainnya" value="<?php echo $no_ijin_usaha_lainnya;?>"  placeholder=""/>

										</div> &nbsp;

										</div>

										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">15. Nomor Tanda Daftar Perusahaan (TDP) </label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_tdp" id="no_tdp" value="<?php echo $no_tdp;?>" placeholder=""/>
										</div> &nbsp;

										</div>

										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">16. Nomor Akta Pendirian/Perubahan </label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_akta_pendirian" id="no_akta_pendirian" value="<?php echo $no_akta_pendirian;?>" placeholder=""/>
										</div> &nbsp;

										</div>

										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">17. Nomor Surat Domisili Perusahaan </label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_surat_domisili" id="no_surat_domisili" value="<?php echo $no_surat_domisili;?>" placeholder=""/>
										</div> &nbsp;

										</div>

										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">18. Nomor Sertifitikat Badan usaha </label>
                                        <div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="no_sbu" id="no_sbu" value="<?php echo $no_sbu;?>"  placeholder=""/>
										</div> &nbsp;

										</div>



								    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label">&nbsp;* data ini harus diisi </label>

                                    </div>




									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>



									<div class="form-group">
                                        <div class="col-md-6 col-xs-12">
                                          <button type="submit" class="btn btn-primary pull-right">Simpan</button>
										</div>

										<div class="col-md-6 col-xs-12">
										 <button type="button" id="lihat_data" class="btn btn-primary">Lihat Data</button>
										</div>
                                    </div>






                                        </div>
                                     <div class="col-md-6">


										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
<br/>

									<div class="form-group">
                                        <label class="col-md-2 col-xs-12 control-label">File NPWP</label>
                                        <div class="col-md-6 col-xs-12">


												   <input type="file" class="fileinput btn-primary" name="file_npwp" id="file_npwp" title="Browse file"/>

                           <?php
                           if($file_npwp<>0){
                             ?>
                             <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_npwp;?>"  target="_blank">View</a>
                             <?php
                           }
                           ?>

										</div> &nbsp;

                                    </div>



									<div class="form-group">
                                        <label class="col-md-2 col-xs-12 control-label">File SP PKP</label>
                                        <div class="col-md-6 col-xs-12">


												   <input type="file" class="fileinput btn-primary" name="file_sp_pkp" id="file_sp_pkp" title="Browse file"/>

                           <?php
                           if($file_sp_pkp<>0){
                             ?>
                             <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_sp_pkp;?>"  target="_blank">View</a>
                             <?php
                           }
                           ?>


										</div> &nbsp;

                                    </div>

								<div class="form-group">
                                        <label class="col-md-2 col-xs-12 control-label">File SPT Badan Tahun Akhir</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file_spt_badan" id="file_spt_badan" title="Browse file"/>

                                            <?php
                                            if($file_spt_badan<>0){
                                              ?>
                                              <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_spt_badan;?>"  target="_blank">View</a>
                                              <?php
                                            }
                                            ?>


										                     </div> &nbsp;
                </div>

									<div class="form-group">
                    <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
									    <div class="col-md-3 col-xs-12">
											<input type="text" class="form-control datepicker" name="tgl_akhir_siup" value="<?php echo $tgl_akhir_siup;?>" id="tgl_akhir_siup" placeholder=""/>
									   </div>
											<label class="col-md-2 col-xs-12 control-label">File SIUP</label>

                    <div class="col-md-3 col-xs-12">
											<input type="file" class="fileinput btn-primary" name="file_siup" id="file_siup"  title="Browse file"/>

                      <?php
                      if($file_siup<>0){
                        ?>
                        <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_siup;?>"  target="_blank">View</a>
                        <?php
                      }
                      ?>


										</div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
                      <div class="col-md-3 col-xs-12">
                      <input type="text" class="form-control datepicker" name="tgl_akhir_siujk" value="<?php echo $tgl_akhir_siujk;?>" id="tgl_akhir_siujk" placeholder=""/>
                     </div>
                      <label class="col-md-2 col-xs-12 control-label">File SIUJK</label>

                    <div class="col-md-3 col-xs-12">
                      <input type="file" class="fileinput btn-primary" name="file_siujk" id="file_siujk" title="Browse file"/>
                      <?php
                      if($file_siujk<>0){
                        ?>
                        <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_siujk;?>"  target="_blank">View</a>
                        <?php
                      }
                      ?>
                    </div>
                  </div>





                  <div class="form-group">
                    <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
                      <div class="col-md-3 col-xs-12">
                      <input type="text" class="form-control datepicker" name="tgl_akhir_ijin_usaha_lainnya"  value="<?php echo $tgl_akhir_ijin_usaha_lainnya;?>" id="tgl_akhir__ijin_usaha_lainnya" placeholder=""/>
                     </div>
                      <label class="col-md-2 col-xs-12 control-label">File Surat Ijin</label>

                    <div class="col-md-3 col-xs-12">
                      <input type="file" class="fileinput btn-primary" name="file_ijin_usaha_lainnya" id="file_ijin_usaha_lainnya" title="Browse file"/>
                      <?php
                      if($file_ijin_usaha_lainnya<>0){
                        ?>
                        <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_ijin_usaha_lainnya;?>"  target="_blank">View</a>
                        <?php
                      }
                      ?>

                    </div>
                  </div>










                                    <div class="form-group">
                                      <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
                                        <div class="col-md-3 col-xs-12">
                                        <input type="text" class="form-control datepicker" name="tgl_akhir_akta_pendirian" value="<?php echo $tgl_akhir_akta_pendirian;?>" id="tgl_akhir_akta_pendirian" placeholder=""/>
                                       </div>
                                        <label class="col-md-2 col-xs-12 control-label">File Akta</label>

                                      <div class="col-md-3 col-xs-12">
                                        <input type="file" class="fileinput btn-primary" name="file_akta_pendirian" id="file_akta_pendirian" title="Browse file"/>
                                        <?php
                                        if($file_akta_pendirian<>0){
                                          ?>
                                          <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_akta_pendirian;?>"  target="_blank">View</a>
                                          <?php
                                        }
                                        ?>

                                      </div>
                                    </div>


                                    <div class="form-group">
                                      <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
                                        <div class="col-md-3 col-xs-12">
                                        <input type="text" class="form-control datepicker" name="tgl_akhir_tdp" value="<?php echo $tgl_akhir_tdp;?>" id="tgl_akhir_tdp" placeholder=""/>
                                       </div>
                                        <label class="col-md-2 col-xs-12 control-label">File TDP</label>

                                      <div class="col-md-3 col-xs-12">
                                        <input type="file" class="fileinput btn-primary" name="file_tdp" id="file_tdp" title="Browse file"/>

                                        <?php
                                        if($file_tdp<>0){
                                          ?>
                                          <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_tdp;?>"  target="_blank">View</a>
                                          <?php
                                        }
                                        ?>


                                      </div>
                                    </div>


                                    <div class="form-group">
                                      <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
                                        <div class="col-md-3 col-xs-12">
                                        <input type="text" class="form-control datepicker" name="tgl_akhir_surat_domisili" value="<?php echo $tgl_akhir_surat_domisili;?>" id="tgl_akhir_surat_domisili" placeholder=""/>
                                       </div>
                                        <label class="col-md-2 col-xs-12 control-label">File SDP</label>

                                      <div class="col-md-3 col-xs-12">
                                        <input type="file" class="fileinput btn-primary" name="file_akhir_surat_domisili" id="file_akhir_surat_domisili" title="Browse file"/>
                                        <?php
                                        if($file_akhir_surat_domisili<>0){
                                          ?>
                                          <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_akhir_surat_domisili;?>"  target="_blank">View</a>
                                          <?php
                                        }
                                        ?>

                                      </div>
                                    </div>


                                    <div class="form-group">
                                      <label class="col-md-2 col-xs-12 control-label">Tgl Berakhir</label>
                                        <div class="col-md-3 col-xs-12">
                                        <input type="text" class="form-control datepicker" name="tgl_akhir_sbu" value="<?php echo $tgl_akhir_sbu;?>" id="tgl_akhir_sbu" placeholder=""/>
                                       </div>
                                        <label class="col-md-2 col-xs-12 control-label">File SBU</label>

                                      <div class="col-md-3 col-xs-12">
                                        <input type="file" class="fileinput btn-primary" name="file_sbu" id="file_sbu" title="Browse file"/>

                                        <?php
                                        if($file_sbu<>0){
                                          ?>
                                          <a href="<?php echo base_url();?>uploads/soft_copy/<?php echo $file_sbu;?>"  target="_blank">View</a>
                                          <?php
                                        }
                                        ?>


                                      </div>
                                    </div>

                                        </div>

                                    </div>
                                </div>
                                <!--<div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>-->
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>

<script>
$(document).ready(function(){
	var tahun = $("#tahun").val();

  $("#aktiva_passiva").click(function(){
     window.location = "<?php echo base_url('lap_keuangan');?>";
  });

    $("#laba_rugi").click(function(){
     window.location = "<?php echo base_url('lap_keuangan/laba_rugi');?>";
  });

  $("#tampilkan").click(function(){
     window.location = "<?php echo base_url('lap_keuangan/aktiva_passiva_show/');?>" + tahun;
  });

});
</script>

<script type="text/javascript">
        $('a').click(function(e) {
    	    $('#myModal img').attr('src', $(this).attr('data-img-url')); 
    	});
    	
</script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
