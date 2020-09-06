<?php /* Smarty version 3.1.24, created on 2019-12-20 09:00:48
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_pengumuman_pengadaan.php" */ ?>
<?php
/*%%SmartyHeaderCode:21104056925dfc2b5044e211_86271524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70bc9e566f23aa11998c8176d83d5d5c44eb8df' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_pengumuman_pengadaan.php',
      1 => 1576762286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21104056925dfc2b5044e211_86271524',
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
  'unifunc' => 'content_5dfc2b5047a7d2_82135157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dfc2b5047a7d2_82135157')) {
function content_5dfc2b5047a7d2_82135157 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21104056925dfc2b5044e211_86271524';
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
            <h4 class="heading"><strong>Pengumuman</strong> Pengadaan<span></span></h4>
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
		var dt_grid
	dt_grid=$("#list_pengadaan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").datagrid({
		title:'',
        height:(getClientHeight()-300),
		iconCls:'database',
       
        pagination:true,
        
		showFooter:false,
		singleSelect:true,
		
        url: host+'webpage/getdata/pengadaan',		
		nowrap: true,
		pageSize:15,
		pageList:[15,25,50,75,100,200],
		columns:[[
            { field:'tgl_posting',title:'Tgl',width:"10%", halign:'center',align:'center' },
            { field:'nama_pengadaan',title:'Nama Paket Pengadaan',width:"60%",halign:'left',align:'left',
				formatter: function(value,row,index){
					var html;
					html = '<span style="color:red;"><a href="'+host+'GetInfo/detil_projek/'+row.id+'">'+value + '</a></span><br>';
					html +='Unit : '+ row.description+'<br>';
					html +='Kualifikasi : '+ row.kualifikasi_pengadaan+'<br>';
					html +='Evaluasi Penawaran : '+ row.evaluasi_penawaran;
					return html;
				}
			},
			{ field:'pagu',title:'Pagu Anggaran',width:"10%", halign:'right',align:'right',
				formatter: function(value,row,index){
					return NumberFormat(value);
				}
			},
			{ field:'tahapan',title:'Tahap',width:'20%', halign:'left',align:'left'},
        ]],
	});
  <?php echo '</script'; ?>
><?php }
}
?>