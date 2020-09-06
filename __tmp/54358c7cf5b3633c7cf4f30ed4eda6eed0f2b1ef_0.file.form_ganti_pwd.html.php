<?php /* Smarty version 3.1.24, created on 2020-01-16 22:50:07
         compiled from "/home/files/Sync/eproc/__appl/views/main/form_ganti_pwd.html" */ ?>
<?php
/*%%SmartyHeaderCode:14528824255e20862f4e2c30_94778328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54358c7cf5b3633c7cf4f30ed4eda6eed0f2b1ef' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main/form_ganti_pwd.html',
      1 => 1579189786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14528824255e20862f4e2c30_94778328',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'data' => 0,
    'auth' => 0,
    'mod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e20862f55c709_04605958',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e20862f55c709_04605958')) {
function content_5e20862f55c709_04605958 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14528824255e20862f4e2c30_94778328';
?>
<fieldset>
<div class="span10">
<form class="form-horizontal" id="form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
modul/cruddata/ganti_pwd" method="post" enctype="multipart/form-data">
<table class="table table-hover">
		<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['auth']->value['id'] : $tmp);?>
">
		<input type="hidden" name="sts_crud" value="edit">
		
		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nama_vendor'])===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'pwd','label'=>"Password Lama *",'id'=>"pwd_lama",'name'=>"pwd_lama",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp1), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['alamat'])===null||$tmp==='' ? '' : $tmp);
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'pwd','label'=>"Password Baru *",'id'=>"pwd_baru",'name'=>"pwd_baru",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp2), 0);
?>

		<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['alamat'])===null||$tmp==='' ? '' : $tmp);
$_tmp3=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("template/input_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'pwd','label'=>"Ulangi Password Baru *",'id'=>"u_pwd_baru",'name'=>"u_pwd_baru",'style_type'=>"width:80%",'class'=>"validasi",'value'=>$_tmp3), 0);
?>

</table>
	
</form>
<div class="control-group">
	<center>
	<label class="control-label" for="form-field-1"></label>
	<div class="controls">
		<?php echo $_smarty_tpl->getSubTemplate ("template/button_save.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_na'=>"simpan_".((string)$_smarty_tpl->tpl_vars['mod']->value),'btn_goyz'=>"true",'text'=>"Ganti"), 0);
?>

	</div>
	</center>
</div>		
</div>
</fieldset>

<?php echo '<script'; ?>
>
	
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').click(function(){
		$(".validasi").validatebox({ required:true }); 
		if ($('#form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').form('validate')){
			
			if($('#pwd_baru_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val()==$('#u_pwd_baru_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val()){
				//loadingna();
				$.post(host+'modul/cek_pwd_lama',{ pwd:$('#pwd_lama_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').val() },function(x){
					if(x==1){
						submit_form('form_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
							if(r==1){
								winLoadingClose();
								$.messager.alert('BSR',"Password Sudah Diganti",'info');
								closeWindow();
								setTimeout(function(){ window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
login/logout'; }, 3000);
							}else{
								winLoadingClose();
								$.messager.alert('BSR',"Data Gagal Tersimpan",'error');
								console.log(r);
							}
						});
					}else{
						$.messager.alert('BSR',"Password Lama Salah",'info');
					}
				});
			}else{
				$.messager.alert('BSR',"Password Baru Tidak Sama Dengan Ulangi Password",'info');
			}
		
			
		}else{
			$.messager.alert('BSR',"Isi Form Yang Kosong",'error');
		}

	});
<?php echo '</script'; ?>
><?php }
}
?>