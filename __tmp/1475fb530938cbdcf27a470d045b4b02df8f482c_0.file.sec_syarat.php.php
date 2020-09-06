<?php /* Smarty version 3.1.24, created on 2020-02-06 14:47:21
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_syarat.php" */ ?>
<?php
/*%%SmartyHeaderCode:8916541295e3bc489ebad88_19992200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1475fb530938cbdcf27a470d045b4b02df8f482c' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_syarat.php',
      1 => 1580975426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8916541295e3bc489ebad88_19992200',
  'variables' => 
  array (
    'syarat_ketentuan' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e3bc489efb582_07915319',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e3bc489efb582_07915319')) {
function content_5e3bc489efb582_07915319 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8916541295e3bc489ebad88_19992200';
?>
   
   <section id="syarat" class="home-section paddingtop-70">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray" style="margin-top: 10%;margin-bottom: 5%;">
              <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <p>
						<table>
							<tbody><br>
								<tr>
								  <td colspan="2"><center><h3>SYARAT DAN KETENTUAN PELAKSANAAN PENGADAAN BARANG/JASA PT JMTO SECARA ELEKTRONIK <br>(e-PROCUREMENT)<br><br></h3></center>
												  </strong></td>
								</tr>
										<?php
$_from = $_smarty_tpl->tpl_vars['syarat_ketentuan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
										
								<tr>
								  <td colspan="2"><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['judul'];?>
<br></strong></td>
								</tr>
								<tr>
								<td width="4%">&nbsp;</td>
								  <td><i><?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</i></td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								</tr>
										<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
							  </tbody>
							</table>
						</body>
					  </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><?php }
}
?>