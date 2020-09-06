   
   <section id="syarat" class="home-section paddingtop-70">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray" style="margin-top: 10%;margin-bottom: 5%;">
              <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <p>
						<table>
							<tbody><br>
								<tr>
								  <td colspan="2"><center><h3>SYARAT DAN KETENTUAN PELAKSANAAN PENGADAAN BARANG/JASA PT JMTO SECARA ELEKTRONIK <br>(e-PROCUREMENT)<br><br></h3></center>
												  </strong></td>
								</tr>
										{foreach from=$syarat_ketentuan item=i}
										
								<tr>
								  <td colspan="2"><strong>{$i.judul}<br></strong></td>
								</tr>
								<tr>
								<td width="4%">&nbsp;</td>
								  <td><i>{$i.description}</i></td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								</tr>
										{/foreach}
							  </tbody>
							</table>
						</body>
					  </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>