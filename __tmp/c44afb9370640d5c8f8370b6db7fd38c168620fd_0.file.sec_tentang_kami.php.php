<?php /* Smarty version 3.1.24, created on 2020-08-12 14:33:42
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_tentang_kami.php" */ ?>
<?php
/*%%SmartyHeaderCode:5920696565f339b564b8b92_78110866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c44afb9370640d5c8f8370b6db7fd38c168620fd' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_tentang_kami.php',
      1 => 1597217832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5920696565f339b564b8b92_78110866',
  'variables' => 
  array (
    'tentang_kami' => 0,
    'i' => 0,
    'maksud_tujuan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f339b564c79d8_87376147',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f339b564c79d8_87376147')) {
function content_5f339b564c79d8_87376147 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5920696565f339b564b8b92_78110866';
?>
    <section id="tentang_kami" class="home-section">
      <div class="container" style="margin-top:-10%;">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text" style="text-align: justify;">
                      <h3>Tentang Kami</h3>
                      <p style="text-align:justify">
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
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
					  
                      </p>
                    </div>
                  </div>
                </div>
         
              </div>
			  
			 <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text" style="text-align: justify;">
                      <h3>Maksud dan Tujuan</h3>
                      <p style="text-align:justify">
					  <?php
$_from = $_smarty_tpl->tpl_vars['maksud_tujuan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
         
                       </p>
                    </div>
                  </div>
                </div>
         
              </div>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </section><?php }
}
?>