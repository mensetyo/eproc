<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

//public function __construct() { 
//parent::__construct(); 

//$this->load->library('email'); //tambahkan dalam contruct pemanggil libarary mail
//}


	public function login_proses()
	{
		$user_id=$this->input->post('user_id');
		$password=$this->input->post('password');
		
		//echo $password;
		$query = $this->db->query("select * from drt_peserta where user_id='".$user_id."' and rpass='".$password."'");

		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
			  $data['user_id']= $row->user_id;
			  $data['id_peserta']= $row->id;
			  $data['email']= $row->email;
			  // $data['nama_lengkap']= $row->nama_lengkap;
			  // $data['tipe_perusahaan']= $row->tipe_perusahaan;
			  // $data['nm_perusahaan']= $row->nm_perusahaan;
			 
		   }
		   
			$this->session->set_userdata($data);
			$this->session->set_flashdata('wellcome', 'Selamat datang '.$this->session->userdata('nama_lengkap'));
			// redirect(base_url('backend/mainpage'));
			//redirect(base_url('data_perusahaan'));
			redirect(base_url('dashboard'));
		}else{
			$this->session->set_flashdata('after_save', 'Maaf Username dan Password anda Salah');
			// redirect(base_url('firstpage/after_registrasi'));
			redirect(base_url('webpage/login'));
			
		} 

	}
	
	// function random_password() 
// {
    // $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    // $password = array(); 
    // $alpha_length = strlen($alphabet) - 1; 
    // for ($i = 0; $i < 8; $i++) 
    // {
        // $n = rand(0, $alpha_length);
        // $password[] = $alphabet[$n];
    // }
    // return implode($password); 
// }



function generate_unique_username($string_name, $rand_no){

    while(true){
        $username_parts = array_filter(explode(" ", strtolower($string_name))); //explode and lowercase name
        $username_parts = array_slice($username_parts, 0, 2); //return only first two arry part
    
        $part1 = (!empty($username_parts[0]))?substr($username_parts[0], 0,8):""; //cut first name to 8 letters
        $part2 = (!empty($username_parts[1]))?substr($username_parts[1], 0,5):""; //cut second name to 5 letters
        $part3 = ($rand_no)?rand(0, $rand_no):"";
        
        $username = $part1. str_shuffle($part2). $part3; //str_shuffle to randomly shuffle all characters 
        
       // $username_exist_in_db = username_exist_in_database($username); //check username in database
       // if(!$username_exist_in_db){
            return $username;
        //}
    }
}


	function register_proses()
	{
			date_default_timezone_set('Asia/Jakarta');
			$datetime= date("d-m-Y H:i:s");
			$datetime2= date("Y-m-d H:i:s");
	
			$tipe_perusahaan=$this->input->post('tipe_perusahaan');
			$email=$this->input->post('email');
			$propinsi=$this->input->post('propinsi');
			$kota=$this->input->post('kota');
			$nama_perusahaan=$this->input->post('nama_perusahaan');
			$npwp=$this->input->post('npwp');
			$alamat=$this->input->post('alamat');
			//$user_id=$this->input->post('user_id');
			$nama_lengkap=$this->input->post('nama_lengkap');
			$user_id=$this->generate_unique_username($nama_lengkap,10);
			
			//$pass=$this->input->post('pass');
			$pass=rand();
			//$setuju=$this->input->post('setuju');
	
			//$from_email = "eproc@jmto.co.id";
			$from_email = "info_eproc@jmto.co.id";
			//$from_email = "no-replay@jmto.co.id";
			$to_email=$email;
			//$to_email="ismail.proyek@gmail.com";
			
			$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'mail.jmto.co.id',
			    'smtp_port' => 26,
			    'smtp_user' => $from_email,
			    //'smtp_pass' => 'eproc2018$$$$',
				//'smtp_pass' => 'JLOnoreplay2018$',
				'smtp_pass' => 'Ibra030684',
			    'mailtype'  => 'html',
			    'charset'   => 'iso-8859-1'
			    );
			
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$comment=$this->input->post('comment', TRUE);
	
			$this->email->from($from_email, 'JMTO Eproc');
			$this->email->to($to_email);
			$this->email->subject("Konfirmasi Email (JMTO e-Procurement)  Jam  ".$datetime);
			
		
	
			$isi='
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<blockquote>&nbsp;</blockquote>
<table width="100%" height="246" border="0">
  <tbody>
    <tr>
      <td width="277">&nbsp;<img src="http://jmto.co.id/assets/img/logo/logo.png"></td>
      <td width="81">&nbsp;</td>
      <td width="11">&nbsp;</td>
      <td width="442">&nbsp;</td>
      <td width="224">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Terima Kasih</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">Anda telah bergabung dengan JMTO e-Procurement, berikut adalah username dan password yang wajib Anda gunakan ketika login di website http://www.eproc.jmto.co.id</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td align="left">Username</td>
      <td>:</td>
      <td>&nbsp;'.$user_id.'</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Password</td>
      <td>:</td>
      <td>&nbsp;'.$pass.'</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30" colspan="5">Jika ada pertanyaan lebih lanjut Anda dapat menghubungi helpdesk kami.
      <br></td>
    </tr>
    <tr>
      <td colspan="3">HelpDesk E-procurement</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">PT. Jasamarga Tollroad Operator</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;Gedung Cabang Jokorawi Lt. 4, Plaza Tol Taman Mini Indonesia Indah, 
      </td>
    </tr>
    <tr>
      <td colspan="3">Jakarta 13550 Indonesia</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Email : eproc@jmto.co.id</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Telp:(021)22984722</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">Untuk mengaktifkan user id anda silahkan klik url ini&nbsp;&nbsp;<a href="http://eproc.jmto.co.id/webpage/login" target="_blank">http://eproc.jmto.co.id/webpage/login</a></td>
    </tr>
  </tbody>
</table>
</body>
</html>
';
			
		
		
			
			
			
			$this->email->message($isi);
			
			//Send mail
			if($this->email->send()){
			    $data = array(
			        'user_id' => $user_id,
			        'email' => $email,
			        'tipe_perusahaan' => $tipe_perusahaan,
			        'nm_perusahaan' => $nama_perusahaan,
			        'nama_lengkap' => $nama_lengkap,
			        'alamat' => $alamat,
							'no_tlp'=>$this->input->post('tlp'),
							'no_hp'=>$this->input->post('hp'),
			        'kota' => $kota,
							'propinsi'=>$propinsi,
			        'pass' =>md5($pass),
			        'status' =>0,
			        'rpass' =>($pass),
			        'created' =>$datetime2
			    );
			    
			    $this->db->insert('drt_peserta', $data); 
			    
			    $this->session->set_flashdata('success', 'Terima Kasih, Data anda telah terkirim, Silahkan buka email anda untuk proses selanjutnya');
			    
			    redirect(base_url('webpage/register'));
			    
			    //echo "Email berhasil terkirim.";
			    //$this->session->set_flashdata("notif","Email berhasil terkirim.");
			}else {
			    echo "Email gagal terkirim.";
			    //$this->session->set_flashdata("notif","Email gagal dikirim.");
			}
			
			
		
		
		//echo "ssss";exit;
	/*$this->load->library("PhpMailerLib");
        $mail = $this->phpmailerlib->load();
	try {
		  
			$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.jmto.co.id';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'eproc@jmto.co.id';                 // SMTP username
		    $mail->Password = 'eproc2018%';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to
		    //Recipients
		    $mail->setFrom('eproc@jmto.co.id', 'Admin JMTO e-Procurement');
		    $mail->addAddress($email, 'Yth');     // Add a recipient
									
			$data = array(
			              'user_id' => $user_id,
						   'email' => $email,
						   'tipe_perusahaan' => $tipe_perusahaan,
						   'nm_perusahaan' => $nama_perusahaan,
						   'nama_lengkap' => $nama_lengkap,
						   'alamat' => $alamat,
						   'kota' => $kota,
						   'pass' =>md5($pass),
						   'status' =>0,
						   'rpass' =>($pass),
						   'created' =>$datetime
						);

			$this->db->insert('drt_peserta', $data); 

		    //Content
		    $mail->isHTML(true); // Set email format to HTML
		    $mail->Subject = "Konfirmasi Email (JMTO e-Procurement)  Jam ".$datetime;
		    $mail->Body    = "Terima Kasih anda telah bergabung dengan JMTO  e-Procurement
         <br/> User ID : ".$this->input->post('user_id')."<br/> 
               Password :".$pass."<br/>
			<br/><br/><br/>Jika ada pertanyaan silahkan hubungi alamat dan no telepon yang tertera di bawah ini.
            <br/><br/>
			&nbsp;&nbsp; Alamat : Gedung Cabang Jokorawi Lt. 4, Plaza Tol Taman Mini Indonesia Indah, Jakarta 13550 Indonesia.<br/><br/>
			&nbsp;&nbsp; No. Telepon : (021) 22 9847 22
			<br/>Untuk mengaktifkan user id anda  silahkan klik url ini http://eproc.jmto.co.id/webpage/login";
		    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

		    $mail->send();
			$this->session->set_flashdata('success', 'Terima Kasih, Data anda telah terkirim');

			redirect(base_url('webpage/register'));

		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}*/
	}
	
	
	function sign_out()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('after_save', 'Terima Kasih anda sudah logout');
		// redirect(base_url('firstpage/after_registrasi'));
		redirect(base_url('firstpage/login'));
	}
	
	function mainpage()
	{
		$this->load->view('backend/mainpage/main_tpl');
	}
	
	function daftar_proses()
	{
		$tipe_perusahaan=$this->input->post('tipe_perusahaan');
		$nama_perusahaan=$this->input->post('nama_perusahaan');
		$tlp=$this->input->post('tlp');
		$email=$this->input->post('email');
		$klasifikasi=$this->input->post('klasifikasi');
		
		//print_r($klasifikasi);exit;
		
		//$ktp=$this->input->post('ktp');
		//$siup=$this->input->post('siup');
		//$tdp=$this->input->post('tdp');
		//$npwp=$this->input->post('npwp');
		
		
					if (!empty($_FILES['ktp']['tmp_name'])) {
						$tempFile = $_FILES['ktp']['tmp_name'];
						$temp = $_FILES["ktp"]["name"];
						$path_parts = pathinfo($temp);
						//$t = preg_replace('/\s+/', '', microtime());
						//$t = uniqid($temp, true);
						$t = date('d_m_Y_H_i_s');
						$fileKtp = 'ktp_'.$t.'_'. '.' . $path_parts['extension'];
						$targetPath = './uploads/pra_daftar/';
						$targetFile = $targetPath . $fileKtp ;
							
						move_uploaded_file($tempFile, $targetFile);
				
					}else{
						$fileKtp ="";
					}
					
					if (!empty($_FILES['siup']['tmp_name'])) {
						$tempFile = $_FILES['siup']['tmp_name'];
						$temp = $_FILES["siup"]["name"];
						$path_parts = pathinfo($temp);
						//$t = preg_replace('/\s+/', '', microtime());
							//$t = uniqid($temp, true);
							$t = date('d_m_Y_H_i_s');
						$fileSiup = 'siup_'.$t.'_'. '.' . $path_parts['extension'];
						$targetPath = './uploads/pra_daftar/';
						$targetFile = $targetPath . $fileSiup ;
							
						move_uploaded_file($tempFile, $targetFile);
				
					}else{
						$fileSiup ="";
					}
					
					
					if (!empty($_FILES['tdp']['tmp_name'])) {
						$tempFile = $_FILES['tdp']['tmp_name'];
						$temp = $_FILES["tdp"]["name"];
						$path_parts = pathinfo($temp);
						//$t = preg_replace('/\s+/', '', microtime());
							//$t = uniqid($temp, true);
							$t = date('d_m_Y_H_i_s');
						$fileTdp = 'tdp_'.$t.'_'. '.' . $path_parts['extension'];
						$targetPath = './uploads/pra_daftar/';
						$targetFile = $targetPath . $fileTdp ;
							
						move_uploaded_file($tempFile, $targetFile);
				
					}else{
						$fileTdp ="";
					}
					
					
					if (!empty($_FILES['npwp']['tmp_name'])) {
						$tempFile = $_FILES['npwp']['tmp_name'];
						$temp = $_FILES["npwp"]["name"];
						$path_parts = pathinfo($temp);
						//$t = preg_replace('/\s+/', '', microtime());
							$t = date('d_m_Y_H_i_s');
						$fileNpwp = 'npwp_'.$t.'_'. '.' . $path_parts['extension'];
						$targetPath = './uploads/pra_daftar/';
						$targetFile = $targetPath . $fileNpwp ;
							
						move_uploaded_file($tempFile, $targetFile);
				
					}else{
						$fileNpwp ="";
					}
					
						
			$data = array(
               'id_tipe_perusahaan' => $tipe_perusahaan,
               'nama_perusahaan' => $nama_perusahaan ,
               'tlp' => $tlp,
               'email' => $email,
               'file_ktp' => $fileKtp,
               'file_siup' => $fileSiup,
               'file_tdp' => $fileTdp,
               'file_npwp' => $fileNpwp,
               'barang' => $klasifikasi[0]==null?0:1,
               'jasa_lain' => $klasifikasi[1]==null?0:1,
               'jasa_konsultansi' =>  $klasifikasi[2]==null?0:1,
               'jasa_lainnya' =>  $klasifikasi[3]==null?0:1,
            );

			$this->db->insert('drt_pra_daftar', $data); 
			
			//echo $this->db->last_query();exit;
			$this->session->set_flashdata('success', 'Terimakasih telah mendaftarkan perusahaan anda,<br/> data yang dimasukan sudah terkirim, silahkan menunggu proses verifikasi dan pemberitahuan hasil verifikasi akan kami informasikan melalui email yang sudah didaftarkan');
			    
			#redirect(base_url('webpage/register'));
			redirect(base_url('webpage/register_sukses'));
	}

}
