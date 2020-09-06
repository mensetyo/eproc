<?php /* Smarty version 3.1.24, created on 2020-08-08 02:38:17
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/registrasi.php" */ ?>
<?php
/*%%SmartyHeaderCode:18296064445f2dada9e04ea3_92338000%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a6f456096f6b9a03d62f0ff070f82330cd5d1f' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/registrasi.php',
      1 => 1596763286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18296064445f2dada9e04ea3_92338000',
  'variables' => 
  array (
    'tglnow' => 0,
    'tglreg' => 0,
    'tglregawl' => 0,
    'expired' => 0,
    'acak' => 0,
    'host' => 0,
    'tipe' => 0,
    'i' => 0,
    'propinsi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f2dada9ebe224_33769276',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f2dada9ebe224_33769276')) {
function content_5f2dada9ebe224_33769276 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/files/Sync/eproc/__appl/third_party/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '18296064445f2dada9e04ea3_92338000';
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
			<!-- <?php $_smarty_tpl->tpl_vars['nowtgl'] = new Smarty_Variable(smarty_modifier_date_format(time(),"%e %B %Y"), null, 0);?> -->
			<!-- <?php if ($_smarty_tpl->tpl_vars['tglnow']->value <= $_smarty_tpl->tpl_vars['tglreg']->value && $_smarty_tpl->tpl_vars['tglregawl']->value >= $_smarty_tpl->tpl_vars['tglnow']->value) {?>
				<?php $_smarty_tpl->tpl_vars['hsl'] = new Smarty_Variable('true', null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['hsl'] = new Smarty_Variable('false', null, 0);?>
			<?php }?> -->
			<?php if ($_smarty_tpl->tpl_vars['expired']->value == 'expired') {?>
			<h3 align="center" style="color:red;font-weight:bold">Maaf, Waktu Registrasi Belum dibuka, Silahkan Lihat Timeline</h3>
			<?php } else { ?>
			<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
Registrasi-Data" method="post" enctype="multipart/form-data">
				<div class="alert alert-success" >
					<div class="container">
						<h5>Form Registrasi Calon Rekanan</h5></hr>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Bentuk Perusahaan *</label>
							<div class="col-sm-5">
							  <select id="tipe_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="tipe_perusahaan" class="form-control">
								<?php
$_from = $_smarty_tpl->tpl_vars['tipe']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['tipe_perusahaan'];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							  </select>
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Perusahaan/Individu *</label>
							<div class="col-sm-8">
							  <input type="text" name="nm_perusahaan" id="nm_perusahaan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Email *</label>
							<div class="col-sm-5">
							  <input type="text" name="email" id="email_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi_email">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Propinsi *</label>
							<div class="col-sm-5">
							  <select name="propinsi" id="propinsi" class="form-control validasi" style="width:80%">
									<option value="">-- Pilih --</option>
									<?php
$_from = $_smarty_tpl->tpl_vars['propinsi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
									<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
								</select>
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Kab.kota *</label>
							<div class="col-sm-5">
								<select name="kota" id="kota" class="form-control validasi" style="width:80%">
									<option value="">-- Pilih --</option>
								</select>
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Alamat *</label>
							<div class="col-sm-8">
							  <input type="text" name="alamat" id="alamat_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">No. Telp *</label>
							<div class="col-sm-5">
							  <input type="text" name="no_tlp" id="no_tlp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">No. HP *</label>
							<div class="col-sm-5">
							  <input type="text" name="no_hp" id="no_hp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Fax</label>
							<div class="col-sm-5">
							  <input type="text" name="fax" id="fax_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Kode POS *</label>
							<div class="col-sm-5">
							  <input type="text" name="kode_pos" id="kode_pos_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Website</label>
							<div class="col-sm-5">
							  <input type="text" name="website" id="website_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control">
							</div>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">KTP Pemilik *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi" id="file_ktp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_ktp">
							</div>
						  </div>

						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">AKTA *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi" id="file_akta_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_akta">
							</div>
						  </div>


						  <div class="form-group hd">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">SIUP *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi f_hd" id="file_siup_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_siup">
							</div>
						  </div>
						  <div class="form-group hd">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">TDP *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi f_hd" id="file_tdp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_tdp">
							</div>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">NPWP *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi" id="file_npwp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_npwp">
							</div>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Buku Rekening (Hal. Depan) *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi" id="file_rekening_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_rekening">
							</div>
						  </div>
						  <div class="form-group row hd">
							<label for="inputEmail3" class="col-sm-3 col-form-label">No. Pengukuhan *</label>
							<div class="col-sm-5">
							  <input type="text" name="no_pengukuhan" id="no_pengukuhan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi f_hd">
							</div>
						  </div>
						  <div class="form-group hd">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">File PKP *</label>
							<div class="col-sm-5">
								<input type="file" class="form-control-file validasi f_hd" id="file_pkp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" name="file_pkp">
							</div>
						  </div>
						  <!-- <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Mendaftar sebagai Penyedia </label>
							<div class="col-sm-9">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" name="barang" id="barang_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="1" >
								  <label class="form-check-label" for="barang_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">
									Barang
								  </label>&nbsp;&nbsp;&nbsp;&nbsp;
								  <input class="form-check-input" type="checkbox" name="jasa_lain" id="jasa_lain_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="1" >
								  <label class="form-check-label" for="jasa_lain_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">
									Jasa Konstruksi
								  </label>&nbsp;&nbsp;&nbsp;&nbsp;
								   <input class="form-check-input" type="checkbox" name="jasa_konsultansi" id="jasa_konsultansi_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="1" >
								  <label class="form-check-label" for="jasa_konsultansi_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">
									Jasa Konsultasi
								  </label>&nbsp;&nbsp;&nbsp;&nbsp;
								   <input class="form-check-input" type="checkbox" name="jasa_lainnya" id="jasa_lainnya_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="1" >
								  <label class="form-check-label" for="jasa_lainnya_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">
									Jasa Lainnya
								  </label>
								</div>
							</div>
						  </div> -->
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Security Code</label>
							<div class="col-sm-5" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
							  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
							  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 100px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  * Data harus diisi <br>
							    Dokumen yang diupload adalah scan dokumen ASLI (Pdf), Bukan Fotokopi. <br>
							    Jika file Anda belum Pdf, maka lakukan konversi ke Pdf dengan klik <a href="https://www.ilovepdf.com" target="__blank">https://www.ilovepdf.com</a> 
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  &nbsp;
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  <center><a type="submit" class="btn btn-primary" id="s_daftar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Daftar Rekanan</a></center>
							</div>
						  </div>
					</div>
				</div>
			</form>
			<?php }?>
        </div>
        </div>
      </div>
    </section>
<?php echo '<script'; ?>
>
	refreshCaptcha('imgVRCaptha');
	$('#tipe_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').change(function(){
		if($(this).val()==9){
			$('.hd').hide();
			$('.f_hd').removeClass('validasi');
		}else{
			$('.hd').show();
			$('.f_hd').addClass('validasi');
		}
	});
	$('#propinsi').change(function(){
		fillCombo(host+'modul/get_combo/kabkota', 'kota','kabkota', $(this).val());
	});
	$('#s_daftar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').bind('click',function(){
		$(".validasi").validatebox({ required:true }); 
		$(".validasi_email").validatebox({ required:true,validType: 'email' });
		var ext_ktp = $('#file_ktp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_ktp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
		var ext_npwp = $('#file_npwp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_npwp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
		var ext_rek = $('#file_rekening_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_rekening_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
		
		if(ext_ktp!='pdf'){	
			$.messager.alert('EPROC-APP',"File KTP Harus PDF",'error');
			return false;
		}
		if(ext_npwp!='pdf'){	
			$.messager.alert('EPROC-APP',"File NPWP Harus PDF",'error');
			return false;
		}
		
		if(ext_rek!='pdf'){	
			$.messager.alert('EPROC-APP',"File Cover Rekening Harus PDF",'error');
			return false;
		}
		if($('#tipe_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val() !=9){
			var ext_siup = $('#file_siup_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_siup_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
			var ext_tdp = $('#file_tdp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_tdp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
			var ext_pkp = $('#file_pkp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().substr( ($('#file_pkp_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val().lastIndexOf('.') +1) );
			if(ext_siup!='pdf'){	
				$.messager.alert('EPROC-APP',"File SIUP Harus PDF",'error');
				return false;
			}
			if(ext_tdp!='pdf'){	
				$.messager.alert('EPROC-APP',"File TDP Harus PDF",'error');
				return false;
			}
			if(ext_pkp!='pdf'){	
				$.messager.alert('EPROC-APP',"File PKP Harus PDF",'error');
				return false;
			}
		}
		if ($('#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').form('validate')){
			$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
				if(resp=='sama'){
					// ajax
					var uri = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
Registrasi-Data";
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
								$('#judul_nya').html('Pendaftaran Calon Rekanan');
								$('#isi_nya').html('Terima kasih pendaftaran Calon Rekanan berhasil disubmit.<br>Selanjutnya Panitia akan melakukan verifikasi terhadap dokumen awal pendaftaran. Hasil verifikasi pendaftaran tersebut akan kami kirim melalui email yang sudah terdaftar.<br> <br> <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
" class="btn btn-sm btn-primary">Tutup</a> ');
								$('#modal_nya').modal('show');
							}else if(data==3){
								console.log(data);
								$.messager.alert('EPROC-APP',"Mohon Maaf Email anda Sudah Terdaftar",'info');
							}
							else if(data==2){
								console.log(data);
								$.messager.alert('EPROC-APP',"Mohon Maaf Email Mail Server Kami Sedang Bermasalah",'info');
							}
							else if(data==4){
								console.log(data);
								$.messager.alert('EPROC-APP',"Mohon Maaf Nama Perusahaan anda Sudah Terdaftar",'info');
							}
							else{
								$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
								console.log(data);
							}
							console.log(data);
						},
						error: function(xhr, ajaxOptions, thrownError) {
							winLoadingClose();
							$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
						}
					});
					// end ajax
					
				}else{
					refreshCaptcha('imgVRCaptha');
					$.messager.alert('EPROC-APP',"Random text you are entered is wrong. Please try again!",'warning');
				}
			});
		}
	});
<?php echo '</script'; ?>
><?php }
}
?>