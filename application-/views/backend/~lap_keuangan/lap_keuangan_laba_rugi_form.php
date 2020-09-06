
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
.control-label {text-align:left!important;padding-left:20px!important;}
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

                            <form class="form-horizontal" method="post" action="<?php echo base_url('lap_keuangan/laba_rugi_simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Laporan Keuangan (Laba Rugi)</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
									&nbsp;


									<div class="form-group">
                                       &nbsp;
									     <button type="button" id="aktiva_passiva" class="btn btn-success">Aktiva dan Passiva</button>
                                        <button type="button" id="laba_rugi" class="btn btn-primary">Laba Rugi</button>


                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Tahun</label>
                                        <div class="col-md-6 col-xs-12">
                                             <select class="form-control select" name="tahun" id="tahun">
											<?php

												$now=date('Y');
												for ($a=2015;$a<=$now;$a++)

												{
													?>

                                                <option value="<?php echo $a;?>"><?php echo $a;?></option>

													 <?php
												}
												?>

                                            </select>
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">1. Penjualan *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="penjualan" id="penjualan" value="<?php echo $penjualan;?>"/>
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">2. HPP *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="hpp" id="hpp" value="<?php echo $hpp;?>"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">3. Laba Bruto *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="laba_bruto" id="laba_bruto" value="<?php echo $laba_bruto;?>"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">4. Beban Operasional *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="beban_operasional" id="beban_operasional" value="<?php echo $beban_operasional;?>"/>
                                        </div>
                                    </div>

									                  <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">5. Laba Operasional *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="laba_operasional" id="laba_operasional" value="<?php echo $laba_operasional;?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">6. Pendapatan/Beban lainnya *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="pendapatan_beban_lainnya" id="pendapatan_beban_lainnya" value="<?php echo $pendapatan_beban_lainnya;?>"/>
                                        </div>
                                    </div>

                                   <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">7. Laba/Rugi sebelum pajak *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="laba_rugi_sebelum_pajak" id="laba_rugi_sebelum_pajak" value="<?php echo $laba_rugi_sebelum_pajak;?>"/>
                                        </div>
                                    </div>

      								 <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">8. Upload Laporan Laba Rugi </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="file" title="Browse file"/>
											
                                        </div>
                                    </div>
                                    

								                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">
                                           &nbsp;
                                        </div>
                                    </div>

									                 <div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label">&nbsp;* data ini harus diisi, Boleh dituliskan angko 0 (NOL) </label>

                                    </div>


										               <div class="form-group">
                                        <label class="col-md-5 col-xs-12 control-label">Apakah laporan ini di audit oleh akuntan publik ?</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="check"><input type="radio" name="diaudit_akuntan" class="icheckbox" value="1" checked="checked"/>Ya</label>
                                            <label class="check"><input type="radio" name="diaudit_akuntan" class="icheckbox" value="2" checked=""/>Tidak</label>

                                        </div>
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
  
  
  $("#lihat_data").click(function(){
   window.location = "<?php echo base_url('lap_keuangan/laba_rugi_list');?>";
});

  $("#tampilkan").click(function(){
     window.location = "<?php echo base_url('lap_keuangan/aktiva_passiva_show/');?>" + tahun;
  });

});
</script>


        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
