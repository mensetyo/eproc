
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
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
	
		$("#lap_keu").validate({
			rules: {
				kas: "required",
				persediaan: "required",
				aktiva_lancar_lainnya: "required",
				kendaraan: "required",
				mesin_besar: "required",
				mesin_kecil: "required",
				aktiva_tetap_lainnya: "required",
				perabot: "required",
				hutang_jangka_pendek: "required",
				hutang_jangka_panjang: "required",
				laba_ditahan: "required",
				modal_saham: "required",
				},
			messages: {
				kas: "Wajib di isi",
				persediaan: "Wajib di isi",
				aktiva_lancar_lainnya: "Wajib di isi",
				kendaraan: "Wajib di isi",
				mesin_besar: "Wajib di isi",
				mesin_kecil: "Wajib di isi",
				aktiva_tetap_lainnya: "Wajib di isi",
				perabot: "Wajib di isi",
				hutang_jangka_pendek: "Wajib di isi",
				hutang_jangka_panjang: "Wajib di isi",
				laba_ditahan: "Wajib di isi",
				modal_saham: "Wajib di isi",
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


  
  
  
		   <!-- EOF CSS INCLUDE -->
<style>
.control-label {text-align:left!important;padding-left:7px!important;}
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

                            <form class="form-horizontal" method="post" id="lap_keu" action="<?php echo base_url('lap_keuangan/aktiva_passiva_simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Laporan Keuangan (Aktiva & passiva )</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
									&nbsp;


									<div class="form-group">
                                       &nbsp;
                                        <button type="button" id="aktiva_passiva" class="btn btn-primary">Aktiva dan Passiva</button>
                                        <button type="button" id="laba_rugi" class="btn btn-success">Laba Rugi</button>

                                    </div>
                                </div>
                                <div class="panel-body">
                                  <?php if ($this->session->flashdata('success')) {?>

                                            <div class="alert alert-info" id="success-alert">
                                              <strong>Informasi !</strong> <?php echo $this->session->flashdata('success');?>
                                            </div>

                                <?php }?>
<input type="hidden" name="id" value="<?php echo $id;?>">
                                    <div class="row">

                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tahun</label>
                                        <div class="col-md-6 col-xs-12">
                                             <select class="form-control select" name="tahun" id="tahun">
											<?php

												$now=date('Y');
												for ($a=2015;$a<=$now;$a++)

												{
													?>

                                                <option value="<?php echo $a;?>" <?php echo $a==$tahun?'selected':'';?>><?php echo $a;?></option>

													 <?php
												}
												?>

                                            </select>
                                        </div>
                                    </div>


                                          <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Kas/Bank *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="kas" id="kas" value="<?php echo $kas;?>" onchange="tot_aktiva()" style="text-align: right;" />
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Persediaan / Inventory*</label>
                                        <div class="col-md-6 col-xs-12">

                                                <input type="text" class="form-control " name="persediaan" id="persediaan" value="<?php echo $persediaan;?>" onchange="tot_aktiva()" style="text-align: right;" />

                                        </div>
                                    </div>


											             <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Aktiva Lancar Lainnya *</label>
                                        <div class="col-md-6 col-xs-12">

                                                <input type="text" class="form-control " name="aktiva_lancar_lainnya" id="aktiva_lancar_lainnya" value="<?php echo $aktiva_lancar_lainnya;?>" onchange="tot_aktiva()" style="text-align: right;" />

                                        </div>
                                    </div>


									              <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Kendaraan *</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control " name="kendaraan" id="kendaraan" value="<?php echo $kendaraan;?>" onchange="tot_aktiva()" style="text-align: right;" />
                                        </div>
                                    </div>


									                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Mesin Besar / Alat Berat*</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control " name="mesin_besar" id="mesin_besar" value="<?php echo $mesin_besar;?>" onchange="tot_aktiva()" style="text-align: right;" />
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Mesin Kecil / Alat Ringan*</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control " name="mesin_kecil" id="mesin_kecil" value="<?php echo $mesin_kecil;?>" onchange="tot_aktiva()" style="text-align: right;" />
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Aktiva Tetap Lainnya*</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control " name="aktiva_tetap_lainnya" id="aktiva_tetap_lainnya" value="<?php echo $aktiva_tetap_lainnya;?>" onchange="tot_aktiva()" style="text-align: right;" />
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Perabot*</label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control " name="perabot" id="perabot" value="<?php echo $perabot;?>" onchange="tot_aktiva()" style="text-align: right;">
                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"><strong><h4>Total Aktiva</h4></strong></label>
                                        <div class="col-md-6 col-xs-12">
                                             <input type="text" class="form-control " name="total_aktiva2" id="total_aktiva2" value="<?php echo $total_aktiva;?>" style="text-align: right;" disabled>
<input type="hidden" name="total_aktiva" id="total_aktiva" value="">
                                            <!--  <p id="total_aktiva"></p>-->

                                        </div>
                                    </div>


								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label">&nbsp;* data ini harus diisi, Boleh dituliskan angko 0 (NOL) </label>

                                    </div>


										<div class="form-group">
                                        <label class="col-md-5 col-xs-12 control-label">Apakah laporan ini di audit oleh akuntan publik ?</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="check"><input type="radio" name="diaudit_akuntan" class="icheckbox" value="1" checked="checked"/>Ya</label>
                                            <label class="check"><input type="radio" name="diaudit_akuntan" class="icheckbox" value="2" checked=""/>Tidak</label>

                                        </div>
                                    </div>


									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>



								<!--	<div class="form-group">
                        <div class="col-md-6 col-xs-12">
                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
										</div>

										<div class="col-md-6 col-xs-12">
										 <button type="button" id="lihat_data" class="btn btn-primary">Lihat Data</button>
										</div>
                  </div>-->






                                        </div>
                                     <div class="col-md-6">

                                        <div class="form-group">
											<label class="col-md-4 col-xs-12 control-label">9. Hutang Jangka Pendek *</label>
											<div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="hutang_jangka_pendek" id="hutang_jangka_pendek" value="<?php echo $hutang_jangka_pendek;?>" onchange="tot_passiva()" style="text-align: right;" />
											</div>
										</div>


										 <div class="form-group">
											<label class="col-md-4 col-xs-12 control-label">10. Hutang Jangka Panjang *</label>
											<div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="hutang_jangka_panjang" id="hutang_jangka_panjang" value="<?php echo $hutang_jangka_panjang;?>"  onchange="tot_passiva()" style="text-align: right;" />
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 col-xs-12 control-label">11. Laba ditahan *</label>
											<div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="laba_ditahan" id="laba_ditahan" value="<?php echo $laba_ditahan;?>"  onchange="tot_passiva()" style="text-align: right;" />
											</div>
										</div>

                                        <div class="form-group">
											<label class="col-md-4 col-xs-12 control-label">12. Modal Saham *</label>
											<div class="col-md-6 col-xs-12">
												<input type="text" class="form-control" name="modal_saham" id="modal_saham" value="<?php echo $modal_saham;?>"  onchange="tot_passiva()" style="text-align: right;" />
											</div>
										</div>

								      <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">13. Upload Laporan Keuangan (Aktiva dan Passiva) * </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="file" title="Browse file"/>
											
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

                                           &nbsp;
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

                                           &nbsp;
                                        </div>
                                    </div>


									                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                        <div class="col-md-6 col-xs-12">

                                           &nbsp;
                                        </div>
                                    </div>
										                <br/>

                                   <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label"><strong><h4>Total Passiva</h4></strong></label>
                                        <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control " name="total_passiva2" id="total_passiva2" value="<?php echo $total_passiva;?>" disabled style="text-align: right;"/>
                                                <input type="hidden" name="total_passiva" id="total_passiva" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                     <label class="col-md-3 col-xs-12 control-label">&nbsp; </label>
                                      <div class="col-md-6 col-xs-12">
                                          &nbsp;
                                        </div>
                                    </div>




                                    <div class="form-group">
                                          <div class="col-md-6 col-xs-12">
                                          <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                      </div>

                                      <div class="col-md-6 col-xs-12">
                                       <button type="button" id="lihat_data" class="btn btn-primary">Lihat Data</button>
                                      </div>
                                    </div>


                                        </div>

                                    </div>


                                </div>
                                <!--<div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <button class="btn btn-primary pull-right">Submit</button>
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

<script>

function getNum(val) {
   if (isNaN(val)) {
     return 0;
   }
   return val;
}


function tot_aktiva()
{
      var kas = (document.getElementById('kas').value);
			var persediaan = (document.getElementById('persediaan').value);
			var aktiva_lancar_lainnya = (document.getElementById('aktiva_lancar_lainnya').value);
			var kendaraan = (document.getElementById('kendaraan').value);
			var mesin_besar =(document.getElementById('mesin_besar').value);
			var mesin_kecil = (document.getElementById('mesin_kecil').value);
			var aktiva_tetap_lainnya = (document.getElementById('aktiva_tetap_lainnya').value);
			var perabot = (document.getElementById('perabot').value);

      $('#kas').val((+$('#kas').val() || 0));
      $('#persediaan').val((+$('#persediaan').val() || 0));
      $('#aktiva_lancar_lainnya').val((+$('#aktiva_lancar_lainnya').val() || 0));
      $('#kendaraan').val((+$('#kendaraan').val() || 0));
      $('#mesin_besar').val((+$('#mesin_besar').val() || 0));
      $('#mesin_kecil').val((+$('#mesin_kecil').val() || 0));
      $('#aktiva_tetap_lainnya').val((+$('#aktiva_tetap_lainnya').val() || 0));
      $('#perabot').val((+$('#perabot').val() || 0));

      var total_aktiva = parseInt(kas) + parseInt(persediaan) + parseInt(aktiva_lancar_lainnya) + parseInt(kendaraan) + parseInt(mesin_besar) + parseInt(mesin_kecil)+ parseInt(aktiva_tetap_lainnya) + parseInt(perabot);

      document.getElementById('total_aktiva').value = total_aktiva;
      document.getElementById('total_aktiva2').value = total_aktiva;
}

function  tot_passiva()
{
  var hutang_jangka_pendek = (document.getElementById('hutang_jangka_pendek').value);
  var hutang_jangka_panjang = (document.getElementById('hutang_jangka_panjang').value);
  var laba_ditahan = (document.getElementById('laba_ditahan').value);
  var modal_saham = (document.getElementById('modal_saham').value);


  $('#hutang_jangka_pendek').val((+$('#hutang_jangka_pendek').val() || 0));
  $('#hutang_jangka_panjang').val((+$('#hutang_jangka_panjang').val() || 0));
  $('#laba_ditahan').val((+$('#laba_ditahan').val() || 0));
  $('#modal_saham').val((+$('#modal_saham').val() || 0));


  var total_passiva = parseInt(hutang_jangka_pendek) + parseInt(hutang_jangka_panjang) + parseInt(laba_ditahan) + parseInt(modal_saham);

  document.getElementById('total_passiva').value = total_passiva;
  document.getElementById('total_passiva2').value = total_passiva;

}



$(document).ready (function(){
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
          });

});

$(document).ready(function(){
	var tahun = $("#tahun").val();

  $("#aktiva_passiva").click(function(){
     window.location = "<?php echo base_url('lap_keuangan');?>";
  });

    $("#laba_rugi").click(function(){
     window.location = "<?php echo base_url('lap_keuangan/laba_rugi');?>";
  });

  $("#lihat_data").click(function(){
   window.location = "<?php echo base_url('lap_keuangan/aktiva_passiva_list');?>";
});

  $("#tampilkan").click(function(){
     window.location = "<?php echo base_url('lap_keuangan/aktiva_passiva_show/');?>" + tahun;
  });

});
</script>


        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
