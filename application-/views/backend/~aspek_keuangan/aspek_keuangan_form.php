
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
	
		$("#aspek_keuangan").validate({
			rules: {
				uraian_1: "required",
				uraian_2: "required",
				uraian_3: "required",
				uraian_4: "required",
				uraian_5: "required",
				uraian_6: "required",
				uraian_7: "required",
				},
			messages: {
				uraian_1: "Wajib di isi",
				uraian_2: "Wajib di isi",
				uraian_3: "Wajib di isi",
				uraian_4: "Wajib di isi",
				uraian_5: "Wajib di isi",
				uraian_6: "Wajib di isi",
				uraian_7: "Wajib di isi",
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
    $( "#tanggal_kontrak" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#tanggal_progress" ).datepicker({ dateFormat: 'yy-mm-dd' });
  
  } );
  </script>
  
    


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>


<script>
        jQuery(function($){
           // $("#npwp").mask("99.999.999.9-999.999");
          // $( '.uraian_3' ).mask('000.000.000', {reverse: true});
           //$("#uraian_4").mask("999.999.999", {reverse: true});
           //$("#uraian_4").maskMoney({prefix:'Rp ', thousands:'.', decimal:',', affixesStay: true});
        });

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

                            <form class="form-horizontal" method="post"  id="aspek_keuangan" action="<?php echo base_url('aspek_keuangan/simpan');?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Aspek Keuangan</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>

                                <div class="panel-body">


								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">1. Tahun*</label>
                                        <div class="col-md-6 col-xs-12">
                                         <select class="form-control select" name="thn" id="thn">
											<?php
												$now=date('Y');
												for ($a=2014;$a<=$now;$a++)

												{
													?>

                                                <option value="<?php echo $a;?>" ><?php echo $a;?></option>

													 <?php
												}
												?>
                                            </select>
                                           
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Laporan Keuangan *</label>
                                        <div class="col-md-6 col-xs-12">

 											<select class="form-control select" name="uraian_1" id="uraian_1">
                                                <option value="Audited" >Audited</option>
                                                <option value="Un-Audited" >Un-Audited</option>
                                                <option value="In house" >In house</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">3. Opini dari Auditor Kantor Akuntan Publik *</label>
                                        <div class="col-md-6 col-xs-12">

 											<select class="form-control select" name="uraian_2" id="uraian_2">
                                                <option value="Wajar" >Wajar</option>
                                                <option value="Tidak Wajar" >Tidak Wajar</option>
                                            </select>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Kas/Bank *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="uraian_3" id="uraian_3" value="<?php echo $uraian_3;?>"/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Total Hutang (Total Debt) *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="uraian_4" id="uraian_4" value="<?php echo $uraian_4;?>"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Total Ekuitas (Total Equity) *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="uraian_5" id="uraian_5" value="<?php echo $uraian_5;?>"/>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Total Aktiva Lancar (Current Asset) *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="uraian_6" id="uraian_6" value="<?php echo $uraian_6;?>"/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">8. Total Hutang Lancar (Current Liabilities) *</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="uraian_7" id="uraian_7" value="<?php echo $uraian_7;?>"/>
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
        function myFunction() {
            var nilai = document.getElementById("nilai_kontrak").value;
            var persen = document.getElementById("prosentase_sharing").value;
           
                var tot = parseInt(nilai) * parseInt(persen)/100; 
            document.getElementById('nominal_sharing').value = tot;
           // x.value = x.value.toUpperCase();
        }

        </script>
        
        
    </body>
</html>
