<?php /* Smarty version 3.1.24, created on 2020-07-06 07:35:23
         compiled from "/home/files/Sync/eproc/__appl/views/menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:15040426445f0271cbdaaba8_58616165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15fa4debf813c339df6e4604c581b3db1104a244' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/menu.html',
      1 => 1593995914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15040426445f0271cbdaaba8_58616165',
  'variables' => 
  array (
    'host' => 0,
    'auth' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f0271cbe92312_03646599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f0271cbe92312_03646599')) {
function content_5f0271cbe92312_03646599 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15040426445f0271cbdaaba8_58616165';
?>
<section class="sidebar">

	  <!--div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/__assets/img/avatar.png" class="img-circle"  alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'];?>
</p>
          
        </div>
      </div-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">&nbsp;</li>
		<li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
			
            </span>
          </a>
        </li>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/data_perusahaan');$('#judul_kecil').html('Data Perusahaan')">
            <i class="fa fa-database"></i> <span>Data Perusahaan</span>
            <span class="pull-right-container">
			<small class="label pull-right <?php if ($_smarty_tpl->tpl_vars['flag']->value['DATA_PERUSAHAAN']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> menu_data_perusahaan">&nbsp;</small>
            </span>
          </a>
        </li>
		<!--li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/legalitas');$('#judul_kecil').html('Legalitas Perusahaan')">
            <i class="fa fa-database"></i> <span>Legalitas Perusahaan</span>
            <span class="pull-right-container">
				<small class="label pull-right <?php if ($_smarty_tpl->tpl_vars['flag']->value['AKTA'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> menu_akta">&nbsp;</small>
            </span>
          </a>
        </li-->
		<?php if ($_smarty_tpl->tpl_vars['auth']->value['tipe_perusahaan'] != 9) {?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/akta');$('#judul_kecil').html('Akta Perusahaan')" flag="AKTA" tabel="drt_akta">
            <i class="fa fa-database"></i> <span>Akta</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['AKTA']['sts'] == -1) {?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['AKTA']['jml'] > 0) {?>
							bg-green
						<?php } else { ?>
							bg-red
						<?php }?>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['AKTA']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_akta">&nbsp;
				</small>
            </span>
          </a>
        </li>
		
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/tdp');$('#judul_kecil').html('TDP/NIB DATA')" flag="TDP_lanjutan" tabel="drt_tdp">
            <i class="fa fa-database"></i> <span>TDP/NIB</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['TDP']['sts'] == -1) {?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['TDP']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['TDP']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_tdp">&nbsp;
				</small>
            </span>
          </a>
        </li>
		
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/domisili');$('#judul_kecil').html('Data Domisili/Ijin Lokasi')" flag="DOMISILI" tabel="drt_domisili">
            <i class="fa fa-database"></i> <span>Domisili/Ijin Lokasi</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['DOMISILI']['sts'] == -1) {?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['DOMISILI']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['DOMISILI']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_domisili">&nbsp;
				</small>
            </span>
          </a>
        </li>
		<?php }?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/ijin_usaha');$('#judul_kecil').html('Data Ijin Usaha')" flag="IJIN_USAHA" tabel="drt_ijin_usaha">
            <i class="fa fa-database"></i> <span>Ijin Usaha (SIUP)</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['IJIN_USAHA']['sts'] == -1) {?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['IJIN_USAHA']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['IJIN_USAHA']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_ijin_usaha">&nbsp;
				</small>
            </span>
          </a>
        </li>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value['tipe_perusahaan'] != 9) {?>
		<li>
          <!--a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/sbu');$('#judul_kecil').html('Data SBU')"-->
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/sbu/main');$('#judul_kecil').html('Data SBU')" flag="SBU" tabel="drt_sbu">
            <i class="fa fa-database"></i> <span>SBU</span>
            <!--span class="pull-right-container">
				<small class="label pull-right bg-yellow menu_sbu">&nbsp;</small>
            </span-->
          </a>
        </li>
		<?php }?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/upload_dok');$('#judul_kecil').html('Download & Upload Dokumen')" flag="UPLOAD_DOK" tabel="drt_soft_copy">
            <i class="fa fa-database"></i> <span>Upload Dokumen</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['UPLOAD_DOK']['sts'] == -1) {?>
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['UPLOAD_DOK']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['UPLOAD_DOK']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_upload_dok">&nbsp;
				</small>
            </span>
          </a>
        </li>
		
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/pajak/main');$('#judul_kecil').html('Data Pajak')" flag="PAJAK" tabel="drt_pajak">
            <i class="fa fa-database"></i> <span>Pajak</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['PAJAK']['sts'] == -1) {?>
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['PAJAK']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['PAJAK']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_pajak">&nbsp;
				</small>
            </span>
          </a>
        </li>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value['tipe_perusahaan'] != 9) {?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/pengurus/main');$('#judul_kecil').html('Data Pengurus Perusahaan')" flag="PENGURUS" tabel="drt_pengurus">
            <i class="fa fa-database"></i> <span>Pengurus Perusahaan</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['PENGURUS']['sts'] == -1) {?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['PENGURUS']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['PENGURUS']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_pengurus">&nbsp;
				</small>
            </span>
          </a>
        </li>
		<?php }?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/ta/main');$('#judul_kecil').html('Data Tenaga Ahli Perusahaan')" flag="TA" tabel="drt_tenaga_ahli">
            <i class="fa fa-database"></i> <span>Tenaga Ahli</span>
            <span class="pull-right-container">
				<small class="label pull-right 
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['TA']['sts'] == -1) {?>
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['TA']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['TA']['sts'] == 1) {?>bg-blue
						<?php } else { ?>bg-yellow
						<?php }?>
					<?php }?> menu_ta">&nbsp;
				</small>
            </span>
          </a>
        </li>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value['tipe_perusahaan'] != 9) {?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/peralatan/main');$('#judul_kecil').html('Data Peralatan Perusahaan')" flag="PERALATAN" tabel="drt_peralatan">
            <i class="fa fa-database"></i> <span>Peralatan</span>
            <!--span class="pull-right-container">
				<small class="label pull-right <?php if ($_smarty_tpl->tpl_vars['flag']->value['PERALATAN'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> menu_peralatan">&nbsp;</small>
            </span-->
          </a>
        </li>
		
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/pengalaman/main');$('#judul_kecil').html('Data Pengalaman Perusahaan')" flag="PENGALAMAN" tabel="drt_pengalaman">
            <i class="fa fa-database"></i> <span>Pengalaman</span>
            <span class="pull-right-container">
			<small class="label pull-right 
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['PENGALAMAN']['sts'] == -1) {?>
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['PENGALAMAN']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['PENGALAMAN']['sts'] == 1) {?>bg-blue
					<?php } else { ?>bg-yellow
					<?php }?>
				<?php }?> menu_pengalaman">&nbsp;
			</small>
            </span>
          </a>
        </li>
		<?php }?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/pekerjaan_berjalan/main');$('#judul_kecil').html('Data Pekerjaan Berjalan Perusahaan')" flag="PEKERJAAN_BERJALAN" tabel="drt_pekerjaan_on_going">
            <i class="fa fa-database"></i> <span>Pekerjaaan Berjalan</span>
            <span class="pull-right-container">
			<small class="label pull-right 
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['PEKERJAAN_BERJALAN']['sts'] == -1) {?>
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['PEKERJAAN_BERJALAN']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['PEKERJAAN_BERJALAN']['sts'] == 1) {?>bg-blue
					<?php } else { ?>bg-yellow
					<?php }?>
				<?php }?> menu_pekerjaan_berjalan">&nbsp;
			</small>
            </span>
          </a>
        </li>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value['tipe_perusahaan'] != 9) {?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/keuangan/main');
				$('#judul_kecil').html('Data Aspek Keuangan Perusahaan <br><small>Perhatian : Laporan Keuangan 2 tahun terakhir dari tahun pelaksanaan Evaluasi DRT berlangsung</small>')" flag="KEUANGAN" tabel="drt_lapkeu_aspek">
            <i class="fa fa-database"></i> <span>Laporan Keuangan <br>Perusahaan</span>
            <span class="pull-right-container">
			<small class="label pull-right 
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['KEUANGAN']['sts'] == -1) {?>
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['KEUANGAN']['jml'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> 
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['flag']->value['KEUANGAN']['sts'] == 1) {?>bg-blue
					<?php } else { ?>bg-yellow
					<?php }?>
				<?php }?> menu_keuangan">&nbsp;
			</small>
            </span>
          </a>
        </li>
		<?php }?>
		<li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/modul/surat/main');$('#judul_kecil').html('Data Surat Penting Perusahaan')" flag="SURAT" tabel="drt_surat_penting">
            <i class="fa fa-database"></i> <span>Surat Penting lainnya</span>
			
            <!--span class="pull-right-container">
			<small class="label pull-right <?php if ($_smarty_tpl->tpl_vars['flag']->value['SURAT'] > 0) {?>bg-green<?php } else { ?>bg-red<?php }?> menu_surat">&nbsp;</small>
            </span-->
          </a>
        </li>
		<!--li>
          <a href="javascript:void(0);" onclick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/get_konten/konfirmasi');$('#judul_kecil').html(' Feedback Panitia')">
            <i class="fa fa-database"></i> <span>Feedback Panitia</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li-->
		<!--li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
login/logout">
            <i class="fa fa-dashboard"></i> <span>Logout</span>
            <span class="pull-right-container">
			
            </span>
          </a>
        </li-->
      </ul>
	</section><?php }
}
?>