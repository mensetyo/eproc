<?php /* Smarty version 3.1.24, created on 2020-03-04 09:25:25
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/include/footer.php" */ ?>
<?php
/*%%SmartyHeaderCode:2812736075e5f11951689d4_31541206%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c92016f0e4b6aa835c8ee48a09df34881cdf19' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/include/footer.php',
      1 => 1583288888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2812736075e5f11951689d4_31541206',
  'variables' => 
  array (
    'kontak' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e5f11951d0df5_24314784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e5f11951d0df5_24314784')) {
function content_5e5f11951d0df5_24314784 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2812736075e5f11951689d4_31541206';
?>
 <footer>

      <div class="container">
        <div class="row">
           <!-- <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Tentang Eproc</h5>
                <p>
					e-Proc JMTO adalah e-Procurement di lingkungan PT Jasamarga Toll Road Operator untuk sarana pengadaan barang/jasa, informasi pengadaan antar Unit JMTO, sesuai dengan Pedoman pengadaan barang/jasa yang berlaku di PT JMTO yang dilakukan secara online/elektronik dengan menggunakan fasilitas aplikasi e-Proc JMTO.
                </p>
              </div>
            </div>
        
          </div>-->
          <?php
$_from = $_smarty_tpl->tpl_vars['kontak']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Kontak Kami</h5>
                <p>
                <?php echo $_smarty_tpl->tpl_vars['i']->value['kontak'];?>

                 <!-- Gedung Cabang Jagorawi Lt.4 Plaza Tol TMII, Dukuh, Kramatjati, RT.8/RW.2, Dukuh, Kramatjati, 
                 Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13550<br>Telp. (021) 22984722<br> Email : procurement@jmto.co.id -->
                </p>
               <!--   <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
                  </li>

                </ul>-->
              </div>
            </div>
          </div>
          <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
         <!--  <div class="col-sm-6 col-md-4">
			<div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>QUICK LINKS</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>

          </div>-->
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - JMTO Eproc.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer><?php }
}
?>