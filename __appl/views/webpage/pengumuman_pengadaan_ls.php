
	 <!-- css -->
  <link href="{$host}__assets/css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="{$host}__assets/css1/style.css" rel="stylesheet" />
  
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
										{foreach from=$unit item=i}
										<option value="{$i.id}">{$i.description}</option>
										{/foreach}
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
										{foreach from=$pengumuman_pengadaan item=i}
										<option>{$i.name}</option>
										{/foreach}
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
						<div id="list_pengadaan_{$acak}"></div>
                  </div>
                </div>
              </div>
              <!--div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    {foreach from=$tentang_kami item=i}
                      <i class="icon-quote-left icon-48"></i>
						  {$i.description}
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">Eproc PT JMTO, <a href="#">www.eproc.jmto.co.id</a></span>
					  {/foreach}
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
  <script>
		var dt_grid;
		dt_grid=$("#list_pengadaan_{$acak}").datagrid({
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
  </script>