<?php /* Smarty version 3.1.24, created on 2020-08-12 15:47:51
         compiled from "/home/files/Sync/eproc/__appl/views/webpage/sec_beranda.php" */ ?>
<?php
/*%%SmartyHeaderCode:6577889385f33acb781cbc0_41365796%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00dbb7c56b8753b48fb2f71b3dfb3c10bcf359ad' => 
    array (
      0 => '/home/files/Sync/eproc/__appl/views/webpage/sec_beranda.php',
      1 => 1597222289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6577889385f33acb781cbc0_41365796',
  'variables' => 
  array (
    'web_panduan' => 0,
    'i' => 0,
    'alur_gambar' => 0,
    'timeline' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5f33acb78a6032_59190138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f33acb78a6032_59190138')) {
function content_5f33acb78a6032_59190138 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/files/Sync/eproc/__appl/third_party/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '6577889385f33acb781cbc0_41365796';
?>
    <style>
    .timeline{
      font-weight: 900;
      line-height: 1.1em;
      margin-bottom: 20px;
    }
    table, tr, td{
      border: 1px solid #ddd;
      font-size: 11pt;
    }
    table, tr, th{
      border: 1px solid #ddd;
    }
   
    </style>
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
        <div class="row">
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
" download> <button type="button" class="btn btn-info" >Download Manual Book </button></a>
      <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
      <br/><br/>
      <?php
$_from = $_smarty_tpl->tpl_vars['alur_gambar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
        <img src="https://panitia-eproc.jmto.co.id/__assets/alur/<?php echo $_smarty_tpl->tpl_vars['i']->value['file_gambar'];?>
" class="img-responsive " alt="img">
			<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>    
      
          </center>
        </div>
          <br/><br/><br/>
          <h5 align="center" class="timeline">Timeline DRT PT Jasamarga Tollroad Operator</h5>
         <div class="row">
          <div class="col-sm-9 col-md-9 col-lg-9" style="margin-left: 12%;margin-right: 12%;">
            <table class="table" style="border: 1px solid #ddd;">
              <tr style="background: #4372c4;color: #fff;">
                <!-- <th>No</th> -->
                <th style="text-align:center" width="220px">Batas Waktu</th>
                <th style="text-align:center">Agenda</th>
                <th style="text-align:center">Keterangan</th>
              </tr>
             
              <?php
$_from = $_smarty_tpl->tpl_vars['timeline']->value;
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
                  <!-- <td><?php echo $_smarty_tpl->tpl_vars['no']->value+1;?>
</td> -->
                  <td width="220px"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['batas_dari'],"%d %b %Y");?>
 <b>s/d</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['batas_sampai'],"%d %b %Y");?>
</td>
                  <td style="text-align: justify;"><?php echo $_smarty_tpl->tpl_vars['i']->value['agenda'];?>
</td>
                  <td style="text-align: justify;"><?php echo $_smarty_tpl->tpl_vars['i']->value['keterangan'];?>
</td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>  
            </table>
          </div>
        </div>
       
       
       
        <!-- <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><a href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/works/1@2x.jpg"><img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/works/2@2x.jpg"><img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/works/3@2x.jpg"><img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/works/4@2x.jpg"><img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/works/5@2x.jpg"><img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/works/6@2x.jpg"><img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>webpage/img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
              </div>
            </div>
          </div>
        </div>
		
		       <div class="row">
          <div class="col-lg-12">
            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter=".pengadaan" class="cbp-filter-item-active cbp-filter-item"><a href="#tentang_kami">Pengumuman Pengadaan </a></div>
              <div data-filter=".cardiologist" class="cbp-filter-item">Pengumuman DPT </div>
              <div data-filter=".psychiatrist2" class="cbp-filter-item">Hasil Pengadaan </div>
              <div data-filter=".neurologist" class="cbp-filter-item">Berita </div>
            </div>
          </div>
        </div> -->
      </div>
    </section><?php }
}
?>