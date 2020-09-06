<?php /* Smarty version 3.1.24, created on 2020-09-01 14:48:03
         compiled from "/home/files/Sync/eproc/__appl/views/main/data_perusahaan.html" */ ?>
<?php
/*%%SmartyHeaderCode:6200025895f4dfcb34ae386_04834003%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3b92e692334dc2596b8c6be7097a66597e81c4' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/data_perusahaan.html',
      1 => 1598946472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6200025895f4dfcb34ae386_04834003',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'mod' => 0,
    'data' => 0,
    'sts_crud' => 0,
    'bentuk' => 0,
    'i' => 0,
    'propinsi' => 0,
    'masa' => 0,
    'jml_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f4dfcb361dd97_73668161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f4dfcb361dd97_73668161')) {
function content_5f4dfcb361dd97_73668161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6200025895f4dfcb34ae386_04834003';
?>
<div class="span10">
<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
<input type="hidden" name="sts_crud" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp);?>
">
<fieldset>
	
	<table class="table table-hover">
		<tr>
			<td>&nbsp;</td><td>Bentuk Perusahaan * </td><td>:</td>
			<td style="font-weight:bold;">
				<select name="tipe_perusahaan" id="tipe_perusahaan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control " style="width:80%">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['bentuk']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['i']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['tipe_perusahaan']) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value['tipe_perusahaan'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
				</select>
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nm_perusahaan'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nama Perusahaan *",'id'=>"nm_perusahaan",'name'=>"nm_perusahaan",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"File NPWP (pdf) *",'id'=>"file_npwp",'name'=>"file_npwp",'style_type'=>"width:80%",'class'=>$_tmp2), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_npwp'])===null||$tmp==='' ? '' : $tmp);?>
','npwp')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_npwp'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>
		<?php }?>
		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"File KTP (pdf) *",'id'=>"file_ktp",'name'=>"file_ktp",'style_type'=>"width:80%",'class'=>$_tmp3), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_ktp'])===null||$tmp==='' ? '' : $tmp);?>
','ktp')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_ktp'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>
		<?php }?>
		
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['no_pengukuhan'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor Pengukuhan (PKP) *",'id'=>"no_pengukuhan",'name'=>"no_pengukuhan",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp4), 0);
?>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"File PKP (pdf) *",'id'=>"file_pkp",'name'=>"file_pkp",'style_type'=>"width:80%",'class'=>$_tmp5), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_pkp'])===null||$tmp==='' ? '' : $tmp);?>
','pkp')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_pkp'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"File Rekening (pdf) *",'id'=>"file_rekening",'name'=>"file_rekening",'style_type'=>"width:80%",'class'=>$_tmp6), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_rekening'])===null||$tmp==='' ? '' : $tmp);?>
','rekening')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file_rekening'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['alamat'])===null||$tmp==='' ? '' : $tmp);
$_tmp7=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Alamat *",'id'=>"alamat",'name'=>"alamat",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp7), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Propinsi *</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="propinsi" id="propinsi" class="form-control" style="width:80%">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['propinsi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['i']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['propinsi']) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>KAB/KOTA *</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="kota" id="kota" class="form-control" style="width:80%">
					<option value="">-- Pilih --</option>
				</select>
			</td>
		</tr>
		
		
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['no_tlp'])===null||$tmp==='' ? '' : $tmp);
$_tmp8=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Telp *",'id'=>"no_tlp",'name'=>"no_tlp",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp8), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['fax'])===null||$tmp==='' ? '' : $tmp);
$_tmp9=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Fax ",'id'=>"fax",'name'=>"fax",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp9), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['no_hp'])===null||$tmp==='' ? '' : $tmp);
$_tmp10=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"HP *",'id'=>"no_hp",'name'=>"no_hp",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp10), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['kode_pos'])===null||$tmp==='' ? '' : $tmp);
$_tmp11=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Kode Pos *",'id'=>"kode_pos",'name'=>"kode_pos",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp11), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Email *",'id'=>"email",'name'=>"email",'style_type'=>"width:80%",'class'=>"validasi_email",'value'=>((string)$_smarty_tpl->tpl_vars['data']->value['email'])), 0);
?>
		
		
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['website'])===null||$tmp==='' ? '' : $tmp);
$_tmp12=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Website ",'id'=>"website",'name'=>"website",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp12), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Kantor Cabang </td><td>:</td>
			<td style="font-weight:bold;">
				<select name="kantor_cabang" id="kantor_cabang" class="form-control" style="width:80%">
					<option value="1">YA</option>
					<option value="2" selected>Tidak</option>
				</select>
			</td>
		</tr>
	</table>
	
	
</fieldset>
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
$_tmp13=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/button_save.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_na'=>"edit_".((string)$_smarty_tpl->tpl_vars['mod']->value),'btn_goyz'=>"true",'text'=>"Edit Data",'style_btn'=>"btn-danger ".$_tmp13), 0);
?>

	</div>
	</center>
</div>		
</div>

<?php echo '<script'; ?>
>
	var idx_row=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jml_row']->value)===null||$tmp==='' ? 1 : $tmp);?>
;
	$("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").each(function(){
		$(this).find(':input').attr("disabled","disabled") //<-- Should return all input elements in that specific form.
	});
	$(".validasi").validatebox({ required:true }); 
	$('.tgl').datepicker({
		 format: 'yyyy-mm-dd',
		 autoclose: true
	});
	$('#propinsi').change(function(){
		fillCombo(host+'modul/get_combo/kabkota', 'kota','kabkota', $(this).val());
	});
	<?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {?>
		fillCombo(host+'modul/get_combo/kabkota', 'kota','kabkota', $('#propinsi').val(),<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['kota'])===null||$tmp==='' ? 0 : $tmp);?>
);
	<?php }?>
	
	
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
					loadUrl(host+'modul/get_konten/data_perusahaan');
					$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').removeClass('bg-red');
					$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').addClass('bg-green')
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
		// 		loadUrl(host+'modul/get_konten/data_perusahaan');
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