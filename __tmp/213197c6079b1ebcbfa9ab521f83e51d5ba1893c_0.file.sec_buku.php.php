<?php /* Smarty version 3.1.24, created on 2020-01-27 09:33:44
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_buku.php" */ ?>
<?php
/*%%SmartyHeaderCode:7367043135e2e4c08285a09_53065159%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213197c6079b1ebcbfa9ab521f83e51d5ba1893c' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_buku.php',
      1 => 1576762285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7367043135e2e4c08285a09_53065159',
  'variables' => 
  array (
    'panduan' => 0,
    'i' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e2e4c082a5de3_60512177',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e2e4c082a5de3_60512177')) {
function content_5e2e4c082a5de3_60512177 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7367043135e2e4c08285a09_53065159';
?>
    <section id="beranda" class="home-section">
      <div class="container marginbot-10">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <!--<div class="section-heading text-center">
                <h2 class="h-bold">Our facilities</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
              </div>-->
            </div>
            <!--<div class="divider-short"></div>-->
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <center>
					<?php
$_from = $_smarty_tpl->tpl_vars['panduan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
							<?php echo $_smarty_tpl->tpl_vars['i']->value['judul'];?>

					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
          </center>
        </div>

       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/1.png" class="img-responsive " alt="img" title="Registrasi" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/1.png" class="img-responsive " alt="img"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/1.png" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/2.png" class="img-responsive " alt="img" title="Pengisian Data Penyedia" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/2.png" class="img-responsive " alt="img"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/2.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/3.png" class="img-responsive " alt="img" title="Evaluasi Oleh Panitia" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/3.png" class="img-responsive " alt="img"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/3.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/4.png" class="img-responsive " alt="img" title="Verifikasi Dokumen" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/4.png" class="img-responsive " alt="img"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/4.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/5.png" class="img-responsive " alt="img" title="Penetapan Daftar Rekanan Terpilih" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/5.png" class="img-responsive " alt="img"><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/5.png" class="img-responsive " alt="img"></a></div>
               </div><br><br><br><br><br>
            </div>
          </div>
        </div>
		
        </div>
      </div>
    </section><?php }
}
?>