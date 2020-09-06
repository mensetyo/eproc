
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

        <!-- CSS INCLUDE -->
           <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>        <!-- EOF CSS INCLUDE -->

    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
       <?php $this->load->view('include/backend/sidebar_dsb'); ?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
            <?php $this->load->view('include/backend/header'); ?>
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2>&nbsp;</h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">Dashboard Rekanan</div>
                                <div class="panel-body">
                 <!--  <div class="col-md-3">
                    
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-file"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">0</div>
                                    <div class="widget-title">E-PROC</div>
                                    <div class="widget-subtitle">Informasi Pengadaan Barang dan Jasa</div>
                                </div>

                            </div>
              
                        </div>-->

				
                        
                        		<!--<div class="col-md-3">

                       
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-dashboard"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">&nbsp;</div>
                                    <div class="widget-title">DASHBOARD</div>
                                    <div class="widget-subtitle">&nbsp;</div>
                                </div>
                            </div>
                   
                        </div>-->
                        
                        <div class="col-md-3">
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo base_url('download_upload');?>';">
                                <div class="widget-item-left">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">&nbsp;</div>
                                    <div class="widget-title">Module DRT</div>
                                    <div class="widget-subtitle">&nbsp;</div>
                                </div>
                            </div>
                            <!-- END WIDGET MESSAGES -->
                        </div>
                        


                                </div>



                            </div>
                            <!-- END BORDERED TABLE SAMPLE -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">

                            <!-- START SALES BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Dokumen Rekanan</h3>
                                        <span>&nbsp;</span>
                                    </div>


                                </div>
                                <div class="panel-body">
                                    <div class="row stacked">
                                        <div class="col-md-4">

                                            <div class="progress-list">
                                                <div class="pull-left"><strong>Lengkap</strong></div>
                                                <div class="pull-right">0</div>
                                                <div class="progress progress-small progress-striped active">
                                                    &nbsp;
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="pull-left"><strong>Kurang Lengkap</strong></div>
                                                <div class="pull-right">0</div>
                                                <div class="progress progress-small progress-striped active">
                                                    &nbsp;
                                                </div>
                                            </div>

                                

                                


                                        </div>
                                        <div class="col-md-8">
                                            <div id="dashboard-map-seles" style="width: 100%; height: 200px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SALES BLOCK -->

                        </div>
                        <div class="col-md-3">

                                      <!-- START SALES BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Pengadaan</h3>
                                        <span>&nbsp;</span>
                                    </div>


                                </div>
                                <div class="panel-body">
                                    <div class="row stacked">
                                        <div class="col-md-4">

                                            <div class="progress-list">
                                                <div class="pull-left"><strong>Undangan</strong></div>
                                                <div class="pull-right">0</div>
                                                <div class="progress progress-small progress-striped active">
                                                    &nbsp;
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="pull-left"><strong>Yang diikuti</strong></div>
                                                <div class="pull-right">0</div>
                                                <div class="progress progress-small progress-striped active">
                                                    &nbsp;
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="pull-left"><strong>History</strong></div>
                                                <div class="pull-right">0</div>
                                                <div class="progress progress-small progress-striped active">
                                                    &nbsp;
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-8">
                                            <div id="dashboard-map-seles" style="width: 100%; height: 200px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SALES BLOCK -->

                        </div>
                              <div class="col-md-6">

                                      <!-- START SALES BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Reminder</h3>
                                        <span>&nbsp;</span>
                                    </div>


                                </div>
                                <div class="panel-body">
                                   
<table class="table">
    <thead>
      <tr>
        <th>Jenis Dok</th>
        <th>Berakhir</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>SIUP</td>
        <td><?php echo date('d F Y', strtotime($tgl_akhir_siup));?></td>
        <td>
         <?php 
         $datetime1 = new DateTime($tgl_akhir_siup);
        $datetime2 = new DateTime(date('Y-m-d'));
        $difference = $datetime1->diff($datetime2);
        echo $difference->days<=30?'Segera lakukan perpanjangan!':'';
        ?>
        </td>
      </tr>
      <tr>
        <td>SIUJK</td>
        <td><?php echo date('d F Y', strtotime($tgl_akhir_siujk));?></td>
        <td>
        
        <?php 
        $datetime1 = new DateTime($tgl_akhir_siujk);
        $datetime2 = new DateTime(date('Y-m-d'));
        $difference = $datetime1->diff($datetime2);
        echo $difference->days<=30?'Segera lakukan perpanjangan!':'';
        ?>
        
        </td>
      </tr>
      <tr>
        <td>TDP</td>
        <td><?php echo date('d F Y', strtotime($tgl_akhir_tdp));?></td>
        <td>
        <?php 
        $datetime1 = new DateTime($tgl_akhir_tdp);
        $datetime2 = new DateTime(date('Y-m-d'));
        $difference = $datetime1->diff($datetime2);
        echo $difference->days<=30?'Segera lakukan perpanjangan!':'';
        ?>
        </td>
      </tr>
      
         <tr>
        <td>SDP</td>
        <td><?php echo date('d F Y', strtotime($tgl_akhir_surat_domisili));?></td>
        <td>
         <?php 
         $datetime1 = new DateTime($tgl_akhir_surat_domisili);
        $datetime2 = new DateTime(date('Y-m-d'));
        $difference = $datetime1->diff($datetime2);
        echo $difference->days<=30?'Segera lakukan perpanjangan!':'';
        ?>
        </td>
      </tr>
        <tr>
        <td>SBU</td>
        <td><?php echo date('d F Y', strtotime($tgl_akhir_sbu));?></td>
        <td>
        <?php 
        $datetime1 = new DateTime($tgl_akhir_sbu);
        $datetime2 = new DateTime(date('Y-m-d'));
        $difference = $datetime1->diff($datetime2);
        echo $difference->days<=30?'Segera lakukan perpanjangan!':'';
        ?>
      </td>
      </tr>
      
      
    </tbody>
  </table>
  

                                  
                             
                                </div>
                            </div>
                            <!-- END SALES BLOCK -->

                        </div>
                    </div>
                <!-- END PAGE CONTENT WRAPPER -->
                </div>
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

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?=base_url('backend/')?>js/demo_tables.js"></script>
      <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/owl/owl.carousel.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
