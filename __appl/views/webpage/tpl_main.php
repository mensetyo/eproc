<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JMTO E-Procurement</title>

  <!-- css -->
  <link href="{$host}__assets/webpage/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{$host}__assets/webpage/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{$host}__assets/webpage/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="{$host}__assets/webpage/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="{$host}__assets/webpage/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="{$host}__assets/webpage/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="{$host}__assets/webpage/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="{$host}__assets/webpage/css/animate.css" rel="stylesheet" />
  <link href="{$host}__assets/webpage/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{$host}__assets/plugin/easyui/themes/metro-gray/easyui.css" />
  <link rel="stylesheet" href="{$host}__assets/plugin/easyui/themes/icon.css" />
  <link rel="stylesheet" href="{$host}__assets/plugin/easyui/themes/color.css" />
  <!-- boxed bg -->
  <link id="bodybg" href="{$host}__assets/webpage/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="{$host}__assets/webpage/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Core JavaScript Files -->
  <script src="{$host}__assets/webpage/js/jquery.min.js"></script>
  <script src="{$host}__assets/webpage/js/bootstrap.min.js"></script>
  <script src="{$host}__assets/webpage/js/jquery.easing.min.js"></script>
  <script src="{$host}__assets/webpage/js/wow.min.js"></script>
  <script src="{$host}__assets/webpage/js/jquery.scrollTo.js"></script>
  <script src="{$host}__assets/webpage/js/jquery.appear.js"></script>
  <script src="{$host}__assets/webpage/js/stellar.js"></script>
  <script src="{$host}__assets/webpage/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="{$host}__assets/webpage/js/owl.carousel.min.js"></script>
  <script src="{$host}__assets/webpage/js/nivo-lightbox.min.js"></script>
  <script src="{$host}__assets/webpage/js/custom.js"></script>
  <script src="{$host}__assets/plugin/easyui/jquery.easyui.min.js"></script>
  <script src="{$host}__assets/js/fungsi.js"></script>
  <script type="text/javascript">
	var host="{$host}";
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

  <div id="wrapper">
  {include file="webpage/include/menu1.php"}
  {include file="webpage/{$modul}"}
  {include file="webpage/include/footer.php"}
	  

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <div id="modal_nya" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="judul_nya">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <p id="isi_nya">Ingin Menjadi Rekanan Kami silahkan Daftar ?</p>
      </div>
      <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
</body>

</html>
