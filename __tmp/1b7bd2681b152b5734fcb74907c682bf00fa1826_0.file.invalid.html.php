<?php /* Smarty version 3.1.24, created on 2020-08-26 13:58:36
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/invalid.html" */ ?>
<?php
/*%%SmartyHeaderCode:6886769125f46081c7483f8_25478907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7bd2681b152b5734fcb74907c682bf00fa1826' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/invalid.html',
      1 => 1576762281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6886769125f46081c7483f8_25478907',
  'variables' => 
  array (
    'msg' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f46081c77fd68_75112203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f46081c77fd68_75112203')) {
function content_5f46081c77fd68_75112203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6886769125f46081c7483f8_25478907';
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