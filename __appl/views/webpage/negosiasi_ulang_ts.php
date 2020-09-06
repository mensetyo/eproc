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
			<form class="form-horizontal" id="form_{$acak}" url="{$host}NegosiasiUlangPenawaranTs" method="post" enctype="multipart/form-data">
			<input type="hidden" name="eproc_pengadaan_id" value="{$id_pengadaan}">
			<input type="hidden" name="drt_peserta_id" value="{$auth.id}">
			<input type="hidden" name="eproc_negosiasi_id" value="{$nego_h.id}">
			<input type="hidden" name="jenis_nego" value="{$nego_h.jenis_nego}">
			<input type="hidden" name="tahap" value="{$tahap_nego.tahap}">
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
					<td>Negosiasi</td>
				</tr>
				<tr>
					<td style="width:200px;">Batas Waktu Nego</td>
					<td>:</td>
					<td><b>{$nego_h.batas_waktu}</b></td>
				</tr>
				
				<tr>
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td>{$projek.pagu|number_format:2:',':'.'}</td>
				</tr>
					<td style="width:200px;">Negosiasi</td>
					<td>:</td>
					<td>
					{if $nego_h.jenis_nego eq 1}<!-- KALO LUMSUM-->
						{foreach from=$nego_d item=a name=x key=y}
						TAHAP : {$y}
						{if $y eq $nego_d|@count}
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
							{assign var=tot_penawaran value=0}
							{assign var=tot_nego value=0}
								{foreach from=$a item=i name=x}
								{assign var=tot_penawaran value=$tot_penawaran+$i.nilai_penawaran}
								{assign var=tot_nego value=$tot_nego+$i.nilai_nego_panitia}
								
								<tr>
									<td><input type="hidden" name="uraian[{$i.id}]" value="{$i.uraian}">{$i.uraian}</td>
									<td style="text-align:right;"><strong>{$i.nilai_penawaran|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;"><input type="hidden" name="nilai_nego_panitia[{$i.id}]" value="{$i.nilai_nego_panitia}"><strong>{$i.nilai_nego_panitia|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;">
									{if $nego_h.flag|default:'P' eq 'P'}
										<input type="text" name="nilai_nego_peserta[{$i.id}]" class="angka validasi" style="height:25px;" value="{$i.nilai_nego_panitia}">
									{else}
										{$i.nilai_nego_peserta|number_format:0:',':'.'}
									{/if}
									</td>
									<td>
										{if $nego_h.flag|default:'P' eq 'P'}
										<input type="text" name="ket_peserta[{$i.id}]" class="" style="width:100%">
										{else}
										{$i.ket_peserta|default:''}
										{/if}
									</td>
								</tr>
								{/foreach}
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:11px;">
								<td>GrandTotal</td>
								<td style="text-align:right;">{$tot_penawaran|number_format:0:',':'.'}</td>
								<td style="text-align:right;">{$tot_nego|number_format:0:',':'.'}</td>
								<td style="text-align:right;"><span id="tot_tawar_{$acak}">{$tot_nego|number_format:0:',':'.'}</span></td>
								<td>&nbsp;</td>
							</tr>
						</table>
						{else}
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
							{assign var=tot_penawaran value=0}
							{assign var=tot_nego value=0}
								{foreach from=$a item=i name=x}
								{assign var=tot_penawaran value=$tot_penawaran+$i.nilai_penawaran}
								{assign var=tot_nego value=$tot_nego+$i.nilai_nego_panitia}
								
								<tr>
									<td>{$i.uraian}</td>
									<td style="text-align:right;"><strong>{$i.nilai_penawaran|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;"><strong>{$i.nilai_nego_panitia|number_format:0:',':'.'}</strong></td>
									<td>{$i.nilai_nego_peserta|number_format:0:',':'.'}</td>
									<td>{$i.ket_drt}</td>
								</tr>
								{/foreach}
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:11px;">
								<td>GrandTotal</td>
								<td style="text-align:right;">{$tot_penawaran|number_format:0:',':'.'}</td>
								<td style="text-align:right;">{$tot_nego|number_format:0:',':'.'}</td>
								<td style="text-align:right;">{$tot_nego|number_format:0:',':'.'}</td>
								<td>&nbsp;</td>
							</tr>
						</table>
						{/if}
						{/foreach}
						{else}<!-- KALO HARSAT-->
						
						{foreach from=$nego_d item=a name=x key=y}
						TAHAP : {$y}
						{if $y eq $nego_d|@count}
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:11px;">
								<tr>
									<th style="text-align:left;;vertical-align:middle;width:30%" >Uranian<br>Pekerjaan</th>
									<th style="text-align:left;;vertical-align:middle;">Vol</th>
									<th style="text-align:left;;vertical-align:middle;">Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Nego Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Nego Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Nego Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Nego Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;width:30%">Keterangan</th>
								</tr>
								
							</thead>
							<tbody style="background:#D4E8F4;;font-size:10px;" class="bd_ny">
							{assign var=tot_penawaran value=0}
							{assign var=tot_nego value=0}
								{foreach from=$a item=i name=x}
								{assign var=tot_penawaran value=$tot_penawaran+$i.tot_penawaran}
								{assign var=tot_nego value=$tot_nego+$i.tot_nego}
								
								<tr>
									<td><input type="hidden" name="uraian[{$i.id}]" value="{$i.uraian}">{$i.uraian}</td>
									<td style="text-align:right;">
										<input type="hidden" name="vol[{$i.id}]" id="vol_{$i.id}" value="{$i.vol}">
										<strong>{$i.vol|number_format:0:',':'.'}</strong>
									</td>
									<td style="text-align:right;"><strong>{$i.nilai_penawaran|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;">
										<input type="hidden" name="nilai_nego_panitia[{$i.id}]" value="{$i.nilai_nego_panitia}"><strong>{$i.nilai_nego_panitia|number_format:0:',':'.'}</strong>
									</td>
									<td style="text-align:right;"><strong>{$i.tot_penawaran|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;"><strong>{$i.tot_nego|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;">
									{if $nego_h.flag|default:'P' eq 'P'}
										<input type="text" name="nilai_nego_peserta[{$i.id}]" class="h_angka validasi" idx="{$i.id}" style="height:25px;" value="{$i.nilai_nego_panitia}">
									{else}
										{$i.nilai_nego_peserta|number_format:0:',':'.'}
									{/if}
									</td>
									<td style="text-align:right;">
										<input type="hidden" name="tot_nego_peserta[{$i.id}]" id="tot_nego_peserta_{$i.id}" value="{$i.tot_nego}" class="hit_tot">
										<strong>
											<span id="t_nego_peserta_{$i.id}">{$i.tot_nego|number_format:0:',':'.'}</span>
										</strong>
									</td>
									<td>
										{if $nego_h.flag|default:'P' eq 'P'}
										<input type="text" name="ket_peserta[{$i.id}]" class="" style="width:100%">
										{else}
										{$i.ket_peserta|default:''}
										{/if}
									</td>
								</tr>
								{/foreach}
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:14px;font-weight:bold;">
								<td colspan="4">GrandTotal</td>
								<td style="text-align:right;">{$tot_penawaran|number_format:0:',':'.'}</td>
								<td style="text-align:right;">{$tot_nego|number_format:0:',':'.'}</td>
								<td style="text-align:right;">
									&nbsp;
								</td>
								<td><span id="tot_tawar_{$acak}">{$tot_nego|number_format:0:',':'.'}</span></td>
								<td></td>
							</tr>
						</table>
						{else}
						<table class="table table-bordered table-hovered">
							<thead style="background:#3C8DBC;color:#fff;font-size:11px;">
								<tr>
									<th style="text-align:left;;vertical-align:middle;width:30%" >Uranian<br>Pekerjaan</th>
									<th style="text-align:left;;vertical-align:middle;">Vol</th>
									<th style="text-align:left;;vertical-align:middle;">Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Nego Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Penawaran</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Nego Panitia</th>
									<th style="text-align:left;;vertical-align:middle;">Nego Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;">Tot. Nego Rekanan</th>
									<th style="text-align:left;;vertical-align:middle;width:30%">Keterangan</th>
								</tr>
								
							</thead>
							<tbody style="background:#D4E8F4;;font-size:10px;" class="bd_ny">
							{assign var=tot_penawaran value=0}
							{assign var=tot_nego value=0}
							{assign var=tot_nego_rekanan value=0}
								{foreach from=$a item=i name=x}
								{assign var=tot_penawaran value=$tot_penawaran+$i.tot_penawaran}
								{assign var=tot_nego value=$tot_nego+$i.tot_nego}
								{assign var=tot_nego_rekanan value=$tot_nego_rekanan+$i.tot_nego_peserta}
								
								<tr>
									<td>{$i.uraian}</td>
									<td style="text-align:right;">
										<strong>{$i.vol|number_format:0:',':'.'}</strong>
									</td>
									<td style="text-align:right;"><strong>{$i.nilai_penawaran|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;">
										<strong>{$i.nilai_nego_panitia|number_format:0:',':'.'}</strong>
									</td>
									<td style="text-align:right;"><strong>{$i.tot_penawaran|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;"><strong>{$i.tot_nego|number_format:0:',':'.'}</strong></td>
									<td style="text-align:right;">
										{$i.nilai_nego_peserta|number_format:0:',':'.'}
									</td>
									<td style="text-align:right;">
										
										<strong>
											<span id="t_nego_peserta_{$i.id}">{$i.tot_nego|number_format:0:',':'.'}</span>
										</strong>
									</td>
									<td>
										{$i.ket_peserta|default:''}
									</td>
								</tr>
								{/foreach}
							</tbody>
							<tr style="background:#3C8DBC;color:#fff;font-size:14px;font-weight:bold;">
								<td colspan="4">GrandTotal</td>
								<td style="text-align:right;">{$tot_penawaran|number_format:0:',':'.'}</td>
								<td style="text-align:right;">{$tot_nego|number_format:0:',':'.'}</td>
								<td style="text-align:right;">
									&nbsp;
								</td>
								<td>{$tot_nego_rekanan|number_format:0:',':'.'}</td>
								<td></td>
							</tr>
						</table>
						{/if}
						{/foreach}
						
						{/if}
					</td>
				{if $nego_h.flag|default:'P' eq 'P'}
				<tr>
					<td style="width:200px;">Security Code</td>
					<td style="width:10px;">:</td>
					<td>
						<div class="col-sm-6" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
						  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="{$host}__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
						  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 80px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
						</div>
					</td>
				</tr>
				{/if}
				<tr>
					<td colspan="3">
						<p>
							* Negosiasi Hanya Berlaku 3 kali :<br>
						</p>
					</td>
				</tr>
				
				
			</table>
			</form>
			{if $nego_h.flag|default:'P' eq 'P'}
			<center>
				<a href="javascript:void(0);" class="btn btn-success" id="deal_{$acak}">Deal/Setuju</a>
				<a href="javascript:void(0);" class="btn btn-warning" id="nego_{$acak}">Negosiasi Ulang</a>
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
			groupSeparator:',',
			decimalSeparator:'.',
			onChange:function(x,y){
				var tot=0;
				$('.angka').each(function(i){
					console.log($(this).val());
					tot=tot+parseFloat($(this).val());
					$('#tot_tawar_{$acak}').html(NumberFormat(tot));
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
					$('#tot_tawar_{$acak}').html(NumberFormat(tot));
				});
			}
		});
		refreshCaptcha('imgVRCaptha');
		
		$('#deal_{$acak}').bind('click',function(){
			$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
				if(resp=='sama'){
					loadingna();
					$.post("{$host}NegosiasiUlangPenawaranDealTs",$('#form_{$acak}').serialize(),function(r){
						if(r==1){
							winLoadingClose();
							$('#judul_nya').html('NEGOSIASI');
							$('#isi_nya').html('Terima Kasih Negosiasi Telah Kami Terima');
							$('#modal_nya').modal('show');
							setTimeout(function(){ window.location.href = '{$host}'; }, 5000);
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
		$('#nego_{$acak}').bind('click',function(){
			{if $nego_d|@count eq 3}
				$.messager.alert('EPROC-APP',"Mohon Maaf Batas Negosiasi Sudah 3 kali! <br> Silahkan Klik Deal/Setuju Jika anda setuju dengan Negosiasi Panitia",'warning');
			{else}
				$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
					if(resp=='sama'){
						submit_form('form_{$acak}',function(r){
							if(r==1){
								winLoadingClose();
								$('#judul_nya').html('Upload Dokumen Penawaran');
								$('#isi_nya').html('Terima Kasih Negosiasi Telah Kami Terima <br> Hasil Negosiasi Akan Kirimkan Melalui Email Atau Website Kami.');
								$('#modal_nya').modal('show');
								setTimeout(function(){ window.location.href = '{$host}'; }, 5000);
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
			{/if}
		});
</script>