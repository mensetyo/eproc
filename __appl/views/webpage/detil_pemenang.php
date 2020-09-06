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
			<form class="form-horizontal" id="form_{$acak}" url="{$host}KirimPenawaran2" method="post" enctype="multipart/form-data">
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
					<td style="width:200px;">Pagu Anggaran</td>
					<td>:</td>
					<td>{$projek.pagu|number_format:2:',':'.'}</td>
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
								{foreach from=$rekap_thp2 item=i key=a name=x}
								{assign var=mklah_nilai value=(($i.makalah_nilai/100)*50)}
								{assign var=tot_thp1 value=$mklah_nilai+$i.keuangan_nilai+$i.pengalaman_nilai}
								{assign var=tot_thp1 value=(($tot_thp1/100)*60)}
								{assign var=grand_tot value=$tot_thp1+$i.nilai_harga}
								<tr>
									<td style="text-align:center;;vertical-align:middle;">{$smarty.foreach.x.iteration}</td>
									<td style="text-align:left;;vertical-align:middle;">{$i.nm_perusahaan}</td>
									<td style="text-align:center;;vertical-align:middle;">{$i.adm_nilai|number_format:2:',':'.'}</td>
									<td style="text-align:center;;vertical-align:middle;">{$i.keuangan_nilai|number_format:2:',':'.'}</td>
									<td style="text-align:center;;vertical-align:middle;">{$i.pengalaman_nilai|number_format:2:',':'.'}</td>
									<td style="text-align:center;;vertical-align:middle;">{$mklah_nilai|number_format:2:',':'.'}</td>
									<td style="text-align:right;;vertical-align:middle;">{$i.harga|number_format:2:',':'.'}</td>
									<td style="text-align:center;;vertical-align:middle;">{$i.nilai_harga|number_format:2:',':'.'}</td>
									<td style="text-align:center;;vertical-align:middle;">{$grand_tot|number_format:2:',':'.'}</td>
									<td style="text-align:center;;vertical-align:middle;">{if $grand_tot >= 85}Lulus{else}Tidak Lulus{/if}</td>
									<td style="text-align:center;;vertical-align:middle;{if $i.pemenang eq 1}background-color:red;color:#ffffff;{/if}">
										<input type="hidden" name="seq_pemenang[{$i.drt_peserta_id}]" value="{$i.pemenang|default:'0'}">
										{$i.pemenang}
									</td>
									<td style="text-align:center;;vertical-align:middle;">{$i.ket|default:''}</td>
								</tr>
								{/foreach}
							</tbody>
						</table>
					</td>
				</tr>
				
				
				
				
			</table>
			</form>
			
			<center>
				<a href="{$host}webpage/getkonten/pengumuman" class="btn btn-primary" id="kembali_{$acak}">Kembali</a>
			</center>
        </div>
        </div>
      </div>
    </section>
