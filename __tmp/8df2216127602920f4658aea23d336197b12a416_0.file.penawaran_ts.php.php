<?php /* Smarty version 3.1.24, created on 2020-06-25 14:35:06
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/penawaran_ts.php" */ ?>
<?php
/*%%SmartyHeaderCode:5348216425ef453aa58fbe6_09530315%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df2216127602920f4658aea23d336197b12a416' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/penawaran_ts.php',
      1 => 1576762284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5348216425ef453aa58fbe6_09530315',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'projek' => 0,
    'auth' => 0,
    'penawaran' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5ef453aa644156_42442396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ef453aa644156_42442396')) {
function content_5ef453aa644156_42442396 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/files/Sync/eproc/__appl/third_party/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '5348216425ef453aa58fbe6_09530315';
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
KirimPenawaranTs" method="post" enctype="multipart/form-data">
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
					<td style="width:200px;">Evaluasi Penawaran</td>
					<td>:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['evaluasi_penawaran'];?>
</td>
				</tr>
				
				<tr>
					<td style="width:200px;">Tahap Saat Ini</td>
					<td>:</td>
					<td>Pemasukan Dokumen Administrasi,Teknis & Harga</td>
				</tr>
				<tr>
					<td style="width:200px;">Tgl Mulai Penawaran</td>
					<td>:</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['projek']->value['tgl_mulai'];?>
</b></td>
				</tr>
				<tr>
					<td style="width:200px;">Tgl Akhir Penawaran</td>
					<td>:</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['projek']->value['tgl_akhir'];?>
</b></td>
				</tr>
				<tr>
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td><?php echo number_format($_smarty_tpl->tpl_vars['projek']->value['pagu'],2,',','.');?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Dokumen Lelang</td>
					<td>:</td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/download/dokumen_lelang/LS/<?php echo $_smarty_tpl->tpl_vars['projek']->value['file'];?>
"><?php echo $_smarty_tpl->tpl_vars['projek']->value['file'];?>
</a></td>
				</tr>
				<tr>
					<td style="width:300px;">Dokumen Penawaran</td>
					<td>:</td>
					<td>
						<p>
							Dengan ini menyetujui pernyataan ini, saya selaku penyedia menyatakan bahwa dokumen dengan :
						</p>
						<table class="table">
							<tr>
								<td style="width:200px;">Nama Rekanan</td>
								<td style="width:10px;">:</td>
								<td><?php echo $_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'];?>
</td>
							</tr>
							
							<tr>
								<td style="width:200px;">Harga Penawaran</td>
								<td style="width:10px;">:</td>
								<td><?php if (!$_smarty_tpl->tpl_vars['penawaran']->value) {?><input type="text" name="nilai_penawaran" id="nilai_penawaran<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="angka" style="height:33px;font-weight:bold;"><?php } else {
echo (($tmp = @number_format($_smarty_tpl->tpl_vars['penawaran']->value['nilai_penawaran'],2,',','.'))===null||$tmp==='' ? '' : $tmp);?>
 (Menunggu Evaluasi Panitia)<?php }?></td>
							</tr>
							
							<tr>
								<td style="width:200px;">File Dokumen Penawaran</td>
								<td style="width:10px;">:</td>
								<td><?php if (!$_smarty_tpl->tpl_vars['penawaran']->value) {?><input type="file" name="file" id="file_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
"><?php } else {
echo (($tmp = @$_smarty_tpl->tpl_vars['penawaran']->value['file'])===null||$tmp==='' ? '' : $tmp);?>
 (Menunggu Evaluasi Panitia)<?php }?></td>
							</tr>
							<tr>
								<td style="width:200px;">Tgl. Penawaran</td>
								<td style="width:10px;">:</td>
								<td><?php echo smarty_modifier_date_format(time());?>
</td>
							</tr>
							<?php if (!$_smarty_tpl->tpl_vars['penawaran']->value) {?>
							<tr>
								<td style="width:200px;"></td>
								<td style="width:10px;"></td>
								<td>
									<div class="col-sm-6" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
									  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
									  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 80px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
									</div>
								</td>
							</tr>
							<?php }?>
						</table>
						<br>
						<p>
							Adalah benar penawaran berasal dari saya.
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<p>
							* Dokuken Penawaran berada didalam satu file yang berisi : <br>
							&nbsp;&nbsp;&nbsp;&nbsp;1. Dokumen Administrasi <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- jaminan penawaran <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- pakta integritas<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- pernyataan minat<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- dokumen lainya<br>
							&nbsp;&nbsp;&nbsp;&nbsp;2. Dokumen Teknis <br>
							&nbsp;&nbsp;&nbsp;&nbsp;3. Dokumen Penawaran Harga <br>
							* Dokumen Penawaran Berextentsi ZIP/RAR file<br>
							* Dokumen Penawaran dapat dikirimkan selama masa tahap penawaran dokumen
						</p>
					</td>
				</tr>
				
				
			</table>
			</form>
			
			<?php if (!$_smarty_tpl->tpl_vars['penawaran']->value) {?>
			<center>
				<a href="javascript:void(0);" class="btn btn-primary" id="upl_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Upload Dokumen Penawaran</a>
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
			max:<?php echo $_smarty_tpl->tpl_vars['projek']->value['pagu'];?>
,
			groupSeparator:',',
			decimalSeparator:'.',
		});
		refreshCaptcha('imgVRCaptha');
		$('#upl_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').bind('click',function(){
			var ext = $('#file_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
				if(ext.toUpperCase()!='ZIP' && ext.toUpperCase()!='RAR' ){	
					$.messager.alert('EPROC-APP',"File Penawaran Harus ZIP/RAR",'error');
					return false;
				}
				$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
					if(resp=='sama'){
						submit_form('form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
							if(r==1){
								winLoadingClose();
								$('#judul_nya').html('Upload Dokumen Penawaran');
								$('#isi_nya').html('Terima Kasih Dokumen Penawaran Telah Kami Terima <br> Hasil Evaluasi Penawaran  Akan Kami Kirimkan Melalui Email Atau Website Kami.');
								$('#modal_nya').modal('show');
								setTimeout(function(){ window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'; }, 5000);
							}else{
								winLoadingClose();
								$.messager.alert('EPROC-APP',"Gagal Upload Penawaran",'error');
								console.log(r);
							}
						});
					}else{
						refreshCaptcha('imgVRCaptha');
						$.messager.alert('EPROC-APP',"Random text you are entered is wrong. Please try again!",'warning');
					}
					});
		});
<?php echo '</script'; ?>
><?php }
}
?>