
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>J</title>            
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
            
       <?php $this->load->view('include/backend/sidebar'); ?>
            
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
                        <div class="col-md-8">

                          

                            <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Konfirmasi Data</h3>
                                </div>
                                <div class="panel-body">
                                   <p>Telah di lakukan penilaian data DRT anda oleh Panitia, pada Taggal&nbsp;<?=date('d/m/Y',strtotime($created));?>&nbsp;Pukul&nbsp;<?=date('H:i:s',strtotime($created));?>, Dengan hasil sebagai berikut:</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th  width="20%" align="center">Item Isian</th>
                                                <th width="20%" align="center">Status</th>
                                                <th align="center">Keterangan</th>                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>AKTA</td>
                                                <td align="center"><?php echo $akta;?></td>
                                                <td><?php echo $akta_ket;?></td>
                                            </tr>
											 <tr>
                                                <td>2</td>
                                                <td>TDP</td>
                                               <td align="center"><?php echo $tdp;?></td>
                                                <td><?php echo $tdp_ket;?></td>
                                            </tr>
											<tr>
                                                <td>3</td>
                                                <td>DOMISILI</td>
                                              <td align="center"><?php echo $domisili;?></td>
                                                <td><?php echo $domisili_ket;?></td>
                                              
                                            </tr>
											<tr>
                                                <td>4</td>
                                                <td>IJIN USAHA</td>
                                                 <td align="center"><?php echo $ijin_usaha;?></td>
                                                <td><?php echo $ijin_usaha_ket;?></td>
                                          
                                            </tr>
											<tr>
                                                <td>5</td>
                                                <td>SBU</td>
                                               <td align="center"><?php echo $sbu;?></td>
                                                <td><?php echo $sbu_ket;?></td>
                                            </tr>
											<tr>
                                                <td>6</td>
                                                <td>UPLOAD DOKUMEN</td>
                                               <td align="center"><?php echo $upload_dokumen;?></td>
                                                <td><?php echo $upload_dokumen_ket;?></td>
                             
                                            </tr>
											<tr>
                                                <td>7</td>
                                                <td>DATA PERUSAHAAN</td>
                                                 <td align="center"><?=$data_perusahaan;?></td>
                                                <td><?=$data_perusahaan_ket;?></td>
                      
                                            </tr>
											<tr>
                                                <td>8</td>
                                                <td>PAJAK</td>
                                                 <td align="center"><?=$pajak;?></td>
                                                <td><?=$pajak_ket;?></td>
                                       
                                            </tr>
											<tr>
                                                <td>9</td>
                                                <td>PENGURUS</td>
                                                <td align="center"><?=$pengurus;?></td>
                                                <td><?=$pengurus_ket;?></td>
                                            
                                            </tr>
											<tr>
                                                <td>10</td>
                                                <td>TENAGA AHLI</td>
                                                 <td align="center"><?=$tenaga_ahli;?></td>
                                                <td><?=$tenaga_ahli_ket;?></td>
                                                
                                            </tr>
											<tr>
                                                <td>11</td>
                                                <td>PERALATAN</td>
                                               <td align="center"><?=$peralatan;?></td>
                                                <td><?=$peralatan_ket;?></td>
                                              
                                            </tr>
											<tr>
                                                <td>12</td>
                                                <td>PENGALAMAN</td>
                                                <td align="center"><?=$pengalaman;?></td>
                                                <td><?=$pengalaman_ket;?></td>
                                               
                                            </tr>
											<tr>
                                                <td>13</td>
                                                <td>PEKERJAAN BERJALAN</td>
                                                 <td align="center"><?=$pekerjaan_berjalan;?></td>
                                                <td><?=$pekerjaan_berjalan_ket;?></td>
                                     
                                            </tr>
											<tr>
                                                <td>14</td>
                                                <td>ASPEK KEUANGAN</td>
                                                <td align="center"><?=$aspek_keuangan;?></td>
                                                <td><?=$aspek_keuangan_ket;?></td>
                                              
                                            </tr>
											<tr>
                                                <td>15</td>
                                                <td>SURAT PENTING</td>
                                                <td align="center"><?=$surat_penting;?></td>
                                                <td><?=$surat_penting_ket;?></td>
                                            </tr>	
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                            <!-- END BORDERED TABLE SAMPLE -->
                        </div>
                    </div>


                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <!--<div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- END MESSAGE BOX-->        
        
        <!-- MESSAGE BOX-->
       <!-- <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- END MESSAGE BOX-->

                    

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
        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>






