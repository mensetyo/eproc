
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
					
					<?php if ($this->session->flashdata('after_save')) {?>

							<div class="alert alert-info"><?php echo $this->session->flashdata('after_save');?></div>

					<?php }?>

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
        <script type="text/javascript" src="<?=base_url('frontend/')?>js/plugins/jquery/jquery.min.js"></script>
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






