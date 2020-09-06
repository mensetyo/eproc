<?php /* Smarty version 3.1.24, created on 2020-06-19 19:39:28
         compiled from "/home/files/Sync/eproc/__appl/views/template/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:13857898195eecb2004f1fb6_34984824%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc2017ddf69197eb1e6ea39a8ab8499a2ac8f20' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/template/main.html',
      1 => 1592570575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13857898195eecb2004f1fb6_34984824',
  'variables' => 
  array (
    'masa' => 0,
    'mod' => 0,
    'main' => 0,
    'buttonnya' => 0,
    'table' => 0,
    'filter_satker' => 0,
    'filter_core' => 0,
    'periode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5eecb200572678_49697939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5eecb200572678_49697939')) {
function content_5eecb200572678_49697939 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13857898195eecb2004f1fb6_34984824';
$_smarty_tpl->tpl_vars['buttonnya'] = new Smarty_Variable('true', null, 0);?>
<?php $_smarty_tpl->tpl_vars['periode'] = new Smarty_Variable('false', null, 0);?>
<?php $_smarty_tpl->tpl_vars['filter_core'] = new Smarty_Variable('false', null, 0);?>
<?php $_smarty_tpl->tpl_vars['button_add'] = new Smarty_Variable('true', null, 0);?>
<?php $_smarty_tpl->tpl_vars['button_edit'] = new Smarty_Variable('true', null, 0);?>
<?php $_smarty_tpl->tpl_vars['button_delete'] = new Smarty_Variable('true', null, 0);?>
<?php $_smarty_tpl->tpl_vars['button_import'] = new Smarty_Variable('true', null, 0);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['masa']->value)===null||$tmp==='' ? 0 : $tmp) == 0) {?>
<?php $_smarty_tpl->tpl_vars['button_add'] = new Smarty_Variable('false', null, 0);?>
<?php $_smarty_tpl->tpl_vars['button_edit'] = new Smarty_Variable('false', null, 0);?>
<?php $_smarty_tpl->tpl_vars['button_delete'] = new Smarty_Variable('false', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'rekening') {?>
	<?php $_smarty_tpl->tpl_vars['buttonnya'] = new Smarty_Variable('false', null, 0);?>
	
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['main']->value == 'responden') {
$_smarty_tpl->tpl_vars['button_add'] = new Smarty_Variable('false', null, 0);
$_smarty_tpl->tpl_vars['button_edit'] = new Smarty_Variable('false', null, 0);
$_smarty_tpl->tpl_vars['button_delete'] = new Smarty_Variable('false', null, 0);
}?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['main']->value;
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['mod']->value;
$_tmp2=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['buttonnya']->value;
$_tmp3=ob_get_clean();
ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['table']->value)===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['filter_satker']->value)===null||$tmp==='' ? '' : $tmp);
$_tmp5=ob_get_clean();
ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['filter_core']->value)===null||$tmp==='' ? 'true' : $tmp);
$_tmp6=ob_get_clean();
ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['periode']->value)===null||$tmp==='' ? '' : $tmp);
$_tmp7=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main'=>$_tmp1,'mod'=>$_tmp2,'button'=>$_tmp3,'table'=>$_tmp4,'filter_satker'=>$_tmp5,'filter_core'=>$_tmp6,'filter_periode'=>$_tmp7), 0);
?>

<?php }
}
?>