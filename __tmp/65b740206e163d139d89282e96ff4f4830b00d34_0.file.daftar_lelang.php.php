<?php /* Smarty version 3.1.24, created on 2020-07-08 12:51:23
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/daftar_lelang.php" */ ?>
<?php
/*%%SmartyHeaderCode:4068551395f055edb88e984_65095368%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b740206e163d139d89282e96ff4f4830b00d34' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/daftar_lelang.php',
      1 => 1576762280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4068551395f055edb88e984_65095368',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'projek' => 0,
    'auth' => 0,
    'data' => 0,
    'i' => 0,
    'sts' => 0,
    'sts_daftar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f055edb935f77_83902195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f055edb935f77_83902195')) {
function content_5f055edb935f77_83902195 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4068551395f055edb88e984_65095368';
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
Registrasi-Data" method="post" enctype="multipart/form-data">
				<div class="alert alert-success" >
					<div class="container">
						<h5>PENDAFTARAN PELELANGAN : <?php echo $_smarty_tpl->tpl_vars['projek']->value['nama_pengadaan'];?>
</h5></hr>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Nama Perusahaan</label>
							<div class="col-sm-5">
							<?php echo (($tmp = @$_smarty_tpl->tpl_vars['auth']->value['nm_perusahaan'])===null||$tmp==='' ? '' : $tmp);?>

							</div>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-5">
							<?php echo (($tmp = @$_smarty_tpl->tpl_vars['auth']->value['alamat'])===null||$tmp==='' ? '' : $tmp);?>

							</div>
						  </div>
						   <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Kelengkapan Administrasi</label>
							<div class="col-sm-5">
								<table class="table">
									<thead>
										<tr>
											<th>No.</th>
											<th>Dokumen Administrasi</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php $_smarty_tpl->tpl_vars['sts'] = new Smarty_Variable(0, null, 0);?>
										 <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
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
											<td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_x']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_x']->value['iteration'] : null);?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['i']->value['txt'];?>
</td>
											<td><?php if ($_smarty_tpl->tpl_vars['i']->value['jml'] > 0) {?>Sudah Terpenuhi<?php } else {
if ($_smarty_tpl->tpl_vars['i']->value['txt'] != 'SURAT PENTING') {
$_smarty_tpl->tpl_vars['sts'] = new Smarty_Variable($_smarty_tpl->tpl_vars['sts']->value+1, null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul"><span style="color:red">Belum Terpenuhi</span></a><?php } else { ?>Optional<?php }
}?></td>
										</tr>
										<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
									</tbody>
								</table>
							</div>
						  </div>
						   <?php if ($_smarty_tpl->tpl_vars['sts_daftar']->value == 0) {?>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Security Code</label>
							<div class="col-sm-5" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
							  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
							  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 100px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
							</div>
						  </div>
						  <?php }?>
						  <div class="form-group row">
							<div class="col-sm-10">
							  &nbsp;
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  <?php if ($_smarty_tpl->tpl_vars['sts_daftar']->value == 0) {?>
							  <center><a type="submit" class="btn btn-primary" id="s_daftar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Daftar Pelelangan</a></center>
							  <?php } else { ?>
							  
							  <center><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/pengumuman_pengadaan" class="btn btn-primary">Kembali</a></center>
							  <center>Perusahaan Anda Sudah Mendaftar</center>
							  <?php }?>
							</div>
						  </div>
					</div>
				</div>
			</form>
		<p>
				* SILAHKAN LENGKAPI DOKUMEN ADMINISTRASI
		</p>
        </div>
        </div>
      </div>
    </section>
<?php echo '<script'; ?>
>

	refreshCaptcha('imgVRCaptha');
	$('#propinsi').change(function(){
		fillCombo(host+'modul/get_combo/kabkota', 'kota','kabkota', $(this).val());
	});
	$('#s_daftar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').bind('click',function(){
		<?php if ($_smarty_tpl->tpl_vars['sts']->value == 0) {?>
		loadingna();
		$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
			if(resp=='sama'){
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
DaftarLelang",{ sts_crud:'add',drt_peserta_id:<?php echo $_smarty_tpl->tpl_vars['auth']->value['id'];?>
,eproc_pengadaan_id:<?php echo $_smarty_tpl->tpl_vars['projek']->value['id'];?>
 },function(r){
					if(r==1){
						winLoadingClose();
						$('#judul_nya').html('Pendaftaran Pelelangan');
						$('#isi_nya').html('Terima Kasih Anda Sudah Mendaftar <br> Untuk Tahap Selanjutnya Kami Informasikan Melalui Email Atau Website Kami.');
						$('#modal_nya').modal('show');
						setTimeout(function(){ window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'; }, 5000);
					}else{
						winLoadingClose();
						$.messager.alert('EPROC-APP',"Oops Gagal Mendaftar..",'danger');
					}
				})
				
			}else{
				winLoadingClose();
				refreshCaptcha('imgVRCaptha');
				$.messager.alert('EPROC-APP',"Random text you are entered is wrong. Please try again!",'warning');
			}
		});
		<?php } else { ?>
		$.messager.alert('EPROC-APP',"Silahkan Lengkapi Dokumen Administrasi Anda",'warning');
		<?php }?>
	});
<?php echo '</script'; ?>
><?php }
}
?>