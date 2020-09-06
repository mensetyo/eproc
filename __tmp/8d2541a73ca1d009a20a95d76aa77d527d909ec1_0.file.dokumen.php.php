<?php /* Smarty version 3.1.24, created on 2019-12-27 19:04:16
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/dokumen.php" */ ?>
<?php
/*%%SmartyHeaderCode:4682923165e05f340b02086_46943616%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d2541a73ca1d009a20a95d76aa77d527d909ec1' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/dokumen.php',
      1 => 1576762280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4682923165e05f340b02086_46943616',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e05f340b6c050_42550163',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e05f340b6c050_42550163')) {
function content_5e05f340b6c050_42550163 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4682923165e05f340b02086_46943616';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JMTO E-Procurement</title>

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/style.css" media="screen" type="text/css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/animate.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

<!--
function show_hari()
{
//membuat variabel bertipe array untuk nama hari
var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
"Sabtu");
//membuat variabel bertipe array untuk nama bulan
var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei",
"Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
var sekarang = new Date();
var HariIni = NamaHari[sekarang.getDay()];
var BulanIni = NamaBulan[sekarang.getMonth()];
var tglSekarang = sekarang.getDate();
var TahunIni = sekarang.getFullYear();
//document.write(HariIni + ", " + tglSekarang + " " + BulanIni + " " + TahunIni);
}


$(document).ready(function(){
        function clock() {
			var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
      "Sabtu");
      //membuat variabel bertipe array untuk nama bulan
      var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei",
      "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
      var sekarang = new Date();
      var HariIni = NamaHari[sekarang.getDay()];
      var BulanIni = NamaBulan[sekarang.getMonth()];
      var tglSekarang = sekarang.getDate();
      var TahunIni = sekarang.getFullYear();



          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          document.getElementById("watch").innerHTML = HariIni + ", " + tglSekarang + " " + BulanIni + " " + TahunIni+' - '+Time;
          requestAnimationFrame(clock);
        }

        requestAnimationFrame(clock);
    });

function startgame() {
   // alert('Body has loaded!');
     $('#myModal').modal('show');
	//$('#myModal').modal('show');
}
<?php echo '</script'; ?>
>


</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="startgame();">


  <div id="wrapper">
  <?php echo $_smarty_tpl->getSubTemplate ("webpage/include/daftar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <?php echo $_smarty_tpl->getSubTemplate ("webpage/include/menu1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br><br>
  <?php echo $_smarty_tpl->getSubTemplate ("webpage/sec_dokumen.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <?php echo $_smarty_tpl->getSubTemplate ("webpage/include/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	  

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/jquery.easing.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/jquery.scrollTo.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/jquery.appear.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/stellar.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/nivo-lightbox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/js/custom.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
?>