<?php /* Smarty version 3.1.24, created on 2020-01-29 14:50:54
         compiled from "/home/files/Sync/eproc/__appl/views/main-login.html" */ ?>
<?php
/*%%SmartyHeaderCode:8358266475e31395e809243_06936163%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c91304fd836b7b3105dcecb4e52d8f6d3b8517' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/main-login.html',
      1 => 1580284361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8358266475e31395e809243_06936163',
  'variables' => 
  array (
    'host' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e31395e8575e1_48714180',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e31395e8575e1_48714180')) {
function content_5e31395e8575e1_48714180 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8358266475e31395e809243_06936163';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> E-PROC JMTO </title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/style-login.css" media="screen" type="text/css" />
	<style type="text/css">
		body { 
		  background: url(<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/bg_login.png) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		  overflow-y: hidden !important;
		}
	</style>
</head>
<body>
	<div class="container"> 
		<h1 class="welcome text-center">&nbsp;</h1>
        <div class="card card-container">
			<br/>
			<div class="login-help">
				<center><b>E-Procurement Penyedia Jasa</b></center>
			</div>
			
				<center><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/logo.png"  /></center>
			
			<hr>
            <form name='frmLogin' class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
login" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">UserName</p>
                <input type="text" id="user" class="login_box" name="user" placeholder="" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="pwd" name="pwd" class="login_box" placeholder="" required>
                <div id="remember" class="checkbox">
                   <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
						<div style="text-align:center;margin-top:30px">
							<span style="color:red;"><b><i><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</i></b></span>
						</div>
					<?php }?>	
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
LupaPwd" target="__blank">Lupa Password</a>
            </form><!-- /form -->
			
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html><?php }
}
?>