
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

		   <style>
.control-label {text-align:left!important;padding-left:140px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>

                 
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                   
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
                            
                            <form class="form-horizontal" method="post" action="<?php echo base_url('akta/simpan');?>"  enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Akta</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                           
                                <div class="panel-body">                                                                        
              
				
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nomor *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                          <?php echo $nomor;?>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">2. Tanggal Surat *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                               <?php echo $tgl_srt;?>     
                                            </div>
                                          
                                        </div>
                                    </div>
									

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Notaris *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                           <?php echo $notaris;?>
                                        </div>
                                    </div>
									
									
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Dokumen **</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                          
											  <span class="help-block"><?php echo $dok;?><span>
                                            <span class="help-block">* PDF</span>
                                           
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"><strong>Akta Perubahan Terakhir </strong></label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           &nbsp;
                                        </div>
                                    </div>	

									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Nomor </label>
                                        <div class="col-md-6 col-xs-12">                                            
											<?php echo $perubahan_nomor;?>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">6. Tanggal  Surat </label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                          <?php echo $perubahan_tgl_srt;?>                                          
                                            </div>
                                          
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Notaris</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                          <?php echo $perubahan_notaris;?>
                                        </div>
                                    </div>
											
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Dokumen </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                            <span class="help-block"><?php echo $perubahan_dok;?><span>
                                            <span class="help-block">*PDF</span>
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                            <span class="help-block">*Data Harus Di isi</span>
                                            <span class="help-block">**Dokumen yang diupload adalah scan dokumen ASLI, Bukan Fotokopi</span>
                                        </div>
                                    </div>
									
                          
									
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
								<!-- <div class="panel-footer">
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
        		<script type="text/javascript">
			$("#kembali").click(function() {
				  window.location.href = "<?php echo base_url('akta')?>";
			});
        </script>
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






