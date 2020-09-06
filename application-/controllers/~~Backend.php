<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {


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


	function register_proses()
	{
			date_default_timezone_set('Asia/Jakarta');
			$datetime= date("Y-m-d H:i:s");
	
			$tipe_perusahaan=$this->input->post('tipe_perusahaan');
			$email=$this->input->post('email');
			$kota=$this->input->post('kota');
			$nama_perusahaan=$this->input->post('nama_perusahaan');
			$npwp=$this->input->post('npwp');
			$alamat=$this->input->post('alamat');
			$user_id=$this->input->post('user_id');
			$nama_lengkap=$this->input->post('nama_lengkap');
			$pass=$this->input->post('pass');
			$setuju=$this->input->post('setuju');
			
			
			// $query = $this->db->query("select * from drt_peserta where email='".$email."'");

				// if ($query->num_rows() > 0)
				// {
				   // foreach ($query->result() as $row)
				   // {
					  // $dataEmail= $row->email;
				   // }
					// $this->session->set_flashdata('success', 'Maaf Email anda sudah terdaftar');

					// redirect(base_url('webpage/register'));
			
				  
				// }


			   // $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
				// $password = array(); 
				// $alpha_length = strlen($alphabet) - 1; 
				// for ($i = 0; $i < 8; $i++) 
				// {
					// $n = rand(0, $alpha_length);
					// $password[] = $alphabet[$n];
				// }
				
			// $pass=(implode($password));
		
		//echo "ssss";exit;
	$this->load->library("PhpMailerLib");
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
						   'user_id' => $email,
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
		    $mail->Subject = "Konfirmasi Email (JMTO e-Procurement) pengirim:".$email." Jam ".$datetime;
		    $mail->Body    = "Terima Kasih anda telah bergabung dengan JMTO  e-Procurement <br/> User ID : ".$this->input->post('user_id')."<br/> Penyedia :".$this->input->post('nama_perusahaan')."<br/>
			<br/><br/><br/>Jika ada pertanyaan silahkan hubungi alamat dan no telepon yang tertera di bawah ini.<br/><br/>
			&nbsp;&nbsp; Alamat : Gedung Cabang Jokorawi Lt. 4, Plaza Tol Taman Mini Indonesia Indah, Jakarta 13550 Indonesia.<br/><br/>
			&nbsp;&nbsp; No. Telepon : (021) 22 9847 22
			<br/>Untuk mengaktifkan user id anda  silahkan klik url ini http://eproc.jmto.co.id/webpage/login";
		    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

		    $mail->send();
			$this->session->set_flashdata('success', 'Terima Kasih, Data anda telah terkirim');

			redirect(base_url('webpage/register'));
		    //echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
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

}
