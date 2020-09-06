<?php /* Smarty version 3.1.24, created on 2019-12-27 19:04:16
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_dokumen.php" */ ?>
<?php
/*%%SmartyHeaderCode:21100233125e05f340b751d7_01083353%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd16b028ff1c0e192f8a0ff574d607ec6ee6367' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_dokumen.php',
      1 => 1576762285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21100233125e05f340b751d7_01083353',
  'variables' => 
  array (
    'host' => 0,
    'dokumen' => 0,
    'i' => 0,
    'tentang_kami' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e05f340bafbe8_29433266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e05f340bafbe8_29433266')) {
function content_5e05f340bafbe8_29433266 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21100233125e05f340b751d7_01083353';
?>

	 <!-- css -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css1/style.css" rel="stylesheet" />
  
  <br><br><br>
<section id="content">
      <div class="container">
        <div class="row marginbot30">
          <div class="span12">
           <div class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <div class="author">
					<h5>Detail Dokumen</h5>
                        <table width="" class="table">
						<tbody>
							<?php
$_from = $_smarty_tpl->tpl_vars['dokumen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
							<tr>
							  <td><strong>Nama Dokumen<br></strong></td>
							  <td><center><?php echo $_smarty_tpl->tpl_vars['i']->value['nama'];?>
</center></td>
							</tr>
							<tr>
							  <td><strong>Isi<br></strong></td>
							  <td><center><?php echo $_smarty_tpl->tpl_vars['i']->value['isi'];?>
</center></td>
							</tr>
							<tr>
							  <td><strong>Lampiran / File<br></strong></td>
							  <td><center><a href="#"><?php echo $_smarty_tpl->tpl_vars['i']->value['lampiran'];?>
</center></td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
						</tbody>
					  </table>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial"> 
				  <h5>Detail Dokumen</h5>
                       <table width="" class="table">
						<tbody>
							<?php
$_from = $_smarty_tpl->tpl_vars['dokumen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
							<tr>
							  <td><strong>Nama Dokumen<br></strong></td>
							  <td><center><?php echo $_smarty_tpl->tpl_vars['i']->value['nama'];?>
</center></td>
							</tr>
							<tr>
							  <td><strong>Isi<br></strong></td>
							  <td><center><?php echo $_smarty_tpl->tpl_vars['i']->value['isi'];?>
</center></td>
							</tr>
							<tr>
							  <td><strong>Lampiran / File<br></strong></td>
							  <td><center><a href="#"><?php echo $_smarty_tpl->tpl_vars['i']->value['lampiran'];?>
</center></td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
						</tbody>
					  </table> </p>
                     </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
					<?php
$_from = $_smarty_tpl->tpl_vars['tentang_kami']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                      <i class="icon-quote-left icon-48"></i>
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
					<?php
$_from = $_smarty_tpl->tpl_vars['tentang_kami']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                      <i class="icon-quote-left icon-48"></i>
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
					<?php
$_from = $_smarty_tpl->tpl_vars['tentang_kami']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                      <i class="icon-quote-left icon-48"></i>
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
					<?php
$_from = $_smarty_tpl->tpl_vars['tentang_kami']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                      <i class="icon-quote-left icon-48"></i>
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </table><?php }
}
?>