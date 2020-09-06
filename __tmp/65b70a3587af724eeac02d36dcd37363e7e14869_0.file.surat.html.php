<?php /* Smarty version 3.1.24, created on 2020-02-06 14:53:50
         compiled from "/home/files/Sync/eproc/__appl/views/main/surat.html" */ ?>
<?php
/*%%SmartyHeaderCode:1666370425e3bc60ee3fa12_63773830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b70a3587af724eeac02d36dcd37363e7e14869' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/surat.html',
      1 => 1580975803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1666370425e3bc60ee3fa12_63773830',
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
  'unifunc' => 'content_5e3bc60eee1ff5_30360851',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e3bc60eee1ff5_30360851')) {
function content_5e3bc60eee1ff5_30360851 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1666370425e3bc60ee3fa12_63773830';
?>
<fieldset>
	<legend>Form Input Surat Penting</legend>
<div class="span10">
<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" method="post" enctype="multipart/form-data">
<table class="table table-hover">
		<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
		<input type="hidden" name="sts_crud" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp);?>
">
		
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['jenis'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Jenis  *",'id'=>"jenis",'name'=>"jenis",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nomor'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor  *",'id'=>"nomor",'name'=>"nomor",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['instansi_pemberi'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Instansi Pemberi  *",'id'=>"instansi_pemberi",'name'=>"instansi_pemberi",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp3), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tgl_terbit'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tgl. Terbit *",'id'=>"tgl_terbit",'name'=>"tgl_terbit",'style_type'=>"width:30%",'class'=>"validasi tgl",'value'=>$_tmp4), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['masa_berlaku'])===null||$tmp==='' ? '' : $tmp);
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Masa Berlaku *",'id'=>"masa_berlaku",'name'=>"masa_berlaku",'style_type'=>"width:30%",'class'=>"validasi tgl",'value'=>$_tmp5), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['ringkasan_surat'])===null||$tmp==='' ? '' : $tmp);
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Ringkasan ",'id'=>"ringkasan_surat",'name'=>"ringkasan_surat",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp6), 0);
?>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp7=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) *",'id'=>"file",'name'=>"file",'style_type'=>"width:80%",'class'=>$_tmp7), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>

			</td>
		</tr>
		<?php }?>
		
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			<td style="font-weight:bold;">
				* Data harus diisi<br>
				** Dokumen yang diupload adalah scan dokumen ASLI, Bukan Fotokopi
			</td>
		</tr>
		
		<!--tr>
			<td>&nbsp;</td><td>Status</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="checkbox" name="flag" value="Y" checked>&nbsp;&nbsp;Aktif
			</td>
		</tr-->
</table>
	
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
</fieldset>

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
				$('#grid_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').show();
				$('#detil_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').html('').hide();
				$('#grid_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').datagrid('reload');
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