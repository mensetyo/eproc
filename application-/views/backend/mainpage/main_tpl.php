
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>JMTO e-Procurement</title>            
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
            
		<?php $this->load->view('include/backend/sidebar'); ?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
        <?php $this->load->view('include/backend/header'); ?>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Visitors</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Returned</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">New</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,977</div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">In your mailbox</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">Registred users</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                                     
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    <div class="row">
             
                        <div class="col-md-8">
                            
                            <!-- START PROJECTS BLOCK -->
                          <!--  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Projects</h3>
                                        <span>Projects activity</span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="50%">Project</th>
                                                    <th width="20%">Status</th>
                                                    <th width="30%">Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Atlant</strong></td>
                                                    <td><span class="label label-danger">Developing</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Gemini</strong></td>
                                                    <td><span class="label label-warning">Updating</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                                        </div>
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td><strong>Taurus</strong></td>
                                                    <td><span class="label label-warning">Updating</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Leo</strong></td>
                                                    <td><span class="label label-success">Support</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Virgo</strong></td>
                                                    <td><span class="label label-success">Support</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                        </div>
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td><strong>Aquarius</strong></td>
                                                    <td><span class="label label-success">Support</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>-->
							
							<form id="alumniForm" method="post">
	<table>
		<tr>
			<td width="100">NIM</td>
			<td>
				<input name="niu" class="required" title="NIM harus diisi" size="30" type="text" />
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>
				<input name="foto" size="40" type="file" />
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>
				<input name="nama" class="required" title="Nama harus diisi" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>
				<input name="tempat_lahir" class="required" title="Tempat lahir harus diisi" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>

			<td>
				<input name="tgl_lahir" class="required" title="Tanggal lahir harus diisi" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<input name="alamat" class="required" title="Alamat harus diisi" size="60" type="text" />
			</td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td>
				<input name="no_telp" class="required" title="No. Telp harus diisi" size="30" type="text" />
			</td>
		</tr>
		<tr>
			<td>No. HP</td>
			<td>
				<input name="no_hp" class="required" title="No. HP harus diisi" size="30" type="text" />
			</td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>
				<input name="email" id="email" class="required email" size="30" type="text" />
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input name="jk" value="L" class="required" title="Jenis Kelamin harus diisi" type="radio" />Laki-laki
				<input name="jk" value="P" type="radio">Perempuan
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>
				<select name="prodi" class="required" title="Program Studi harus dipilih" />
					<option value="">-- Pilih Program Studi --</option>
					<option value="1">Teknik Informatika</option>
					<option value="2">Teknik Komputer</option>
					<option value="3">Sistem Informasi</option>
					<option value="4">Manajemen Informatika</option>
					<option value="5">Komputerisasi Akuntansi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td>
				<input name="angkatan" class="required" title="Angkatan harus diisi" size="6" type="text" />
			</td>
		</tr>
		<tr>
			<td>Tahun Lulus</td>
			<td>
				<input name="tahun_lulus" class="required" title="Tahun harus diisi" size="6" type="text" />
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>
				<input name="pekerjaan" size="50" type="text" />
			</td>
		</tr>

		<tr>
			<td>Instansi</td>
			<td>
				<input name="instansi" size="50" type="text" />
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<select name="status" class="required" title="Status harus diisi">
					<option value="">-- Pilih Status --</option>
					<option value="1">Single</option>
					<option value="2">Double</option>
					<option value="3">Triple</option>
					<option value="4">It's Complicated</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Submit" />
				<input type="reset" value="Reset" />
			</td>
		</tr>
	</table>
</form>
                            <!-- END PROJECTS BLOCK -->
                            
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
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/settings.js"></script>
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>
        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






