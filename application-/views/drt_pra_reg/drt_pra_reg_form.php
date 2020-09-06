
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>JMTO e-Procurement</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->

        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend/')?>css/styles.css" media="screen" />
		        <script type="text/javascript" src="<?=base_url('frontend/')?>js/plugins/jquery/jquery.min.js"></script>
		   	<script src="<?php echo base_url();?>frontend/dist/jquery.validate.js"></script>     
			
	<script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				nm_perusahaan: "required",
				nama_lengkap: "required",
				user_id: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				konfirmasi_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				agree: "required"
			},
			messages: {
				nm_perusahaan: "Please enter your firstname",
				nama_lengkap: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				konfirmasi_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
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
	#signupForm {
		width: 100%;
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
  
  
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Syarat dan Ketentuan </h4>
        </div>
        <div class="modal-body">
          <p>Isi Konten</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
        <!-- page container -->
        <div class="page-container">
            
            <!-- page header -->
            <?php $this->load->view('include/frontend/header')?>
		   <!-- ./page header -->
            
            <!-- page content -->
            <div class="page-content">
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1> Registrasi</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Pra Registrasi</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
       
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
					  <?php 
					  if(validation_errors()){
						  ?>
							<div class="alert alert-danger">
							<strong>Mohon Di Isi ! </strong>
							<?php
								echo validation_errors(); ?>
							</div>
					  <?php
					  }
					  ?>		

				
                      <form method="post" action="<?php echo base_url('firstpage/save_peserta')?>" name="signupForm" id="signupForm2">
                        <div class="row">
                            <div class="col-md-7 this-animate" data-animate="fadeInLeft">
                              
                               <div class="text-column">
                                  <!--  <h4>Contact Us</h4>-->
                                    <div class="text-column-info">
                                       Silahkan isi data berikut untuk memulai untuk proses pendaftaran :
                                    </div>
                                </div>
                              
                                <div class="row">
                                  
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bentuk perusahaan <span class="text-hightlight">*</span></label>
                                            <select class="form-control" id="tipe_perusahaan" name="tipe_perusahaan">
												<option>-- Pilih --</option>
												<?php
													$query = $this->db->query("select * from drt_tipe_perusahaan where status=1");

													foreach ($query->result() as $row)
													{												
													?>
												<option value="<?php echo $row->id;?>" <?php echo $row->id==$tipe_perusahaan?'selected':'';?>><?php echo $row->tipe_perusahaan;?></option>
												<?php											
												}
												?>
											  </select>
                                        </div>
                                    </div>
									
					
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Perusahaan <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control" name="nm_perusahaan" id="nm_perusahaan" value="<?php echo $nm_perusahaan;?>" />
                                        </div>
                                    </div>
									
									  <div class="col-md-12">
										<div class="form-group">
                                            <label>Alamat <span class="text-hightlight">*</span></label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="8"><?php echo $alamat;?></textarea>
                                        </div>
										
                                    </div>
									
									 <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Propinsi <span class="text-hightlight">*</span></label>
                                             <select class="form-control" id="propinsi" name="propinsi">
												<option>-- Pilih --</option>
												<?php
												$query = $this->db->query("select * from provinces");

												foreach ($query->result() as $row)
												{												
												?>
												<option value="<?php echo $row->id;?>" <?php echo $row->id==$propinsi?'selected':'';?>><?php echo $row->name;?></option>
												<?php											
												}
												?>
											  </select>
                                        </div>
                                    </div>
									
									 <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kabupaten/Kota <span class="text-hightlight">*</span></label>
											 <select class="form-control" id="kota" name="kota">
												<option>-- Pilih --</option>
											
												<?php
												$query = $this->db->query("select * from regencies");

												foreach ($query->result() as $row)
												{												
												?>
												<option value="<?php echo $row->id;?>" class="<?php echo $row->province_id;?>" <?php echo $row->id==$kota?'selected':'';?>><?php echo $row->name;?></option>
												<?php											
												}
												?>
												</select>
                                        </div>
                                    </div>
	
									
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg pull-right">Selanjutnya</button>
                            </div>
							<div class="col-md-5 this-animate" data-animate="fadeInRight">
							    <div class="text-column">
                                  <!--  <h4>Contact Us</h4>-->
                                    <div class="text-column-info">
                                      UserID dan password yang nantinya akan digunakan untuk login
                                    </div>
                                </div>
							   <div class="row">
                                  <div class="col-md-12">
                                        <div class="form-group">
                                            <label>User ID <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $user_id;?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password <span class="text-hightlight">*</span></label>
                                            <input type="password" class="form-control" name="password" id="password" value="<?php echo $password;?>"/>
                                        </div>
                                    </div>
									 <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Konfirmasi Password <span class="text-hightlight">*</span></label>
                                            <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" value="<?php echo $konfirmasi_password;?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Lengkap <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap;?>" />
                                        </div>
										    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Konfirmasi Email <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control" name="konfirmasi_email" id="konfirmasi_email" value="<?php echo $konfirmasi_email;?>"/>
                                        </div>
                                    </div>
									
									<div class="col-md-12">
                                        <div class="form-group">
                                        <label>&nbsp; Security code <span class="text-hightlight">*</span></label>
                                           <?php echo $captcha?> <br/><input type="text" class="form-control" name="security_code" id="security_code" value="<?php echo $security_code; ?>"/><a href="#" onclick="parent.window.location.reload(true)">[perbarui gambar]</a>
                                        </div>
                                    </div>
                                        
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label>&nbsp; <span class="text-hightlight">*</span></label>
                                            <label><input type="checkbox" value="1" name="agree" id="agree" <?php echo $setuju==1?'checked':''; ?>>Setuju <a data-toggle="modal" href="#myModal">Baca Syarat dan Ketentuan</a> </label>
                                        </div>
                                    </div>
                                </div>
															
							</div>						 
                        </div>
						</form>
                        &nbsp;&nbsp;
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
            </div>
            <!-- ./page content -->
            
                <!-- page footer -->
        <?php $this->load->view('include/frontend/footer'); ?>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->

        <script type="text/javascript" src="<?=base_url('frontend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?=base_url('frontend/')?>js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?=base_url('frontend/')?>js/plugins/appear/jquery.appear.js"></script>


        
        <script type="text/javascript" src="<?=base_url('frontend/')?>js/actions.js"></script>  
		
	<script src="<?=base_url('frontend/js/')?>jquery.chained.min.js"></script>
     <script>
            $("#kota").chained("#propinsi"); 
          //  $("#kecamatan").chained("#kota"); 
     </script>



        <!-- ./page scripts -->
    </body>
</html>






