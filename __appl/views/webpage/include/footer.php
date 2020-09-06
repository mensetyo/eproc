 <footer>

      <div class="container">
        <div class="row">
           <!-- <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Tentang Eproc</h5>
                <p>
					e-Proc JMTO adalah e-Procurement di lingkungan PT Jasamarga Toll Road Operator untuk sarana pengadaan barang/jasa, informasi pengadaan antar Unit JMTO, sesuai dengan Pedoman pengadaan barang/jasa yang berlaku di PT JMTO yang dilakukan secara online/elektronik dengan menggunakan fasilitas aplikasi e-Proc JMTO.
                </p>
              </div>
            </div>
        
          </div>-->
          {foreach from=$kontak item=i}
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Kontak Kami</h5>
                <p>
                {$i.kontak}
                 <!-- Gedung Cabang Jagorawi Lt.4 Plaza Tol TMII, Dukuh, Kramatjati, RT.8/RW.2, Dukuh, Kramatjati, 
                 Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13550<br>Telp. (021) 22984722<br> Email : procurement@jmto.co.id -->
                </p>
               <!--   <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
                  </li>

                </ul>-->
              </div>
            </div>
          </div>
          {/foreach}
         <!--  <div class="col-sm-6 col-md-4">
			<div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>QUICK LINKS</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>

          </div>-->
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - JMTO Eproc.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>