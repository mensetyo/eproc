   
   <section id="syarat" class="home-section paddingtop-70">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text"><br/><br/>
                      <p>
						<table width="150%" border="0">
							<tbody><br>
										{foreach from=$berita item=i}
										
								<tr>
								  <td colspan="2"><strong>{$i.judul}<br></strong></td>
								</tr>
								<tr>
								  <td colspan="2"><strong>{$i.isi}<br></strong></td>
								</tr>
								<tr>
								  <td colspan="2"><strong>{$i.file}<br></strong></td>
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