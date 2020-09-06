<?php /* Smarty version 3.1.24, created on 2019-12-20 08:31:53
         compiled from "/home/files/Sync/eproc/__appl/views/template/grid.html" */ ?>
<?php
/*%%SmartyHeaderCode:4455630485dfc2489f30b35_27816428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bd3706b36c24c28dea9e400eac7a2f165dfdd8' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/template/grid.html',
      1 => 1576762278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4455630485dfc2489f30b35_27816428',
  'variables' => 
  array (
    'main' => 0,
    'tinggi_toolbar' => 0,
    'align' => 0,
    'filter_prov' => 0,
    'acak' => 0,
    'prov' => 0,
    'i' => 0,
    'filter_kab' => 0,
    'filter_kec' => 0,
    'filter_kel' => 0,
    'filter_core' => 0,
    'data_select' => 0,
    'table' => 0,
    'button_import' => 0,
    'button' => 0,
    'button_delete' => 0,
    'mod' => 0,
    'button_edit' => 0,
    'button_add' => 0,
    'filter_periode' => 0,
    'button_process' => 0,
    'button_pdf' => 0,
    'button_excell' => 0,
    'filter_laporan' => 0,
    'filter_satker' => 0,
    'satker' => 0,
    'filter_kelas' => 0,
    'kelas' => 0,
    'height_grid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5dfc248a097cb4_64551522',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dfc248a097cb4_64551522')) {
function content_5dfc248a097cb4_64551522 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4455630485dfc2489f30b35_27816428';
?>
<style type="text/css">
	.datagrid-row-over td{
		background:#D0E5F5;
	}
	.datagrid-row-selected td{
		background:#FBEC88;
		color:#000;
	}
</style>

<div id="grid_nya_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
" style="width:100%">
	<div id='grid_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
'></div>
	<div id='tb_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
' style="padding:5px;height:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tinggi_toolbar']->value)===null||$tmp==='' ? '65px' : $tmp);?>
;">
		<div style="float:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['align']->value)===null||$tmp==='' ? 'left' : $tmp);?>
; width:50%;">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_prov']->value)===null||$tmp==='' ? 'false' : $tmp) == 'true') {?>
				<label >Prov. </label>: &nbsp;&nbsp;
				<select name="prov_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="prov_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
					<option value="">-- Pilih --</option>
					<?php
$_from = $_smarty_tpl->tpl_vars['prov']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['kode_prov'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['provinsi'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
				</select>
					
		<?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_kab']->value)===null||$tmp==='' ? 'false' : $tmp) == 'true') {?>
				<label>Kab. </label>: &nbsp;&nbsp;
				<select name="kab_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="kab_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
				</select>	
		<?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_kec']->value)===null||$tmp==='' ? 'false' : $tmp) == 'true') {?>
				<br><label >Kec. </label>: &nbsp;&nbsp;
				<select name="kec_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="kec_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
					
				</select>	
		<?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_kel']->value)===null||$tmp==='' ? 'false' : $tmp) == 'true') {?>
				<label >Kel. </label>: &nbsp;&nbsp;
				<select name="kel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="kel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
				
				</select>	
		<?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_core']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
			<div style="float:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['align']->value)===null||$tmp==='' ? 'left' : $tmp);?>
; width:60%;">
				<!--label style='width:100px;'>Pencarian </label>: &nbsp;&nbsp;
				<select name="kat_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="kat_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data_select']->value)===null||$tmp==='' ? '' : $tmp);?>

				</select>
				<input type="text" name="key_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="key_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:30%;height:22px;"-->
				&nbsp;&nbsp;&nbsp;
				<a href="javascript:void(0)" style='' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="cariData('<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Cari</span><span class="l-btn-icon icon-search">&nbsp;</span>
					</span>
				</a>	
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_import']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="get_form('<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','import_excel');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Import Excel</span><span class="l-btn-icon icon-excel">&nbsp;</span>
					</span>
				</a>
				&nbsp;
				<?php }?>
			</div>
		<?php }?>
			<!--input type="text" name="key_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="key_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:80%;height:22px;">
				&nbsp;&nbsp;&nbsp;
			<a href="javascript:void(0)" style='' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="cariData('<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
');">
				<span class="l-btn-left l-btn-icon-left">
					<span class="l-btn-text">Cari</span><span class="l-btn-icon icon-search">&nbsp;</span>
				</span>
			</a-->
		</div>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
			<div id='tombol' style="float:left;width:50%;">
				
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_delete']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='float:left;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('delete', '<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Hapus</span><span class="l-btn-icon icon-no">&nbsp;</span>
					</span>
				</a>	
				&nbsp;			
				<?php }?>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_edit']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='float:left;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('edit', '<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Edit</span><span class="l-btn-icon icon-edit">&nbsp;</span>
					</span>
				</a>
				&nbsp;
				<?php }?>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_add']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='float:left;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('add', '<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Tambah</span><span class="l-btn-icon icon-add">&nbsp;</span>
					</span>
				</a>
				&nbsp;
				<?php }?>
				
			</div>
		<?php }?>
		
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_periode']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
			<div style="float:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['align']->value)===null||$tmp==='' ? 'left' : $tmp);?>
; width:60%;">
				<label style='width:100px;'>Tahun </label>: &nbsp;&nbsp;
				<input type="text" name="periode_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="periode_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
				&nbsp;&nbsp;&nbsp;
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_process']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="proseslaporan('<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Proses</span><span class="l-btn-icon icon-reload">&nbsp;</span>
					</span>
				</a>
				<?php }?>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_pdf']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="export_data('pdf','<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">PDF</span><span class="l-btn-icon icon-pdf">&nbsp;</span>
					</span>
				</a>
				&nbsp;
				<?php }?>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['button_excell']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<a href="javascript:void(0)" style='' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="export_data('excel_html','<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
');">
					<span class="l-btn-left l-btn-icon-left">
						<span class="l-btn-text">Excell</span><span class="l-btn-icon icon-excel">&nbsp;</span>
					</span>
				</a>
				&nbsp;
				<?php }?>				
			</div>
		<?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_laporan']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
			<div style="float:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['align']->value)===null||$tmp==='' ? 'left' : $tmp);?>
; width:60%;">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_satker']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<label style='width:100px;'>Satker </label>: &nbsp;&nbsp;
				<select name="filter_satker_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="filter_satker_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['satker']->value)===null||$tmp==='' ? '' : $tmp);?>

				</select>
				<?php }?>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['filter_kelas']->value)===null||$tmp==='' ? '' : $tmp) == 'true') {?>
				<label style='width:100px;'>Kelas Jabatan </label>: &nbsp;&nbsp;
				<select name="filter_kelas_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" id="filter_kelas_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:20%;height:22px;">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['kelas']->value)===null||$tmp==='' ? '' : $tmp);?>

				</select>
				<?php }?>
			</div>
		<?php }?>
				
	</div>
</div>
<div id='detil_nya_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
' width='100%'></div>

<?php echo '<script'; ?>
>
$(function(){	
	$('#grid_nya_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
').css({
		'height':( <?php echo (($tmp = @$_smarty_tpl->tpl_vars['height_grid']->value)===null||$tmp==='' ? 'getClientHeight()-150' : $tmp);?>
 )
	});
	
	$('#periode_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').datepicker({
		format: 'mm-yyyy',
		startView: "months", 
		minViewMode: "months"
	});
	
	var jns_grid;
	<?php if ($_smarty_tpl->tpl_vars['main']->value == 'services') {?>
		jns_grid='tree';
	<?php } else { ?>
		jns_grid='grid';
	<?php }?>
	genGrid('<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','grid_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
', '', '', jns_grid);
	
	$("#prov_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").change(function(){
		$('#kab_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').empty();
		$('#kec_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').empty();
		$('#kel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').empty();
		fillCombo(host+"backend/get_combo", "kab_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
", "kabupaten",$(this).val());
	});
	$("#kab_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").change(function(){
		$('#kec_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').empty();
		fillCombo(host+"backend/get_combo", "kec_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
", "kecamatan",$(this).val());
	});
	$("#kec_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").change(function(){
		$('#kel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').empty();
		fillCombo(host+"backend/get_combo", "kel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
", "kelurahan",$(this).val());
	});
	$(document).keypress(function(e) {
		if(e.which == 13) {
			cariData('<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
');
		}
	});

});
<?php echo '</script'; ?>
><?php }
}
?>