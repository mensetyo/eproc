
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>JMTO e-Procurement</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->


	<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>

	<script>

	$().ready(function() {

		$("#tenaga_ahli").validate({
			rules: {
				nama: "required",
				tgl_lahir: "required",
				alamat: "required",
				pendidikan_terakhir: "required",
				pengalaman_kerja: "required",
				keahlian: "required"
				},
			messages: {
				nama: "Wajib di isi",
				tgl_lahir: "Wajib di isi",
				alamat: "Wajib di isi",
				pendidikan_terakhir: "Wajib di isi",
				pengalaman_kerja: "Wajib di isi",
				keahlian: "Wajib di isi"

			}
		});


	});

	$(document).ready(function(){
		$(".addCF").click(function(){
			$("#customFields").append('<div class="form-group">'
                   +' <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>'
                   +'<div class="col-md-1 col-xs-12">'
                   +' <input type="text" class="form-control" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp;'
                   +' </div>'
                   +'<div class="col-md-6 col-xs-12">'
                   +' <input type="text" class="form-control" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp;'
                   +'   </div>'
     			+'&nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></div>');
		});
	    $("#customFields").on('click','.remCF',function(){
	        $(this).parent().parent().remove();
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
    $( "#tgl_lahir" ).datepicker({ dateFormat: 'yy-mm-dd' });
   // $( "#sjabat" ).datepicker({ dateFormat: 'yy-mm-dd' });
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

        <!-- CSS INCLUDE -->
                <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
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

                            <form class="form-horizontal" method="post" id="tenaga_ahli" action="<?php echo base_url('tenaga_ahli/simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Tenaga Ahli</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Nama *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" id="nama"/>
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Tanggal lahir *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tgl_lahir" value="<?php echo $tgl_lahir;?>" id="tgl_lahir" value="<?php echo date('Y-m-d');?>">
                                            </div>

                                        </div>
                                    </div>


									      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Jenis Kelamin</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="check"><input type="radio" name="jenis_kelamin" class="icheckbox" value="1" <?php echo $jenis_kelamin==1?"checked='checked' ":"";?>/>Laki-laki</label>
                                            <label class="check"><input type="radio" name="jenis_kelamin" class="icheckbox" value="2"  <?php echo $jenis_kelamin==2?"checked='checked' ":"";?>/>Perempuan</label>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Alamat *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" name="alamat" id="alamat" rows="5"><?php echo $alamat;?></textarea>

                                        </div>
                                    </div>




									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Pendidikan Terakhir *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="pendidikan_terakhir" value="<?php echo $pendidikan_terakhir;?>" id="pendidikan_terakhir"/>
                                        </div>
                                    </div>




									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Kewarganegaraan </label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="kewarganegaraan" value="<?php echo $kewarganegaraan;?>" id="kewarganegaraan"/>
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Pengalaman kerja (tahun) * </label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="pengalaman_kerja" value="<?php echo $pengalaman_kerja;?>" id="pengalaman_kerja"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Email </label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>"/>
                                        </div>
                                    </div>

									    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">9. Status Kepegawaian</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="check"><input type="radio" name="status_pegawaian" class="icheckbox" value="1" <?php echo $status_pegawaian==1?"checked='checked' ":"";?> />Tetap</label>
                                            <label class="check"><input type="radio" name="status_pegawaian" class="icheckbox" value="2" <?php echo $status_pegawaian==2?"checked='checked' ":"";?>/>Tidak Tetap</label>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">10. Profesi/Keahlian *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" name="keahlian" id="keahlian" rows="5"><?php echo $keahlian;?></textarea>

                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">11. Jabatan </label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="jabatan" value="<?php echo $jabatan;?>" id="jabatan"/>
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">12. Pengalaman  </label>

                                    </div>

<!--
                                      <div class="form-group" id="customFields">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-1 col-xs-12">
                                            <input type="text" class="form-control" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp;
                                        </div>

                                        <div class="col-md-6 col-xs-12">
											 <input type="text" class="form-control" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp;
                                        </div>
                                        <a href="javascript:void(0);" class="addCF">Add</a>
                                    </div>-->



                                                                        <?php
                                                                        for ($i = 1; $i <= 5; $i++) {

                                                                         ?>
                                    									<div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                                                            <div class="col-md-1 col-xs-12">
                                                                                <input type="text" class="form-control" name="pengalaman_tahun_<?php echo $i;?>"  value="" id="pengalaman_tahun_<?php echo $i;?>" placeholder="Tahun"/>
                                                                            </div>

                                                                            <div class="col-md-6 col-xs-12">
                                    											  <input type="text" class="form-control" name="pengalaman_uraian_<?php echo $i;?>" value="" id="pengalaman_uraian_<?php echo $i;?>" placeholder="Uraian"/>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                          }
                                                                         ?>


<!--
<div class="form-group"  id="customFields">
	<tr valign="top">
		<th scope="row"><label for="customFieldName">Custom Field</label></th>
		<td>
			<input type="text" class="code" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp;
			<input type="text" class="code" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp;
			<a href="javascript:void(0);" class="addCF">Add</a>
		</td>
	</tr>
	</div>
	-->





									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">14. Sertifitikat  </label>

                                    </div>

                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {

                                     ?>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-1 col-xs-12">
                                            <input type="text" class="form-control" name="sertifitikat_tahun_<?php echo $i;?>"  value="" id="sertifitikat_tahun_<?php echo $i;?>" placeholder="Tahun"/>
                                        </div>

                                        <div class="col-md-6 col-xs-12">
											  <input type="text" class="form-control" name="sertifitikat_uraian_<?php echo $i;?>" value="" id="sertifitikat_uraian_<?php echo $i;?>" placeholder="Uraian"/>
                                        </div>
                                    </div>
                                    <?php
                                      }
                                     ?>
										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">15. Bahasa  </label>

                                    </div>

                                        <?php
                                        for ($i = 1; $i <= 3; $i++) {

                                         ?>
                                         <div class="form-group">
                                                               <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>

                                        <div class="col-md-6 col-xs-12">
											  <input type="text" class="form-control" name="bahasa_uraian_<?php echo $i;?>" value="" id="bahasa_uraian_<?php echo $i;?>" placeholder="Uraian"/>
                                        </div>
  </div>
                                        <?php
                                        }
                                        ?>


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
                                            <span class="help-block">*Jika kolom data isian <i>curriculum vitae</i> kurang simpan terlebih dahulu, kemudian akan muncul tambahan 2 baris isian</span>
                                            <span class="help-block">*Format penulisan untuk tahun ditulis 4 digit (Misal nya : 2016) dan uraian minimal 4 karakter</span>
                                        </div>
                                    </div>








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
								<!-- <div class="panel-footer">
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
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
