
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>JMTO Eproc</title>
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


<script>

    function PopupCenter(url, title, w, h) {
        // Fixes dual-screen position                         Most browsers      Firefox
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }
</script>



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

                            <form class="form-horizontal" method="post" action="<?php echo base_url('download_upload/simpan');?>" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Download dan Upload Dokumen</strong> </h3>
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
                                        <label class="col-md-4 col-xs-12 control-label">1. Surat Kuasa (Jika dikuasakan) </label>
                                         <div class="col-md-6 col-xs-12">
                                           <a href="<?php echo base_url('uploads/doc/surat_kuasa.doc');?>">  : surat_kuasa.doc</a>

                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">2. Pakta Integritas </label>
                                         <div class="col-md-6 col-xs-12">
                                           <a href="<?php echo base_url('uploads/doc/pakta_integritas.doc');?>">: pakta_integritas.doc</a>

                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">3. Surat Pernyataan Minat </label>
                                         <div class="col-md-6 col-xs-12">
                                           <a href="<?php echo base_url('uploads/doc/surat_pernyataan_minat.doc');?>">: surat_pernyataan_minat.doc</a>

                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">4. Formulir Keikutsertaan </label>
                                         <div class="col-md-6 col-xs-12">
                                           <a href="<?php echo base_url('uploads/doc/formulir_keikutsertaan.doc');?>">: formulir_keikutsertaan.doc</a>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12 col-xs-12 control-label">
                                        Download Dokumen diatas lalu di isi dengan lengkap, dibubuhi materai (jika diminta)
                                        dan ditanda-tangan. Selanjutnya di scan dalam bentuk *.pdf lalu upload dibawah ini:
                                         </label>

                                    </div>




                                    <input type="hidden" name="id" value="<?php echo $id;?>">


										<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">1. Upload Surat Kuasa (Jika Dikuasakan)</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="surat_kuasa" id="surat_kuasa" title="Browse file"/>
                                 <?php
                                if($surat_kuasa<>""){
                                ?>
                                          <a href="#" onclick="PopupCenter('<?php echo base_url('uploads/soft_copy/'.$surat_kuasa); ?>','xtf','1000','700')">Lihat</a>
                                 <?php
                                }
                                ?>
                                        </div>
                                    </div>


								<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">2. Pakta Integritas</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="pakta_integritas" id="pakta_integritas" title="Browse file"/>
                                 <?php
                                if($pakta_integritas<>""){
                                ?>

                                              <a href="#" onclick="PopupCenter('<?php echo base_url('uploads/soft_copy/'.$pakta_integritas); ?>','xtf','1000','700')">Lihat</a>
                               <?php
                                }
                                ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">3. Surat Pernyataan Minat</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name=surat_pernyataan_minat id="surat_pernyataan_minat" title="Browse file"/>
                                 <?php
                                if($surat_pernyataan_minat<>""){
                                ?>
                                          <a href="#" onclick="PopupCenter('<?php echo base_url('uploads/soft_copy/'.$surat_pernyataan_minat); ?>','xtf','1000','700')">Lihat</a>
                                 <?php
                                }
                                ?>
                                        </div>
                                    </div>


                                       <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">4. Formulir Keikutsertaan</label>
                                         <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name=formulir_keikutsertaan id="formulir_keikutsertaan" title="Browse file"/>
                                <?php
                                if($formulir_keikutsertaan<>""){
                                ?>
                                        <a href="#" onclick="PopupCenter('<?php echo base_url('uploads/soft_copy/'.$formulir_keikutsertaan); ?>','xtf','1000','700')">Lihat</a>
                                <?php
                                }
                                ?>
                                        </div>
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
