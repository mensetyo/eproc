<?php /* Smarty version 3.1.24, created on 2020-02-26 02:41:50
         compiled from "/home/files/Sync/eproc/__appl/views/invalid.html" */ ?>
<?php
/*%%SmartyHeaderCode:11068161705e55787eafab30_10468743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec2e61024fa72478aad09b97b8a2d8614ae2a61' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/invalid.html',
      1 => 1576762271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11068161705e55787eafab30_10468743',
  'variables' => 
  array (
    'msg' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e55787ebf4ab3_34356218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e55787ebf4ab3_34356218')) {
function content_5e55787ebf4ab3_34356218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11068161705e55787eafab30_10468743';
?>
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
			<center>
			<div class="box-info">
				<h1 style="font-size:30px;font-weight:bold;">WARNING !!!</h1>
				<h1 style="font-size:20px;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>
				<br />
				<img height="150px" align="middle" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/no_access.png">
			</div>
			<center>
		</div>
	</div>
</section><?php }
}
?>