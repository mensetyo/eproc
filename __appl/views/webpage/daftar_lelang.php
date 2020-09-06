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
         
			<form class="form-horizontal" id="form_{$acak}" url="{$host}Registrasi-Data" method="post" enctype="multipart/form-data">
				<div class="alert alert-success" >
					<div class="container">
						<h5>PENDAFTARAN PELELANGAN : {$projek.nama_pengadaan}</h5></hr>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Nama Perusahaan</label>
							<div class="col-sm-5">
							{$auth.nm_perusahaan|default:''}
							</div>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-5">
							{$auth.alamat|default:''}
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
										{assign var=sts value=0}
										 {foreach from=$data item=i name=x}
										<tr>
											<td>{$smarty.foreach.x.iteration}</td>
											<td>{$i.txt}</td>
											<td>{if $i.jml > 0}Sudah Terpenuhi{else}{if $i.txt !='SURAT PENTING'}{assign var=sts value=$sts+1}<a href="{$host}modul"><span style="color:red">Belum Terpenuhi</span></a>{else}Optional{/if}{/if}</td>
										</tr>
										{/foreach}
									</tbody>
								</table>
							</div>
						  </div>
						   {if $sts_daftar eq 0}
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Security Code</label>
							<div class="col-sm-5" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
							  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="{$host}__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
							  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 100px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
							</div>
						  </div>
						  {/if}
						  <div class="form-group row">
							<div class="col-sm-10">
							  &nbsp;
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  {if $sts_daftar eq 0}
							  <center><a type="submit" class="btn btn-primary" id="s_daftar_{$acak}">Daftar Pelelangan</a></center>
							  {else}
							  
							  <center><a href="{$host}webpage/pengumuman_pengadaan" class="btn btn-primary">Kembali</a></center>
							  <center>Perusahaan Anda Sudah Mendaftar</center>
							  {/if}
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
<script>
{* {assign var=sts value=0} *}
	refreshCaptcha('imgVRCaptha');
	$('#propinsi').change(function(){
		fillCombo(host+'modul/get_combo/kabkota', 'kota','kabkota', $(this).val());
	});
	$('#s_daftar_{$acak}').bind('click',function(){
		{if $sts eq 0}
		loadingna();
		$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
			if(resp=='sama'){
				$.post("{$host}DaftarLelang",{ sts_crud:'add',drt_peserta_id:{$auth.id},eproc_pengadaan_id:{$projek.id} },function(r){
					if(r==1){
						winLoadingClose();
						$('#judul_nya').html('Pendaftaran Pelelangan');
						$('#isi_nya').html('Terima Kasih Anda Sudah Mendaftar <br> Untuk Tahap Selanjutnya Kami Informasikan Melalui Email Atau Website Kami.');
						$('#modal_nya').modal('show');
						setTimeout(function(){ window.location.href = '{$host}'; }, 5000);
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
		{else}
		$.messager.alert('EPROC-APP',"Silahkan Lengkapi Dokumen Administrasi Anda",'warning');
		{/if}
	});
</script>