<?php /* Smarty version 3.1.24, created on 2020-01-05 11:57:43
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/detil_pemenang.php" */ ?>
<?php
/*%%SmartyHeaderCode:18839900975e116cc714d0d7_82984006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68beb8e2cfae667fd52ff4f9af18639c17c7cff9' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/detil_pemenang.php',
      1 => 1576762280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18839900975e116cc714d0d7_82984006',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'projek' => 0,
    'rekap_thp2' => 0,
    'i' => 0,
    'mklah_nilai' => 0,
    'tot_thp1' => 0,
    'grand_tot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e116cc722ad70_65158033',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e116cc722ad70_65158033')) {
function content_5e116cc722ad70_65158033 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18839900975e116cc714d0d7_82984006';
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
KirimPenawaran2" method="post" enctype="multipart/form-data">
			<input type="hidden" name="eproc_pengadaan_id" value="<?php echo $_smarty_tpl->tpl_vars['projek']->value['id'];?>
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
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td><?php echo number_format($_smarty_tpl->tpl_vars['projek']->value['pagu'],2,',','.');?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Hasil Evaluasi</td>
					<td>:</td>
					<td>
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:10px;">
								<tr>
									<th style="text-align:left;vertical-align:middle;width:50px" rowspan="2">No.</th>
									<th style="text-align:left;;vertical-align:middle;" rowspan="2">Nama Rekanan</th>
									<th style="text-align:center;;vertical-align:middle;" rowspan="2">Evaluasi <br>Administrasi</th>
									<th style="text-align:center;;vertical-align:middle;" colspan="3">Evaluasi Teknis (60%)</th>
									<th style="text-align:center;;vertical-align:middle;" colspan="2">Evaluasi Harga (40%)</th>
									<th style="text-align:center;;vertical-align:middle;" rowspan="2">Evaluasi<br>Total</th>
									<th style="text-align:center;;vertical-align:middle;" rowspan="2">Ket</th>
									<th style="text-align:center;;vertical-align:middle;" rowspan="2">Urutan <br>Pemenang</th>
									<th style="text-align:center;;vertical-align:middle;" rowspan="2">Ket.</th>
								</tr>
								<tr>
									<th style="text-align:center;;vertical-align:middle;" >Keuangan <br>DRT (25%)</th>
									<th style="text-align:center;;vertical-align:middle;" >Pengalaman<br> DRT (25%)</th>
									<th style="text-align:center;;vertical-align:middle;" >Makalah <br>(50%)</th>
									<th style="text-align:center;;vertical-align:middle;" >Evaluasi <br>Penawaran</th>
									<th style="text-align:center;;vertical-align:middle;" >Nilai <br>Penawaran</th>
								</tr>

							</thead>
							<tbody style="background:#D4E8F4;;font-size:9px;">
								<?php
$_from = $_smarty_tpl->tpl_vars['rekap_thp2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_x'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_x']->value['iteration']++;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
								<?php $_smarty_tpl->tpl_vars['mklah_nilai'] = new Smarty_Variable((($_smarty_tpl->tpl_vars['i']->value['makalah_nilai']/100)*50), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_thp1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['mklah_nilai']->value+$_smarty_tpl->tpl_vars['i']->value['keuangan_nilai']+$_smarty_tpl->tpl_vars['i']->value['pengalaman_nilai'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['tot_thp1'] = new Smarty_Variable((($_smarty_tpl->tpl_vars['tot_thp1']->value/100)*60), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['grand_tot'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tot_thp1']->value+$_smarty_tpl->tpl_vars['i']->value['nilai_harga'], null, 0);?>
								<tr>
									<td style="text-align:center;;vertical-align:middle;"><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_x']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_x']->value['iteration'] : null);?>
</td>
									<td style="text-align:left;;vertical-align:middle;"><?php echo $_smarty_tpl->tpl_vars['i']->value['nm_perusahaan'];?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['adm_nilai'],2,',','.');?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['keuangan_nilai'],2,',','.');?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['pengalaman_nilai'],2,',','.');?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['mklah_nilai']->value,2,',','.');?>
</td>
									<td style="text-align:right;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['harga'],2,',','.');?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['nilai_harga'],2,',','.');?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo number_format($_smarty_tpl->tpl_vars['grand_tot']->value,2,',','.');?>
</td>
									<td style="text-align:center;;vertical-align:middle;"><?php if ($_smarty_tpl->tpl_vars['grand_tot']->value >= 85) {?>Lulus<?php } else { ?>Tidak Lulus<?php }?></td>
									<td style="text-align:center;;vertical-align:middle;<?php if ($_smarty_tpl->tpl_vars['i']->value['pemenang'] == 1) {?>background-color:red;color:#ffffff;<?php }?>">
										<input type="hidden" name="seq_pemenang[<?php echo $_smarty_tpl->tpl_vars['i']->value['drt_peserta_id'];?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['pemenang'])===null||$tmp==='' ? '0' : $tmp);?>
">
										<?php echo $_smarty_tpl->tpl_vars['i']->value['pemenang'];?>

									</td>
									<td style="text-align:center;;vertical-align:middle;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value['ket'])===null||$tmp==='' ? '' : $tmp);?>
</td>
								</tr>
								<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							</tbody>
						</table>
					</td>
				</tr>
				
				
				
				
			</table>
			</form>
			
			<center>
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/getkonten/pengumuman" class="btn btn-primary" id="kembali_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Kembali</a>
			</center>
        </div>
        </div>
      </div>
    </section>
<?php }
}
?>