
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

		
	<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>        
	
	<script>

	$().ready(function() {
	
		$("#akta").validate({
			rules: {
				nomor: "required",
				tgl_srt: "required",
				notaris: "required",
				filename: {
						  required: true,
						  extension: "pdf|png|jpeg"
						}
				},
			messages: {
				nomor: "Wajib di isi",
				tgl_srt: "Wajib di isi",
				notaris: "Wajib di isi",
				filename: "File harus pdf"

			}
		});


	});
	</script>
	

	<style>
		#commentForm {
			width: 500px;
		}
		#commentForm label {
			width: 250px;
		}
		#commentForm label.error, #commentForm input.submit {
			margin-left: 253px;
		}

		#signupForm label.error {
			margin-left: 10px;
			width: auto;
			display: inline;
		}
		#newsletter_topics label.error {
			display: none;
			margin-left: 103px;
		}
	</style>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tgl_srt" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#perubahan_tgl_srt" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );


  </script>
  
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
                            
                            <form class="form-horizontal" method="post" id="akta" action="<?php echo base_url('akta/simpan');?>"  enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Akta</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                           
                                <div class="panel-body">                                                                        
                                     <?php if ($this->session->flashdata('success')) {?>
											<div class="row">
												<div class="col-md-12">
													<div class="alert alert-info push-down-20">
														<span style="color: #FFF500;">Informasi !</span> <?php echo $this->session->flashdata('success');?>.
														<button type="button" class="close" data-dismiss="alert">×</button>
													</div>
												</div>
											</div>
									<?php }?>
									<input type="hidden" name="id" id="id" value="<?php echo $id;?>" >
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nomor *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="nomor" id="nomor" value="<?php echo $nomor;?>"/>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">2. Tanggal Surat *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tgl_srt" id="tgl_srt" value="<?php echo $tgl_srt;?>">                                            
                                            </div>
                                          
                                        </div>
                                    </div>
									
									
						
						
									
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Notaris *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="notaris" id="notaris" value="<?php echo $notaris;?>"/>
                                        </div>
                                    </div>
									
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Alamat Notaris </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="alamat_notaris" id="alamat_notaris" rows="5"><?php echo $alamat_notaris;?></textarea>
                                         
                                        </div>
                                    </div>
                                    
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Dokumen (pdf)*</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="filename" title="Browse file" required/>
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
                                        <label class="col-md-3 col-xs-12 control-label">6. Nomor </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="perubahan_nomor" id="perubahan_nomor" value="<?php echo $perubahan_nomor;?>"/>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">7. Tanggal  Surat </label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="perubahan_tgl_srt" id="perubahan_tgl_srt" value="<?php echo $perubahan_tgl_srt;?>">                                            
                                            </div>
                                          
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Nama Notaris</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="perubahan_notaris" id="perubahan_notaris"  value="<?php echo $perubahan_notaris;?>"/>
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. Alamat Notaris </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="perubahan_alamat_notaris" id="perubahan_alamat_notaris" rows="5"><?php echo $perubahan_alamat_notaris;?></textarea>
                                         
                                        </div>
                                    </div>
                                    
                              
											
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">10. Dokumen </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file2" id="filename" title="Browse file"/>
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
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
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
       <!-- <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
       <!-- <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>-->                
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
        $('li a').click(function(e) {
    	    $('#myModal img').attr('src', $(this).attr('data-img-url')); 
    	});
    	
        </script>
    <!-- END SCRIPTS -->                   
    </body>
</html>






