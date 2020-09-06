
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>JMTO e-procurement</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
           <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->  

	<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>        

	
	<script>
	/*$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});*/

	$().ready(function() {
	
		$("#data_perusahaan").validate({
			rules: {
				nama_perusahaan: "required",
				bentuk_perusahaan: "required",
				npwp: "required",
				alamat: "required",
				propinsi: "required",
				kota: "required",
				telp: "required",
			
			},
			messages: {
				nama_perusahaan: "Wajib di isi",
				bentuk_perusahaan: "Wajib di isi",
				npwp: "Wajib di isi",
				alamat: "Wajib di isi",
				propinsi: "Wajib di isi",
				kota: "Wajib di isi",
				email: "Wajib di isi",
				telp: "Wajib di isi",
				
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
                            
                            <form class="form-horizontal"  id="data_perusahaan"  method="post" action="<?php echo base_url('data_perusahaan/simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Data Perusahaan</strong> </h3>
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
                                        <label class="col-md-3 col-xs-12 control-label">1. Bentuk Perusahaan*</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="bentuk_perusahaan" id="bentuk_perusahaan">
											<option value="">-- Pilih --</option>
											<?php
											foreach ($tipe_perusahaan->result() as $row)
											{
											?>
                                                <option value="<?php echo $row->id;?>" <?php echo $bentuk_perusahaan==$row->id?'selected':'';?> ><?php echo $row->tipe_perusahaan;?></option>
                                              <?php
											}
											  ?>
                                            </select>
                                         
                                        </div>
                                    </div>
									
			
									
								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Nama Perusahaan/Individu*</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo $nama_perusahaan;?>"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. NPWP*</label>
                                        <div class="col-md-3 col-xs-12">                                            
                                            <input type="text" class="form-control" name="npwp" id="npwp" value="<?php echo $npwp;?>"/>
                                        </div>
                                        <label class="col-md-1 col-xs-12 control-label-left">Upload NPWP**</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                            <input type="file" class="form-control" name="file_npwp" id="file_npwp" value=""/>
                                        </div>
                                    </div>
									
											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Nomor Pengukuhan PKP</label>
                                        <div class="col-md-3 col-xs-12">                                            
                                            <input type="text" class="form-control" name="no_pengukuhan" id="no_pengukuhan"  value="<?php echo $no_pengukuhan;?>"/>
                                        </div>
                                        <label class="col-md-1 col-xs-12 control-label-left">Upload PKP**</label>
                                        <div class="col-md-2 col-xs-12">                                            
                                            <input type="file" class="form-control" name="file_no_pengukuhan" id="file_no_pengukuhan" value=""/>
                                        </div>
                                    </div>
									
										
									

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Alamat*</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="alamat" id="alamat" rows="5"><?php echo $alamat;?></textarea>
                                         
                                        </div>
                                    </div>
                                    
                               <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Propinsi *</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                              
											
											<select class="form-control select" name="propinsi" id="propinsi">
											<option value="">-- Pilih --</option>
											<?php
											foreach ($propinsi->result() as $row)
											{
											?>
                                                <option value="<?php echo $row->id;?>" <?php echo $vpropinsi==$row->id?'selected':'';?> ><?php echo $row->name;?></option>
                                              <?php
											}
											  ?>
                                            </select>
                                         
                                        </div>
                                    </div>
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Kabupaten/Kota *</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="kota" id="kota">
                                                <?php
												$query = $this->db->query("select * from regencies");

												foreach ($query->result() as $row)
												{												
												?>
												<option value="<?php echo $row->id;?>" class="<?php echo $row->province_id;?>" <?php echo $vkota==$row->id?'selected':'';?> ><?php echo $row->name;?></option>
												<?php											
												}
												?>
                                            </select>
											
											
												
                                         
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Telp*</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $telp;?>"/>
                                        </div>
                                    </div>
                               
							   
							       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. Fax</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="fax" id="fax" value="<?php echo $fax;?>"/>
                                        </div>
                                    </div>
                                    
									
									  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">10. Mobile Phone</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="hp" id="hp" value="<?php echo $hp;?>"/>
                                        </div>
                                    </div>
                                    	  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">11. Kode Pos</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" value="<?php echo $kode_pos;?>"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">11. Email*</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>"/>
                                        </div>
                                    </div>
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">12. Web Site</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="website" id="website" value="<?php echo $website;?>"/>
                                        </div>
                                    </div>
									
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">13. Kantor cabang</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="radio" name="kantor_cabang" value="1" class="icheckbox" <?php echo $kantor_cabang=="1"?'checked':'';?>/>Ya</label>
                                            <label class="check"><input type="radio" name="kantor_cabang" value="2" class="icheckbox" <?php echo $kantor_cabang=="2"?'checked':'';?>/>Tidak</label>
                                          
                                        </div>
                                    </div>
									
									
								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                           &nbsp;
                                        </div>
                                    </div>

						
									
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp;*Data Harus Di isi </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                           
                                            <span class="help-block"></span>
                                           
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                               
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                          
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
       <!-- <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>-->
			<script src="<?=base_url('frontend/js/')?>jquery.chained.min.js"></script>
     <script>
            $("#kota").chained("#propinsi"); 
          //  $("#kecamatan").chained("#kota"); 
     </script>	
      <!--  <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-file-input.js"></script>

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
        <script>
        jQuery(function($){
            $("#npwp").mask("99.999.999.9-999.999");
        });
		
		
		
			$(document).ready (function(){
					$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#success-alert").slideUp(500);
                });

			});


    
        </script>
	
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






