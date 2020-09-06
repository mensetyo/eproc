<?php /* Smarty version 3.1.24, created on 2020-01-30 17:43:09
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/pengumuman_pengadaan_ls.php" */ ?>
<?php
/*%%SmartyHeaderCode:16379693145e32b33d374c28_54326651%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2e0d6d53a54380cbfd1ef02542210b6311be2e' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/pengumuman_pengadaan_ls.php',
      1 => 1576762284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16379693145e32b33d374c28_54326651',
  'variables' => 
  array (
    'host' => 0,
    'unit' => 0,
    'i' => 0,
    'pengumuman_pengadaan' => 0,
    'acak' => 0,
    'tentang_kami' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5e32b33d3d1e65_04797782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5e32b33d3d1e65_04797782')) {
function content_5e32b33d3d1e65_04797782 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16379693145e32b33d374c28_54326651';
?>

	 <!-- css -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css1/style.css" rel="stylesheet" />
  
  <br><br><br><br><br>
<section id="content">
      <div class="container">
        <div class="row marginbot30">
          <div class="span12">
           <div class="wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="heading"><strong>Pengumuman</strong>Hasil Pengadaan Langsung<span></span></h4>
            <div class="row">
              <div class="span12">
                <div class="wrapper">
                  <div class="testimonial">
                    <div class="author">
					  <h5>Pencarian</h5>
                        <table width="" class="table" border="0">
						<tbody>
							<tr>	
								<td><strong>Unit *</strong></td>
								<td style="font-weight:bold;" >
									<select name="nama" id="nama" class="form-control" style="width:%">
										<option value="">-- Pilih --</option>
										<?php
$_from = $_smarty_tpl->tpl_vars['unit']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</option>
										<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
									</select>
								</td>
							</tr>
							
							<tr>
								<td ><input name="tanggal_akhir" placeholder="Cari Data" class="form-control" style="width:100%" /></td>
								<td><input type="submit" value="&ensp;Cari&ensp;" class="btn btn-info" style="width:20%"/></td>
							</tr>
						</tbody>
					  </table>
					  
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
				   <h5>KHS</h5>
                        <table width="" class="table" border="0">
						<tbody>
							<tr>	
								<td><strong>Wilayah *</strong></td>
								<td style="font-weight:bold;" colspan="3">
									<select name="nama" id="nama" class="form-control" style="width:%">
										<option value="">-- Pilih --</option>
										<?php
$_from = $_smarty_tpl->tpl_vars['pengumuman_pengadaan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
										<option><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
										<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
									</select>
								</td>
							</tr>
							<tr>
								<td><input type="date" name="tanggal_awal" placeholder="Tanggal Awal" class="form-control" style="width:%"/></td>
								<td colspan="3"><input type="date" name="tanggal_akhir" placeholder="Tanggal Akhir" class="form-control" style="width:%"/></td>
							</tr>
							</tr>
							<tr>
								<td><input name="tanggal_akhir" placeholder="Cari Data" class="form-control" style="width:%" /></td>
								<td><input type="submit" value="&ensp;Cari&ensp;" class="btn btn-info" style="width:100%"/></td>
								<td><input type="reset" value="Reset" class="btn btn-info" style="width:100%"/></td>
							</tr>
						</tbody>
					  </table>
					    </p>
                     </div>
                  </div>
                </div-->
              </div>
            <div class="row">
              <div class="span12">
                <div class="wrapper">
                  <div class="testimonial">
						<div id="list_pengadaan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
"></div>
                  </div>
                </div>
              </div>
              <!--div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <?php
$_from = $_smarty_tpl->tpl_vars['tentang_kami']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                      <i class="icon-quote-left icon-48"></i>
						  <?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>

                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
                    </div>
                  </div>
                </div>
              </div-->
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </table>
  <?php echo '<script'; ?>
>
		var dt_grid;
		dt_grid=$("#list_pengadaan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").datagrid({
		title:'',
        height:(getClientHeight()-300),
		iconCls:'database',
        pagination:true,
		showFooter:false,
		singleSelect:true,
		
        url: host+'webpage/getdata/pemenang',		
		nowrap: true,
		pageSize:15,
		pageList:[15,25,50,75,100,200],
		columns:[[
            { field:'nama_pengadaan',title:'Nama Paket Pengadaan',width:"70%",halign:'left',align:'left',
				formatter: function(value,row,index){
					var html;
					html = '<span style="color:red;font-weight:bold;font-size:15px;"><a href="'+host+'GetInfo/detil_pemenang/'+row.id+'">'+value + '</a></span><br>';
					html +='Unit : '+ row.description+'<br>';
					html +='Metode Penawaran : '+ row.metode_penawaran+'<br>';
					html +='Evaluasi Penawaran : '+ row.evaluasi_penawaran;
					return html;
				}
			},
			{ field:'pagu',title:'Pagu Anggaran',width:"10%", halign:'right',align:'right',
				formatter: function(value,row,index){
					return NumberFormat(value);
				}
			},
			{ field:'pemenang',title:'Rekanan Pemenang',width:'20%', halign:'left',align:'left'},
        ]],
	});
  <?php echo '</script'; ?>
><?php }
}
?>