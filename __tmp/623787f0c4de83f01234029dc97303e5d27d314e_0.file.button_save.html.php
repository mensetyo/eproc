<?php /* Smarty version 3.1.24, created on 2020-08-07 08:20:57
         compiled from "/home/files/Sync/eproc/__appl/views/template/button_save.html" */ ?>
<?php
/*%%SmartyHeaderCode:6776989445f2cac79278f79_13273744%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623787f0c4de83f01234029dc97303e5d27d314e' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/template/button_save.html',
      1 => 1596763474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6776989445f2cac79278f79_13273744',
  'variables' => 
  array (
    'btn_goyz' => 0,
    'exp' => 0,
    'href' => 0,
    'target' => 0,
    'style_btn' => 0,
    'id_na' => 0,
    'acak' => 0,
    'click' => 0,
    'style' => 0,
    'text' => 0,
    'auth' => 0,
    'id_simpan' => 0,
    'text_simpan' => 0,
    'id_batal' => 0,
    'text_batal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f2cac792f1607_82097254',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2cac792f1607_82097254')) {
function content_5f2cac792f1607_82097254 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6776989445f2cac79278f79_13273744';
?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['btn_goyz']->value)===null||$tmp==='' ? 'false' : $tmp) == 'true') {?>
	<?php if ($_smarty_tpl->tpl_vars['exp']->value == 'agree') {?>
		<a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? 'javascript:void(0);' : $tmp);?>
"  target='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['target']->value)===null||$tmp==='' ? '' : $tmp);?>
' class="btn btn-small <?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_btn']->value)===null||$tmp==='' ? 'btn-success' : $tmp);?>
" group="" id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id_na']->value)===null||$tmp==='' ? 'add' : $tmp);?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" onClick="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['click']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style']->value)===null||$tmp==='' ? '' : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a> 
	<?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['admin'] == 'admin') {?>
		<a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? 'javascript:void(0);' : $tmp);?>
"  target='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['target']->value)===null||$tmp==='' ? '' : $tmp);?>
' class="btn btn-small <?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_btn']->value)===null||$tmp==='' ? 'btn-success' : $tmp);?>
" group="" id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id_na']->value)===null||$tmp==='' ? 'add' : $tmp);?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" onClick="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['click']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style']->value)===null||$tmp==='' ? '' : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a> 
	<?php }?>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['exp']->value == 'agree') {?>
		<a href="javascript:void(0);" id="<?php echo $_smarty_tpl->tpl_vars['id_simpan']->value;?>
" class="btn btn-small btn-success simpan">
			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['text_simpan']->value)===null||$tmp==='' ? 'Simpan' : $tmp);?>

		</a>
	<?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['admin'] == 'admin') {?>
		<a href="javascript:void(0);" id="<?php echo $_smarty_tpl->tpl_vars['id_simpan']->value;?>
" class="btn btn-small btn-success simpan">
			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['text_simpan']->value)===null||$tmp==='' ? 'Simpan' : $tmp);?>

		</a>
	<?php }?>
		<a href="javascript:void(0);" id="<?php echo $_smarty_tpl->tpl_vars['id_batal']->value;?>
" class="btn btn-small btn-danger">
			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['text_batal']->value)===null||$tmp==='' ? 'Batal' : $tmp);?>

		</a>
	
<?php }
}
}
?>