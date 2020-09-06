    <section id="beranda" class="home-section">
      <div class="container marginbot-10">
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
        <div class="row">
          <center>
					{foreach from=$panduan item=i}
							{$i.judul}
					{/foreach}
          </center>
        </div>

       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><a href="{$host}__assets/img/1.png" class="img-responsive " alt="img" title="Registrasi" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{$host}__assets/img/1.png" class="img-responsive " alt="img"><img src="{$host}__assets/img/1.png" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="{$host}__assets/img/2.png" class="img-responsive " alt="img" title="Pengisian Data Penyedia" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{$host}__assets/img/2.png" class="img-responsive " alt="img"><img src="{$host}__assets/img/2.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="{$host}__assets/img/3.png" class="img-responsive " alt="img" title="Evaluasi Oleh Panitia" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{$host}__assets/img/3.png" class="img-responsive " alt="img"><img src="{$host}__assets/img/3.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="{$host}__assets/img/4.png" class="img-responsive " alt="img" title="Verifikasi Dokumen" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{$host}__assets/img/4.png" class="img-responsive " alt="img"><img src="{$host}__assets/img/4.png" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="{$host}__assets/img/5.png" class="img-responsive " alt="img" title="Penetapan Daftar Rekanan Terpilih" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{$host}__assets/img/5.png" class="img-responsive " alt="img"><img src="{$host}__assets/img/5.png" class="img-responsive " alt="img"></a></div>
               </div><br><br><br><br><br>
            </div>
          </div>
        </div>
		
        </div>
      </div>
    </section>