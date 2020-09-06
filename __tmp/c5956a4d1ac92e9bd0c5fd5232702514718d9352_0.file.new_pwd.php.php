<?php /* Smarty version 3.1.24, created on 2020-01-06 13:56:56
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/new_pwd.php" */ ?>
<?php
/*%%SmartyHeaderCode:19768576655e12da381126b7_86474957%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5956a4d1ac92e9bd0c5fd5232702514718d9352' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/new_pwd.php',
      1 => 1576762283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19768576655e12da381126b7_86474957',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'usr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e12da381550f2_55559700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e12da381550f2_55559700')) {
function content_5e12da381550f2_55559700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19768576655e12da381126b7_86474957';
?>
<section id="beranda" class="home-section paddingbot-60">
	<div class="container">
       <div class="col-lg-12">
			<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
New-pwd" method="post" enctype="multipart/form-data">
				<div class="alert alert-success" >
					<div class="container">
						<h5>Enter New Password</h5></hr>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">User / Email </label>
							<div class="col-sm-5">
								<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>

								<input type="hidden" name="email" id="email_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value;?>
">
							</div>
						 </div>
						 <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Password Baru</label>
							<div class="col-sm-5">
								<input type="password" name="pwd" id="pwd_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						 </div>
						 <div class="form-group row">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Ulangi Password Baru</label>
							<div class="col-sm-5">
								<input type="password" name="pwd_u" id="pwd_u_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" class="form-control validasi">
							</div>
						 </div>
						  <div class="form-group row">
							<div class="col-sm-10">
							  <center><a type="submit" class="btn btn-primary" id="s_daftar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
">Reset Password</a></center>
							</div>
						  </div>
					</div>
				</div>
			</form>
	   </div>
	 </div>
</section>
<?php echo '<script'; ?>
>
$('#s_daftar_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').bind('click',function(){
	$(".validasi").validatebox({ required:true }); 
	if($('#pwd_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val() == $('#pwd_u_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val()){
		submit_form('form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				winLoadingClose();
				$('#judul_nya').html('Pendaftaran Calon Rekanan');
				$('#isi_nya').html('Password Sudah Terganti Silahkan Login');
				$('#modal_nya').modal('show');
				setTimeout(function(){ window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
login'; }, 5000);
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
<?php echo '</script'; ?>
><?php }
}
?>