
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


    <script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>  

	<script>

	$().ready(function() {
	
		$("#tdp").validate({
			rules: {
				jenis_ijin: "required",
				nomor: "required",
				berlaku_sampai: "required",
				instansi_penerbit: "required",
                    <?php
					if($file==""){
					?>
				file: {
						  required: true,
						  extension: "pdf"
                        }
                        <?php
                     }
                        ?>
				},
			messages: {
				jenis_ijin: "Wajib di isi",
				nomor: "Wajib di isi",
				berlaku_sampai: "Wajib di isi",
				instansi_penerbit: "Wajib di isi",
                <?php
				if($file==""){
				?>
                file: "File harus pdf ukuran file max 2 MB"
                <?php
                    }
                ?>

			}
		});
	});
	</script>
	
	

  
  
<style>
.control-label {text-align:left!important;padding-left:140px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>


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
    $( "#tgl_terbit" ).datepicker({ dateFormat: 'dd-mm-yy' });
    $( "#tgl_sampai" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
  </script>	
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
                
                    <li class="active"> Ijin Domisili</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" id="tdp" method="post" action="<?php echo base_url('ijin_domisili/simpan');?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" >
							<div class="panel panel-default">
                                <div class="panel-heading">
                                        <div class="page-title">                    
											<h3>Ijin Domisili </h3>
										</div>
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
                           		
								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nomor  * </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="nomor" id="nomor"  value="<?=$nomor;?>" autocomplete="off"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Instansi Pemberi  *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="instansi_penerbit" id="instansi_penerbit" value="<?=$instansi_penerbit;?>" autocomplete="off"/>
                                        </div>
                                    </div>
                                    
                                 
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">3. Tanggal Terbit *</label>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tgl_terbit" id="tgl_terbit" value="<?=$tgl_terbit;?>" autocomplete="off">                                            
                                            </div>
                                          
                                        </div>
                                    </div>


						
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">4. Berlaku Sampai  *</label>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tgl_sampai" id="tgl_sampai" value="<?=$tgl_sampai;?>" autocomplete="off">                                            
                                            </div>
                                          
                                        </div>
                                    </div>
									
						
                                    
                   
			
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Upload  * </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="file" title="Browse file"/>
											<?php
											if($file<>"0" && $file<>""){
											?>
                                  
                                             <a href="#" onclick="PopupCenter('<?php echo base_url('uploads/ijin_usaha/'.$file); ?>','xtf','1000','700')">Lihat</a>  
											 <?php
                                            }
                                            
                                         

											?>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp;*File PDF </label>
										
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                            <span class="help-block"></span>
                                           
                                        </div>
                                    </div>
									
										<div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label">&nbsp;*Dokumen yang diupload adalah scan dokumen ASLI, Bukan Fotokopi</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                            <span class="help-block"></span>
                                           
                                        </div>
                                    </div>
									
									<div class="form-group">
                               
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button> &nbsp;
                            
                                          
                                        </div>
										  <div class="col-md-1 col-xs-12">                                                                                                                                        
                                              <button type="button" id="batal" class="btn btn-primary pull-right">Batal</button> &nbsp;
                            
                                          
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
        <!--<script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>-->
      <!--  <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>-->
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
        <!-- END TEMPLATE -->
		
		<script type="text/javascript">
			$("#batal").click(function() {
				  window.location.href = "<?php echo base_url('ijin_usaha')?>";
			});
        </script>
		
		   <script type="text/javascript">
        $('li a').click(function(e) {
    	    $('#myModal img').attr('src', $(this).attr('data-img-url')); 
    	});
    	
        </script>
    <!-- END SCRIPTS -->                   
    </body>
</html>






