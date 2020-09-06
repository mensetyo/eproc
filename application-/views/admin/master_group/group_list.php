
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Data Tables</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?=base_url('backend/')?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?=base_url('backend/')?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?=base_url('backend/')?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="<?=base_url('backend/')?>css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?=base_url('backend/')?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
                        Group
                       
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Konfigurasi</a></li>
                        <li class="active">Group</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-8">
                           
						   
						   				<?php if ($this->session->flashdata('success')) {?>

									<div class="alert alert-success alert-dismissable" id="success-alert">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b>Alert!</b> <?php echo $this->session->flashdata('success');?>
                                    </div>
									
										<?php }?>  
				
				
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><button id="tambah" class="btn btn-primary btn-sm">Tambah</button></h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											foreach ($query->result() as $row)
												{
										?>
                                            <tr>
                                                <td><?php echo $row->id;?></td>
                                                <td><?php echo $row->description;?></td>
                                                <td width="120px">
													<div class="btn-group">
														<button type="button" class="btn btn-info">Action</button>
														<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="<?php echo base_url('konfigurasi/group_delete/');?><?php echo $row->id;?>" onclick="return confirm('Apakah Anda Yakin untuk hapus data ini ?');">Delete</a></li>
															<li><a href="<?php echo base_url('konfigurasi/group/view/');?><?php echo $row->id;?>">View</a></li>
															<li><a href="<?php echo base_url('konfigurasi/group/edit/');?><?php echo $row->id;?>">Edit</a></li>
														</ul>
													</div>
												</td>
                                            </tr>
								<?php
												}
								?>
                                           
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?=base_url('backend/')?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?=base_url('backend/')?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?=base_url('backend/')?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url('backend/')?>js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
		
		<script type="text/javascript">
		
			$("#tambah").click(function() {
				  window.location.href = "<?php echo base_url('konfigurasi/group/form')?>";
			});

			$(document).ready (function(){
					$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#success-alert").slideUp(500);
                });

			});
			
			
        </script>
		

    </body>
</html>