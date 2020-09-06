<?php /* Smarty version 3.1.24, created on 2020-08-12 14:16:51
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_faqs.php" */ ?>
<?php
/*%%SmartyHeaderCode:14396610245f339763ca59e4_50605011%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9904f725702693a13d231d26225086f723f0eb2' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_faqs.php',
      1 => 1597216828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14396610245f339763ca59e4_50605011',
  'variables' => 
  array (
    'faq' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f339763ce4397_27184552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f339763ce4397_27184552')) {
function content_5f339763ce4397_27184552 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14396610245f339763ca59e4_50605011';
?>
    <style>
      table, tr, td {
        border: 1px solid #fff;
        font-size: 11pt;
    }
    </style>
    <section id="faqs" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>FAQ's</h3>
                      <p>
					  <table>
					  <tbody>
					<?php
$_from = $_smarty_tpl->tpl_vars['faq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
						<tr style="border: 0px solid #ddd;">
						  <td colspan="2" style="border: 0px solid #ddd;"><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['pertanyaan'];?>
</strong></td>
						</tr>
						<tr>
						<td width="4%">&nbsp;</td>
						  <td><i><?php echo $_smarty_tpl->tpl_vars['i']->value['jawaban'];?>
</i></td>
						</tr>
					<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
					  </tbody>
					</table>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br>
    </section>
   <?php }
}
?>