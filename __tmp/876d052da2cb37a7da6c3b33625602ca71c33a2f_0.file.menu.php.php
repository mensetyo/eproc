<?php /* Smarty version 3.1.24, created on 2020-07-03 09:41:52
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/include/menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:16457413435efe9af0a47d89_08546984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '876d052da2cb37a7da6c3b33625602ca71c33a2f' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/include/menu.php',
      1 => 1593692455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16457413435efe9af0a47d89_08546984',
  'variables' => 
  array (
    'auth' => 0,
    'host' => 0,
    'web_panduan' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5efe9af0bcb658_59472041',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5efe9af0bcb658_59472041')) {
function content_5efe9af0bcb658_59472041 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16457413435efe9af0a47d89_08546984';
?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <p class="bold text-left" >&nbsp;&ensp;&ensp;E-Procurement</p>
            </div>
			<div class="col-sm-4 col-md-4">
              <p class="bold text-center" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'])===null||$tmp==='' ? '' : $tmp);?>
</p>
            </div>
            <div class="col-sm-4 col-md-4">
              <p class="bold text-right" ><span id="watch"></span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/webpage/img/logoeproc.png" alt="" width="220" height="45" />
                </a>
        </div>


        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang_kami">Tentang Kami</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Konten Spesial <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/syarat">Syarat dan Ketentuan</a></li>
                <li>
                <?php
$_from = $_smarty_tpl->tpl_vars['web_panduan']->value;
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
">Buku Panduan</a>
                <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>  
                </li>
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/dokumen">Dokumen</a></li> -->
              </ul>
            </li>

            <li><a href="#faqs">FAQ's</a></li>

			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keanggotaan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
login" target="_blank">Log In</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/reg" target="_blank">Registrasi</a></li>
              </ul>
            </li>

			<!-- <?php if ((($tmp = @$_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'])===null||$tmp==='' ? '' : $tmp) != '') {?>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengumuman <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/pengumuman_pengadaan">Pengumuman Pengadaan</a></li>
                <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/pengumuman_dpt">Pengumuman DPT</a></li-->
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/getkonten/pengumuman">Hasil Pengadaan</a></li> -->
                <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/hasil_dpt">Hasil DPT</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/berita">Berita</a></li>
              </ul>
            </li>
			<?php }?> -->
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengumuman <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/pengumuman_pengadaan">Pengumuman Pengadaan</a></li>
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/pengumuman_dpt">Pengumuman DPT</a></li> -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/getkonten/pengumuman">Hasil Pengadaan</a></li>
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/hasil_dpt">Hasil DPT</a></li> -->
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/berita">Berita</a></li> -->
              </ul>
            </li>
          </ul>
        </div>
    
      </div>
  
    </nav>
<?php }
}
?>