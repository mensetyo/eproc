<?php /* Smarty version 3.1.24, created on 2020-08-07 10:18:13
         compiled from "/home/files/Sync/eproc/__appl/views/main/pekerjaan_berjalan.html" */ ?>
<?php
/*%%SmartyHeaderCode:15946162695f2cc7f583ab65_34136043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117c27b7572db875281d8f1f4ec5d48bc95bd801' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/pekerjaan_berjalan.html',
      1 => 1596714587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15946162695f2cc7f583ab65_34136043',
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
  'unifunc' => 'content_5f2cc7f59550f3_15048796',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2cc7f59550f3_15048796')) {
function content_5f2cc7f59550f3_15048796 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15946162695f2cc7f583ab65_34136043';
?>
<style>
	.textbox {
		-webkit-border-radius: 0px;
		 border-radius: 0px;
	}
</style>
<fieldset>
	<legend>Form Input Pekerjaan Berjalan</legend>
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
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nama_kontrak'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nama kontrak *",'id'=>"nama_kontrak",'name'=>"nama_kontrak",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['lokasi'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Lokasi *",'id'=>"lokasi",'name'=>"lokasi",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['instansi'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Instansi *",'id'=>"instansi",'name'=>"instansi",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp3), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['alamat'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Alamat *",'id'=>"alamat",'name'=>"alamat",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp4), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['telepon'])===null||$tmp==='' ? '' : $tmp);
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Telp *",'id'=>"telepon",'name'=>"telepon",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp5), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nomor_kontrak'])===null||$tmp==='' ? '' : $tmp);
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nomor Kontrak *",'id'=>"nomor_kontrak",'name'=>"nomor_kontrak",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp6), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Jenis Mata Uang</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="radio" name="jenis_mata_uang" id="jenis_mata_uang" value="Rp" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'add') {?>checked<?php } else {
if ($_smarty_tpl->tpl_vars['data']->value['jenis_mata_uang'] == 'Rp') {?>checked<?php }
}?>>&nbsp;Rp (Rupiah)&nbsp;&nbsp;
				<input type="radio" name="jenis_mata_uang" id="jenis_mata_uang" value="$" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['data']->value['jenis_mata_uang'] == '$') {?>checked<?php }
}?>>&nbsp;$ (Dollar)
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nilai_kontrak'])===null||$tmp==='' ? '' : $tmp);
$_tmp7=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nilai Kontrak *",'id'=>"nilai_kontrak",'name'=>"nilai_kontrak",'style_type'=>"width:80%;height:34px;",'class'=>"angka validasi",'value'=>$_tmp7), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['prosentase_sharing'])===null||$tmp==='' ? '' : $tmp);
$_tmp8=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nilai Share Badan(%) *",'id'=>"prosentase_sharing",'name'=>"prosentase_sharing",'style_type'=>"width:10%;;height:30px;",'class'=>"angka2 validasi",'value'=>$_tmp8), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nominal_sharing'])===null||$tmp==='' ? '' : $tmp);
$_tmp9=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nominal Sharing (Rp) ",'id'=>"nominal_sharing",'name'=>"nominal_sharing",'style_type'=>"width:50%;;height:30px;",'class'=>"angka",'value'=>$_tmp9), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tanggal_kontrak'])===null||$tmp==='' ? '' : $tmp);
$_tmp10=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tgl. Kontrak *",'id'=>"tanggal_kontrak",'name'=>"tanggal_kontrak",'style_type'=>"width:30%",'class'=>"tgl validasi",'value'=>$_tmp10), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['presentase_progress'])===null||$tmp==='' ? '' : $tmp);
$_tmp11=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Persen Progres(%) ",'id'=>"presentase_progress",'name'=>"presentase_progress",'style_type'=>"width:10%;;height:30px;",'class'=>"persen",'value'=>$_tmp11), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tanggal_progress'])===null||$tmp==='' ? '' : $tmp);
$_tmp12=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tgl. Progres ",'id'=>"tanggal_progress",'name'=>"tanggal_progress",'style_type'=>"width:30%",'class'=>"tgl",'value'=>$_tmp12), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['keterangan'])===null||$tmp==='' ? '' : $tmp);
$_tmp13=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Keterangan ",'id'=>"keterangan",'name'=>"keterangan",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp13), 0);
?>

		<!-- <?php echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"file",'name'=>"file",'style_type'=>"width:80%"), 0);
?>
 -->
		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp14=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"file",'name'=>"file",'style_type'=>"width:80%",'class'=>$_tmp14), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
','pek_berjalan')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
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
	$('.angka').numberbox({
		precision:2,
		groupSeparator:',',
		decimalSeparator:'.'
	});
	$('.persen').numberbox({
		precision:3,
		groupSeparator:',',
		decimalSeparator:'.'
	});
	$('.angka2').numberbox({
		precision:3,
		groupSeparator:',',
		decimalSeparator:'.',
		onChange:function(x,y){
			var nilai=(x*parseFloat($('#nilai_kontrak_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').numberbox('getValue'))/100)
			$('#nominal_sharing_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').numberbox('setValue',nilai);
		}
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
		var nilai_kontrak = $('input[name="nilai_kontrak"]').val();
		var prosentase_sharing = $('input[name="prosentase_sharing"]').val();
		var nominal_sharing = $('input[name="nominal_sharing"]').val();
		if(nilai_kontrak=='')
		{
			winLoadingClose();
			$.messager.alert('EPROC-APP','Nilai Kontrak Harap di Isi', 'error');
		}else if(prosentase_sharing==''){
			winLoadingClose();
			$.messager.alert('EPROC-APP','Nilai Share Badan Harap di Isi', 'error');
		}else{
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
		}
		
	});

<?php echo '</script'; ?>
><?php }
}
?>