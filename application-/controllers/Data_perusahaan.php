<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perusahaan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!is_login()) {
            $this->session->set_flashdata('msg_warning', 'Session telah kadaluarsa, silahkan login ulang.');
            redirect(base_url());
            exit;
        }
        
    }
    
    
    
	public function index()
	{
		$data['tipe_perusahaan'] = $this->tipe_perusahaan();
		$data['propinsi'] = $this->propinsi();


		$query = $this->db->query("select * from drt_data_perusahaan where id_peserta=".$this->session->userdata('id_peserta')."");

			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
						$data['bentuk_perusahaan'] =$row->bentuk_perusahaan;
						$data['nama_perusahaan'] =$row->nama_perusahaan;

					   $data['npwp'] =$row->npwp;
					   $data['vpropinsi'] =$row->propinsi;
					   $data['vkota'] =$row->kota;
					   $data['no_pengukuhan'] =$row->no_pengukuhan;
					   $data['alamat'] =$row->alamat;
					   $data['telp'] =$row->telp;
					   $data['fax'] =$row->fax;
					   $data['hp'] =$row->hp;
					   $data['kode_pos'] =$row->kode_pos;
					   $data['email'] =$row->email;
					   $data['website'] =$row->website;
					   $data['kantor_cabang'] =$row->kantor_cabang;
			   }
			}else{
				$query = $this->db->query("select * from drt_peserta where id=".$this->session->userdata('id_peserta')."");

					foreach ($query->result() as $row)
					{
					   $data['nama_perusahaan'] =$row->nm_perusahaan;
					   $data['bentuk_perusahaan'] =$row->tipe_perusahaan;
					   $data['alamat'] =$row->alamat;
					   $data['vpropinsi'] =$row->propinsi;
					   $data['vkota'] =$row->kota;
					   $data['no_pengukuhan'] ="";
					   $data['alamat'] ="";
					   $data['telp'] ="";
					   $data['fax'] ="";
					   $data['hp'] ="";
					   $data['kode_pos'] ="";
					   $data['email'] =$row->email;
					   $data['npwp'] ="";
					   $data['website'] ="";
					   $data['kantor_cabang'] ="";

					}
			}

		$this->load->view('backend/data_perusahaan/data_perusahaan_form',$data);
	}

	function tipe_perusahaan(){
		$query = $this->db->query('select * from drt_tipe_perusahaan where status=1');
		return $query;
	}

	function propinsi(){
		$query = $this->db->query('select * from provinces');
		return $query;
	}

	function simpan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime= date("Y-m-d H:i:s");
		$id_peserta=$this->session->userdata('id_peserta');
		$ip_address=$_SERVER['REMOTE_ADDR'];


		$this->db->delete('drt_data_perusahaan', array('id_peserta' => $id_peserta));

		$data = array(
               'id_peserta' => $id_peserta ,
               'bentuk_perusahaan' => $this->input->post('bentuk_perusahaan'),
               'nama_perusahaan' => $this->input->post('nama_perusahaan'),
               'npwp' => $this->input->post('npwp'),
               'no_pengukuhan' => $this->input->post('no_pengukuhan'),
               'alamat' => $this->input->post('alamat'),
               'propinsi' => $this->input->post('propinsi'),
               'kota' => $this->input->post('kota'),
               'telp' => $this->input->post('telp'),
               'fax' => $this->input->post('fax'),
               'hp' => $this->input->post('hp'),
               'kode_pos' => $this->input->post('kode_pos'),
               'email' => $this->input->post('email'),
               'website' => $this->input->post('website'),
               'kantor_cabang' => $this->input->post('kantor_cabang'),
               'created' => $datetime,
               'ip_address' =>$ip_address,
            );

		$this->db->insert('drt_data_perusahaan', $data);

		$this->session->set_flashdata('success', 'Data Telah tersimpan');
		redirect(base_url('data_perusahaan'));



	}


}
