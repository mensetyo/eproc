
	 <!-- css -->
  <link href="{$host}__assets/css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="{$host}__assets/css1/style.css" rel="stylesheet" />
  
  <br><br><br>
<section id="content">
      <div class="container">
        <div class="row marginbot30">
          <div class="span12">
           <div class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <div class="author">
					<h5>Detail Dokumen</h5>
                        <table width="" class="table">
						<tbody>
							{foreach from=$dokumen item=i}
							<tr>
							  <td><strong>Nama Dokumen<br></strong></td>
							  <td><center>{$i.nama}</center></td>
							</tr>
							<tr>
							  <td><strong>Isi<br></strong></td>
							  <td><center>{$i.isi}</center></td>
							</tr>
							<tr>
							  <td><strong>Lampiran / File<br></strong></td>
							  <td><center><a href="#">{$i.lampiran}</center></td>
							</tr>
							{/foreach}
						</tbody>
					  </table>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial"> 
				  <h5>Detail Dokumen</h5>
                       <table width="" class="table">
						<tbody>
							{foreach from=$dokumen item=i}
							<tr>
							  <td><strong>Nama Dokumen<br></strong></td>
							  <td><center>{$i.nama}</center></td>
							</tr>
							<tr>
							  <td><strong>Isi<br></strong></td>
							  <td><center>{$i.isi}</center></td>
							</tr>
							<tr>
							  <td><strong>Lampiran / File<br></strong></td>
							  <td><center><a href="#">{$i.lampiran}</center></td>
							</tr>
							{/foreach}
						</tbody>
					  </table> </p>
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
                    <p class="text">
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
                    <p class="text">
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