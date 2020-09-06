
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

                            <form class="form-horizontal" method="post" action="<?php echo base_url('peralatan/simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Peralatan</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">
<?php if ($this->session->flashdata('success')) {?>

										<div class="alert alert-info" id="success-alert">
  <strong>Warning!</strong> <?php echo $this->session->flashdata('success');?>
</div>

<?php }?>

								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nama Alat *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="nama_alat" value="<?=$nama_alat?>" id="nama_alat"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Jumlah *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="jumlah" value="<?php echo $jumlah;?>" id="jumlah"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Kapasitas</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="kapasitas" value="<?php echo $kapasitas;?>" id="kapasitas"/>
                                        </div>
                                    </div>

									     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Merk/Type</label>
                                     <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="merk" value="<?php echo $merk;?>" id="merk"/>
                                     </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Tahun pembuatan</label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="tahun" value="<?php echo $tahun;?>" id="tahun" >
                                            </div>

                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Kondisi</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="check"><input type="radio" name="kondisi" class="icheckbox" value="1" <?php echo $kondisi==1?'checked="checked"':'';?>/>Baik</label>
                                            <label class="check"><input type="radio" name="kondisi" class="icheckbox" value="2" <?php echo $kondisi==2?'checked="checked"':'';?>/>Rusak</label>

                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Lokasi Sekarang</label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="lokasi"  value="<?php echo $lokasi;?>"  id="lokasi" >
                                            </div>

                                        </div>
                                    </div>

									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Status Kepemilikan</label>
                                        <div class="col-md-4 col-xs-12">
                                            <select class="form-control select" name="status_milik" id="status_milik">
                                                <option value="1" <?php echo $status_milik==1?'selected':'';?>>Milik Sendiri</option>
                                                <option value="2" <?php echo $status_milik==2?'selected':'';?>>Milik Orang Lain</option>

                                            </select>

                                        </div>
                                    </div>


                                 		<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. Bukti kepemilikan</label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="bukti_milik" value="<?php echo $bukti_milik;?>" id="bukti_milik" >
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



									<div class="form-group">

                                      <!--  <div class="col-md-6 col-xs-12">
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;


                                        </div>-->
										          <div class="col-md-6 col-xs-12">
                                              <button type="button" id="lihat" class="btn btn-primary pull-center">Lihat Data</button>&nbsp;&nbsp;&nbsp;&nbsp;


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

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>
        <!-- END TEMPLATE -->

		<script type="text/javascript">


    $("#kembali").click(function() {
      window.location.href = "<?php echo base_url('peralatan')?>";
    });


        </script>

	     <script>

			$(document).ready (function(){
					$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#success-alert").slideUp(500);
                });

			});

        </script>


    <!-- END SCRIPTS -->
    </body>
</html>
