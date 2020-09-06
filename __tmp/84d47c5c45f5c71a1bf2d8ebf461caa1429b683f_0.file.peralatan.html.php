<?php /* Smarty version 3.1.24, created on 2020-02-06 14:57:53
         compiled from "/home/files/Sync/eproc/__appl/views/main/peralatan.html" */ ?>
<?php
/*%%SmartyHeaderCode:21050968255e3bc7018bc270_49966540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d47c5c45f5c71a1bf2d8ebf461caa1429b683f' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/peralatan.html',
      1 => 1580975997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21050968255e3bc7018bc270_49966540',
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
  'unifunc' => 'content_5e3bc701979470_10550251',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e3bc701979470_10550251')) {
function content_5e3bc701979470_10550251 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21050968255e3bc7018bc270_49966540';
?>
<fieldset>
	<legend>Form Input Peralatan</legend>
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
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nama_alat'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nama Alat *",'id'=>"nama_alat",'name'=>"nama_alat",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['jumlah'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Jumlah *",'id'=>"jumlah",'name'=>"jumlah",'style_type'=>"width:10%;height:30px;",'class'=>"validasi angka",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['kapasitas'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Kapasitas ",'id'=>"kapasitas",'name'=>"kapasitas",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp3), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['merk'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Merk ",'id'=>"merk",'name'=>"merk",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp4), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tahun'])===null||$tmp==='' ? '' : $tmp);
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tahun Pembuatan *",'id'=>"tahun",'name'=>"tahun",'style_type'=>"width:10%;height:30px;",'class'=>"angka validasi",'value'=>$_tmp5), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Kondisi</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="radio" name="kondisi" id="kondisi" value="1" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'add') {?>checked<?php } else {
if ($_smarty_tpl->tpl_vars['data']->value['kondisi'] == 1) {?>checked<?php }
}?>>&nbsp;Baik&nbsp;&nbsp;
				<input type="radio" name="kondisi" id="kondisi" value="2" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['data']->value['kondisi'] == 2) {?>checked<?php }
}?>>&nbsp;Rusak
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['lokasi'])===null||$tmp==='' ? '' : $tmp);
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Lokasi ",'id'=>"lokasi",'name'=>"lokasi",'style_type'=>"width:80%",'class'=>'','value'=>$_tmp6), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Status Kepemilikan</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="radio" name="status_milik" id="status_milik" value="1" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'add') {?>checked<?php } else {
if ($_smarty_tpl->tpl_vars['data']->value['status_milik'] == 1) {?>checked<?php }
}?>>&nbsp;Milik Sendiri&nbsp;&nbsp;
				<input type="radio" name="status_milik" id="status_milik" value="2" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['data']->value['status_milik'] == 2) {?>checked<?php }
}?>>&nbsp;Sewa
			</td>
		</tr>
		<?php echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Bukti Kepemilikan",'id'=>"bukti_milik",'name'=>"bukti_milik",'style_type'=>"width:80%"), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['bukti_milik'])===null||$tmp==='' ? '' : $tmp);?>
','peralatan')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['bukti_milik'])===null||$tmp==='' ? '' : $tmp);?>
</a>
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
	$('.angka').numberbox();
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