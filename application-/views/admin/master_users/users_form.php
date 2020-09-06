
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
                       Users Form
                
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Konfigurasi</a></li>
                        <li class="active">Users Form</li>
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
                                <form role="form" method="post" action="<?php echo base_url('konfigurasi/users_simpan');?>">
									<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" placeholder="">
                                        </div>
										
										   <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="">
                                        </div>
										
										 <div class="form-group">
                                            <label>Group user</label>
                                            <select class="form-control" name="group" id="group">
											 <option>--Pilih--</option>
											<?php
											foreach ($arrayGroup->result() as $row)
												{
												
											?>
                                                <option value="<?php echo $row->id;?>" <?php echo $group==$row->id?'selected':'';?>><?php echo $row->description;?></option>
                                             <?php
												}	
											?>												
                                            </select>
                                        </div>
                          
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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
    </body>
</html>