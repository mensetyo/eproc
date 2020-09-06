<?php /* Smarty version 3.1.24, created on 2020-08-06 11:16:46
         compiled from "/home/files/Sync/eproc/__appl/views/main/ijin_usaha.html" */ ?>
<?php
/*%%SmartyHeaderCode:15456965595f2b842e2b05f0_95308593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed0270689c2cb2b46cadc901b8a49586d27f8b5' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/ijin_usaha.html',
      1 => 1596687626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15456965595f2b842e2b05f0_95308593',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'data' => 0,
    'sts_crud' => 0,
    'lvl3' => 0,
    'kualifikasi' => 0,
    'i' => 0,
    'm_klbi' => 0,
    'data_klbi' => 0,
    'siup' => 0,
    'mod' => 0,
    'masa' => 0,
    'jml_row' => 0,
    'klasifikasi' => 0,
    'klasifikasi1' => 0,
    'klasifikasi2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f2b842e417c73_30600185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2b842e417c73_30600185')) {
function content_5f2b842e417c73_30600185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15456965595f2b842e2b05f0_95308593';
?>
<style>
	.select2-container--default .select2-selection--single {
		font-size: 14px;
    	height: 34px;
	}

</style>
<fieldset>
	<legend>Form Input Ijin Usaha</legend>
<div class="span10">
<form class="form-horizontal" novalidate id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/ijin_usaha" method="post" enctype="multipart/form-data">
<table class="table table-hover">
		<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
		<input type="hidden" name="sts_crud" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp);?>
">
		<input type="hidden" id="call" value="1">
		<!-- <input type="hidden" id="lvl2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lvl3']->value['idlvl2'])===null||$tmp==='' ? '' : $tmp);?>
"> -->
		<tr>
			<td>&nbsp;</td><td>Jenis Dokumen</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="jenis_dokumen" id="jenis_dokumen_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi" style="width:80%">
					<option value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['jenis_dokumen'])===null||$tmp==='' ? '' : $tmp) == 1) {?>selected<?php }?>>SIUP Lama</option>
					<option value="2" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['jenis_dokumen'])===null||$tmp==='' ? '' : $tmp) == 2) {?>selected<?php }?>>SIUP Baru</option>
				</select>
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['jenis_ijin'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Jenis Ijin *",'id'=>"jenis_ijin",'name'=>"jenis_ijin",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nomor_surat'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor Ijin *",'id'=>"nomor_surat",'name'=>"nomor_surat",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp2), 0);
?>

		<tr class="tr_na">
			<td>&nbsp;</td><td>Berlaku Sampai</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="text" class="form-control tgl validasi" style="width:80%" name="berlaku_sampai" id="berlaku_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['berlaku_sampai'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<!--  -->
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['instansi_pemberi'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Instansi Pemberi *",'id'=>"instansi_pemberi",'name'=>"instansi_pemberi",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp3), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Kualifikasi</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="kualifikasi" id="kualifikasi" class="form-control validasi" style="width:80%">
					<?php
$_from = $_smarty_tpl->tpl_vars['kualifikasi']->value;
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
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['kualifikasi'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['i']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['kualifikasi'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>Kegiatan Usaha/KBLI </td><td>:</td>
			<td style="font-weight:bold;">
				<select name="m_klbi[]" class="form-control select2" style="width:80%;height33px;">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['m_klbi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {
if ((($tmp = @$_smarty_tpl->tpl_vars['data_klbi']->value[0]['kode_klbi'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['i']->value['kode']) {?>selected<?php }
}?>>(<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
)<?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                </select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="m_klbi[]" class="form-control select2" style="width:80%;height33px;">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['m_klbi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {
if ((($tmp = @$_smarty_tpl->tpl_vars['data_klbi']->value[1]['kode_klbi'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['i']->value['kode']) {?>selected<?php }
}?>>(<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
) <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                </select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="m_klbi[]" class="form-control select2" style="width:80%;height33px;">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['m_klbi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {
if ((($tmp = @$_smarty_tpl->tpl_vars['data_klbi']->value[2]['kode_klbi'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['i']->value['kode']) {?>selected<?php }
}?>>(<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
) <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                </select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="m_klbi[]" class="form-control select2" style="width:80%;height33px;">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['m_klbi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {
if ((($tmp = @$_smarty_tpl->tpl_vars['data_klbi']->value[3]['kode_klbi'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['i']->value['kode']) {?>selected<?php }
}?> >(<?php echo $_smarty_tpl->tpl_vars['i']->value['kode'];?>
) <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                </select>
			</td>
		</tr>
		<!-- klasifikasi -->
		<tr>
			<td>&nbsp;</td><td>Klasifikasi</td><td>:</td>
			<td style="font-weight:bold;" id="area_tmbh">
				<div id="div_tmbh" style="display: flex;">
					
				</div>
			</td>
		</tr>

		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td><a href="javascript:void(0);" class="btn btn-small btn-success" id="tmbh_klasifikasi" style="width: 22%;"><span>Tambah Klasifikasi</span></a></td>
		</tr>
				
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['klasifikasi_lainnya'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Klasifikasi Lain",'id'=>"klasifikasi_lainnya",'name'=>"klasifikasi_lainnya",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp4), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"dok",'name'=>"dok",'style_type'=>"width:80%",'class'=>''), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
			<tr>
				<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
				<td style="font-weight:bold;">
					<?php if ($_smarty_tpl->tpl_vars['data']->value['dok'] == '') {?>
					<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['siup']->value['file_siup'])===null||$tmp==='' ? '' : $tmp);?>
','ijin_usaha_reg')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['siup']->value['file_siup'])===null||$tmp==='' ? '' : $tmp);?>
</a>
					<?php } else { ?>
					<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['dok'])===null||$tmp==='' ? '' : $tmp);?>
','ijin_usaha')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['dok'])===null||$tmp==='' ? '' : $tmp);?>
</a>
					
					<?php }?>
				</td>
			</tr>
		<?php } else { ?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File (Registrasi)</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['siup']->value['file_siup'])===null||$tmp==='' ? '' : $tmp);?>
','ijin_usaha_reg')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['siup']->value['file_siup'])===null||$tmp==='' ? '' : $tmp);?>
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
	//$(".validasi").validatebox({ required:true }); 
	$('.tgl').datepicker({
		 format: 'yyyy-mm-dd',
		 autoclose: true
	});
	$('.angka').numberbox();
	$('.select2').select2()
	$("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").each(function(){
		$(this).find(':input').attr("disabled","disabled") //<-- Should return all input elements in that specific form.
	});
	$('#tmbh_klasifikasi').css('display','none');
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
		$('#tmbh_klasifikasi').css('display','block');
	});
	$('#jenis_dokumen_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').change(function(){
		if($(this).val()==2){
			$('.tr_na').hide();
			$('#berlaku_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').removeClass('validasi');
			$('#berlaku_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').removeClass('validatebox-text');
			$('#berlaku_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').removeClass('validatebox-invalid');
		}else{
			$('.tr_na').show();
			$('#berlaku_sampai_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').addClass('validasi');
		}
	});
	$('#jenis_dokumen_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').trigger('change');
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').click(function(){
		$(".validasi").validatebox({ required:true });
		if ($('#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').form('validate')){
		var formData = new FormData($("#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
")[0]);
		$.ajax({
			url: "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/ijin_usaha",
			type: "POST",
			data : formData,
			processData: false,
			contentType: false,
			beforeSend: function() {
				loadingna();
			},
			success: function(data){
				winLoadingClose();
				$.messager.alert('EPROC-APP',"Data Tersimpan",'info');
				loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/ijin_usaha');
				$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').removeClass('bg-red');
				$('.menu_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').addClass('bg-green');
				console.log(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				winLoadingClose();
				$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
			}
		});
		}
	});

	var x = 2;
	$('#tmbh_klasifikasi').click(function(e) {
		e.preventDefault();
		
		$('#call').val(x);
		var konten = '';
		konten ='<div style="display: flex;">'+
			'<select name="klasilvl1[]" nilai="'+x+'" id="klasilvl1_'+x+'" class="form-control select2 klasilvl1" style="margin-top:5px;width:25%;float: left;border-radius: 5px;">'+
				'<option value="0">--Pilih Level 1--</option>'+
				'<?php
$_from = $_smarty_tpl->tpl_vars['klasifikasi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>'+
				'<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['klasifikasi_perusahaan'];?>
</option>'+
				'<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>'+
			'</select>'+
			'<select name="klasilvl2[]" nilai="'+x+'" id="klasilvl2_'+x+'" class="form-control select2 klasilvl2" style="margin-top:5px;float: left;margin-left: 4px;border-radius: 5px;width:25%;height34px;">'+
				'<option value="0">Data Kosong</option>'+
			'</select>'+
			'<select name="klasilvl3[]" id="klasilvl3_'+x+'" class="form-control select2 klasilvl3" style="margin-top:5px;float: left;margin-left: 4px;border-radius: 5px;width:25%;height33px;">'+
				'<option value="0">Data Kosong</option>'+
			'</select>'+
			'<a href="javascript:void(0);" class="btn btn-small btn-warning" id="hps_klasifikasi" style="margin-top:5px;margin-left:2px"><span>X</span></a></div>';
		$('#area_tmbh').append(konten); 
		x++; 
		
	});
	
	$('#area_tmbh').on('click', '#hps_klasifikasi', function(e) {
		e.preventDefault();
        $(this).parent('div').remove();
	
	});

	
	$(document).on('change','.klasilvl1',function(){
		var idlevel = $(this).val();
		var id = $(this).attr('nilai');
		var url = '/modul/getdata/kalsifikasi_l2';
		$.ajax({
			type: 'POST',
			url: url,
			data:{idlevel1:idlevel},
			success: function (data) {
				var jsonData = $.parseJSON(data);
				var html = '<option value="0">--Pilih Level 2--</option>';
				if(jsonData,jsonData.length==0){
					html = '<option value="0">Data Kosong</option>';
				}else{
					for(i=0; i< jsonData.length; i++){
						html += '<option value='+jsonData[i].id+'>'+jsonData[i].level2+'</option>';
					}
				}
				$('#klasilvl2_'+id).html(html);
				// if(lvl2!=''){
				// 	$("#klasilvl2 option[value="+lvl2+"]").attr('selected',true);
				// }
				
			}
		});
	})

	$(document).on('change','.klasilvl2',function(){
		var idlevel2 = $(this).val();
		var id = $(this).attr('nilai');
		var idlevel1 = $('#klasilvl1_'+id+' option:selected').val();
		var url = '/modul/getdata/kalsifikasi_l3';
		$.ajax({
			type: 'POST',
			url: url,
			data:{idlevel1:idlevel1,idlevel2:idlevel2},
			success: function (data) {
				var jsonData = $.parseJSON(data);
				var html = '<option value="0">--Pilih Level 3--</option>';
				if(jsonData,jsonData.length==0){
					html = '<option value="0">Data Kosong</option>';
				}else{
					for(i=0; i< jsonData.length; i++){
						html += '<option value='+jsonData[i].id+'>'+jsonData[i].level3+'</option>';
					}
				}
				$('#klasilvl3_'+id).html(html);
			}
		});
	})
	
	$('#klasilvl1_1').trigger('change');
	$('#klasilvl2_1').trigger('change');

	loadData();
	function loadData(){
		var url = '/modul/getdata/getData';
		var konten = '';
		$.ajax({
			url: url,
			success: function (data) {
				var jsonData = $.parseJSON(data);
				
				if(jsonData.length!=0){
					for(i=0; i< jsonData.length; i++){
						konten ='<div style="display: flex;">'+
						'<select disabled name="klasilvl1[]" nilai="'+i+'" id="klasilvl1_'+i+'" class="form-control select2 klasilvl1" style="width:29%;float: left;border-radius: 5px;">'+
							'<option value="0">--Pilih Level 1--</option>'+
							'<?php
$_from = $_smarty_tpl->tpl_vars['klasifikasi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>'+
							'<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['klasifikasi_perusahaan'];?>
</option>'+
							'<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>'+
						'</select>'+
						'<select disabled name="klasilvl2[]" nilai="'+i+'" id="klasilvl2_'+i+'" class="form-control select2 klasilvl2" style="float: left;margin-left: 4px;border-radius: 5px;width:25%;height34px;">'+
							'<option value="0">--Pilih Level 2--</option>'+
							'<?php
$_from = $_smarty_tpl->tpl_vars['klasifikasi1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>'+
							'<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['level2'];?>
</option>'+
							'<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>'+
						'</select>'+
						'<select disabled  name="klasilvl3[]" id="klasilvl3_'+i+'" class="form-control select2 klasilvl3" style="float: left;margin-left: 4px;border-radius: 5px;width:25%;height33px;">'+
							'<option value="0">--Pilih Level 3--</option>'+
							'<?php
$_from = $_smarty_tpl->tpl_vars['klasifikasi2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>'+
							'<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['level3'];?>
</option>'+
							'<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>'+
						'</select>';
						$('#area_tmbh').append(konten);
						$("#klasilvl1_"+i+" option[value="+jsonData[i].level1+"]").attr('selected', 'selected');
						$("#klasilvl2_"+i+" option[value="+jsonData[i].level2+"]").attr('selected', 'selected');
						$("#klasilvl3_"+i+" option[value="+jsonData[i].level3+"]").attr('selected', 'selected');
					}
					 
				}else{	
					konten ='<div style="display: flex;">'+
						'<select disabled name="klasilvl1[]" nilai="'+(x-1)+'" id="klasilvl1_'+(x-1)+'" class="form-control select2 klasilvl1" style="width:29%;float: left;border-radius: 5px;">'+
							'<option value="0">--Pilih Level 1--</option>'+
							'<?php
$_from = $_smarty_tpl->tpl_vars['klasifikasi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>'+
							'<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['klasifikasi_perusahaan'];?>
</option>'+
							'<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>'+
						'</select>'+
						'<select disabled name="klasilvl2[]" nilai="'+(x-1)+'" id="klasilvl2_'+(x-1)+'" class="form-control select2 klasilvl2" style="float: left;margin-left: 4px;border-radius: 5px;width:25%;height34px;">'+
							'<option value="0">Data Kosong</option>'+
						'</select>'+
						'<select disabled  name="klasilvl3[]" id="klasilvl3_'+(x-1)+'" class="form-control select2 klasilvl3" style="float: left;margin-left: 4px;border-radius: 5px;width:25%;height33px;">'+
							'<option value="0">Data Kosong</option>'+
						'</select>';
					$('#area_tmbh').append(konten); 
				}
			}
		});
	}
<?php echo '</script'; ?>
><?php }
}
?>