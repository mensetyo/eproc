<?php /* Smarty version 3.1.24, created on 2020-09-01 10:49:47
         compiled from "/home/files/Sync/eproc/__appl/views/main/akta.html" */ ?>
<?php
/*%%SmartyHeaderCode:9738647255f4dc4db988724_43343017%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfcc6ed35595d6b0f80b39bbdb68ef9fe0ba256c' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/akta.html',
      1 => 1598932177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9738647255f4dc4db988724_43343017',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'mod' => 0,
    'data' => 0,
    'sts_crud' => 0,
    'link' => 0,
    'masa' => 0,
    'jml_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f4dc4dbb9efe9_56296884',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f4dc4dbb9efe9_56296884')) {
function content_5f4dc4dbb9efe9_56296884 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9738647255f4dc4db988724_43343017';
?>
<fieldset>
	<legend>Form Input Akta</legend>
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
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nomor'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor *",'id'=>"nomor",'name'=>"nomor",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tgl_srt'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tanggal *",'id'=>"tgl_srt",'name'=>"tgl_srt",'style_type'=>"width:30%",'class'=>"validasi tgl",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['notaris'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Notaris *",'id'=>"notaris",'name'=>"notaris",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp3), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['alamat_notaris'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Alamat Notaris *",'id'=>"alamat_notaris",'name'=>"alamat_notaris",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp4), 0);
?>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"dok",'name'=>"dok",'style_type'=>"width:80%",'class'=>$_tmp5), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['nomor'] == '') {?>
				<?php $_smarty_tpl->tpl_vars["link"] = new Smarty_Variable("akta_reg", null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars["link"] = new Smarty_Variable("akta", null, 0);?>
			<?php }?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['dok'])===null||$tmp==='' ? '' : $tmp);?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['dok'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>
		<?php }?>
		<tr>
			<td>&nbsp;</td>
			<td colspan="3"><b>Akta Perubahan Terakhir (jika ada)</b></td>
			
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['perubahan_nomor'])===null||$tmp==='' ? '' : $tmp);
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor ",'id'=>"perubahan_nomor",'name'=>"perubahan_nomor",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp6), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['perubahan_tgl_srt'])===null||$tmp==='' ? '' : $tmp);
$_tmp7=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tanggal ",'id'=>"perubahan_tgl_srt",'name'=>"perubahan_tgl_srt",'style_type'=>"width:30%",'class'=>" tgl",'value'=>$_tmp7), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['perubahan_notaris'])===null||$tmp==='' ? '' : $tmp);
$_tmp8=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Notaris ",'id'=>"perubahan_notaris",'name'=>"perubahan_notaris",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp8), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['perubahan_alamat_notaris'])===null||$tmp==='' ? '' : $tmp);
$_tmp9=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Alamat Notaris ",'id'=>"perubahan_alamat_notaris",'name'=>"perubahan_alamat_notaris",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp9), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"perubahan_dok",'name'=>"perubahan_dok",'style_type'=>"width:80%",'class'=>''), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['perubahan_dok'])===null||$tmp==='' ? '' : $tmp);?>
','akta_perubahan')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['perubahan_dok'])===null||$tmp==='' ? '' : $tmp);?>
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
$_tmp10=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/button_save.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_na'=>"edit_".((string)$_smarty_tpl->tpl_vars['mod']->value),'btn_goyz'=>"true",'text'=>"Edit Data",'style_btn'=>"btn-danger ".$_tmp10), 0);
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
	$(".validasi").validatebox({ required:true }); 
	$('.tgl').datepicker({
		 format: 'yyyy-mm-dd',
		 autoclose: true
	});
	$("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").each(function(){
		$(this).find(':input').attr("disabled","disabled") //<-- Should return all input elements in that specific form.
	});
	$('.input-group.date').on('changeDate', function(){
		$(this).datepicker('hide');
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
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').click(function(){
		$(".validasi").validatebox({ required:true }); 
		if ($("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").form('validate')){
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
modul/get_konten/akta');
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
	});
<?php echo '</script'; ?>
><?php }
}
?>