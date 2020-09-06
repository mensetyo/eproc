    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <p class="bold text-left" >&nbsp;&ensp;&ensp;E-Procurement</p>
            </div>
			<div class="col-sm-4 col-md-4">
              <p class="bold text-center" >{$auth.nm_perusahaan|default:''}</p>
            </div>
            <div class="col-sm-4 col-md-4">
              <p class="bold text-right" ><span id="watch"></span></p>
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
                    <img src="{$host}__assets/webpage/img/logoeproc.png" alt="" width="220" height="45" />
                </a>
        </div>


        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang_kami">Tentang Kami</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Konten Spesial <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{$host}webpage/syarat">Syarat dan Ketentuan</a></li>
                <li>
                {foreach from=$web_panduan item=i}
                <a href="https://panitia-eproc.jmto.co.id/__assets/manual/{$i.file_panduan}">Buku Panduan</a>
                {/foreach}  
                </li>
                <!-- <li><a href="{$host}webpage/dokumen">Dokumen</a></li> -->
              </ul>
            </li>

            <li><a href="#faqs">FAQ's</a></li>

			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keanggotaan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{$host}login" target="_blank">Log In</a></li>
                <li><a href="{$host}webpage/reg" target="_blank">Registrasi</a></li>
              </ul>
            </li>

			<!-- {if $auth.nm_perusahaan|default:'' !=''}
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengumuman <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{$host}webpage/pengumuman_pengadaan">Pengumuman Pengadaan</a></li>
                <!--li><a href="{$host}webpage/pengumuman_dpt">Pengumuman DPT</a></li-->
                <!-- <li><a href="{$host}webpage/getkonten/pengumuman">Hasil Pengadaan</a></li> -->
                <!--li><a href="{$host}webpage/hasil_dpt">Hasil DPT</a></li>
                <li><a href="{$host}webpage/berita">Berita</a></li>
              </ul>
            </li>
			{/if} -->
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengumuman <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{$host}webpage/pengumuman_pengadaan">Pengumuman Pengadaan</a></li>
                <!-- <li><a href="{$host}webpage/pengumuman_dpt">Pengumuman DPT</a></li> -->
                <li><a href="{$host}webpage/getkonten/pengumuman">Hasil Pengadaan</a></li>
                <!-- <li><a href="{$host}webpage/hasil_dpt">Hasil DPT</a></li> -->
                <!-- <li><a href="{$host}webpage/berita">Berita</a></li> -->
              </ul>
            </li>
          </ul>
        </div>
    
      </div>
  
    </nav>
