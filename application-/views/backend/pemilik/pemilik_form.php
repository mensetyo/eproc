
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>JMTO eProc</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->


	<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>        
	
	<script>
	$().ready(function() {
	
		$("#pemilik").validate({
			rules: {
				nama: "required",
				no_ktp: "required",
				alamat: "required",
				saham: "required",
				},
			messages: {
				nama: "Wajib di isi",
				no_ktp: "Wajib di isi",
				alamat: "Wajib di isi",
				saham: "Wajib di isi",
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
                
              <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                
                    <li class="active">Pemilik</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" id="pemilik" action="<?php echo base_url('pemilik/simpan');?>" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Pemilik</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                           
                                <div class="panel-body">                                                                        
				<?php if ($this->session->flashdata('success')) {?>

										<div class="alert alert-info" id="success-alert">
										  <strong>Informasi !</strong> <?php echo $this->session->flashdata('success');?>
										</div>

				<?php }?>                                    
                           		
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nama *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Nomor KTP *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="no_ktp" id="no_ktp" value="<?php echo $no_ktp;?>"/>
                                        </div>
                                    </div>
									
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Alamat</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="alamat" id="alamat" rows="5"><?php echo $alamat;?></textarea>
                                         
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Saham *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="saham" id="saham" value="<?php echo $saham;?>"/>
                                        </div>
                                    </div>
									
									      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Satuan</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="radio" name="satuan" class="icheckbox" value="1" <?php echo $satuan==1?'checked':'';?>/>Lembar</label>
                                            <label class="check"><input type="radio" name="satuan" class="icheckbox" value="2" <?php echo $satuan==2?'checked':'';?>/>Prosentase</label>
                                          
                                        </div>
                                    </div>
									

		
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Softcopy KTP **</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="filename" title="Browse file" required/>
								
											<?php
											if($dok<>""){
											?>
                                             <span class="help-block"><?php echo $dok;?></span>
											 <?php
											}
											?>
                                            <span class="help-block">* PDF</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                            <span class="help-block">* Data Harus Di isi</span>
                                            <span class="help-block">** Dokumen yang diupload adalah scan dokumen ASLI, Bukan Fotokopi</span>
                                        </div>
                                    </div>
									

									

									
									<div class="form-group">
                               
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;
											  
               
                                        </div>
										          <div class="col-md-6 col-xs-12">                                                                                                                                        
                                              <button type="button" id="batal" class="btn btn-primary pull-center">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp;
											  
               
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

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>    
		
		<script type="text/javascript">



			$("#batal").click(function() {
				  // alert(this.id);
				window.location.href = "<?php echo base_url('pemilik')?>";
			});

        </script>
		
        <script>
			$(document).ready (function(){
					$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#success-alert").slideUp(500);
                });

			});
        </script>
           <script type="text/javascript">
        $('li a').click(function(e) {
    	    $('#myModal img').attr('src', $(this).attr('data-img-url')); 
    	});
    	
        </script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






