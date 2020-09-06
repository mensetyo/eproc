
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
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     

	<body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            

            <!-- PAGE CONTENT -->
            <div class="page-content">
               
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Daftar Pemilik</h3>
                                                       
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>No KTP</th>
                                                <th>Alamat</th>
                                                <th>Saham</th>
                                                <th>Satuan</th>
                                                <th>Dokumen</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
									
								foreach ($arrayData->result() as $row)
								{
								?>
                                            <tr>
                                                <td><?php echo $row->nama;?></td>
                                                <td><?php echo $row->no_ktp;?></td>
                                                <td><?php echo $row->alamat;?></td>
                                                <td><?php echo $row->saham;?></td>
                                                <td><?php echo $row->satuan;?></td>
                                                <td><a href="<?php echo base_url('uploads/');?><?php echo $row->dok;?>">Download</a></td>
                                                <td><a href="<?php echo base_url('pemilik/delete/');?><?php echo $row->id;?>">Delete</a> | <a href="<?php echo base_url('pemilik/update/');?><?php echo $row->id;?>">Edit </a></td>
                                            
                                            </tr>
                               <?php
								}
								?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

           

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
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
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/settings.js"></script>
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>






