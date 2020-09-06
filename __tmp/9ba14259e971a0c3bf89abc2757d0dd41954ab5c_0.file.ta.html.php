<?php /* Smarty version 3.1.24, created on 2020-08-06 16:14:07
         compiled from "/home/files/Sync/eproc/__appl/views/main/ta.html" */ ?>
<?php
/*%%SmartyHeaderCode:10901282795f2bc9dfeb4324_46715580%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba14259e971a0c3bf89abc2757d0dd41954ab5c' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/ta.html',
      1 => 1596705384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10901282795f2bc9dfeb4324_46715580',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'mod' => 0,
    'data' => 0,
    'sts_crud' => 0,
    'pengalaman' => 0,
    'i' => 0,
    'serti' => 0,
    'masa' => 0,
    'jml_row' => 0,
    'jml_row_serti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f2bc9e00f7328_97937671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2bc9e00f7328_97937671')) {
function content_5f2bc9e00f7328_97937671 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10901282795f2bc9dfeb4324_46715580';
?>
<fieldset>
	<legend>Form Input Tenaga Ahli</legend>
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
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nama'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Nama *",'id'=>"nama",'name'=>"nama",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tgl_lahir'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Tgl. Lahir *",'id'=>"tgl_lahir",'name'=>"tgl_lahir",'style_type'=>"width:30%",'class'=>"validasi tgl",'value'=>$_tmp2), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Jenis Kelamin</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="1" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'add') {?>checked<?php } else {
if ($_smarty_tpl->tpl_vars['data']->value['jenis_kelamin'] == 1) {?>checked<?php }
}?>>&nbsp;Laki - laki&nbsp;&nbsp;
				<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="2" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['data']->value['jenis_kelamin'] == 2) {?>checked<?php }
}?>>&nbsp;Perempuan
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['alamat'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Alamat *",'id'=>"alamat",'name'=>"alamat",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp3), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pendidikan_terakhir'])===null||$tmp==='' ? '' : $tmp);
$_tmp4=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Pendidikan Terakhir *",'id'=>"pendidikan_terakhir",'name'=>"pendidikan_terakhir",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp4), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['kewarganegaraan'])===null||$tmp==='' ? '' : $tmp);
$_tmp5=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Kewarganegaraan *",'id'=>"kewarganegaraan",'name'=>"kewarganegaraan",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp5), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_kerja'])===null||$tmp==='' ? '' : $tmp);
$_tmp6=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Pengalaman Kerja (Tahun) *",'id'=>"pengalaman_kerja",'name'=>"pengalaman_kerja",'style_type'=>"width:20%",'class'=>"validasi",'value'=>$_tmp6), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['email'])===null||$tmp==='' ? '' : $tmp);
$_tmp7=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Email ",'id'=>"email",'name'=>"email",'style_type'=>"width:50%",'class'=>'','value'=>$_tmp7), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Status Kepegawaian</td><td>:</td>
			<td style="font-weight:bold;">
				<input type="radio" name="status_pegawaian" id="status_pegawaian" value="1" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'add') {?>checked<?php } else {
if ($_smarty_tpl->tpl_vars['data']->value['status_pegawaian'] == 1) {?>checked<?php }
}?>>&nbsp;Tetap&nbsp;&nbsp;
				<input type="radio" name="status_pegawaian" id="status_pegawaian" value="2" <?php if ($_smarty_tpl->tpl_vars['sts_crud']->value == 'edit') {
if ($_smarty_tpl->tpl_vars['data']->value['status_pegawaian'] == 2) {?>checked<?php }
}?>>&nbsp;Tidak Tetap
			</td>
		</tr>
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['keahlian'])===null||$tmp==='' ? '' : $tmp);
$_tmp8=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'textarea','label'=>"Potensi / Keahlian *",'id'=>"keahlian",'name'=>"keahlian",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp8), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['jabatan'])===null||$tmp==='' ? '' : $tmp);
$_tmp9=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'text','label'=>"Jabatan *",'id'=>"jabatan",'name'=>"jabatan",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp9), 0);
?>

		<tr>
			<td>&nbsp;</td><td>Pengalaman (Tahun & Uraian)</td><td></td>
			<td style="font-weight:bold;">
				<table class="table table-bordered table-hovered" id="dt_sub_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">
						<thead style="background:#3C8DBC;color:#fff;font-size:15px;">
							<tr>
								<th style="text-align:center;;vertical-align:middle;width:80px">Tahun</th>
								<th style="text-align:left;;vertical-align:middle;width:200px">Pengalaman/Deskripsi</th>
								<th style="text-align:center;;vertical-align:middle;width:50px">
									 <a href="javascript:void(0);" class="btn btn-sm btn-warning" onclick="tambah_row('bd_peng','<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
')">+</a>
								</th>
							</tr>
						</thead>
						<tbody style="background:#D4E8F4;" class="bd_peng">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {?>
							<tr>
								<td style="text-align:center;;vertical-align:middle;width:80px">
									<input type="text" name="p_tahun[]" id="p_tahun_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:80px;height:30px;" class="angka">
								</td>
								<td>
									<input type="text" name="p_desc[]" id="p_desc_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:100%;height:30px;">
								</td>
								<td style="text-align:center;;vertical-align:middle;">
									<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$(this).parents('tr').first().remove();">-</a></td>
								</td>
							</tr>
							<?php } else { ?>
							<?php
$_from = $_smarty_tpl->tpl_vars['pengalaman']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
							<tr>
								<td style="text-align:center;;vertical-align:middle;width:80px">
									<input type="text" name="p_tahun[]" id="p_tahun_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:80px;height:30px;" class="angka" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['tahun'])===null||$tmp==='' ? '' : $tmp);?>
">
								</td>
								<td>
									<input type="text" name="p_desc[]" id="p_desc_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:100%;height:30px;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['pengalaman'])===null||$tmp==='' ? '' : $tmp);?>
">
								</td>
								<td style="text-align:center;;vertical-align:middle;">
									<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$(this).parents('tr').first().remove();">-</a></td>
								</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							<?php }?>
						</tbody>
				</table>
				<!--input type ="text" name="pengalaman_tahun_1" id="pengalaman_tahun_1" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_tahun_1'])===null||$tmp==='' ? '' : $tmp);?>
" >&nbsp;&nbsp;&nbsp;<input type ="text" name="pengalaman_uraian_1" id="pengalaman_uraian_1" style="width:70%;display:inline;" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_uraian_1'])===null||$tmp==='' ? '' : $tmp);?>
"-->
			</td>
		</tr>
		<!--tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="pengalaman_tahun_2" id="pengalaman_tahun_2" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_tahun_2'])===null||$tmp==='' ? '' : $tmp);?>
"  >&nbsp;&nbsp;&nbsp;<input type ="text" name="pengalaman_uraian_2" id="pengalaman_uraian_2" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_uraian_2'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="pengalaman_tahun_3" id="pengalaman_tahun_3" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_tahun_3'])===null||$tmp==='' ? '' : $tmp);?>
"  >&nbsp;&nbsp;&nbsp;<input type ="text" name="pengalaman_uraian_3" id="pengalaman_uraian_3" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_uraian_3'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="pengalaman_tahun_4" id="pengalaman_tahun_4" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_tahun_4'])===null||$tmp==='' ? '' : $tmp);?>
" >&nbsp;&nbsp;&nbsp;<input type ="text" name="pengalaman_uraian_4" id="pengalaman_uraian_4" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_uraian_4'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="pengalaman_tahun_5" id="pengalaman_tahun_5" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_tahun_5'])===null||$tmp==='' ? '' : $tmp);?>
" >&nbsp;&nbsp;&nbsp;<input type ="text" name="pengalaman_uraian_5" id="pengalaman_uraian_5" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pengalaman_uraian_5'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr-->
		<tr>
			<td>&nbsp;</td><td>Sertifikat (Tahun & Uraian)</td><td></td>
			<td style="font-weight:bold;">
				<table class="table table-bordered table-hovered" id="dt_sub_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">
						<thead style="background:#3C8DBC;color:#fff;font-size:15px;">
							<tr>
								<th style="text-align:center;;vertical-align:middle;width:80px">Tahun</th>
								<th style="text-align:left;;vertical-align:middle;width:200px">Sertifikat/Deskripsi</th>
								<th style="text-align:center;;vertical-align:middle;width:50px">
									 <a href="javascript:void(0);" class="btn btn-sm btn-warning" onclick="tambah_row('bd_serti','<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
')">+</a>
								</th>
							</tr>
						</thead>
						<tbody style="background:#D4E8F4;" class="bd_serti">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {?>
							<tr>
								<td style="text-align:center;;vertical-align:middle;width:80px">
									<input type="text" name="s_tahun[]" id="s_tahun_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:80px;height:30px;" class="angka">
								</td>
								<td>
									<input type="text" name="s_desc[]" id="s_desc_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:100%;height:30px;">
								</td>
								<td style="text-align:center;;vertical-align:middle;">
									<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$(this).parents('tr').first().remove();">-</a></td>
								</td>
							</tr>
							<?php } else { ?>
							<?php
$_from = $_smarty_tpl->tpl_vars['serti']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
							<tr>
								<td style="text-align:center;;vertical-align:middle;width:80px">
									<input type="text" name="s_tahun[]" id="s_tahun_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:80px;height:30px;" class="angka" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['tahun'])===null||$tmp==='' ? '' : $tmp);?>
">
								</td>
								<td>
									<input type="text" name="s_desc[]" id="s_desc_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" style="width:100%;height:30px;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['sertifikat'])===null||$tmp==='' ? '' : $tmp);?>
">
								</td>
								<td style="text-align:center;;vertical-align:middle;">
									<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$(this).parents('tr').first().remove();">-</a></td>
								</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							<?php }?>
						</tbody>
				</table>
				<!--input type ="text" name="sertifitikat_tahun_1" id="sertifitikat_tahun_1" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_tahun_1'])===null||$tmp==='' ? '' : $tmp);?>
" >&nbsp;&nbsp;&nbsp;<input type ="text" name="sertifitikat_uraian_1" id="sertifitikat_uraian_1" style="width:70%;display:inline;" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_uraian_1'])===null||$tmp==='' ? '' : $tmp);?>
"-->
			</td>
		</tr>
		<!--tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="sertifitikat_tahun_2" id="sertifitikat_tahun_2" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_tahun_2'])===null||$tmp==='' ? '' : $tmp);?>
"  >&nbsp;&nbsp;&nbsp;<input type ="text" name="sertifitikat_uraian_2" id="sertifitikat_uraian_2" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_uraian_2'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="sertifitikat_tahun_3" id="sertifitikat_tahun_3" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_tahun_3'])===null||$tmp==='' ? '' : $tmp);?>
" >&nbsp;&nbsp;&nbsp;<input type ="text" name="sertifitikat_uraian_3" id="sertifitikat_uraian_3" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_uraian_3'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="sertifitikat_tahun_4" id="sertifitikat_tahun_4" style="width:10%;height:30px;" class="angka" placeholder="Tahun" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_tahun_4'])===null||$tmp==='' ? '' : $tmp);?>
" >&nbsp;&nbsp;&nbsp;<input type ="text" name="sertifitikat_uraian_4" id="sertifitikat_uraian_4" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_uraian_4'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="sertifitikat_tahun_5" id="sertifitikat_tahun_5" style="width:10%;height:30px;" class="angka" placeholder="Tahun"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_tahun_5'])===null||$tmp==='' ? '' : $tmp);?>
">&nbsp;&nbsp;&nbsp;<input type ="text" name="sertifitikat_uraian_5" id="sertifitikat_uraian_5" style="width:70%;display:inline;"  class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sertifitikat_uraian_5'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr-->
		<tr>
			<td>&nbsp;</td><td>Bahasa</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="bahasa_uraian_1" id="bahasa_uraian_1" style="width:70%;display:inline;" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['bahasa_uraian_1'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="bahasa_uraian_2" id="bahasa_uraian_2" style="width:70%;display:inline;" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['bahasa_uraian_2'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td></td>
			<td style="font-weight:bold;">
				<input type ="text" name="bahasa_uraian_3" id="bahasa_uraian_3" style="width:70%;display:inline;" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['bahasa_uraian_3'])===null||$tmp==='' ? '' : $tmp);?>
">
			</td>
		</tr>
		<!-- <?php echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"file",'name'=>"file",'style_type'=>"width:80%"), 0);
?>
 -->
		<?php ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'add') {
echo "validasi";
}
$_tmp10=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'file','label'=>"Dokumen (pdf) **",'id'=>"file",'name'=>"file",'style_type'=>"width:80%",'class'=>$_tmp10), 0);
?>

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['sts_crud']->value)===null||$tmp==='' ? 'add' : $tmp) == 'edit') {?>
		<tr>
			<td>&nbsp;</td><td>Last Upload File</td><td>:</td>
			<td style="font-weight:bold;">
				<a href="javascript:void(0);" onclick="lihat_file('<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
','ta')"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
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
	var idx_row_serti=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['jml_row_serti']->value)===null||$tmp==='' ? 1 : $tmp);?>
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
					$('#grid_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').show();
					$('#detil_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').html('').hide();
					$('#grid_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').datagrid('reload');
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
		// 		$('#grid_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').show();
		// 		$('#detil_nya_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').html('').hide();
		// 		$('#grid_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
').datagrid('reload');
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