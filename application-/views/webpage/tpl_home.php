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

function startgame() {
   // alert('Body has loaded!');
     $('#myModal').modal('show');
	//$('#myModal').modal('show');
}
</script>


</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="startgame();">


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <p>Ingin Menjadi Rekanan Kami silahkan Daftar ?</p>
       <a href="<?php echo base_url('webpage/register');?>"> <button type="button" class="btn btn-info" >Daftar</button></a>
      </div>
      <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>




  <div id="wrapper">

<?php $this->load->view('webpage/include/menu');?>



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
