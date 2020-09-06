<?php /* Smarty version 3.1.24, created on 2020-09-03 13:39:34
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/include/daftar.php" */ ?>
<?php
/*%%SmartyHeaderCode:486428955f508fa61853f8_92520723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0389d8379612537c81ab18bc8a988f2791cecd' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/include/daftar.php',
      1 => 1599115171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '486428955f508fa61853f8_92520723',
  'variables' => 
  array (
    'host' => 0,
    'web_panduan' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f508fa61c6e02_95555181',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f508fa61c6e02_95555181')) {
function content_5f508fa61c6e02_95555181 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '486428955f508fa61853f8_92520723';
?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <center><p><b>Ingin Menjadi Rekanan Kami silahkan Daftar ?</b></p></center>
        <center><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
webpage/reg"> <button type="button" class="btn btn-info" >Daftar</button></a></center><br>
        <center>
        <?php
$_from = $_smarty_tpl->tpl_vars['web_panduan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
		      <a href="https://panitia-eproc.jmto.co.id/__assets/manual/<?php echo $_smarty_tpl->tpl_vars['i']->value['file_panduan'];?>
" download> <button type="button" class="btn btn-info" >Download Manual Book Pendaftaran</button></a>
        <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
        </center>
      </div>
      <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
<?php }
}
?>