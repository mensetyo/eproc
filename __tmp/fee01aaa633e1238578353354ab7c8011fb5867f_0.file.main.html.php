<?php /* Smarty version 3.1.24, created on 2020-09-01 19:01:43
         compiled from "/home/files/Sync/eproc/__appl/views/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:21429682365f4e3827433106_30443698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fee01aaa633e1238578353354ab7c8011fb5867f' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main.html',
      1 => 1598961699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21429682365f4e3827433106_30443698',
  'variables' => 
  array (
    'host' => 0,
    'web_panduan_dua' => 0,
    'i' => 0,
    'auth' => 0,
    'masa' => 0,
    'batas_dari' => 0,
    'batas_sampai' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f4e38274e8346_96744081',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f4e38274e8346_96744081')) {
function content_5f4e38274e8346_96744081 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21429682365f4e3827433106_30443698';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DRT JMTO</title>
  <!-- <link rel="icon" sizes="194x194" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/icon.jpg" type="image/png"> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <!--link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/jvectormap/jquery-jvectormap.css"-->
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
 
  <!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"-->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/metro-gray/easyui.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/icon.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/color.css" />
  
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/select2/dist/css/select2.min.css">
  
  
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/main_style.css" />
  <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnOo-qFl3VL_r5oj_N_1RWzx7Cpq432Qc" async defer><?php echo '</script'; ?>
-->
  <?php echo '<script'; ?>
>
	  var host='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
';
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Morris.js charts -->
<!--script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/raphael/raphael.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/morris.js/morris.min.js"><?php echo '</script'; ?>
-->

<!--script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
-->
<!-- jQuery Knob Chart -->
<!-- daterangepicker -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/moment/min/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- datepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap WYSIHTML5 -->
<!--script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
-->
<!-- Slimscroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<!--script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
-->
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>

<!-- Select2 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/select2/dist/js/select2.full.min.js"><?php echo '</script'; ?>
>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
-->
<!-- AdminLTE for demo purposes -->
<!--script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/dist/js/demo.js"><?php echo '</script'; ?>
-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/jquery.easyui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/fungsi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/highcharts.js"><?php echo '</script'; ?>
>
  
  
</head>
<body class="hold-transition skin-yellow-light sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <!--a href="javascript:void(0);" class="logo">
     
      <span class="logo-mini"><b>S</b>PD</span>
     
      <span class="logo-lg"><b>SURVEY PILKADA</b></span>
    </a-->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
		<div style="margin-top:4px;width:50%;float:left;margin-top:7px; !important; margin-left:10px !important;">
			<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/__assets/img/logo.png" class="img"  alt="User Image">
			
		</div>
	   <!--div>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
      <li>
        <?php
$_from = $_smarty_tpl->tpl_vars['web_panduan_dua']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
        <a href="https://panitia-eproc.jmto.co.id/__assets/manual/<?php echo $_smarty_tpl->tpl_vars['i']->value['file_panduan'];?>
" target="_blank">
          <span class="hidden-xs">Download Manual Book Pengisian Aplikasi</span>
        </a>
        <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
      </li>
		  <li class="user user-menu">
			<a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/konfirmasi');$('#judul_kecil').html(' Feedback Panitia')" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Feedback Panitia</span>
            </a>
      </li>
      
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'];?>
</span>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['admin'] != 'admin') {?>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <p>
                  <?php echo $_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'];?>

                  <small><?php echo $_smarty_tpl->tpl_vars['auth']->value['email'];?>
</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                    <a href="javascript:void(0);" onclick="ganti_pwd();" class="btn btn-default btn-flat">Ubah Password</a>
                  </div>
                <div class="pull-right">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
            <?php }?>
          </li>
       
		  
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    
	</nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['masa']->value)===null||$tmp==='' ? 0 : $tmp) == 0) {?>
	  <div class="callout callout-danger">
			<h4>Masa Evaluasi Dokumen</h4>
      <!-- <p>Kepada penyedia jasa, Batas Waktu Evaluasi Dokumen Sudah Selesai sementara segala aktifitas didalam aplikasi ini kami disable.</p> -->
      <p>Kepada Calon Penyedia, Batas Waktu Evaluasi Dokumen telah berakhir. 
        Segala aktifitas dalam aplikasi ini tidak dapat diakses hingga dibukanya 
        kembali DRT PT Jasamarga Tollroad periode berikutnya.</p>
       </div>
  <?php }?>
  
      
      <h1 id="judul_kecil">
        Dashboard
      </h1>
    </section>

    <div style="width: 32%;
    margin-top: -13px;
    position: absolute;
    right: 0;
    margin-right: 16px;">
      <marquee behavior="" direction="" style="margin-top: -23px;">
        <h1 style="font-size: 11pt;
        color: red;">
        Batas Waktu Upload Dokumen <?php echo $_smarty_tpl->tpl_vars['batas_dari']->value;?>
 s.d <?php echo $_smarty_tpl->tpl_vars['batas_sampai']->value;?>
 sesuai timeline DRT Pada Halaman Depan Website
      </h1>
      </marquee>
    </div>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
			  <div class="box box-default">
				<div class="box-body">
					<div id="konten">
						<?php echo $_smarty_tpl->getSubTemplate ("main/dashboard.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>APPLICATION EPROC APP </b> v.1.0
    </div>
    <strong>Copyright Jasamarga Tollroad Operator 2020<a href="#"></a>.</strong> All right reserved
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<div id="modol" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
     <div class="modal-dialog" style="width:90%;">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title" id="judul_modol">Load File</h4>
             </div>
             <div class="modal-body">
                 <h4> <div id="img"></div> </h4>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                
             </div>
         </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
     </div><!-- /.modal -->
</div>

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">&nbsp;</h4>
		</div>
		<div class="modal-body">
		  <center><p><b>Dianjurkan membaca Manual Book Pengisian Aplikasi</b></p></center>
      </br>
		  <center>
		  <?php
$_from = $_smarty_tpl->tpl_vars['web_panduan_dua']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
				<a href="https://panitia-eproc.jmto.co.id/__assets/manual/<?php echo $_smarty_tpl->tpl_vars['i']->value['file_panduan'];?>
" download target="_blank"> <button type="button" class="btn btn-info" >Download Manual Book Pengisian Aplikasi </button></a>
		  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
		  </center>
		</div>
		<!--  <div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>-->
	  </div>
  
	</div>
  </div>

</body>
</html>
<?php echo '<script'; ?>
>
    $('#myModal').modal('show');
	$('#konten').css('min-height',getClientHeight()-150);
	//$('.slimScrollBar').css('width','10px');
<?php echo '</script'; ?>
>

<?php }
}
?>