<?php /* Smarty version 3.1.24, created on 2020-08-06 11:15:54
         compiled from "/home/files/Sync/eproc/__appl/views/main/domisili.html" */ ?>
<?php
/*%%SmartyHeaderCode:8873648415f2b83fa41aa75_58230719%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b1ef3955c0a8fb6bda0ca2c90b63dcaef2f25a' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/domisili.html',
      1 => 1596687563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8873648415f2b83fa41aa75_58230719',
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
  'unifunc' => 'content_5f2b83fa4ea574_79325661',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2b83fa4ea574_79325661')) {
function content_5f2b83fa4ea574_79325661 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8873648415f2b83fa41aa75_58230719';
?>
<fieldset>
	<legend>Form Domisili/Ijin Lokasi</legend>
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
		<tr>
			<td>&nbsp;</td><td>Jenis Dokumen</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="jenis_dokumen" id="jenis_dokumen_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi" style="width:80%">
					<option value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['jenis_dokumen'])===null||$tmp==='' ? '' : $tmp) == 1) {?>selected<?php }?>>DOMISILI</option>
					<option value="2" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['jenis_dokumen'])===null||$tmp==='' ? '' : $tmp) == 2) {?>selected<?php }?>>LOKASI</option>
				</select>
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nomor'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor *",'id'=>"nomor",'name'=>"nomor",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['instansi_penerbit'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Instansi Penerbit *",'id'=>"instansi_penerbit",'name'=>"instansi_penerbit",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tgl_terbit'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tgl. Terbit *",'id'=>"tgl_terbit",'name'=>"tgl_terbit",'style_type'=>"width:30%",'class'=>"validasi tgl",'value'=>$_tmp3), 0);
?>

		<tr class="tr_na">
			<td>&nbsp;</td><td>Berlaku Sampai</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="text" class="form-control tgl validasi" style="width:80%" name="tgl_sampai" id="tgl_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tgl_sampai'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		
		
		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"file",'name'=>"file",'style_type'=>"width:80%",'class'=>$_tmp4), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
','domisili')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>
		<?php }?>
		
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			<td style="font-weight:bold;">
				* Data harus diisi<br>
				** Dokumen yang diupload adalah scan dokumen ASLI (Pdf), Bukan Fotokopi
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
		<?php echo $_smarty_tpl->getSubTemplate ("template/button_save.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_na'=>"simpan_".((string)$_smarty_tpl->tpl_vars['mod']->value),'btn_goyz'=>"true",'text'=>"Simpan / Update",'style'=>"display:none;"), 0);
?>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['masa']->value)===null||$tmp==='' ? 0 : $tmp) == 0) {
echo "disabled";
}
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/button_save.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_na'=>"edit_".((string)$_smarty_tpl->tpl_vars['mod']->value),'btn_goyz'=>"true",'text'=>"Edit Data",'style_btn'=>"btn-danger ".$_tmp5), 0);
?>

	</div>
	</center>
</div>		
</div>
</fieldset>

<?php echo '<script'; ?>
>
	var idx_row=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jml_row']->value)===null||$tmp==='' ? 1 : $tmp);?>
;
	
	$('.tgl').datepicker({
		 format: 'yyyy-mm-dd',
		 autoclose: true
	});
	$("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").each(function(){
		$(this).find(':input').attr("disabled","disabled") //<-- Should return all input elements in that specific form.
	});
	$('#jenis_dokumen_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').change(function(){
		if($(this).val()==2){
			$('.tr_na').hide();
			$('#tgl_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').removeClass('validasi');
			$('#tgl_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').removeClass('validatebox-text');
			$('#tgl_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').removeClass('validatebox-invalid');
		}else{
			$('.tr_na').show();
			$('#tgl_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').addClass('validasi');
		}
	});
	$('#edit_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').click(function(){
		$(this).hide();
		$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').show();
		$("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").each(function(){
			$(this).find(':input').removeAttr("disabled") //<-- Should return all input elements in that specific form.
		});
	});
	$('#jenis_dokumen_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').trigger('change');
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').click(function(){
		$(".validasi").validatebox({ required:true }); 
		if ($('#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').form('validate')){
		// ajax
		var uri = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
";
		var formData = new FormData($("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
")[0]);
		$.ajax({
			url: uri,
			type: "POST",
			data : formData,
			processData: false,
			contentType: false,
			beforeSend: function() {
				loadingna();
			},
			success: function(data){
				winLoadingClose();
				if(data==1){
					$.messager.alert('EPROC-APP',"Data Tersimpan",'info');
					loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/domisili');
					$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').removeClass('bg-red');
					$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').addClass('bg-green');
				}else{
					$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
				}
				console.log(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				winLoadingClose();
				$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
			}
		});
		// end ajax
		}
		// submit_form('form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
		// 	if(r==1){
		// 		winLoadingClose();
		// 		$.messager.alert('EPROC-APP',"Data Tersimpan",'info');
		// 		loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/domisili');
		// 		$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').removeClass('bg-red');
		// 		$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').addClass('bg-green');
		// 	}else{
		// 		winLoadingClose();
		// 		$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
		// 		console.log(r);
		// 	}
		// });

	});
<?php echo '</script'; ?>
><?php }
}
?>