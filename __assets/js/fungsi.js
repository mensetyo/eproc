var acak_form;
var index_row;
var id_responden='';
var peta;
var pertama = 0;
var jenis = "restoran";
var judulx = new Array();
var desx = new Array();
var i;
var url;
var gambar_tanda;
var markersArray=[];
function export_data(type,mod,acak){
	var param={};
	param["mod"]=mod;
	param["type"]=type;
	switch (mod){
		case "input":
			
		break;
	}
	openWindowWithPost(host+'modul/export_excel',param);
	
}
function ganti_pwd(){
	loadingna();
	$.post(host+'modul/get_konten/form_ganti_pwd',function(r){
		winLoadingClose();
		
		$('#judul_modol').html('Form Ganti Password');
		$('#img').html(r);
		$('#modol').modal('show');
		//windowForm(r,"Ganti Password",800,300);
	})
}
function loadUrl(urls){
	//$("#konten").empty();
    $("#konten").empty().addClass("loading");
   // $("#konten").html("").addClass("loading");
	$.get(urls,function (html){
	    $("#konten").html(html).removeClass("loading");
    });
}

function getClientHeight(){
	var theHeight;
	if (window.innerHeight)
		theHeight=window.innerHeight;
	else if (document.documentElement && document.documentElement.clientHeight) 
		theHeight=document.documentElement.clientHeight;
	else if (document.moduldy) 
		theHeight=document.moduldy.clientHeight;
	
	return theHeight;
}

var divcontainer;
function windowFormPanel(html,judul,width,height){
	divcontainer = $('#jendela');
	$(divcontainer).unbind();
	$('#isiJendela').html(html);
    $(divcontainer).window({
		title:judul,
		width:width,
		height:height,
		autoOpen:false,
		top: Math.round(frmHeight/2)-(height/2),
		left: Math.round(frmWidth/2)-(width/2),
		modal:true,
		maximizable:false,
		minimizable: false,
		collapsible: false,
		closable: true,
		resizable: false,
	    onBeforeClose:function(){	   
			$(divcontainer).window("close",true);
			//$(divcontainer).window("destroy",true);
			//$(divcontainer).window('refresh');
			return true;
	    }		
    });
    $(divcontainer).window('open');       
}
function windowFormClosePanel(){
    $(divcontainer).window('close');
	//$(divcontainer).window('refresh');
}

var container;
function windowForm(html,judul,width,height){
    container = "win"+Math.floor(Math.random()*9999);
    $("<div id="+container+"></div>").appendTo("moduldy");
    container = "#"+container;
    $(container).html(html);
    $(container).css('padding','5px');
    $(container).window({
       title:judul,
       width:width,
       height:height,
       autoOpen:false,
       maximizable:false,
       minimizable: false,
	   collapsible: false,
       resizable: false,
       closable:true,
       modal:true,
	   onBeforeClose:function(){	   
			$(container).window("close",true);
			$(container).window("destroy",true);
			return true;
	   }
    });
    $(container).window('open');        
}
function closeWindow(){
    $(container).window('close');
    $(container).html("");
}


function getClientWidth(){
	var theWidth;
	if (window.innerWidth) 
		theWidth=window.innerWidth;
	else if (document.documentElement && document.documentElement.clientWidth) 
		theWidth=document.documentElement.clientWidth;
	else if (document.moduldy) 
		theWidth=document.moduldy.clientWidth;

	return theWidth;
}


function genGrid(modnya, divnya, lebarnya, tingginya){
	if(lebarnya == undefined){
		lebarnya = (getClientWidth()-250);
	}
	if(tingginya == undefined){
		tingginya = (getClientHeight()-300);
	}

	var kolom ={};
	var frozen ={};
	var judulnya;
	var param={};
	var urlnya;
	var urlglobal="";
	var url_detil="";
	var post_detil={};
	var fitnya;
	var klik=false;
	var doble_klik=false;
	var pagesizemoduly = 15;
	var singleSelek = true;
	var nowrap_nya = true;
	var footer=false;
	
	switch(modnya){
		case "ijin_usaha":
			judulnya = "";
			urlnya = "ijin_usaha";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [	
				
				{field:'jenis_ijin',title:'Jenis',width:120, halign:'left',align:'left'},
				{field:'nomor_surat',title:'Nomor',width:200, halign:'left',align:'left'},
				{field:'berlaku_sampai',title:'Masa Berlaku',width:120, halign:'center',align:'center'},
				{field:'instansi_pemberi',title:'Instansi',width:150, halign:'left',align:'left'},
				{field:'t_kualifikasi',title:'Kualifikasi',width:150, halign:'left',align:'left'},
				{field:'t_klasifikasi',title:'Klasifikasi',width:150, halign:'left',align:'left'},
				{field:'dok',title:'Dokumen',width:120, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'ijin_usaha\')">'+value+'</a>';
					}
				},
			];
		break;
		case "akta":
			judulnya = "";
			urlnya = "akta";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [	
				
				{field:'nomor',title:'Nomor',width:200, halign:'left',align:'left'},
				{field:'tgl_srt',title:'Tanggal',width:120, halign:'left',align:'left'},
				{field:'notaris',title:'Notaris',width:200, halign:'left',align:'left'},
				{field:'perubahan_nomor',title:'No. Perubahan',width:100, halign:'left',align:'left'},
				{field:'perubahan_tgl_srt',title:'Tgl. Perubahan',width:120, halign:'left',align:'left'},
				{field:'dok',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'akta\')">'+value+'</a>';
					}
				},
			];
		break;
		case "tdp":
			judulnya = "";
			urlnya = "tdp";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [	
				
				{field:'nomor',title:'Nomor',width:200, halign:'left',align:'left'},
				{field:'instansi_penerbit',title:'Penerbit',width:120, halign:'left',align:'left'},
				{field:'tgl_terbit',title:'Tanggal',width:120, halign:'left',align:'left'},
				{field:'masa_berlaku',title:'Masa Berlaku',width:120, halign:'left',align:'left'},
				{field:'kegiatan_usaha_pokok',title:'Keg. Usaha',width:200, halign:'left',align:'left'},
				{field:'file',title:'File',width:200, halign:'left',align:'left'},
			];
		break;
		case "domisili":
			judulnya = "";
			urlnya = "domisili";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [	
				
				{field:'nomor',title:'Nomor',width:200, halign:'left',align:'left'},
				{field:'instansi_penerbit',title:'Penerbit',width:120, halign:'left',align:'left'},
				{field:'tgl_terbit',title:'Tanggal',width:120, halign:'left',align:'left'},
				{field:'tgl_sampai',title:'Masa Berlaku',width:120, halign:'left',align:'left'},
				{field:'file',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'domisili\')">'+value+'</a>';
					}
				},
			];
		break;
		case "sbu":
			judulnya = "";
			urlnya = "sbu";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [	
				
				{field:'nomor',title:'Nomor',width:200, halign:'left',align:'left'},
				{field:'instansi_pemberi',title:'Penerbit',width:120, halign:'left',align:'left'},
				{field:'tgl_terbit',title:'Tanggal',width:120, halign:'left',align:'left'},
				{field:'masa_berlaku',title:'Masa Berlaku',width:120, halign:'left',align:'left'},
				{field:'file',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'sbu\')">'+value+'</a>';
					}
				},
			];
		break;
		case "pajak":
			judulnya = "";
			urlnya = "pajak";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [	
				
				{field:'jenis_pajak',title:'Jenis Pajak',width:200, halign:'left',align:'left'},
				{field:'masa_pajak_tahunan',title:'Masa Pajak',width:120, halign:'left',align:'left'},
				{field:'no_bkti_penerimaan_srt',title:'No Bukti',width:120, halign:'left',align:'left'},
				{field:'tgl_bkt_penerimaan_srt',title:'Tgl. Bukti',width:120, halign:'left',align:'left'},
				{field:'dok',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'pajak\')">'+value+'</a>';
					}
				},
			];
		break;
		case "pengurus":
			judulnya = "";
			urlnya = "pengurus";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'nama',title:'Nama',width:200, halign:'left',align:'left'},
				{field:'no_ktp',title:'No. KTP',width:200, halign:'left',align:'left'},
				{field:'alamat',title:'Alamat',width:200, halign:'left',align:'left'},
				{field:'jabatan',title:'Jabatan',width:200, halign:'left',align:'left'},
				{field:'notaris',title:'Notaris',width:200, halign:'left',align:'left'},
				{field:'dok',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'pengurus\')">'+value+'</a>';
					}
				},
			];
		break;
		case "ta":
			judulnya = "";
			urlnya = "ta";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'nama',title:'Nama',width:200, halign:'left',align:'left'},
				{field:'pendidikan_terakhir',title:'Pendidikan',width:200, halign:'left',align:'left'},
				{field:'pengalaman_kerja',title:'Pengalaman',width:200, halign:'left',align:'left'},
				{field:'keahlian',title:'Keahlian',width:200, halign:'left',align:'left'},
				{field:'jabatan',title:'Jabatan',width:200, halign:'left',align:'left'},
				{field:'file',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'ta\')">'+value+'</a>';
					}
				},
			];
		break;
		case "peralatan":
			judulnya = "";
			urlnya = "peralatan";
			fitnya = true;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'nama_alat',title:'Nama Alat',width:200, halign:'left',align:'left'},
				{field:'jumlah',title:'Jumlah',width:100, halign:'right',align:'right'},
				{field:'kapasitas',title:'Kapasitas',width:150, halign:'left',align:'left'},
				{field:'merk',title:'Merk',width:200, halign:'left',align:'left'},
				{field:'tahun',title:'Tahun',width:200, halign:'center',align:'center'},
				{field:'bukti_milik',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'peralatan\')">'+value+'</a>';
					}
				},
			];
		break;
		case "pengalaman":
			judulnya = "";
			urlnya = "pengalaman";
			fitnya = true;
			nowrap_nya=false;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'nama_kontrak',title:'Nama Kontrak',width:300, halign:'left',align:'left'},
				{field:'instansi',title:'Pemberi Kerja',width:150, halign:'left',align:'left'},
				{field:'nomor_kontrak',title:'No Kontrak',width:150, halign:'left',align:'left'},
				{field:'nilai_kontrak',title:'Nilai Kontrak',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return row.jenis_mata_uang + ' '+NumberFormat(value);
					}
				},
				{field:'nilai_project',title:'Nilai Sharing',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return row.jenis_mata_uang + ' '+NumberFormat(value);
					}
				},
				{field:'tanggal_pelaksanaan',title:'Tgl. Mulai',width:100, halign:'right',align:'right'},
				{field:'selesai_kontrak',title:'Tgl. Akhir',width:100, halign:'right',align:'right'},
				{field:'file',title:'File',width:200, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'pengalaman\')">'+value+'</a>';
					}
				},
			];
		break;
		case "pekerjaan_berjalan":
			judulnya = "";
			urlnya = "pekerjaan_berjalan";
			fitnya = true;
			nowrap_nya=false;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'nama_kontrak',title:'Nama Kontrak',width:300, halign:'left',align:'left'},
				{field:'lokasi',title:'Lokasi',width:150, halign:'left',align:'left'},
				{field:'instansi',title:'Kapasitas',width:150, halign:'left',align:'left'},
				{field:'nilai_kontrak',title:'Nilai Kontrak',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return row.jenis_mata_uang + ' '+NumberFormat(value);
					}
				},
				{field:'prosentase_sharing',title:'(%)Sharing',width:100, halign:'right',align:'right'},
				{field:'presentase_progress',title:'(%)Progress',width:100, halign:'right',align:'right'},
				{field:'file',title:'File',width:150, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'pek_berjalan\')">'+value+'</a>';
					}
				},
			];
		break;
		case "keuangan":
			judulnya = "";
			urlnya = "keuangan";
			fitnya = true;
			nowrap_nya=false;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'thn',title:'Tahun',width:100, halign:'center',align:'center'},
				{field:'uraian_1',title:'Lap. Keuangan',width:150, halign:'left',align:'left'},
				{field:'uraian_3',title:'Kas/Bank',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return NumberFormat(value);
					}
				},
				{field:'uraian_4',title:'Total Hutang ',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return NumberFormat(value);
					}
				},
				{field:'uraian_5',title:'Total Ekuitas',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return NumberFormat(value);
					}
				},
				{field:'uraian_6',title:'Total Aktiva Lancar ',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return NumberFormat(value);
					}
				},
				{field:'uraian_7',title:'Total Hutang Lancar ',width:120, halign:'right',align:'right',
					formatter: function(value,row,index){
						return NumberFormat(value);
					}
				},
				{field:'file',title:'File',width:150, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'aspek_keu\')">'+value+'</a>';
					}
				},
			];
		break;
		case "surat":
			judulnya = "";
			urlnya = "surat";
			fitnya = true;
			nowrap_nya=false;
			urlglobal = host+'modul/getdata/'+urlnya;
			kolom[modnya] = [
				{field:'jenis',title:'Jenis',width:100, halign:'left',align:'left'},
				{field:'nomor',title:'Nomor',width:150, halign:'left',align:'left'},
				{field:'instansi_pemberi',title:'Instansi',width:150, halign:'left',align:'left'},
				{field:'tgl_terbit',title:'Tgl. Terbit',width:120, halign:'center',align:'center'},
				{field:'masa_berlaku',title:'Masa Berlaku',width:120, halign:'center',align:'center'},
				{
					field:'file',title:'Dokumen',width:150, halign:'left',align:'left',
					formatter: function(value,row,index){
						return 	'<a href="javascript:void(0);" onclick="lihat_file(\''+value+'\',\'surat_penting\')">'+value+'</a>';
					}
				},
			];
		break;
	}
	
	grid_nya=$("#"+divnya).datagrid({
		title:judulnya,
        height:tingginya,
        width:lebarnya,
		rownumbers:true,
		iconCls:'database',
        fit:fitnya,
        striped:true,
        pagination:true,
        remoteSort: false,
		showFooter:footer,
		singleSelect:singleSelek,
        url: urlglobal,		
		nowrap: nowrap_nya,
		pageSize:pagesizemoduly,
		pageList:[15,25,50,75,100,200],
		queryParams:param,
		frozenColumns:[
            frozen[modnya]
        ],
		columns:[
            kolom[modnya]
        ],
		onLoadSuccess:function(d){
			//gridVRList.datagrid('selectRow', 0);
			$('.yes').linkbutton({  
					iconCls: 'icon-cancel'  
			});
			$('.no').linkbutton({  
					iconCls: 'icon-ok'  
			});
			
		},
		onClickRow:function(rowIndex,row){
			switch(modnya){
				case "responden":
					$('#id_'+acak_form).val(row.id);
					$('#sts_crud_'+acak_form).val('edit');
					$('#nomor_kuesioner_'+acak_form).val(row.nomor_kuesioner);
					$('#periode_'+acak_form).val(row.periode);
					$('#cl_kabupaten_id_'+acak_form).val(row.cl_kabupaten_id).change();
					fillCommodul(host+"backend/get_commodul", "cl_kecamatan_id_"+acak_form, "kecamatan",row.cl_kabupaten_id,row.cl_kecamatan_id);
					$('#tbl_relawan_id_'+acak_form).val(row.tbl_relawan_id).change();
					$('#nama_responden_'+acak_form).val(row.nama_responden);
					$('#alamat_responden_'+acak_form).val(row.alamat_responden);
					if(row.jenis_kelamin=='L')$('input:radio[name=jenis_kelamin]:nth(0)').attr('checked',true);
					else $('input:radio[name=jenis_kelamin]:nth(1)').attr('checked',true);
				break;
			}
			closeWindow();
        },
		onDblClickRow:function(rowIndex,row){
			
		},
		toolbar: '#tb_'+modnya,
		rowStyler: function(index,row){
			if(modnya == 'reservasi'){
				if (row.flag == 1){
					return 'background-color:#C5FFC2;'; // return inline style
				}else if(row.flag == 0){
					return 'background-color:#FFD1BB;'; // return inline style
				}
			}
			
		},
		onLoadSuccess: function(data){
			if(data.total == 0){
				var $panel = $(this).datagrid('getPanel');
				var $info = '<div class="info-empty" style="margin-top:20%;">Data Tidak Tersedia</div>';
				$($panel).find(".datagrid-view").append($info);
				$('.menu_'+modnya).removeClass('bg-green');
				$('.menu_'+modnya).addClass('bg-red');
				//$('#edit').linkbutton({disabled:true});
				//$('#del').linkbutton({disabled:true});
			}else{
				//$($panel).find(".datagrid-view").append('');
				$('.info-empty').hide();
				$('.menu_'+modnya).removeClass('bg-red');
				$('.menu_'+modnya).addClass('bg-green');
			}
		},
	});
}


function genform(type, modulnya, submodulnya, stswindow, tabel){
	var urlpost = host+'modul/get_konten/'+submodulnya;
	var urldelete = host+'modul/cruddata/'+submodulnya;
	var id_tambahan = "";
	
	switch(submodulnya){
		case "surat":table="drt_surat_penting";break;
		case "keuangan":table="drt_lapkeu_aspek";break;
		case "pekerjaan_berjalan":table="drt_pekerjaan_on_going";break;
		case "pengalaman":table="drt_pengalaman";break;
		case "peralatan":table="drt_peralatan";break;
		case "ta":table="drt_tenaga_ahli";break;
		case "pajak":table="drt_pajak";break;
		case "pengurus":table="drt_pengurus";break;
		case "input":table="tbl_projek";break;
		case "domisili":table="drt_domisili";break;
		case "sbu":table="drt_sbu";break;
		case "ijin_usaha":table="drt_ijin_usaha";break;
		case "akta":table="drt_akta";break;
		case "tdp":table="drt_tdp";break;
		case "kabupaten":table="cl_kab_kota";break;
		case "kecamatan":table="cl_kecamatan";break;
		case "kelurahan":table="cl_kelurahan";break;
		case "posko":table="tbl_posko";break;
		case "relawan":table="tbl_relawan";break;
		
	}
	
	switch(type){
		case "add":
			if(stswindow == undefined){
				$('#grid_nya_'+submodulnya).hide();
				$('#detil_nya_'+submodulnya).empty().show().addClass("loading");
			}
			$.post(urlpost, {'editstatus':'add', 'id_tambahan':id_tambahan }, function(resp){
				if(stswindow == 'windowform'){
					windowForm(resp, judulwindow, lebar, tinggi);
				}else if(stswindow == 'windowpanel'){
					windowFormPanel(resp, judulwindow, lebar, tinggi);
				}else{
					$('#detil_nya_'+submodulnya).show();
					$('#detil_nya_'+submodulnya).html(resp).removeClass("loading");
				}
			});
		break;
		case "edit":
		case "delete":
		
			var row = $("#grid_"+submodulnya).datagrid('getSelected');
			if(row){
				if(type=='edit'){
					if(stswindow == undefined){
						$('#grid_nya_'+submodulnya).hide();
						$('#detil_nya_'+submodulnya).show().addClass("loading");	
					}
					$.post(urlpost, { 'editstatus':'edit', id:row.id, 'ts':table, 'submodul':submodulnya, 'bulan':row.bulan, 'tahun':row.tahun, 'id_tambahan':id_tambahan }, function(resp){
						if(stswindow == 'windowform'){
							windowForm(resp, judulwindow, lebar, tinggi);
						}else if(stswindow == 'windowpanel'){
							windowFormPanel(resp, judulwindow, lebar, tinggi);
						}else{
							$('#detil_nya_'+submodulnya).show();
							$('#detil_nya_'+submodulnya).html(resp).removeClass("loading");
						}
					});
				}else if(type=='delete'){
					//if(confirm("Anda Yakin Menghapus Data Ini ?")){
					$.messager.confirm('EPROC-APP','Anda Yakin Menghapus Data Ini ?',function(re){
						if(re){
							loadingna();
							$.post(urldelete, {id:row.id, 'sts_crud':'delete'}, function(r){
								if(r==1){
									winLoadingClose();
									$.messager.alert('EPROC-APP',"Data Terhapus",'info');
									$('#grid_'+submodulnya).datagrid('reload');								
								}else{
									winLoadingClose();
									console.log(r)
									$.messager.alert('EPROC-APP',"Gagal Menghapus Data",'error');
								}
							});	
						}
					});	
					//}
				}
				
			}
			else{
				$.messager.alert('EPROC-APP',"Select Row In Grid",'error');
			}
		break;
		
	}
}

function digit3(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function kumpulAction(type, p1, p2, p3, p4, p5){
	switch(type){
		case "reservation":
			grid = $('#grid_reservasi').datagrid('getSelected');
			$.post(host+'backend/simpan_data/tbl_reservasi_confirm', { 'id':grid.id, 'confirm':p1 }, function(rsp){
				if(rsp == 1){
					$.messager.alert('Roger Salon',"Confirm OK",'info');
				}else{
					$.messager.alert('Roger Salon',"Failed Confirm",'error');
				}
				$('#grid_reservasi').datagrid('reload');	
			} );
		break;
		case "banner":
			grid = $('#grid_banner').datagrid('getSelected');
			$.post(host+'backend/simpan_data/tbl_banner_confirm', { 'id':grid.id, 'confirm':p1 }, function(rsp){
				if(rsp == 1){
					$.messager.alert('Roger Salon',"OK",'info');
				}else{
					$.messager.alert('Roger Salon',"Gagal",'error');
				}
				$('#grid_banner').datagrid('reload');	
			} );
		break;
		case "hapus_produk":
			$('#detail_fotonya').empty().addClass("loading");
			$.post(host+'backend/hapusfoto_detail/produk', { 'id':p1, 'nama_file':p2, 'id_header':p3  }, function(rsp){
				$('#detail_fotonya').html(rsp).removeClass("loading");
			} );
		break;
		case "hapus_service":
			$('#detail_fotonya').empty().addClass("loading");
			$.post(host+'backend/hapusfoto_detail/service', { 'id':p1, 'nama_file':p2, 'id_header':p3  }, function(rsp){
				$('#detail_fotonya').html(rsp).removeClass("loading");
			} );
		break;
	}
}	

function submit_form(frm,func){
	var url ='';
	url = jQuery('#'+frm).attr("url");
	loadingna();
	if ($('#'+frm).form('validate')){
		try {
			jQuery('#'+frm).form('submit',{
					url:url,
					onSubmit: function(){
						return $(this).form('validate');
					},
					success:function(data){
						//$.unblockUI();
						if (func == undefined ){
							if (data == "1"){
							pesan('Data Sudah Disimpan ','Sukses');
						}else{
								pesan(data,'Result');
						}
					}else{
						//    return jQuery('#'+frm).submit();
						func(data);
					};
					},
					error:function(data){
						//$.unblockUI();
						if (func == undefined ){
							pesan(data,'Error');
						}else{
							func(data);
						}
					}
			});
		} catch (error) {
			func(data);
		}
		
	}else{
		winLoadingClose();
		$.messager.alert('EPROC-APP','Harap Isi Data Yang Kosong', 'error');
	}
}

function fillCombo(url, SelID, value, value2, value3, value4){
	//if(Ext.get(SelID).innerHTML == "") return false;
	if (value == undefined) value = "";
	if (value2 == undefined) value2 = "";
	if (value3 == undefined) value3 = "";
	if (value4 == undefined) value4 = "";
	
	$('#'+SelID).empty();
	$.post(url, {"v": value, "v2": value2, "v3": value3, "v4": value4},function(data){
		$('#'+SelID).append(data);
	});

}
function formatDate(date) {
	var bulan=date.getMonth() +1;
	var tgl=date.getDate();
	if(bulan < 10){
		bulan='0'+bulan;
	}
	
	if(tgl < 10){
		tgl='0'+tgl;
	}
	return date.getFullYear() + "-" + bulan + "-" + tgl;
}


function clear_form(id){
	$('#'+id).find("input[type=text], textarea,select").val("");
	//$('.angka').numbermodulx('setValue',0);
}

var divcontainerz;
function windowLoading(html,judul,width,height){
    divcontainerz = "win"+Math.floor(Math.random()*9999);
    $("<div id="+divcontainerz+"></div>").appendTo("body");
    divcontainerz = "#"+divcontainerz;
    $(divcontainerz).html(html);
    $(divcontainerz).css('padding','5px');
    $(divcontainerz).window({
       title:judul,
       width:width,
       height:height,
       autoOpen:false,
       modal:true,
       maximizable:false,
       resizable:false,
       minimizable:false,
       closable:false,
       collapsible:false,  
    });
    $(divcontainerz).window('open');        
}
function winLoadingClose(){
    $(divcontainerz).window('close');
    //$(divcontainer).html('');
}
function loadingna(){
	windowLoading("<img src='"+host+"__assets/img/loading.gif' style='position: fixed;top: 50%;left: 50%;margin-top: -10px;margin-left: -25px;'/>","Please Wait",200,100);
}

function NumberFormat(value) {
	
    var jml= new String(value);
    if(jml=="null" || jml=="NaN") jml ="0";
    jml1 = jml.split("."); 
    jml2 = jml1[0];
    amount = jml2.split("").reverse();

    var output = "";
    for ( var i = 0; i <= amount.length-1; i++ ){
        output = amount[i] + output;
        if ((i+1) % 3 == 0 && (amount.length-1) !== i)output = '.' + output;
    }
    //if(jml1[1]===undefined) jml1[1] ="00";
   // if(isNaN(output))  output = "0";
    return output; // + "." + jml1[1];
}

function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}
function konversi_pwd_text(id){
	if($('input#'+id)[0].type=="password")$('input#'+id)[0].type = 'text';
	else $('input#'+id)[0].type = 'password';
}
function hapus_file(mod,id,id_list){
	loadingna();
	$.post(host+'HapusFile',{mod:mod,id:id},function(r){
		if(r==1){
			winLoadingClose();
			$('#'+id_list).remove();
		}else{
			console.log(r);
			winLoadingClose();
			$.messager.alert('Aldeaz',"Gagal Menghapus File",'error');
		}
	});
}
function initMap() {
	  var myLatlng = new google.maps.LatLng(-6.381631, 120.382690);
	  var myOptions = {
		  zoom: 7,
		  center: myLatlng,
		  gestureHandling: 'greedy'
	  };
	  peta = new google.maps.Map(document.getElementById("map"), myOptions);
	
}
function ceklks(lang){
	$.post(host+'lihat-lokasi', { 'valnya':$('#lokasi').val(), 'lang':lang }, function(resp){
		var respon=JSON.parse(resp);
		console.log(respon.lat);
		console.log(respon.longi);
		$('#lokasinya').html(respon.cetak);
		var myLatlng = new google.maps.LatLng(respon.longi,respon.lat);
        var myOptions = {
            zoom: 13,
            center: myLatlng
        };
              
//              menampilkan output pada element
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
        var marker = new google.maps.Marker({
             position: myLatlng,
             map: map,
             title:"Monas"
        });

	} );
}

function chart_na(id_selector,type,title,subtitle,title_y,data_x,data_y,satuan){
	switch(type){
	case "column":
	$('#'+id_selector).highcharts({
			chart: {
				type: type
			},
			title: {
				text: title
			},
			subtitle: {
				text: subtitle
			},
			xAxis:{
				type: 'category'
			},
			yAxis: {
				title: {
					text: title_y
				}

			},
			legend: {
				enabled: false
			},
			plotOptions: {
				series: {
					modulrderWidth: 0,
					dataLabels: {
						enabled: true,
						format: '{point.y:.1f}'
					}
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
			},

			series: data_x
			
			
			
        });
		break;
		case "line" :
			$('#'+id_selector).highcharts({
				title: {
				text: title,
				x: -20 //center
				},
				subtitle: {
					text: subtitle,
					x: -20
				},
				xAxis: {
					categories: data_y
				},
				yAxis: {
					title: {
						text: 'Jumlah Dukungan'
					},
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				tooltip: {
					valueSuffix: 'Total'
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle',
					modulrderWidth: 0
				},
				series: data_x
			});
		break;
		case "pie":
			 $('#'+id_selector).highcharts({
				chart: {
					plotBackgroundColor: null,
					plotmodulrderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: title
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: data_x
				/*series: [{
					name: 'Brands',
					colorByPoint: true,
					data: [{
						name: 'Chrome',
						y: 61.41,
						sliced: true,
						selected: true
					}, {
						name: 'Internet Explorer',
						y: 11.84
					}, {
						name: 'Firefox',
						y: 10.85
					}, {
						name: 'Edge',
						y: 4.67
					}, {
						name: 'Safari',
						y: 4.18
					}, {
						name: 'Sogou Explorer',
						y: 1.64
					}, {
						name: 'Opera',
						y: 1.6
					}, {
						name: 'QQ',
						y: 1.2
					}, {
						name: 'Other',
						y: 2.61
					}]
				}]*/
			});
		break;
	}
}
function get_lokasi(wil){
	var ex={};
	var zoom;
	 //alert(wil);
	switch(wil){
		case 'modulGOR':
			ex['long']=106.79981460668944;
			ex['lat']=-6.599092201665239;
			zoom=14;
		break;
		
		case 'All':
			ex['long']=117.19912325500002;
			ex['lat']=-0.6333576479565592;
			zoom=5;
		break;
		case 'SULSEL':
			ex['long']=119.975703;
			ex['lat']=-3.668300;
			zoom=7;
		break;
		
		case 'DKI':
			ex['long']=106.82822456457518;
			ex['lat']= -6.177210450737989;
			zoom=14;
		break;
		
	}
	
	peta.setZoom(zoom);
	peta.setCenter(new google.maps.LatLng(ex['lat'],ex['long']));
	
}

function set_icon(jenisnya){
    switch(jenisnya){
        case "jual":
            gambar_tanda = host+'asset/img/lap_laba.png';
            break;
        case "beli":
            gambar_tanda = host+'asset/img/kredit_jual.png';
            break;
        case "stock":
            gambar_tanda = host+'asset/img/database.png';
            break;
		case "point":
            gambar_tanda = host+'__assets/img/zone.png';
            break;
    }
}

function setjenis(obj){
	//var restoranChk,airportChk,mesjidChk;
		objId=obj.id;
    	jenis = objId;
		//alert(jenis)
		class_na(objId);
		//alert(objId);
		switch(objId){
			case 'jual':
				$('#beli').addClass('legend-hide');
				$('#stock').addClass('legend-hide');
				clearOverlays() 
				ambildatabase('jual');
			break;	
				
			case 'beli':
				$('#jual').addClass('legend-hide');
				$('#stock').addClass('legend-hide');
				clearOverlays() 
				ambildatabase('beli');
			break;	
				
			case 'stock':
				$('#beli').addClass('legend-hide');
				$('#jual').addClass('legend-hide');	
				clearOverlays() 
				ambildatabase('stock');
			break;	
		}	
}
function setinfo(petak, nomor){
    google.maps.event.addListener(petak, 'click', function() {
		//alert (nomor);
		$.post(host+'backend/getdisplay/get_info/',{kec:nomor},function(resp){
			windowForm(resp,'INFORMASI HASIL SURVEY',(getClientWidth()-200),500);
		});
        //$("#jendelainfo").fadeIn();
        //$("#teksjudul").html(judulx[nomor]);
        //$("#teksdes").html(desx[nomor]);
    });
}
function ambildatabase(){
	url = host+"backend/get_point/";
    $.post(host+"backend/get_point/",function(r){
			var a=JSON.parse(r);
			$.each(a.wilayah, function(idx,grp){
				//console.log(grp.x);
				judulx[i] = grp.kec;
                set_icon('point');
                var point = new google.maps.LatLng(
                    parseFloat(grp.x),
                    parseFloat(grp.y)
				);
                tanda = new google.maps.Marker({
                    position: point,
					animation: google.maps.Animation.DROP,
                    map: peta,
					label:{
						text: grp.kec,
						fontSize: "8px"
						//color: 'white'
					},
                    icon: host+'__assets/img/marker.png'
                });
				markersArray.push(tanda);
                setinfo(tanda,grp.id);
			});
    });
}
function kasihtanda(lokasi){
    set_icon(jenis);
    tanda = new google.maps.Marker({
            position: lokasi,
            map: peta,
            icon: gambar_tanda
    });
}
function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
	//  console.log(markersArray[i]);
    markersArray[i].setMap(null);
  }
}
function cariData(mod,acak){
	var _post={};
	_post['prov']=$('#prov_'+acak).val();
	_post['kab']=$('#kab_'+acak).val();
	_post['kec']=$('#kec_'+acak).val();
	_post['kel']=$('#kel_'+acak).val();
	_post['key']=$('#key_'+acak).val();
	grid_nya.datagrid('reload',_post);
}
function get_alat_peraga(acak){
	var _post={};
	_post["kel"]=$('#cl_kelurahan_id_alat_peraga_'+acak).val();
	_post["id_responden"]=id_responden;
	$('#list_alat_peraga').html('').addClass('loading');
	$.post(host+'backend/getdisplay/alat_peraga',_post,function(r){
		$('#list_alat_peraga').removeClass('loading').html(r);
	});
}
var newWindow;
function openWindowWithPost(url,params)
{
    var x = Math.floor((Math.random() * 10) + 1);
	
	if (!newWindow || typeof(newWindow)=="undefined"){
		newWindow = window.open(url, 'winpost'); 
	}else{
		newWindow.close();
		newWindow = window.open(url, 'winpost'); 
		//return false;
	}
	
	var formid= "formid"+x;
    var html = "";
    html += "<html><head></head><moduldy><form  id='"+formid+"' method='post' action='" + url + "'>";

    $.each(params, function(key, value) {
        if (value instanceof Array || value instanceof Object) {
            $.each(value, function(key1, value1) { 
                html += "<input type='hidden' name='" + key + "["+key1+"]' value='" + value1 + "'/>";
            });
        }else{
            html += "<input type='hidden' name='" + key + "' value='" + value + "'/>";
        }
    });
   
    html += "</form><script type='text/javascript'>document.getElementById(\""+formid+"\").submit()</script></moduldy></html>";
    newWindow.document.write(html);
    return newWindow;
}
function tambah_row(mod,param){
	var tr_table;
	
	switch(mod){
		case "bd_tanya":
			idx_row++;
			tr_table +='<tr class="tr_tanya" id="tanya_'+idx_row+'" idx=1>';
			tr_table +='<td valign="top"><input type="text" name="pilihan[]" id="pilihan_{$acak}" class="form-control" placeholder="Isi Option/Pilihan Pertanyaan"></td>';
			tr_table +='<td valign="top"><a href="javascript:void(0);" class="btn btn-xs btn-danger" onclick="$(this).parents(\'tr\').first().remove();">-</a></td></tr>';
		break;
		case "bd_peng":
			idx_row++;
			tr_table +='<tr>';
			tr_table +='<td style="text-align:center;;vertical-align:middle;width:80px">';
			tr_table +='<input type="text" name="p_tahun[]" id="p_tahun_{$acak}" style="width:80px;height:30px;" class="angka">';
			tr_table +='</td>';
			tr_table +='<td>';
			tr_table +='<input type="text" name="p_desc[]" id="p_desc_{$acak}" style="width:100%;height:30px;">';
			tr_table +='</td>';
			tr_table +='<td style="text-align:center;;vertical-align:middle;">';
			tr_table +='<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$(this).parents(\'tr\').first().remove();">-</a></td>';
			tr_table +='</td>';
			tr_table +='</tr>';
		break;
		case "bd_serti":
			idx_row_serti++;
			tr_table +='<tr>';
			tr_table +='<td style="text-align:center;;vertical-align:middle;width:80px">';
			tr_table +='<input type="text" name="s_tahun[]" id="s_tahun_{$acak}" style="width:80px;height:30px;" class="angka">';
			tr_table +='</td>';
			tr_table +='<td>';
			tr_table +='<input type="text" name="s_desc[]" id="s_desc_{$acak}" style="width:100%;height:30px;">';
			tr_table +='</td>';
			tr_table +='<td style="text-align:center;;vertical-align:middle;">';
			tr_table +='<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$(this).parents(\'tr\').first().remove();">-</a></td>';
			tr_table +='</td>';
			tr_table +='</tr>';
		break;
	}
	
	$('.'+mod).append(tr_table);
	$(".validasi").validatebox({ required:true }); 
	$('.angka').numberbox();
	/*$(".angka").numbermodulx({ required:true,min:0,precision:0,groupSeparator:'.',decimalSeparator:',',
		onChange:function(){
			get_total('qty','harga_beli','total',idx_row);
		}
	}); */
	
	
}
function lihat_file(file,mod){
	var jdl,path;
	//windowForm('XXX','aaaa',600,650);
	switch(mod){
		case "tdp":jdl="Preview File TDP";path=host+'__repo/tdp/'+file;break;
		case "sbu":jdl="Preview File SBU";path=host+'__repo/sbu/'+file;break;
		case "surat_kuasa":jdl="Preview File Surat Kuasa";path=host+'__repo/dok/'+file;break;
		case "pakta_integritas":jdl="Preview File Pafta Integritas";path=host+'__repo/dok/'+file;break;
		case "surat_pernyataan":jdl="Preview File Surat Pernyataan";path=host+'__repo/dok/'+file;break;
		case "formulir":jdl="Preview File Formulir";path=host+'__repo/dok/'+file;break;
		case "npwp":jdl="Preview File NPWP";path=host+'__repo/pra_daftar/'+file;break;
		case "siup":jdl="Preview File SIUP";path=host+'__repo/pra_daftar/'+file;break;
		case "ktp":jdl="Preview File KTP";path=host+'__repo/pra_daftar/'+file;break;
		case "pkp":jdl="Preview File PKP";path=host+'__repo/pra_daftar/'+file;break;
		case "rekening":jdl="Preview File Rekening";path=host+'__repo/pra_daftar/'+file;break;
		case "akta":jdl="Preview File Akta";path=host+'__repo/akta/'+file;break;

		case "akta_reg":jdl="Preview File Akta";path=host+'__repo/akta/'+file;break;
		case "npwp_edit":jdl="Preview File NPWP";path=host+'__repo/data_perusahaan/'+file;break;

		case "akta_perubahan":jdl="Preview File KTP";path=host+'__repo/akta/'+file;break;
		case "domisili":jdl="Preview File Domisili";path=host+'__repo/domisili/'+file;break;
		case "ijin_usaha":jdl="Preview File Ijin Usaha";path=host+'__repo/ijin_usaha/'+file;break;
		case "ijin_usaha_reg":jdl="Preview File Ijin Usaha";path=host+'__repo/ijin_usaha/'+file;break;
		case "tdp_reg":jdl="Preview File TDP";path=host+'__repo/tdp/'+file;break;
		case "pajak":jdl="Preview File Ijin Pajak";path=host+'__repo/pajak/'+file;break;
		case "ta":jdl="Preview File Ijin Tenaga Ahli";path=host+'__repo/tenaga_ahli/'+file;break;
		case "peralatan":jdl="Preview File Peralatan";path=host+'__repo/peralatan/'+file;break;
		case "pek_berjalan":jdl="Preview File Ijin Pekerjaan Berjalan";path=host+'__repo/pekerjaan_berjalan/'+file;break;
		case "aspek_keu":jdl="Preview File Ijin Aspek Keuangan";path=host+'__repo/keuangan/'+file;break;
		case "surat_penting":jdl="Preview File Surat Penting Lain";path=host+'__repo/surat_penting/'+file;break;
		case "pengalaman":jdl="Preview File Ijin Pengalaman Perusahaan";path=host+'__repo/pengalaman/'+file;break;
		case "pengurus":jdl="Preview File Pengurus Perusahaan";path=host+'__repo/pengurus/'+file;break;
	}
	//console.log(file);
	var img2= '<embed src="'+path+'" width="100%" height="400" type="application/pdf">';
	$('#judul_modol').html(jdl);
	$('#img').html(img2);
	$('#modol').modal('show');
	
}
function refreshCaptcha(imgCapcha){
	capcha = $('#'+imgCapcha);
	capcha.css({"background-image":"url('"+host+"webpage/genCaptcha/"+Math.random()+"')"});	
}