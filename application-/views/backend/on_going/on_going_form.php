
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>JMTO eproc</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->



        <!-- CSS INCLUDE -->
       <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
		 
    <script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>        
	

    
   


	

	<script>
	$().ready(function() {
    /*
        $('#nilai_kontrak').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: '$', 
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
*/

		$("#on_going").validate({
			rules: {
				nama_kontrak: "required",
				lokasi: "required",
                instansi: "required",
                alamat: "required",
                telepon: "required",
                nomor_kontrak: "required",
                nilai_kontrak:"required",
                prosentase_sharing:"required",
                tanggal_kontrak:"required",
                prosentase_sharing:"required",
				},
			messages: {
				nama_kontrak: "Wajib di isi",
				lokasi: "Wajib di isi",
                instansi: "Wajib di isi",
                alamat: "Wajib di isi",
                telepon: "Wajib di isi",
                nomor_kontrak:"Wajib di isi",
                nilai_kontrak:"Wajib di isi",
                prosentase_sharing:"Wajib di isi",
                tanggal_kontrak:"Wajib di isi",
                prosentase_sharing:"Wajib di isi",
			}
		});


	});
	</script>
	

	<style>
		#commentForm {
			width: 500px;
		}
		#commentForm label {
			width: 250px;
		}
		#commentForm label.error, #commentForm input.submit {
			margin-left: 253px;
		}

		#signupForm label.error {
			margin-left: 10px;
			width: auto;
			display: inline;
		}
		#newsletter_topics label.error {
			display: none;
			margin-left: 103px;
		}
	</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#tanggal_kontrak" ).datepicker({ dateFormat: 'dd-mm-yy' });
    $( "#tanggal_progress" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
</script>
  
  
  
        <!-- EOF CSS INCLUDE -->
<style>
.control-label {text-align:left!important;padding-left:140px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>

 <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

    		<?php $this->load->view('include/backend/sidebar'); ?>

            <!-- PAGE CONTENT -->
            <div class="page-content">

                        <!-- START X-NAVIGATION VERTICAL -->
        <?php $this->load->view('include/backend/header'); ?>
                <!-- END X-NAVIGATION VERTICAL -->



                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" method="post"  id="on_going" action="<?php echo base_url('on_going/simpan');?>" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Pekerjaan Sedang Dilaksanakan</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">


								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nama Kontrak *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="nama_kontrak" id="nama_kontrak" value="<?php echo $nama_kontrak;?>" autocomplete="off"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Lokasi *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $lokasi;?>" autocomplete="off"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Instansi *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="instansi" id="instansi" value="<?php echo $instansi;?>" autocomplete="off"/>
                                        </div>
                                    </div>





									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Alamat</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" name="alamat" id="alamat" rows="5" autocomplete="off"><?php echo $alamat;?></textarea>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Telepon</label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo $telepon;?>" autocomplete="off">
                                            </div>

                                        </div>
                                    </div>



										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Nomor Kontrak</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="nomor_kontrak" id="nomor_kontrak" value="<?php echo $nomor_kontrak;?>" autocomplete="off"/>
                                        </div>
                                    </div>




										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Nilai Kontrak (Rp)</label>
                                       <div class="col-md-3 col-xs-12">
                                            <input type="text" class="form-control" name="nilai_kontrak" id="nilai_kontrak" value="<?php echo $nilai_kontrak;?>" autocomplete="off"/>
                                        </div>
                                         <label class="col-md-2 col-xs-12 control-label-left">8.Nilai Sharing Badan Usaha (%)</label>
                                       <div class="col-md-1 col-xs-12">
                                            <input type="text" class="form-control" name="prosentase_sharing" id="prosentase_sharing" autocomplete="off" value="<?php echo $prosentase_sharing;?>" onkeyup="myFunction()"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. Nominal Sharing (Rp)</label>
                                       <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="nominal_sharing" autocomplete="off" id="nominal_sharing" value="<?php echo $nominal_sharing;?>"/>
                                        </div>
                                         
                                    </div>

											<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">10. Tanggal kontrak </label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tanggal_kontrak" autocomplete="off" id="tanggal_kontrak" value="<?php echo $tanggal_kontrak;?>">
                                            </div>

                                        </div>
                                    </div>
                                   

										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">11. Prosentase progres terakhir(%)</label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="prosentase_sharing" autocomplete="off" id="prosentase_sharing" value="<?php echo $prosentase_sharing;?>" >
                                            </div>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">12. Tanggal progress </label>
                                        <div class="col-md-2 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tanggal_progress" autocomplete="off" id="tanggal_progress" value="<?php echo $tanggal_progress;?>">
                                            </div>

                                        </div>
                                    </div>

									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">13. Keterangan</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" name="keterangan" id="keterangan" rows="5"><?php echo $keterangan;?></textarea>

                                        </div>
                                    </div>
                                    
                                    
                                    	<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">14. Dokumen </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                              
                                            <input type="file" class="fileinput btn-primary" name="file" id="filename" title="Browse file"/>
                                            <span class="help-block"><?php echo $file;?><span>
                                            <span class="help-block">*PDF</span>
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                            <span class="help-block">*Data Harus Di isi</span>

                                        </div>
                                    </div>
									<input type="hidden" name="id" value="<?php echo $id;?>">
									<div class="form-group">

                                        <div class="col-md-6 col-xs-12">
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button>

                                        </div>
                                    </div>


											<div class="form-group">

                                        <div class="col-md-6 col-xs-12">
                                              &nbsp;

                                        </div>
                                    </div>



                                </div>
                             <!--   <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                </div>-->
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->




    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    
     		<script>

             function escapeRegExp(str) {
            return str.replace(/[.*+?^${}()|[\]\\]/g, "\\$&"); // $& means the whole matched string
            }


        function myFunction() {
            var nilai2 = document.getElementById("nilai_kontrak").value;
            var persen = document.getElementById("prosentase_sharing").value;
           
            var nilai=nilai2.toString().replace(/\$|\./g,'');

            var tot = parseInt(nilai) * parseInt(persen)/100; 
            document.getElementById('nominal_sharing').value = tot;
           // x.value = x.value.toUpperCase();
        }

        </script>
        
        <script type="text/javascript">

/* Tanpa Rupiah */
var tanpa_rupiah = document.getElementById('nilai_kontrak');
tanpa_rupiah.addEventListener('keyup', function(e)
{
    tanpa_rupiah.value = formatRupiah(this.value);
});


/* Fungsi */
function formatRupiah(angka, prefix)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split	= number_string.split(','),
        sisa 	= split[0].length % 3,
        rupiah 	= split[0].substr(0, sisa),
        ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script>
        
    </body>
</html>
