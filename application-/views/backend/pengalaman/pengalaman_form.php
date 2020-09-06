
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
        <!-- EOF CSS INCLUDE -->

			<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>

	<script>

	$().ready(function() {

		$("#pengalaman").validate({
			rules: {
				nama_kontrak: "required",
				lokasi: "required",
				instansi: "required"
				},
			messages: {
				nama_kontrak: "Wajib di isi",
				lokasi: "Wajib di isi",
				instansi: "Wajib di isi"
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
    $( "#tanggal_pelaksanaan" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#tanggal_serah_terima" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>


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

                            <form class="form-horizontal" method="post" id="pengalaman" action="<?php echo base_url('pengalaman/simpan');?>" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Pengalaman</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">



								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nama kontrak *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="nama_kontrak" id="nama_kontrak" value="<?php echo $nama_kontrak;?>"/>
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Lokasi *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $lokasi;?>"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Instansi *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="instansi" id="instansi" value="<?php echo $instansi;?>"/>
                                        </div>
                                    </div>



                                   	<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Alamat</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" name="alamat" id="alamat" rows="5"><?php echo $alamat;?></textarea>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Telepon</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo $telepon;?>"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Nomor Kontrak</label>
                                        <div class="col-md-2 col-xs-12">
                                            <input type="text" class="form-control" name="nomor_kontrak" id="nomor_kontrak" value="<?php echo $nomor_kontrak;?>"/>
                                        </div>
                                        <label class="col-md-1 col-xs-6 control-label-left">Nilai Kontrak (Rp)</label>
                                        <div class="col-md-3 col-xs-12">
                                            <input type="text" class="form-control" name="nilai_kontrak" id="nilai_kontrak" value="<?php echo $nilai_kontrak;?>"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Nilai  Sharing Badan usaha (%)</label>
                                        <div class="col-md-1 col-xs-12">
                                            <input type="text" class="form-control" name="persen_sharing" id="persen_sharing" value="<?php echo $persen_sharing;?>" onkeyup="myFunction()"/>
                                        </div>
                                         <label class="col-md-1 col-xs-12 control-label-left"> Nominal Sharing (Rp)</label>
                                        <div class="col-md-4 col-xs-12-left">
                                            <input type="text" class="form-control" name="nilai_project" id="nilai_project" value="<?php echo $nilai_project;?>"/>
                                        </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Tanggal Pelaksanaan </label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" value="<?php echo $tanggal_pelaksanaan;?>">
                                            </div>

                                        </div>
                                    </div>


								<!--	<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. persentase pelaksanaan (%) </label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="persentase_pelaksanaan" id="persentase_pelaksanaan" value="<?php echo $persentase_pelaksanaan;?>"/>
                                        </div>
                                    </div>-->

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. Selesai Kontrak</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="selesai_kontrak" id="selesai_kontrak" value="<?php echo $selesai_kontrak;?>"/>
                                        </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">10. Tanggal Serah Terima</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tanggal_serah_terima" id="tanggal_serah_terima" value="<?php echo $tanggal_serah_terima;?>">
                                            </div>

                                        </div>
                                    </div>



									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">11. Keterangan</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" name="keterangan" id="keterangan" rows="5"><?php echo $keterangan;?></textarea>

                                        </div>
                                    </div>


                                    		<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">12. Dokumen (pdf)*</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file" id="filename" title="Browse file" required/>
											  <span class="help-block"><?php echo $dok;?><span>

                                            <span class="help-block">* PDF</span>

                                        </div>
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
        <!--<script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>-->
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


 		<script>

        function myFunction() {
            var nilai = document.getElementById("nilai_kontrak").value;
            var persen = document.getElementById("prosentase_sharing").value;
           //alert(persen);
            //document.getElemetById("nilai_project").value="ww";
                var tot = parseInt(nilai) * parseInt(persen)/100;
            document.getElementById('nilai_project').value = tot;
           // x.value = x.value.toUpperCase();
        }



        </script>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
