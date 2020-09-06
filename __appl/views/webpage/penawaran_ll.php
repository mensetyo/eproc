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
			<form class="form-horizontal" id="form_{$acak}" url="{$host}KirimPenawaranLl" method="post" enctype="multipart/form-data">
			<input type="hidden" name="eproc_pengadaan_id" value="{$projek.id}">
			<table class="table">
				<tr>
					<td style="width:200px;">No. Pengadaan</td>
					<td>:</td>
					<td>{$projek.nomor_pengadaan}</td>
				</tr>
				<tr>
					<td style="width:200px;">Nama Pengadaan</td>
					<td>:</td>
					<td>{$projek.nama_pengadaan}</td>
				</tr>
				<tr>
					<td style="width:200px;">Unit</td>
					<td>:</td>
					<td>{$projek.description}</td>
				</tr>
				<tr>
					<td style="width:200px;">Jenis Dokumen</td>
					<td>:</td>
					<td>{$projek.jenis_dokumen}</td>
				</tr>
				<tr>
					<td style="width:200px;">Evaluasi Penawaran</td>
					<td>:</td>
					<td>{$projek.evaluasi_penawaran}</td>
				</tr>
				
				<tr>
					<td style="width:200px;">Tahap Saat Ini</td>
					<td>:</td>
					<td>Pemasukan Dokumen Administrasi,Teknis & Harga</td>
				</tr>
				<tr>
					<td style="width:200px;">Tgl Mulai Penawaran</td>
					<td>:</td>
					<td><b>{$projek.tgl_mulai}</b></td>
				</tr>
				<tr>
					<td style="width:200px;">Tgl Akhir Penawaran</td>
					<td>:</td>
					<td><b>{$projek.tgl_akhir}</b></td>
				</tr>
				<tr>
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td>{$projek.pagu|number_format:2:',':'.'}</td>
				</tr>
				<tr>
					<td style="width:200px;">Dokumen Lelang</td>
					<td>:</td>
					<td><a href="{$host}webpage/download/dokumen_lelang/LS/{$projek.file}">{$projek.file}</a></td>
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
								<td>{$auth.nm_perusahaan}</td>
							</tr>
							
							<tr>
								<td style="width:200px;">Harga Penawaran</td>
								<td style="width:10px;">:</td>
								<td>{if !$penawaran}<input type="text" name="nilai_penawaran" id="nilai_penawaran{$acak}" class="angka" style="height:33px;font-weight:bold;">{else}{$penawaran.nilai_penawaran|number_format:2:',':'.'|default:''} (Menunggu Evaluasi Panitia){/if}</td>
							</tr>
							
							<tr>
								<td style="width:200px;">File Dokumen Penawaran</td>
								<td style="width:10px;">:</td>
								<td>{if !$penawaran}<input type="file" name="file" id="file_{$acak}">{else}{$penawaran.file|default:''} (Menunggu Evaluasi Panitia){/if}</td>
							</tr>
							<tr>
								<td style="width:200px;">Tgl. Penawaran</td>
								<td style="width:10px;">:</td>
								<td>{$smarty.now|date_format}</td>
							</tr>
							{if !$penawaran}
							<tr>
								<td style="width:200px;"></td>
								<td style="width:10px;"></td>
								<td>
									<div class="col-sm-6" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
									  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="{$host}__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
									  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 80px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
									</div>
								</td>
							</tr>
							{/if}
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
			
			{if !$penawaran}
			<center>
				<a href="javascript:void(0);" class="btn btn-primary" id="upl_{$acak}">Upload Dokumen Penawaran</a>
			</center>
			{/if}
			
        </div>
        </div>
      </div>
    </section>
<script>
		$('.angka').numberbox({
			precision:2,
			min:0,
			max:{$projek.pagu},
			groupSeparator:',',
			decimalSeparator:'.',
		});
		refreshCaptcha('imgVRCaptha');
		$('#upl_{$acak}').bind('click',function(){
			var ext = $('#file_{$acak}').val().substr( ($('#file_{$acak}').val().lastIndexOf('.') +1) );
				if(ext.toUpperCase()!='ZIP' && ext.toUpperCase()!='RAR' ){	
					$.messager.alert('EPROC-APP',"File Penawaran Harus ZIP/RAR",'error');
					return false;
				}
				$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
					if(resp=='sama'){
						submit_form('form_{$acak}',function(r){
							if(r==1){
								winLoadingClose();
								$('#judul_nya').html('Upload Dokumen Penawaran');
								$('#isi_nya').html('Terima Kasih Dokumen Penawaran Telah Kami Terima <br> Hasil Evaluasi Penawaran  Akan Kami Kirimkan Melalui Email Atau Website Kami.');
								$('#modal_nya').modal('show');
								setTimeout(function(){ window.location.href = '{$host}'; }, 5000);
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
</script>