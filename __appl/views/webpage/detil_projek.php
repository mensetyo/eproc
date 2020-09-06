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
					<td style="width:200px;">Tahap Saat Ini</td>
					<td>:</td>
					<td>{if $projek.flag_tahap eq 'PL'}Pengumuman Lelang{else if $projek.flag_tahap eq 'ED'}Evaluasi Dokumen{else}-{/if}</td>
				</tr>
				<tr>
					<td style="width:200px;">Kategori Pengadaan</td>
					<td>:</td>
					<td>{$projek.kategori_pengadaan}</td>
				</tr>
				<tr>
					<td style="width:200px;">Jenis Pengadaan</td>
					<td>:</td>
					<td>{if $projek.jenis_pengadaan eq 1}TERBUKA{else}TERTUTUP{/if}</td>
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
								<td>{$projek.kualifikasi_pengadaan}</td>
								<td>{$projek.jenis_dokumen}</td>
								<td>{$projek.evaluasi_penawaran}</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="width:200px;">Metode Penawaran</td>
					<td>:</td>
					<td>{$projek.metode_penawaran}</td>
				</tr>
				<tr>
					<td style="width:200px;">Kualifikasi Penyedia</td>
					<td>:</td>
					<td>{$projek.kualifikasi_penyedia|replace:'|':','}</td>
				</tr>
				<tr>
					<td style="width:200px;">Syarat Kualifikasi</td>
					<td>:</td>
					<td>
						{$projek.syarat_kualifikasi|default:''}
					</td>
				</tr>
			</table>
			<center>
				<a href="{$host}webpage/pengumuman_pengadaan" class="btn btn-primary">Kembali</a>
					{if $projek.flag_lelang eq 'LL'}
				<a href="{$host}webpage/daftar_lelang/{'daftar_lelang'|base64_encode}/{$projek.id|base64_encode}" class="btn btn-danger">Daftar Pelelangan</a>
					{/if}
			</center>
        </div>
        </div>
      </div>
    </section>
<script>
	
</script>