<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Makta extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function getdata($type="", $balikan="", $p1="", $p2=""){
		$where = " WHERE 1=1 ";
		switch($type){
			case "user":
				$sql = " 
					SELECT A.*
					FROM drt_peserta A WHERE A.user_id='".$p1."'
				";
				
			break;
			case "projek":
				if($this->input->post('key')){
					$where .=" AND (
							A.no_penawaran like '%".$this->input->post('key')."%' OR 
							B.kantor_cabang like '%".$this->input->post('key')."%' OR 
							A.nama_pemberi_tugas like '%".$this->input->post('key')."%' OR 
							A.alamat like '%".$this->input->post('key')."%' OR 
							A.nama_pengguna_laporan like '%".$this->input->post('key')."%' OR 
							A.alamat_pengguna_laporan like '%".$this->input->post('key')."%' OR 
							A.email like '%".$this->input->post('key')."%' OR 
							A.obj_penilaian like '%".$this->input->post('key')."%'								
					)";
				}
				$sql="SELECT A.*,B.kantor_cabang 
				FROM tbl_projek A 
				LEFT JOIN cl_kantor_cabang B ON A.cl_kantor_cabang_id=B.id ".$where;
				if($p1=='edit'){
					$sql .=" AND A.id=".$this->input->post('id');
				}
			break;
			case "cl_kantor_cabang":
				$sql="SELECT * FROM cl_kantor_cabang ";
			break;
			case "get_idx":
				$sql="SELECT SUBSTR(no_penawaran,7,3)+1 as idx 
					  FROM tbl_projek WHERE DATE(create_date) ='".date('Y-m-d')."'";
			break;
		}
		if($balikan == 'row_array'){
			return $this->result_query($sql,'row_array');
		}elseif($balikan == 'result_array'){
			return $this->result_query($sql);
		}else{
			return $this->result_query($sql,'json');
		}
	}
	function result_query($sql,$type=""){
		switch($type){
			case "json":
				$page = (integer) (($this->input->post('page')) ? $this->input->post('page') : "1");
				$limit = (integer) (($this->input->post('rows')) ? $this->input->post('rows') : "10");
				$count = $this->db->query($sql)->num_rows();
				if( $count >0 ) { $total_pages = ceil($count/$limit); } else { $total_pages = 0; } 
				if ($page > $total_pages) $page=$total_pages; 
				$start = $limit*$page - $limit; // do not put $limit*($page - 1)
				if($start<0) $start=0;
				  
				$sql = $sql . " LIMIT $start,$limit";
			
				$data=$this->db->query($sql)->result_array();  
						
				if($data){
				   $responce = new stdClass();
				   $responce->rows= $data;
				   $responce->total =$count;
				   return json_encode($responce);
				}else{ 
				   $responce = new stdClass();
				   $responce->rows = 0;
				   $responce->total = 0;
				   return json_encode($responce);
				} 
			break;
			case "row_obj":return $this->db->query($sql)->row();break;
			case "row_array":return $this->db->query($sql)->row_array();break;
			default:return $this->db->query($sql)->result_array();break;
		}
	}
	
	// GOYZ CROTZZZ
	function simpan_data($table,$data,$get_id=""){ //$sts_crud --> STATUS NYEE INSERT, UPDATE, DELETE
		//echo $table;exit;
		//print_r($data);exit;
		$this->db->trans_begin();
		$post = array();
		$id = $this->input->post('id');
		$field_id = "id";
		$sts_crud = $this->input->post('sts_crud');
		unset($data['sts_crud']);
		
		switch ($table){
			case "setting":
				$table="tbl_setting";
				$cek = $this->db->get("tbl_setting")->row_array();
				if($cek){
					$id = $cek["id"];
					$sts_crud = "edit";
				}else{
					$sts_crud = "add";
				}
				
				if(isset($_FILES['logo'])){
					if($_FILES['logo']['name']!=''){
						$upload_path = '__assets/img/';
						$file_name = "LOGO-".date('YmdHis');
						$data['logo'] = $this->lib->uploadnong($upload_path, 'logo', $file_name );
					}else{
						$data["logo"] = null;
					}
				}
			break;
			case "input":
				//echo "<pre>";print_r($data);exit;
				$table ="tbl_projek";
			break;
			default:$table = "tbl_".$table;break;
		}
		
		if($sts_crud == 'add'){
			$data['create_date'] = date('Y-m-d H:i:s');
			$data['create_by'] = $this->auth['nama_user'];
			if($table=="tbl_dashboard"){
				$sql="DELETE FROM tbl_dashboard ";
				$this->db->query($sql);
				$this->db->insert_batch($table, $data_dash);
			}else if($table=="tbl_pertanyaan"){
				$this->db->insert($table, $data);
				$id=$this->db->insert_id();
				if(count($pilihan)>0){
					$data_pil=array();
					foreach($pilihan as $x){
						$data_pil[]=array('tbl_pertanyaan_id'=>$id,'pilihan'=>$x);
					}
					$this->db->insert_batch('tbl_pertanyaan_pilihan', $data_pil);
				}
			}else{
				$this->db->insert($table, $data);
			}
			
		}elseif($sts_crud == 'edit'){
			$this->db->update($table, $data, array($field_id=>$id) );
			if($table=="tbl_pertanyaan"){
				if(count($pilihan)>0){
					$this->db->delete('tbl_pertanyaan_pilihan',array('tbl_pertanyaan_id'=>$id));
					$data_pil=array();
					foreach($pilihan as $x){
						$data_pil[]=array('tbl_pertanyaan_id'=>$id,'pilihan'=>$x);
					}
					$this->db->insert_batch('tbl_pertanyaan_pilihan', $data_pil);
				}
				
			}
		}elseif($sts_crud == 'delete'){
			if($table=="tbl_pertanyaan"){
				$this->db->delete('tbl_pertanyaan_pilihan',array('tbl_pertanyaan_id'=>$id));
			}
			$this->db->delete($table, array($field_id=>$id) );
		}
		
		if($this->db->trans_status() == false){
			$this->db->trans_rollback();
			return 0;
		}else{
			return $this->db->trans_commit();	
		}
	}
}