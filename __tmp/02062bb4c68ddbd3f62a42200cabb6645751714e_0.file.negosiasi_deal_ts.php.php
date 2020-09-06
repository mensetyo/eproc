<?php /* Smarty version 3.1.24, created on 2020-07-08 11:46:35
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/negosiasi_deal_ts.php" */ ?>
<?php
/*%%SmartyHeaderCode:7163894885f054fab6984f0_84303267%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02062bb4c68ddbd3f62a42200cabb6645751714e' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/negosiasi_deal_ts.php',
      1 => 1576762282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7163894885f054fab6984f0_84303267',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'id_pengadaan' => 0,
    'auth' => 0,
    'nego_h' => 0,
    'tahap_nego' => 0,
    'projek' => 0,
    'nego_d' => 0,
    'y' => 0,
    'a' => 0,
    'tot_penawaran' => 0,
    'i' => 0,
    'tot_nego' => 0,
    'tot_nego_rekanan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f054fab839813_74109743',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f054fab839813_74109743')) {
function content_5f054fab839813_74109743 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7163894885f054fab6984f0_84303267';
?>
    <section id="beranda" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <!--<div class="section-heading text-center">
                <h2 class="h-bold">Our facilities</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
              </div>-->
            </div>
            <!--<div class="divider-short"></div>-->
          </div>
        </div>
      </div>

      <div class="container">
       <div class="col-lg-12">
			<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
NegosiasiPenawaranTs" method="post" enctype="multipart/form-data">
			<input type="hidden" name="eproc_pengadaan_id" value="<?php echo $_smarty_tpl->tpl_vars['id_pengadaan']->value;?>
">
			<input type="hidden" name="drt_peserta_id" value="<?php echo $_smarty_tpl->tpl_vars['auth']->value['id'];?>
">
			<input type="hidden" name="eproc_negosiasi_id" value="<?php echo $_smarty_tpl->tpl_vars['nego_h']->value['id'];?>
">
			<input type="hidden" name="jenis_nego" value="<?php echo $_smarty_tpl->tpl_vars['nego_h']->value['jenis_nego'];?>
">
			<input type="hidden" name="tahap" value="<?php echo $_smarty_tpl->tpl_vars['tahap_nego']->value['tahap'];?>
">
			<table class="table">
				<tr>
					<td style="width:200px;">No. Pengadaan</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['nomor_pengadaan'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Nama Pengadaan</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['nama_pengadaan'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Unit</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['description'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Jenis Dokumen</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['jenis_dokumen'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Evaluasi Penawaran</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['evaluasi_penawaran'];?>
</td>
				</tr>
				
				<tr>
					<td style="width:200px;">Tahap Saat Ini</td>
					<td>:</td>
					<td>Negosiasi</td>
				</tr>
				<tr>
					<td style="width:200px;">Batas Waktu Nego</td>
					<td>:</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['nego_h']->value['batas_waktu'];?>
</b></td>
				</tr>
				
				<tr>
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td><?php echo number_format($_smarty_tpl->tpl_vars['projek']->value['pagu'],2,',','.');?>
</td>
				</tr>
					<td style="width:200px;">Negosiasi</td>
					<td>:</td>
					<td>
					<?php if ($_smarty_tpl->tpl_vars['nego_h']->value['jenis_nego'] == 1) {?><!-- KALO LUMSUM-->
						<?php
$_from = $_smarty_tpl->tpl_vars['nego_d']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
						TAHAP : <?php echo $_smarty_tpl->tpl_vars['y']->value;?>

						<?php if ($_smarty_tpl->tpl_vars['y']->value == count($_smarty_tpl->tpl_vars['nego_d']->value)) {?>
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:11px;">
								<tr>
									<th style="text-align:left;;vertical-align:middle;width:30%" >Uranian<br>Pekerjaan</th>
									<th style="text-align:left;;vertical-align:middle;">Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Deal Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Deal Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;width:30%">Keterangan</th>
								</tr>
								
							</thead>
							<tbody style="background:#D4E8F4;;font-size:10px;" class="bd_ny">
							<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable(0, null, 0);?>
								<?php
$_from = $_smarty_tpl->tpl_vars['a']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
								<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_penawaran']->value+$_smarty_tpl->tpl_vars['i']->value['nilai_penawaran'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_nego']->value+$_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'], null, 0);?>
								
								<tr>
									<td><input type="hidden" name="uraian[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['uraian'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['uraian'];?>
</td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_penawaran'],0,',','.');?>
</strong></td>
									<td style="text-align:right;"><input type="hidden" name="nilai_nego_panitia[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'];?>
"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'],0,',','.');?>
</strong></td>
									<td style="text-align:right;">
									<?php if ((($tmp = @$_smarty_tpl->tpl_vars['nego_h']->value['flag'])===null||$tmp==='' ? 'P' : $tmp) == 'P') {?>
										<input type="text" name="nilai_nego_peserta[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" class="angka validasi" style="height:25px;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'];?>
">
									<?php } else { ?>
										<?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_peserta'],0,',','.');?>

									<?php }?>
									</td>
									<td>
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['nego_h']->value['flag'])===null||$tmp==='' ? 'P' : $tmp) == 'P') {?>
										<input type="text" name="ket_peserta[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" class="" style="width:100%">
										<?php } else { ?>
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['ket_peserta'])===null||$tmp==='' ? '' : $tmp);?>

										<?php }?>
									</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:11px;">
								<td>GrandTotal</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_penawaran']->value,0,',','.');?>
</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</td>
								<td style="text-align:right;"><span id="tot_tawar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</span></td>
								<td>&nbsp;</td>
							</tr>
						</table>
						<?php } else { ?>
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:11px;">
								<tr>
									<th style="text-align:left;;vertical-align:middle;width:30%" >Uranian<br>Pekerjaan</th>
									<th style="text-align:left;;vertical-align:middle;">Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Nego Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Nego Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;width:30%">Keterangan</th>
								</tr>
								
							</thead>
							<tbody style="background:#D4E8F4;;font-size:10px;" class="bd_ny">
							<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable(0, null, 0);?>
								<?php
$_from = $_smarty_tpl->tpl_vars['a']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
								<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_penawaran']->value+$_smarty_tpl->tpl_vars['i']->value['nilai_penawaran'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_nego']->value+$_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'], null, 0);?>
								
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['uraian'];?>
</td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_penawaran'],0,',','.');?>
</strong></td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'],0,',','.');?>
</strong></td>
									<td><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_peserta'],0,',','.');?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ket_drt'];?>
</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:11px;">
								<td>GrandTotal</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_penawaran']->value,0,',','.');?>
</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</td>
								<td>&nbsp;</td>
							</tr>
						</table>
						<?php }?>
						<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
						<?php } else { ?><!-- KALO HARSAT-->
						
						<?php
$_from = $_smarty_tpl->tpl_vars['nego_d']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
						TAHAP : <?php echo $_smarty_tpl->tpl_vars['y']->value;?>

						<?php if ($_smarty_tpl->tpl_vars['y']->value == count($_smarty_tpl->tpl_vars['nego_d']->value)) {?>
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:11px;">
								<tr>
									<th style="text-align:left;;vertical-align:middle;width:30%" >Uranian<br>Pekerjaan</th>
									<th style="text-align:left;;vertical-align:middle;">Vol</th>
									<th style="text-align:left;;vertical-align:middle;">Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Deal Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Deal Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Deal Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Deal Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;width:30%">Keterangan</th>
								</tr>
								
							</thead>
							<tbody style="background:#D4E8F4;;font-size:10px;" class="bd_ny">
							<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable(0, null, 0);?>
								<?php
$_from = $_smarty_tpl->tpl_vars['a']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
								<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_penawaran']->value+$_smarty_tpl->tpl_vars['i']->value['tot_penawaran'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_nego']->value+$_smarty_tpl->tpl_vars['i']->value['tot_nego'], null, 0);?>
								
								<tr>
									<td><input type="hidden" name="uraian[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['uraian'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['uraian'];?>
</td>
									<td style="text-align:right;">
										<input type="hidden" name="vol[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" id="vol_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['vol'];?>
">
										<strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['vol'],0,',','.');?>
</strong>
									</td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_penawaran'],0,',','.');?>
</strong></td>
									<td style="text-align:right;">
										<input type="hidden" name="nilai_nego_panitia[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'];?>
"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'],0,',','.');?>
</strong>
									</td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['tot_penawaran'],0,',','.');?>
</strong></td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['tot_nego'],0,',','.');?>
</strong></td>
									<td style="text-align:right;">
									<?php if ((($tmp = @$_smarty_tpl->tpl_vars['nego_h']->value['flag'])===null||$tmp==='' ? 'P' : $tmp) == 'P') {?>
										<input type="text" name="nilai_nego_peserta[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" class="h_angka validasi" idx="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" style="height:25px;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'];?>
">
									<?php } else { ?>
										<?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_peserta'],0,',','.');?>

									<?php }?>
									</td>
									<td style="text-align:right;">
										<input type="hidden" name="tot_nego_peserta[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" id="tot_nego_peserta_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tot_nego'];?>
" class="hit_tot">
										<strong>
											<span id="t_nego_peserta_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['tot_nego'],0,',','.');?>
</span>
										</strong>
									</td>
									<td>
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['nego_h']->value['flag'])===null||$tmp==='' ? 'P' : $tmp) == 'P') {?>
										<input type="text" name="ket_peserta[<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
]" class="" style="width:100%">
										<?php } else { ?>
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['ket_peserta'])===null||$tmp==='' ? '' : $tmp);?>

										<?php }?>
									</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:14px;font-weight:bold;">
								<td colspan="4">GrandTotal</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_penawaran']->value,0,',','.');?>
</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</td>
								<td style="text-align:right;">
									&nbsp;
								</td>
								<td><span id="tot_tawar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</span></td>
								<td></td>
							</tr>
						</table>
						<?php } else { ?>
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:11px;">
								<tr>
									<th style="text-align:left;;vertical-align:middle;width:30%" >Uranian<br>Pekerjaan</th>
									<th style="text-align:left;;vertical-align:middle;">Vol</th>
									<th style="text-align:left;;vertical-align:middle;">Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Deal Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Deal Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Deal Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Deal Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;width:30%">Keterangan</th>
								</tr>
								
							</thead>
							<tbody style="background:#D4E8F4;;font-size:10px;" class="bd_ny">
							<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['tot_nego_rekanan'] = new Smarty_Variable(0, null, 0);?>
								<?php
$_from = $_smarty_tpl->tpl_vars['a']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
								<?php $_smarty_tpl->tpl_vars['tot_penawaran'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_penawaran']->value+$_smarty_tpl->tpl_vars['i']->value['tot_penawaran'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_nego'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_nego']->value+$_smarty_tpl->tpl_vars['i']->value['tot_nego'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_nego_rekanan'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_nego_rekanan']->value+$_smarty_tpl->tpl_vars['i']->value['tot_nego_peserta'], null, 0);?>
								
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['uraian'];?>
</td>
									<td style="text-align:right;">
										<strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['vol'],0,',','.');?>
</strong>
									</td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_penawaran'],0,',','.');?>
</strong></td>
									<td style="text-align:right;">
										<strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_panitia'],0,',','.');?>
</strong>
									</td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['tot_penawaran'],0,',','.');?>
</strong></td>
									<td style="text-align:right;"><strong><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['tot_nego'],0,',','.');?>
</strong></td>
									<td style="text-align:right;">
										<?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_nego_peserta'],0,',','.');?>

									</td>
									<td style="text-align:right;">
										
										<strong>
											<span id="t_nego_peserta_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['tot_nego'],0,',','.');?>
</span>
										</strong>
									</td>
									<td>
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['ket_peserta'])===null||$tmp==='' ? '' : $tmp);?>

									</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:14px;font-weight:bold;">
								<td colspan="4">GrandTotal</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_penawaran']->value,0,',','.');?>
</td>
								<td style="text-align:right;"><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego']->value,0,',','.');?>
</td>
								<td style="text-align:right;">
									&nbsp;
								</td>
								<td><?php echo number_format($_smarty_tpl->tpl_vars['tot_nego_rekanan']->value,0,',','.');?>
</td>
								<td></td>
							</tr>
						</table>
						<?php }?>
						<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
						
						<?php }?>
					</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['nego_h']->value['flag'])===null||$tmp==='' ? 'P' : $tmp) == 'P') {?>
				<tr>
					<td style="width:200px;">Security Code</td>
					<td style="width:10px;">:</td>
					<td>
						<div class="col-sm-6" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
						  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
						  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 80px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
						</div>
					</td>
				</tr>
				<?php }?>
				<tr>
					<td colspan="3">
						<p>
							* Negosiasi Hanya Berlaku 3 kali :<br>
						</p>
					</td>
				</tr>
				
				
			</table>
			</form>
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['nego_h']->value['flag'])===null||$tmp==='' ? 'P' : $tmp) == 'P') {?>
			<center>
				<a href="javascript:void(0);" class="btn btn-success" id="deal_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Deal/Setuju</a>
				<a href="javascript:void(0);" class="btn btn-warning" id="nego_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Negosiasi Ulang</a>
			</center>
			<?php }?>
			
        </div>
        </div>
      </div>
    </section>
<?php echo '<script'; ?>
>
		$('.angka').numberbox({
			precision:2,
			min:0,
			groupSeparator:',',
			decimalSeparator:'.',
			onChange:function(x,y){
				var tot=0;
				$('.angka').each(function(i){
					console.log($(this).val());
					tot=tot+parseFloat($(this).val());
					$('#tot_tawar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').html(NumberFormat(tot));
				});
			}
		});
		$('.h_angka').numberbox({
			precision:2,
			min:0,
			groupSeparator:',',
			decimalSeparator:'.',
			onChange:function(x,y){
				var tot=0;
				var idx=($(this).attr('idx'));
				var t_nego=(parseFloat($('#vol_'+idx).val()) * x );
				$('#t_nego_peserta_'+idx).html(NumberFormat(t_nego));
				$('#tot_nego_peserta_'+idx).val(t_nego);
				$('.hit_tot').each(function(i){
					console.log($(this).val());
					tot=tot+parseFloat($(this).val());
					$('#tot_tawar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').html(NumberFormat(tot));
				});
			}
		});
		refreshCaptcha('imgVRCaptha');
		
		$('#deal_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').bind('click',function(){
			$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
				if(resp=='sama'){
					loadingna();
					$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
NegosiasiPenawaranDealTs",$('#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').serialize(),function(r){
						if(r==1){
							winLoadingClose();
							$('#judul_nya').html('NEGOSIASI');
							$('#isi_nya').html('Terima Kasih Negosiasi Telah Kami Terima');
							$('#modal_nya').modal('show');
							setTimeout(function(){ window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'; }, 5000);
						}else{
							winLoadingClose();
							$.messager.alert('EPROC-APP',"Gagal Negosiasi",'error');
							console.log(r);
						}
					});
				}else{
					refreshCaptcha('imgVRCaptha');
					$.messager.alert('EPROC-APP',"Random text you are entered is wrong. Please try again!",'warning');
				}
			});
		});
		$('#nego_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').bind('click',function(){
			<?php if (count($_smarty_tpl->tpl_vars['nego_d']->value) == 3) {?>
				$.messager.alert('EPROC-APP',"Mohon Maaf Batas Negosiasi Sudah 3 kali! <br> Silahkan Klik Deal/Setuju Jika anda setuju dengan Negosiasi Panitia",'warning');
			<?php } else { ?>
				$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
					if(resp=='sama'){
						submit_form('form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
							if(r==1){
								winLoadingClose();
								$('#judul_nya').html('Upload Dokumen Penawaran');
								$('#isi_nya').html('Terima Kasih Negosiasi Telah Kami Terima <br> Hasil Negosiasi Akan Kirimkan Melalui Email Atau Website Kami.');
								$('#modal_nya').modal('show');
								setTimeout(function(){ window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'; }, 5000);
							}else{
								winLoadingClose();
								$.messager.alert('EPROC-APP',"Gagal Negosiasi",'error');
								console.log(r);
							}
						});
					}else{
						refreshCaptcha('imgVRCaptha');
						$.messager.alert('EPROC-APP',"Random text you are entered is wrong. Please try again!",'warning');
					}
					});
			<?php }?>
		});
<?php echo '</script'; ?>
><?php }
}
?>