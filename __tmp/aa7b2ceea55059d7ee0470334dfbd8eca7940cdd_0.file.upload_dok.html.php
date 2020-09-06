<?php /* Smarty version 3.1.24, created on 2020-09-01 16:54:51
         compiled from "/home/files/Sync/eproc/__appl/views/main/upload_dok.html" */ ?>
<?php
/*%%SmartyHeaderCode:16046112865f4e1a6bf1a254_46968710%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7b2ceea55059d7ee0470334dfbd8eca7940cdd' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/upload_dok.html',
      1 => 1598954089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16046112865f4e1a6bf1a254_46968710',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'mod' => 0,
    'data' => 0,
    'sts_crud' => 0,
    'masa' => 0,
    'jml_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f4e1a6c068f46_10472289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f4e1a6c068f46_10472289')) {
function content_5f4e1a6c068f46_10472289 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16046112865f4e1a6bf1a254_46968710';
?>
<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
<input type="hidden" name="sts_crud" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp);?>
">
<fieldset>
	<legend>Download Template</legend>
	<table class="table table-hover">
		<tr>
			<td width="5%">&nbsp;</td><td width="20%">1. Surat Kuasa (Jika dikuasakan)</td><td width="2"<?php echo '%>';?>:</td>
			<td style="font-weight:bold;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dwn/surat_kuasa" >Surat Kuasa</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>2. Pakta Integritas</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dwn/pakta_integritas" >Fakta Integritas</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>3. Surat Pernyataan Minat</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dwn/minat" >Surat Pernyataan Minat</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>4. Formulir Keikutsertaan</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
dwn/formulir" >Formulir Keikutsertaan</a>
			</td>
		</tr>
	</table>
	
</fieldset>
<fieldset>
	<legend>Upload</legend>
	<table class="table table-hover">
		<tr>
			<td width="5%">&nbsp;</td><td width="20%">1. Surat Kuasa (Jika dikuasakan)</td><td width="2"<?php echo '%>';?>:</td>
			<td style="font-weight:bold;">
				<input type="file" name="surat_kuasa" id="surat_kuasa" style="display:inline"> Last Upload File : <a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['surat_kuasa'])===null||$tmp==='' ? '-' : $tmp);?>
','surat_kuasa')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['surat_kuasa'])===null||$tmp==='' ? '-' : $tmp);?>
</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>2. Fakta Integritas</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="file" name="pakta_integritas" id="pakta_integritas" style="display:inline" class="validasi"> Last Upload File : <a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pakta_integritas'])===null||$tmp==='' ? '-' : $tmp);?>
','pakta_integritas')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pakta_integritas'])===null||$tmp==='' ? '-' : $tmp);?>
</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>3. Surat Pernyataan Minat</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="file" name="surat_pernyataan_minat" id="surat_pernyataan_minat" style="display:inline" class="validasi"> Last Upload File : <a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['surat_pernyataan_minat'])===null||$tmp==='' ? '-' : $tmp);?>
','surat_pernyataan')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['surat_pernyataan_minat'])===null||$tmp==='' ? '-' : $tmp);?>
</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>4. Formulir Keikutsertaan</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="file" name="formulir_keikutsertaan" id="formulir_keikutsertaan" style="display:inline" class="validasi"> Last Upload File : <a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['formulir_keikutsertaan'])===null||$tmp==='' ? '-' : $tmp);?>
','formulir')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['formulir_keikutsertaan'])===null||$tmp==='' ? '-' : $tmp);?>
</a>
			</td>
		</tr>
	</table>
	
	
</fieldset>
</form>
<div class="control-group">
	<center>
	<label class="control-label" for="form-field-1"></label>
	<div class="controls">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['masa']->value)===null||$tmp==='' ? 0 : $tmp) == 1) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("template/button_save.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_simpan'=>"simpan_".((string)$_smarty_tpl->tpl_vars['mod']->value),'id_batal'=>"batal_".((string)$_smarty_tpl->tpl_vars['mod']->value)), 0);
?>

		<?php }?>
	</div>
	</center>
</div>		
</div>

<?php echo '<script'; ?>
>
	var idx_row=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jml_row']->value)===null||$tmp==='' ? 1 : $tmp);?>
;
	$(".validasi").validatebox({ required:true }); 
	$('.tgl').datepicker({
		 format: 'yyyy-mm-dd',
		 autoclose: true
	});
	$('#batal_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').click(function(){
		$('#grid_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').show();
		$('#detil_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').html('').hide();
	});
	
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').click(function(){
		submit_form('form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				winLoadingClose();
				$.messager.alert('EPROC-APP',"Data Tersimpan",'info');
				loadUrl(host+'modul/get_konten/upload_dok');
				$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').removeClass('bg-red');
				$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').addClass('bg-green');
			}else{
				winLoadingClose();
				$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
				console.log(r);
			}
		});

	});
<?php echo '</script'; ?>
><?php }
}
?>