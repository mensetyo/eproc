<?php /* Smarty version 3.1.24, created on 2019-12-20 08:15:12
         compiled from "/home/files/Sync/eproc/__appl/views/main/dashboard.html" */ ?>
<?php
/*%%SmartyHeaderCode:4803799935dfc20a0961112_36287109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c8cafadbc1e550db6ca21f65f357b100276dab5' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/dashboard.html',
      1 => 1576762274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4803799935dfc20a0961112_36287109',
  'variables' => 
  array (
    'data' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5dfc20a0972f65_75856092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dfc20a0972f65_75856092')) {
function content_5dfc20a0972f65_75856092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4803799935dfc20a0961112_36287109';
?>
<div class="row">
 <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="<?php if ($_smarty_tpl->tpl_vars['i']->value['jml'] > 0) {?>info-box bg-aqua<?php } else { ?>info-box bg-red<?php }?>">
       <span class="info-box-icon"><i class="fa <?php if ($_smarty_tpl->tpl_vars['i']->value['jml'] > 0) {?>fa-check<?php } else { ?>fa-remove<?php }?>"></i></span>
      <div class="info-box-content">
		<span class="info-box-text">&nbsp;</span>
        <span class="info-box-text"><?php echo $_smarty_tpl->tpl_vars['i']->value['txt'];?>
</span>
      </div>
	  <div class="progress">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
          <span class="progress-description">
           <?php if ($_smarty_tpl->tpl_vars['i']->value['jml'] > 0) {?>Sudah Terpenuhi<?php } else { ?>Belum Terpenuhi<?php }?>
          </span>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
</div><?php }
}
?>