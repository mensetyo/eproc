<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'webpage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['backoffice-simpan/(:any)'] = 'backend/saveData/$1';
$route['Registrasi-Data'] = 'webpage/reg/simpan';
$route['Registrasi'] = 'webpage/reg';
$route['Remainder/(:any)'] = 'webpage/remainder/$1';
$route['New-pwd'] = 'webpage/updt_pwd';
$route['dwn/(:any)'] = 'modul/download_temp/$1';

