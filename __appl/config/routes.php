<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'webpage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['backoffice-simpan/(:any)'] = 'backend/saveData/$1';
$route['Registrasi-Data'] = 'webpage/reg/simpan';
$route['Registrasi'] = 'webpage/reg';
$route['LupaPwd'] = 'webpage/getkonten/form_lupa';
$route['RePwd'] = 'webpage/re_pwd';
$route['KirimPenawaran'] = 'webpage/upload_penawaran';
$route['KirimPenawaran1'] = 'webpage/upload_penawaran/thp1';
$route['KirimPenawaranSt'] = 'webpage/upload_penawaran/st';
$route['KirimPenawaranTs'] = 'webpage/upload_penawaran/ts';
$route['KirimPenawaranLl'] = 'webpage/upload_penawaran/ll';
$route['KirimPenawaran2'] = 'webpage/upload_penawaran/thp2';
$route['NegosiasiPenawaran'] = 'webpage/crud_all/negosiasi';
$route['NegosiasiPenawaranTs'] = 'webpage/crud_all/negosiasi_ts';
$route['NegosiasiUlangPenawaranTs'] = 'webpage/crud_all/negosiasi_ulang_ts';
$route['NegosiasiUlangPenawaran'] = 'webpage/crud_all/negosiasi_ulang';
$route['NegosiasiUlangPenawaranLl'] = 'webpage/crud_all/negosiasi_ulang_ll';
$route['NegosiasiPenawaranLl'] = 'webpage/crud_all/negosiasi_ll';
$route['NegosiasiPenawaranDeal'] = 'webpage/crud_all/negosiasi_deal';
$route['NegosiasiPenawaranDealTs'] = 'webpage/crud_all/negosiasi_deal_ts';
$route['NegosiasiUlangPenawaranDealTs'] = 'webpage/crud_all/negosiasi_ulang_deal_ts';
$route['NegosiasiUlangPenawaranDeal'] = 'webpage/crud_all/negosiasi_ulang_deal';
$route['NegosiasiUlangPenawaranDealLl'] = 'webpage/crud_all/negosiasi_ulang_deal_ll';
$route['NegosiasiPenawaranDealLl'] = 'webpage/crud_all/negosiasi_deal_ll';
$route['KirimSanggahan'] = 'webpage/crud_all/sanggah';
$route['DaftarLelang'] = 'webpage/crud_all/eproc_pengadaan_ls_rekanan';
$route['Remainder/(:any)'] = 'webpage/remainder/$1';
$route['New-pwd'] = 'webpage/updt_pwd';
$route['dwn/(:any)'] = 'modul/download_temp/$1';
$route['GetInfo/(:any)/(:any)'] = 'webpage/getkonten/$1/$2';