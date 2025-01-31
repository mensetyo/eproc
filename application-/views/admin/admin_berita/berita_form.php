
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('backend/')?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('backend/')?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('backend/')?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('backend/')?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('backend/')?>css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
  <?php $this->load->view('admin/include/header');?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/include/sidemenu');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Berita
                       
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Berita</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class='row'>
                        <div class='col-md-12'>
						
									<?php if ($this->session->flashdata('success')) {?>

									<div class="alert alert-success alert-dismissable" id="success-alert">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b>Alert!</b> <?php echo $this->session->flashdata('success');?>
                                    </div>
									
										<?php }?>  
										
										
                            <div class='box box-info'>
                                <div class='box-header'>
                                    <h3 class='box-title'>&nbsp;</h3>
                                    <!-- tools box -->
                              
                                </div><!-- /.box-header -->
                                  <form method="post" action="<?php echo base_url('admin_berita/simpan');?>"  enctype="multipart/form-data">
								  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
										<div class='box-body pad'>
											<div class="form-group">
												<label for="exampleInputEmail1">Kategori</label>
											
											  <select class="form-control" name="kategori_id" id="kategori_id">
                                                <option>--Pilih--</option>
												<?php
												$query = $this->db->query("select * from t_berita_kategori");

													foreach ($query->result() as $row)
													{
												?>
													<option value="<?php echo $row->id;?>" <?php echo $kategori_id==$row->id?'selected':'';?>><?php echo $row->kategori;?></option>
												<?php
													}
												?>
                                            </select>
											
											</div>
											
											<div class="form-group">
												<label for="exampleInputEmail1">Judul</label>
												<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>" placeholder="">
											</div>
										
										       <label for="exampleInputEmail1">Headline</label>
                                            <input type="text" class="form-control" id="headline" name="headline" value="<?php echo $headline; ?>" placeholder="">
                                        </div>
										
                                        <div class="form-group">
                                            <label for="exampleInputFile">Berita</label>
                                        <textarea id="editor1" class="form-control" name="berita" rows="10" cols="80">
                                           <?php echo $berita; ?>
                                        </textarea>                        
                                      </div>
									      <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="file" name="file" >
											     <?php
										  if($gambar<>""){
											  ?>
											<img src="<?php echo base_url();?>uploads/berita/<?php echo $gambar; ?>" width="70px" height="70px"><?php echo $gambar; ?>
											<?php
										  }
										  ?>
										</div>
										
										
									     <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                             
								  </form>
								</div>
                            </div><!-- /.box -->

                   
                        </div><!-- /.col-->
                    </div><!-- ./row -->



                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('backend/')?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('backend/')?>js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- CK Editor -->
        <script src="<?php echo base_url('backend/')?>js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('backend/')?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
		
			
		<script type="text/javascript">
		
	
			$(document).ready (function(){
					$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#success-alert").slideUp(500);
                });

			});
			
			
        </script>
		
		

    </body>
</html>