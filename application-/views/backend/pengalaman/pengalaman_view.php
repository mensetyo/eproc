
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
.control-label {text-align:left!important;padding-left:140px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>

 <body>
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

                            <form class="form-horizontal" method="post" action="<?php echo base_url('pengalaman/simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Pengalaman</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">



								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nama kontrak *</label>
                                        <div class="col-md-6 col-xs-12">:
                                          <?php echo $nama_kontrak;?>
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Lokasi *</label>
                                        <div class="col-md-6 col-xs-12">:
                                            <?php echo $lokasi;?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Instansi *</label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $instansi;?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Alamat</label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $alamat;?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Telepon</label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $telepon;?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Nomor Kontrak</label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $nomor_kontrak;?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Nilai Kontrak</label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $nilai_kontrak;?>
                                        </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Tanggal Pelaksanaan date</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group"> :

<?php echo $tanggal_pelaksanaan;?>
                                            </div>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. persentase pelaksanaan (%) </label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $persentase_pelaksanaan;?>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">10. Selesai Kontrak</label>
                                        <div class="col-md-6 col-xs-12">:
<?php echo $selesai_kontrak;?>
                                        </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">11. Tanggal Serah Terima</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">:
<?php echo $tanggal_serah_terima;?>
                                            </div>

                                        </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">12. Keterangan</label>
                                        <div class="col-md-6 col-xs-12">:

<?php echo $keterangan;?>
                                        </div>
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

                                            <span class="help-block">*Data Harus Di isi</span>

                                        </div>
                                    </div>

<input type="hidden" name="id" value="<?php echo $id;?>">

									<div class="form-group">

                                        <div class="col-md-6 col-xs-12">
                                              <button type="button" id="kembali" class="btn btn-primary pull-right">Kembali</button>

                                        </div>
                                    </div>


											<div class="form-group">

                                        <div class="col-md-6 col-xs-12">
                                              &nbsp;

                                        </div>
                                    </div>



                                </div>
                             <!--   <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
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
        <script type="text/javascript">
  $("#kembali").click(function() {
      window.location.href = "<?php echo base_url('pengalaman')?>";
  });
    </script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
