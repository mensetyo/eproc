<?php /* Smarty version 3.1.24, created on 2020-02-15 00:22:04
         compiled from "/home/files/Sync/eproc/__appl/views/main/konfirmasi.html" */ ?>
<?php
/*%%SmartyHeaderCode:7193335515e46d73c091c85_94933778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e639f66c924ffdd2338b4d93a7af894d94980b3' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/konfirmasi.html',
      1 => 1581701110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7193335515e46d73c091c85_94933778',
  'variables' => 
  array (
    'data' => 0,
    'i' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e46d73c2be664_89318185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e46d73c2be664_89318185')) {
function content_5e46d73c2be664_89318185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7193335515e46d73c091c85_94933778';
?>
<div class="box box-primary">
		<div class="box-header with-border">
		 
		</div>
		<div class="box-body">
			<!--table class="table table-bordered">
				<thead style="background:#3C8DBC;color:#fff;">
					<tr>
						<th style="text-align:center;">No.</th>
						<th style="text-align:left;">Item Isian</th>
						<th style="text-align:center;">Status</th>
						<th style="text-align:left;">Keterangan</th>
					</tr>
				</thead>
				<tbody style="background:#D4E8F4;">
					<tr>
						<td style="text-align:center;">1.</td>
						<td style="text-align:left;">AKTA</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['AKTA']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['AKTA']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['AKTA']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">2.</td>
						<td style="text-align:left;">TDP</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['TDP']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['TDP']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['TDP']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">3.</td>
						<td style="text-align:left;">DOMISILI</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['DOMISILI']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['DOMISILI']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['DOMISILI']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">4.</td>
						<td style="text-align:left;">IJIN USAHA</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['IJIN_USAHA']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['IJIN_USAHA']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['IJIN_USAHA']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">5.</td>
						<td style="text-align:left;">SBU</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['SBU']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['SBU']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['SBU']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">6.</td>
						<td style="text-align:left;">UPLOAD DOKUMEN</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['UPLOAD_DOK']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['UPLOAD_DOK']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['UPLOAD_DOK']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					
					<tr>
						<td style="text-align:center;">7.</td>
						<td style="text-align:left;">PAJAK</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PAJAK']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PAJAK']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['PAJAK']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">8.</td>
						<td style="text-align:left;">PENGURUS</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PENGURUS']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PENGURUS']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['PENGURUS']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">9.</td>
						<td style="text-align:left;">TENAGA AHLI</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['TA']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['TA']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['TA']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">10.</td>
						<td style="text-align:left;">PERALATAN</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PERALATAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PERALATAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['PERALATAN']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">11.</td>
						<td style="text-align:left;">PENGALAMAN</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PENGALAMAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PENGALAMAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['PENGALAMAN']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">12.</td>
						<td style="text-align:left;">PEKERJAAN BERJALAN</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PEKERJAAN_BERJALAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['PEKERJAAN_BERJALAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['PEKERJAAN_BERJALAN']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">13.</td>
						<td style="text-align:left;">ASPEK KEUANGAN</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['KEUANGAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['KEUANGAN']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['KEUANGAN']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
					<tr>
						<td style="text-align:center;">14.</td>
						<td style="text-align:left;">SURAT PENTING</td>
						<td style="text-align:center;"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['SURAT']['status'])===null||$tmp==='' ? '-' : $tmp) == 1) {?>Lengkap<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['SURAT']['status'])===null||$tmp==='' ? '-' : $tmp) == 2) {?>Tidak Lengkap<?php } else { ?>Belum Diverifikasi<?php }?></td>
						<td style="text-align:left;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['SURAT']['ket'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
					</tr>
				</tbody>
			</table-->
			<table class="table table-bordered table-hovered">
			<thead style="background:#3C8DBC;color:#fff;">
				<tr>
					<th style="text-align:center;width:3%">No.</th>
					<th style="text-align:left;">Dokumen</th>
					<th style="text-align:center;width:10%">Status Verifikasi</th>
					<!-- <th style="text-align:center;width:10%">Verifikasi Oleh</th> -->
					<th style="text-align:center;width:40%">Hasil Verifikasi</th>
				</tr>
			</thead>
			<tbody style="background:#D4E8F4;">
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['jenis'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_x'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_x']->value['iteration']++;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
				<tr>
					<td style="text-align:center;"><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_x']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_x']->value['iteration'] : null);?>
</td>
					<td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['i']->value['dokumen'];?>
</td>
					<td style="text-align:center;<?php if ($_smarty_tpl->tpl_vars['i']->value['sts_ver'] == 0) {?>background:red;color:navy;<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['i']->value['sts_ver'] == 2) {?>
							Belum Dilakukan Verifikasi
						<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['sts_ver'] == 1) {?>
							Lulus Verifikasi
						<?php } else { ?>
							Segera Lakukan Perbaikan
						<?php }?>
					</td>
					<!-- <td style="text-align:center;">
						<?php if (isset($_smarty_tpl->tpl_vars['i']->value['header_ver']['ver_oleh'])) {?>
						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['header_ver']['ver_oleh'])===null||$tmp==='' ? '' : $tmp);?>
 <br>tgl: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['header_ver']['verifikasi_tgl'])===null||$tmp==='' ? '' : $tmp);?>

						<?php }?>
					</td> -->
					<td style="text-align:left;">
						<?php
$_from = $_smarty_tpl->tpl_vars['i']->value['detil_ver'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_z'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_z']->value['iteration']++;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
							<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_z']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_z']->value['iteration'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['a']->value['kriteria'];?>
 = <?php echo $_smarty_tpl->tpl_vars['a']->value['pilihan'];?>
 <?php if ((($tmp = @$_smarty_tpl->tpl_vars['a']->value['keterangan'])===null||$tmp==='' ? '-' : $tmp) != '-') {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['a']->value['keterangan'])===null||$tmp==='' ? '-' : $tmp);?>
)<?php }?><br>
						<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
					</td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
			</tbody>
		</table>
		</div>
	</div><?php }
}
?>