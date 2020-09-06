    <section id="beranda" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <!--<div class="section-heading text-center">
                <h2 class="h-bold">Our facilities</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
              </div>-->
            </div>
            <!--<div class="divider-short"></div>-->
          </div>
        </div>
      </div>

      <div class="container">
       <div class="col-lg-12">
         
			<form class="form-horizontal" id="form_{$acak}" url="{$host}RePwd" method="post" enctype="multipart/form-data">
				<div class="alert alert-success" >
					<div class="container">
						<h5>Lupa Password</h5></hr>
						  
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-5">
							  <input type="text" name="email" id="email_{$acak}" class="form-control validasi">
							</div>
						  </div>
						  
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Security Code</label>
							<div class="col-sm-5" id="imgVRCaptha" style="font-family: inherit; padding-bottom: 5px; background-repeat: no-repeat; background-position: 0px 0px; text-indent: 120px;">
							  <img onClick="refreshCaptcha('imgVRCaptha');" style="cursor: pointer;" src="{$host}__assets/plugin/easyui/themes/icons/reload.png">&nbsp;
							  <input id='edVRCaptcha' name='edVRCaptcha'  type='text' size='10' style="width: 100px; height: 24px; border: 1px solid #99bbe8;" class="validasi"/>
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  &nbsp;
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  <center><a type="submit" class="btn btn-primary" id="s_daftar_{$acak}">Kirim</a></center>
							</div>
						  </div>
					</div>
				</div>
			</form>
		
        </div>
        </div>
      </div>
    </section>
<script>
	refreshCaptcha('imgVRCaptha');
	$('#propinsi').change(function(){
		fillCombo(host+'modul/get_combo/kabkota', 'kota','kabkota', $(this).val());
	});
	$('#s_daftar_{$acak}').bind('click',function(){
		$(".validasi").validatebox({ required:true }); 
		if ($('#form_{$acak}').form('validate')){
			$.get(host+'webpage/checkCaptcha/'+$('#edVRCaptcha').val(), function(resp){
				if(resp=='sama'){
					submit_form('form_{$acak}',function(r){
						if(r==1){
							winLoadingClose();
							$('#judul_nya').html('Pengajuan Password Baru ');
							$('#isi_nya').html('Pengajuan PAssword Baru Telah Kami Terima Silahkan Cek Email.');
							$('#modal_nya').modal('show');
							setTimeout(function(){ window.location.href = '{$host}modul'; }, 5000);
						}else if(r==2){
							winLoadingClose();
							$.messager.alert('EPROC-APP',"Mohon Maaf Email Tidak Terdaftar",'info');
						}
						else{
							winLoadingClose();
							$.messager.alert('EPROC-APP',"Data Gagal Tersimpan",'error');
							console.log(r);
						}
					});
				}else{
					refreshCaptcha('imgVRCaptha');
					$.messager.alert('EPROC-APP',"Security Code Tidak Sama!",'warning');
				}
			});
		}
	});
</script>