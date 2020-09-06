    <style>
    .timeline{
      font-weight: 900;
      line-height: 1.1em;
      margin-bottom: 20px;
    }
    table, tr, td{
      border: 1px solid #ddd;
      font-size: 11pt;
    }
    table, tr, th{
      border: 1px solid #ddd;
    }
   
    </style>
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
        <div class="row">
          <center>
      {foreach from=$web_panduan item=i}
		  <a href="https://panitia-eproc.jmto.co.id/__assets/manual/{$i.file_panduan}" download> <button type="button" class="btn btn-info" >Download Manual Book </button></a>
      {/foreach}
      <br/><br/>
      {foreach from=$alur_gambar item=i}
        <img src="https://panitia-eproc.jmto.co.id/__assets/alur/{$i.file_gambar}" class="img-responsive " alt="img">
			{/foreach}    
      
          </center>
        </div>
          <br/><br/><br/>
          <h5 align="center" class="timeline">Timeline DRT PT Jasamarga Tollroad Operator</h5>
         <div class="row">
          <div class="col-sm-9 col-md-9 col-lg-9" style="margin-left: 12%;margin-right: 12%;">
            <table class="table" style="border: 1px solid #ddd;">
              <tr style="background: #4372c4;color: #fff;">
                <!-- <th>No</th> -->
                <th style="text-align:center" width="220px">Batas Waktu</th>
                <th style="text-align:center">Agenda</th>
                <th style="text-align:center">Keterangan</th>
              </tr>
             
              {foreach from=$timeline item=i}
                <tr>
                  <!-- <td>{$no + 1}</td> -->
                  <td width="220px">{$i.batas_dari|date_format:"%d %b %Y"} <b>s/d</b> {$i.batas_sampai|date_format:"%d %b %Y"}</td>
                  <td style="text-align: justify;">{$i.agenda}</td>
                  <td style="text-align: justify;">{$i.keterangan}</td>
                </tr>
              {/foreach}  
            </table>
          </div>
        </div>
       
       
       
        <!-- <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><a href="<?php echo base_url();?>webpage/img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo base_url();?>webpage/img/works/1@2x.jpg"><img src="<?php echo base_url();?>webpage/img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="<?php echo base_url();?>webpage/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo base_url();?>webpage/img/works/2@2x.jpg"><img src="<?php echo base_url();?>webpage/img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo base_url();?>webpage/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo base_url();?>webpage/img/works/3@2x.jpg"><img src="<?php echo base_url();?>webpage/img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo base_url();?>webpage/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo base_url();?>webpage/img/works/4@2x.jpg"><img src="<?php echo base_url();?>webpage/img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo base_url();?>webpage/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo base_url();?>webpage/img/works/5@2x.jpg"><img src="<?php echo base_url();?>webpage/img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo base_url();?>webpage/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo base_url();?>webpage/img/works/6@2x.jpg"><img src="<?php echo base_url();?>webpage/img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
              </div>
            </div>
          </div>
        </div>
		
		       <div class="row">
          <div class="col-lg-12">
            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter=".pengadaan" class="cbp-filter-item-active cbp-filter-item"><a href="#tentang_kami">Pengumuman Pengadaan </a></div>
              <div data-filter=".cardiologist" class="cbp-filter-item">Pengumuman DPT </div>
              <div data-filter=".psychiatrist2" class="cbp-filter-item">Hasil Pengadaan </div>
              <div data-filter=".neurologist" class="cbp-filter-item">Berita </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>