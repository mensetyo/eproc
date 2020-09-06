<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'webpage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['backoffice-simpan/(:any)'] = 'backend/saveData/$1';
$route['Registrasi-Data'] = 'webpage/reg/simpan';
$route['Registrasi'] = 'webpage/reg';
$route['KirimPenawaran'] = 'webpage/upload_penawaran';
$route['KirimPenawaran1'] = 'webpage/upload_penawaran/thp1';
$route['KirimPenawaranSt'] = 'webpage/upload_penawaran/st';
$route['KirimPenawaran2'] = 'webpage/upload_penawaran/thp2';
$route['NegosiasiPenawaran'] = 'webpage/crud_all/negosiasi';
$route['NegosiasiPenawaranDeal'] = 'webpage/crud_all/negosiasi_deal';
$route['KirimSanggahan'] = 'webpage/crud_all/sanggah';
$route['Remainder/(:any)'] = 'webpage/remainder/$1';
$route['New-pwd'] = 'webpage/updt_pwd';
$route['dwn/(:any)'] = 'modul/download_temp/$1';
$route['GetInfo/(:any)/(:any)'] = 'webpage/getkonten/$1/$2';