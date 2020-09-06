<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JMTO E-Procurement</title>

  <!-- css -->
  <link href="<?php echo base_url();?>webpage/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>webpage/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>webpage/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo base_url();?>webpage/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>webpage/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>webpage/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url();?>webpage/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url();?>webpage/css/animate.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>webpage/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo base_url();?>webpage/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo base_url();?>webpage/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

<!--
function show_hari()
{
//membuat variabel bertipe array untuk nama hari
var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
"Sabtu");
//membuat variabel bertipe array untuk nama bulan
var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei",
"Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
var sekarang = new Date();
var HariIni = NamaHari[sekarang.getDay()];
var BulanIni = NamaBulan[sekarang.getMonth()];
var tglSekarang = sekarang.getDate();
var TahunIni = sekarang.getFullYear();
//document.write(HariIni + ", " + tglSekarang + " " + BulanIni + " " + TahunIni);
}


    $(document).ready(function(){
        function clock() {
			var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
"Sabtu");
//membuat variabel bertipe array untuk nama bulan
var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei",
"Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
var sekarang = new Date();
var HariIni = NamaHari[sekarang.getDay()];
var BulanIni = NamaBulan[sekarang.getMonth()];
var tglSekarang = sekarang.getDate();
var TahunIni = sekarang.getFullYear();



          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          document.getElementById("watch").innerHTML = HariIni + ", " + tglSekarang + " " + BulanIni + " " + TahunIni+' - '+Time;
          requestAnimationFrame(clock);
        }

        requestAnimationFrame(clock);
    });
</script>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

<?php $this->load->view('webpage/include/menu');?>


 <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <!--<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">Medicio medical group</h2>
              </div>-->
             <!-- <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
              </div>-->
              <!--<div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                  </ul>

                </div>
              </div>-->


            </div>
            <div class="col-lg-6">
              <div class="form-wrapper">
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                  <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Login</h3>
                    </div>
                    <div class="panel-body">
                     <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>-->



					<?php if ($this->session->flashdata('after_save')) {?>

						  <div id="errormessage">	<div class="alert alert-info"><?php echo $this->session->flashdata('after_save');?></div>
  </div>
					<?php }?>


                      <form action="<?php echo base_url('backend/register_proses');?>" method="post" role="form" class="contactForm lead">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                              <label>Email *</label>
                              <input type="text" name="email" id="email" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required>
                              <div class="validation"></div>
                            </div>
                          </div>
                        <!--  <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Password *</label>
                              <input type="text" name="password" id="password" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required>
                              <div class="validation"></div>
                            </div>
                          </div>-->
                        </div>


                        <input type="submit" value="Daftar" class="btn btn-skin btn-block btn-lg">

                        <p class="lead-footer">* Wajib di isi </p>

                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	    <!-- Section: works -->

<?php $this->load->view('webpage/sec_beranda');?>
    <!-- /Section: works -->
  <!-- Section: team -->

<?php $this->load->view('webpage/sec_tentang_kami');?>

<?php $this->load->view('webpage/sec_faqs');?>



   <?php $this->load->view('webpage/include/footer');?>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="<?php echo base_url();?>webpage/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/wow.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url();?>webpage/js/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>webpage/js/stellar.js"></script>
  <script src="<?php echo base_url();?>webpage/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/nivo-lightbox.min.js"></script>
  <script src="<?php echo base_url();?>webpage/js/custom.js"></script>

</body>

</html>
