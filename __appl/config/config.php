<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['base_url'] = "https://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])).'/';
//$config['base_url'] = "";
$config['index_page'] = '';
$config['uri_protocol']	= 'AUTO';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
//$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['permitted_uri_chars'] 	= 'a-z 0-9~%.:_\-\=';
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['cache_path'] = '';
$config['encryption_key'] = 'dfALfpwMG98smd764JfpdfCVB0065sgj';
$config['sess_cookie_name']		= 'jingga_session';
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= FALSE;
$config['sess_encrypt_cookie']	= FALSE;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']		= 'jingga_session';
$config['sess_match_ip']		= FALSE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;
$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';
$config['user_data'] = 'jR3st0m4n';
$config['modeling'] = 'G0yz-cUyz1987';

$config["SMTPAuth"]				= TRUE;
$config["SMTP"]					= TRUE;
$config["Port"]					= 26;
$config["Host"]					= 'mail.jmto.co.id';
$config["Username"]				= 'info_eproc@jmto.co.id';
$config["Password"]				= 'JMTOinfoeproc2020$';
$config["EmaiFrom"]				= 'info_eproc@jmto.co.id';
$config["EmaiFromName"]			= "JMTO Eproc";


/* End of file config.php */
/* Location: ./application/config/config.php */
