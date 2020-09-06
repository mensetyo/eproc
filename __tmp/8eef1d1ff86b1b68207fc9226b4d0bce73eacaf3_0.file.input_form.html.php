<?php /* Smarty version 3.1.24, created on 2020-01-16 22:54:30
         compiled from "/home/files/Sync/eproc/__appl/views/template/input_form.html" */ ?>
<?php
/*%%SmartyHeaderCode:14842291985e208736da9056_60677566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eef1d1ff86b1b68207fc9226b4d0bce73eacaf3' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/template/input_form.html',
      1 => 1579190064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14842291985e208736da9056_60677566',
  'variables' => 
  array (
    'label' => 0,
    'label_validasi' => 0,
    'type' => 0,
    'id' => 0,
    'acak' => 0,
    'name' => 0,
    'class' => 0,
    'style_type' => 0,
    'option' => 0,
    'value' => 0,
    'readonly' => 0,
    'text_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e208736e56c14_57350978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e208736e56c14_57350978')) {
function content_5e208736e56c14_57350978 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14842291985e208736da9056_60677566';
?>
<tr>
<td>&nbsp;</td>
<td style="width:20%">
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['label']->value)===null||$tmp==='' ? '-' : $tmp);?>
 
	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['label_validasi']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
		<font color='red'>*)</font>
	<?php }?>
</td>
<td>:</td>
<td style="font-weight:bold;">
<?php if ($_smarty_tpl->tpl_vars['type']->value == 'select') {?>
	<select id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
">
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['option']->value)===null||$tmp==='' ? '' : $tmp);?>

	</select>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'text') {?>
	<input  type="text" class="form-control <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
" <?php echo (($tmp = @$_smarty_tpl->tpl_vars['readonly']->value)===null||$tmp==='' ? '' : $tmp);?>
 />
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'text_group') {?>
	<div class="input-append">
	<input  type="text" class="form-control <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
	<span class="btn btn-small"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['text_group']->value)===null||$tmp==='' ? '' : $tmp);?>
</span>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'file') {?>
	<input type="file" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
"  />
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'pwd') {?>
	 <div class="input-group">
        <input type="password" class="span4 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        <span class="input-group-addon">
			<a href="javascript:void(0);" onclick="konversi_pwd_text('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
')">Show</a>
		</span> 
       </div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'textarea') {?>
	<textarea class="form-control <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'editor') {?>
	<textarea class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['style_type']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
	<?php echo '<script'; ?>
>
		
		CKEDITOR.replace( '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', {
			// Define the toolbar groups as it is a more accessible solution.
			toolbarGroups: [
				{ name: 'clipboard', groups: [ 'undo', 'clipboard' ] },
				{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
				{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
				{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
				{ name: 'forms', groups: [ 'forms' ] },
				{ name: 'document', groups: [ 'document', 'mode', 'doctools' ] },
				{ name: 'links', groups: [ 'links' ] },
				{ name: 'insert', groups: [ 'insert' ] },
				{ name: 'styles', groups: [ 'styles' ] },
				{ name: 'colors', groups: [ 'colors' ] },
				{ name: 'tools', groups: [ 'tools' ] },
				{ name: 'others', groups: [ 'others' ] },
				{ name: 'about', groups: [ 'about' ] }
			],
			// Remove the redundant buttons from toolbar groups defined above.
			removeButtons: 'Source,Save,Templates,NewPage,Preview,Print,Form,Checkbox,Radio,TextField,Textarea,Select,ImageButton,HiddenField,Blockquote,CreateDiv,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Maximize,ShowBlocks,About,Scayt,SelectAll,Find,Replace,Paste,PasteText,PasteFromWord,Button'
		} );
	
	<?php echo '</script'; ?>
>
<?php }?>
</td>
</tr>
<?php }
}
?>