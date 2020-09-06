<section id="beranda" class="home-section paddingbot-60">
	<div class="container">
       <div class="col-lg-12">
			<form class="form-horizontal" id="form_{$acak}" url="{$host}New-pwd" method="post" enctype="multipart/form-data">
				<div class="alert alert-success" >
					<div class="container">
						<h5>Enter New Password</h5></hr>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">User / Email </label>
							<div class="col-sm-5">
								{$usr}
								<input type="hidden" name="email" id="email_{$acak}" value="{$usr}">
							</div>
						 </div>
						 <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Password Baru</label>
							<div class="col-sm-5">
								<input type="password" name="pwd" id="pwd_{$acak}" class="form-control validasi">
							</div>
						 </div>
						 <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Ulangi Password Baru</label>
							<div class="col-sm-5">
								<input type="password" name="pwd_u" id="pwd_u_{$acak}" class="form-control validasi">
							</div>
						 </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  <center><a type="submit" class="btn btn-primary" id="s_daftar_{$acak}">Reset Password</a></center>
							</div>
						  </div>
					</div>
				</div>
			</form>
	   </div>
	 </div>
</section>
<script>
$('#s_daftar_{$acak}').bind('click',function(){
	$(".validasi").validatebox({ required:true }); 
	if($('#pwd_{$acak}').val() == $('#pwd_u_{$acak}').val()){
		submit_form('form_{$acak}',function(r){
			if(r==1){
				winLoadingClose();
				$('#judul_nya').html('Pendaftaran Calon Rekanan');
				$('#isi_nya').html('Password Sudah Terganti Silahkan Login');
				$('#modal_nya').modal('show');
				setTimeout(function(){ window.location.href = '{$host}login'; }, 5000);
			}
			else{
				winLoadingClose();
				$.messager.alert('EPROC-APP',"Perubahan Password Gagal",'error');
			}
		});
	}else{
		$.messager.alert('EPROC-APP',"Ulangi Password Tidak Sama",'error');
	}
});
</script>