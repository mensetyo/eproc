    <section id="tentang_kami" class="home-section">
      <div class="container" style="margin-top:-10%;">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text" style="text-align: justify;">
                      <h3>Tentang Kami</h3>
                      <p style="text-align:justify">
					  {foreach from=$tentang_kami item=i}
						  {$i.description}
					  {/foreach}
					  
                      </p>
                    </div>
                  </div>
                </div>
         
              </div>
			  
			 <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text" style="text-align: justify;">
                      <h3>Maksud dan Tujuan</h3>
                      <p style="text-align:justify">
					  {foreach from=$maksud_tujuan item=i}
						  {$i.description}
					  {/foreach}
         
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