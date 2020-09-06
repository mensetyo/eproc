<?php /* Smarty version 3.1.24, created on 2020-06-30 23:29:24
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/undang.html" */ ?>
<?php
/*%%SmartyHeaderCode:840682595efb6864688566_28670594%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2dea1c9f38c766298211d267b52a0491e0e54c8' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/undang.html',
      1 => 1576762288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '840682595efb6864688566_28670594',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'projek' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5efb68647b6a33_82498990',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5efb68647b6a33_82498990')) {
function content_5efb68647b6a33_82498990 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '840682595efb6864688566_28670594';
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
KirimPenawaran" method="post" enctype="multipart/form-data">
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
					<td><?php echo $_smarty_tpl->tpl_vars['projek']->value['tahapan'];?>
</td>
				</tr>
				<tr>
					<td style="width:200px;">Tgl Awizing</td>
					<td>:</td>
					<td><b><?php echo $_smarty_tpl->tpl_vars['projek']->value['tgl_anwijing'];?>
</b></td>
				</tr>
				<tr>
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td><?php echo number_format($_smarty_tpl->tpl_vars['projek']->value['pagu'],2,',','.');?>
</td>
				</tr>
				
			</table>
			</form>
			
        </div>
        </div>
      </div>
    </section>
<?php echo '<script'; ?>
>
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