 <!-- css -->
  <link href="{$host}__assets/css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="{$host}__assets/css1/style.css" rel="stylesheet" />
  
  <br><br><br><br><br>
<section id="content">
      <div class="container">
        <div class="row marginbot30">
          <div class="span12">
           <div class="wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="heading"><strong>Pengumuman</strong> DPT<span></span></h4>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <div class="author">
                      <p class="name">
                        <table width="" class="table" border="0">
						<tbody>
							{foreach from=$pengumuman_dpt item=i}
							<tr><td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:%">
										<option value="">-- Pilih Kategori --</option>
										<option>{$i.tipe_perusahaan}</option>
									</select>
								</td>
								<td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:%">
										<option value="">-- Pilih Materi --</option>
										<option>{$i.tipe_perusahaan}</option>
									</select>
								</td>
							</tr>
							<tr><td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:100%">
										<option value="">-- Pilih Unit --</option>
										<option>{$i.tipe_perusahaan}</option>
									</select>
								</td>
								<td><input name="tanggal_akhir" placeholder="Cari Data" class="form-control" style="width:%" /></td>
								<td><input type="submit" value="&ensp;Cari&ensp;" class="btn btn-info" style="width:%"/></td>
								<td><input type="reset" value="Reset" class="btn btn-info" style="width:%"/></td>
							</tr>
							{/foreach}
						</tbody>
					  </table>
					  
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                   <p class="name">
                        <table width="" class="table" border="0">
						<tbody>
							{foreach from=$pengumuman_dpt item=i}
							<tr><td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:100%">
										<option value="">-- Pilih Kategori --</option>
										<option>{$i.tipe_perusahaan}</option>
									</select>
								</td>
								<td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:100%">
										<option value="">-- Pilih Materi --</option>
										<option>{$i.tipe_perusahaan}</option>
									</select>
								</td>
							</tr>
							<tr><td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:100%">
										<option value="">-- Pilih Unit --</option>
										<option>{$i.tipe_perusahaan}</option>
									</select>
								</td>
								<td width=""><input name="tanggal_akhir" placeholder="Cari Data" class="form-control" style="width:%" /></td>
								<td><input type="submit" value="&ensp;Cari&ensp;" class="btn btn-info" style="width:%"/></td>
								<td><input type="reset" value="Reset" class="btn btn-info" style="width:%"/></td>
							</tr>
							{/foreach}
						</tbody>
					  </table>
					    </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
                     </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
					{foreach from=$tentang_kami item=i}
                      <i class="icon-quote-left icon-48"></i>
						  {$i.description}
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  {/foreach}
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
					{foreach from=$tentang_kami item=i}
                      <i class="icon-quote-left icon-48"></i>
						  {$i.description}
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  {/foreach}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
					{foreach from=$tentang_kami item=i}
                      <i class="icon-quote-left icon-48"></i>
						  {$i.description}
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  {/foreach}
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
					{foreach from=$tentang_kami item=i}
                      <i class="icon-quote-left icon-48"></i>
						  {$i.description}
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  {/foreach}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </table>