
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
 
	<body class="skin-blue">
	<?php $this->load->view('admin/include/header');?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
   	<?php $this->load->view('admin/include/sidemenu');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Personil View
                
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Personil View</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                    <div class="box-body">
                          
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">NIK</label> :
                                             <?php echo $nik; ?>
                                        </div>
										
										   <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label> :
                                            <?php echo $nama; ?>
                                        </div>
										
											   <div class="form-group">
                                            <label for="exampleInputEmail1">Foto</label> :
                                            <img src="<?php echo base_url();?>uploads/foto/<?php echo $foto;?>" width="250px" height="150px">
                                        </div>
										
										
										
										 <div class="form-group">
                                            <label>Group user</label> :
											<?php echo $group; ?>
                                 
								 
                                        </div>
                          
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="button" id="kembali" class="btn btn-primary">Kembali</button>
                                    </div>
                            </div><!-- /.box -->

          

                        </div><!--/.col (left) -->
                        <!-- right column -->

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('backend/')?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('backend/')?>js/AdminLTE/app.js" type="text/javascript"></script>
		
		<script type="text/javascript">
		
			$("#kembali").click(function() {
				  window.location.href = "<?php echo base_url('admin_personil')?>";
			});


			
			
        </script>
		
		
		
    </body>
</html>