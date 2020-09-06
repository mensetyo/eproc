<?php /* Smarty version 3.1.24, created on 2020-08-06 18:52:26
         compiled from "/home/files/Sync/eproc/__appl/views/main/keuangan.html" */ ?>
<?php
/*%%SmartyHeaderCode:4233822315f2beefa45bde6_45716180%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfac643317466e3dea007726d70cc11242bb5357' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/keuangan.html',
      1 => 1596714963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4233822315f2beefa45bde6_45716180',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'mod' => 0,
    'data' => 0,
    'sts_crud' => 0,
    'uraian_2' => 0,
    'i' => 0,
    'masa' => 0,
    'jml_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f2beefa560d93_21168825',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2beefa560d93_21168825')) {
function content_5f2beefa560d93_21168825 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/files/Sync/eproc/__appl/third_party/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '4233822315f2beefa45bde6_45716180';
?>
<fieldset>
	<legend>Form Input Aspek Keuangan</legend>
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
		<!--input type="hidden" name="uraian_2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['uraian_2']->value)===null||$tmp==='' ? 'Wajar' : $tmp);?>
"-->
		<tr>
			<td>&nbsp;</td><td>Tahun</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="thn" id="thn" class="form-control validasi" style="width:10%" >
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? smarty_modifier_date_format(time(),"%Y")+1 - ((smarty_modifier_date_format(time(),"%Y")-3)) : (smarty_modifier_date_format(time(),"%Y")-3)-(smarty_modifier_date_format(time(),"%Y"))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = (smarty_modifier_date_format(time(),"%Y")-3), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['thn'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
					<?php }} ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>Laporan Keuangan</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="uraian_1" id="uraian_1" class="form-control validasi" style="width:50%" >
						<option value="Audited" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_1'])===null||$tmp==='' ? '' : $tmp) == "Audited") {?>selected<?php }?>>Audited</option>
						<option value="In house" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_1'])===null||$tmp==='' ? '' : $tmp) == "In house") {?>selected<?php }?>>In house</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>Opini Auditor</td><td>:</td>
			<td style="font-weight:bold;">
				<select name="uraian_2" id="uraian_2" class="form-control validasi" style="width:50%" >
						<option value="Wajar" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_2'])===null||$tmp==='' ? '' : $tmp) == "Wajar") {?>selected<?php }?>>Wajar</option>
						<option value="Tidak Wajar" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_2'])===null||$tmp==='' ? '' : $tmp) == "Tidak Wajar") {?>selected<?php }?>>Tidak Wajar</option>
				</select>
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_3'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Kas/Bank *",'id'=>"uraian_3",'name'=>"uraian_3",'style_type'=>"width:80%;;height:30px;",'class'=>"validasi angka",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_4'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Total Hutang (Total Debt) *",'id'=>"uraian_4",'name'=>"uraian_4",'style_type'=>"width:80%;;height:30px;",'class'=>"validasi angka",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_5'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Total Ekuitas (Total Equity) *",'id'=>"uraian_5",'name'=>"uraian_5",'style_type'=>"width:80%;;height:30px;",'class'=>"validasi angka",'value'=>$_tmp3), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_6'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Total Aktiva Lancar (Current Asset) *",'id'=>"uraian_6",'name'=>"uraian_6",'style_type'=>"width:80%;;height:30px;",'class'=>"validasi angka",'value'=>$_tmp4), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uraian_7'])===null||$tmp==='' ? '' : $tmp);
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Total Hutang Lancar (Current Liabilities) *",'id'=>"uraian_7",'name'=>"uraian_7",'style_type'=>"width:80%;;height:30px;",'class'=>"validasi angka",'value'=>$_tmp5), 0);
?>

		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Upload Laporan Keuangan (pdf) *",'id'=>"file",'name'=>"file",'style_type'=>"width:80%",'class'=>$_tmp6), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
','aspek_keu')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
</a>
			</td>
		</tr>
		<?php }?>
		
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			<td style="font-weight:bold;">
				* Data harus diisi<br>
				
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
	$('#uraian_1').change(function(){
		if($(this).val()=='Audited'){
			$('#uraian_2').removeAttr("disabled");
			
		}else{
			$('#uraian_2').attr("disabled","disabled");
		}
	})
	$('#batal_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').click(function(){
		$('#grid_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').show();
		$('#detil_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').html('').hide();
	});
	
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').click(function(){
		var uraian_3 = $('input[name="uraian_3"]').val();
		var uraian_4 = $('input[name="uraian_4"]').val();
		var uraian_5 = $('input[name="uraian_5"]').val();
		var uraian_6 = $('input[name="uraian_6"]').val();
		var uraian_7 = $('input[name="uraian_7"]').val();
		if(uraian_3==''){
			winLoadingClose();
			$.messager.alert('EPROC-APP','Kas/Bank Harap di Isi', 'error');
		}else if(uraian_4==''){
			winLoadingClose();
			$.messager.alert('EPROC-APP','Total Hutang Harap di Isi', 'error');
		}else if(uraian_5==''){
			winLoadingClose();
			$.messager.alert('EPROC-APP','Total Ekuitas Harap di Isi', 'error');
		}else if(uraian_6==''){
			winLoadingClose();
			$.messager.alert('EPROC-APP','Total Aktiva Lancar di Isi', 'error');
		}else if(uraian_7==''){
			winLoadingClose();
			$.messager.alert('EPROC-APP','Total Hutang Lancar di Isi', 'error');
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