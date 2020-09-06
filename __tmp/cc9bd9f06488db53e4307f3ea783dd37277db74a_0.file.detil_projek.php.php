<?php /* Smarty version 3.1.24, created on 2020-01-05 11:58:41
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/detil_projek.php" */ ?>
<?php
/*%%SmartyHeaderCode:12725414395e116d01488053_08403612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc9bd9f06488db53e4307f3ea783dd37277db74a' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/detil_projek.php',
      1 => 1576762280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12725414395e116d01488053_08403612',
  'variables' => 
  array (
    'projek' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e116d014fac58_43627477',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e116d014fac58_43627477')) {
function content_5e116d014fac58_43627477 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/files/Sync/eproc/__appl/third_party/smarty/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '12725414395e116d01488053_08403612';
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
					<td style="width:200px;">Tahap Saat Ini</td>
					<td>:</td>
					<td><?php if ($_smarty_tpl->tpl_vars['projek']->value['flag_tahap'] == 'PL') {?>Pengumuman Lelang<?php } elseif ($_smarty_tpl->tpl_vars['projek']->value['flag_tahap'] == 'ED') {?>Evaluasi Dokumen<?php } else { ?>-<?php }?></td>
				</tr>
				<tr>
					<td style="width:200px;">Kategori Pengadaan</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['kategori_pengadaan'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Jenis Pengadaan</td>
					<td>:</td>
					<td><?php if ($_smarty_tpl->tpl_vars['projek']->value['jenis_pengadaan'] == 1) {?>TERBUKA<?php } else { ?>TERTUTUP<?php }?></td>
				</tr>
				<tr>
					<td style="width:200px;">Metode Pengadaan</td>
					<td>:</td>
					<td>
						<table class="table">
							<thead>
							<tr style="background:#d1e2ff">
								<th>Kualifikasi</th>
								<th>Jenis Dokumen</th>
								<th>Evaluasi Penawaran</th>
							</tr>
							</thead>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['kualifikasi_pengadaan'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['jenis_dokumen'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['evaluasi_penawaran'];?>
</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="width:200px;">Metode Penawaran</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['metode_penawaran'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Kualifikasi Penyedia</td>
					<td>:</td>
					<td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['projek']->value['kualifikasi_penyedia'],'|',',');?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Syarat Kualifikasi</td>
					<td>:</td>
					<td>
						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['projek']->value['syarat_kualifikasi'])===null||$tmp==='' ? '' : $tmp);?>

					</td>
				</tr>
			</table>
			<center>
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/pengumuman_pengadaan" class="btn btn-primary">Kembali</a>
					<?php if ($_smarty_tpl->tpl_vars['projek']->value['flag_lelang'] == 'LL') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/daftar_lelang/<?php echo base64_encode('daftar_lelang');?>
/<?php echo base64_encode($_smarty_tpl->tpl_vars['projek']->value['id']);?>
" class="btn btn-danger">Daftar Pelelangan</a>
					<?php }?>
			</center>
        </div>
        </div>
      </div>
    </section>
<?php echo '<script'; ?>
>
	
<?php echo '</script'; ?>
><?php }
}
?>