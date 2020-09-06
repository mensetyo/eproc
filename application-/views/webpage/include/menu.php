    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left" >&nbsp;E-Procurement</p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right" id="watch">&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">
                    <img src="<?php echo base_url();?>webpage/img/logoeproc.png" alt="" width="220" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang_kami">Tentang Kami</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Konten Spesial <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Syarat dan Ketentuan </a></li>
                <li><a href="index-form.html">Buku Panduan</a></li>
                <li><a href="index-video.html">Dokumen</a></li>
              </ul>
            </li>

            <li><a href="#faqs">FAQ's</a></li>

			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keanggotaan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('webpage/login');?>" target="_blank">Login</a></li>
                <li><a href="<?php echo base_url('webpage/register');?>" target="_blank">Registrasi</a></li>
              </ul>
            </li>


					<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengumuman <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Pengumuman Pengadaan</a></li>
                <li><a href="index-form.html">Pengumuman DPT</a></li>
                <li><a href="index-video.html">Hasil Pengadaan</a></li>
                <li><a href="index-video.html">Berita</a></li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
