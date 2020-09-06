<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Mbackend extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->auth = unserialize(base64_decode($this->session->userdata('sipbbg-k3pr1')));
	}
	
	function getdata($type="", $balikan="", $p1="", $p2=""){
		$where = " WHERE 1=1 ";
		switch($type){
			case "get_pertanyaan":
				$sq="";
				if($p1==3)$sq="ORDER BY tbl_kategori_pertanyaan_id ASC";
				$sql = "
					SELECT A.*,B.kategori
					FROM tbl_pertanyaan A
					LEFT JOIN tbl_kategori_pertanyaan B ON A.tbl_kategori_pertanyaan_id=B.id
					WHERE A.tbl_group_pertanyaan_id = '".$p1."'".$sq;
			break;
			case "contoh":
				$data=array();
				$sql="SELECT A.*,B.objek 
					  FROM tbl_pertanyaan A 
					  LEFT JOIN cl_objek B ON A.cl_objek_id=B.id 
					  ";
				$res=$this->db->query($sql)->result_array();
				foreach($res as $x=>$v){
					$data[$x]=array('id'=>$v['id'],'tanya'=>$v['pertanyaan'],'obj'=>$v['objek']);
					$sql="SELECT * FROM tbl_pertanyaan_pilihan WHERE tbl_pertanyaan_id=".$v['id'];
					$res=$this->db->query($sql)->result_array();
					if(count($res)>0){
						$data[$x]['pilihan']=array();
						foreach($res as $a=>$b){$data[$x]['pilihan'][$b['id']]=$b['pilihan'];}
						
					}
				}
				//echo "<pre>";print_r($data);
				return $data;
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

	function get_combo($type="", $p1="", $p2=""){
		switch($type){
			case "tbl_pertanyaan_pilihan":
				$sql = "
					SELECT id, pilihan as txt
					FROM tbl_pertanyaan_pilihan
					WHERE tbl_pertanyaan_id = '".$p1."'
				";
			break;
		}
		
		return $this->db->query($sql)->result_array();
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
	function simpandata($p1="",$post=""){ //$sts_crud --> STATUS NYEE INSERT, UPDATE, DELETE
		$this->db->trans_begin();
		
		switch($p1){
			case "survey_responden":
				$cekresponden = $this->db->get_where("tbl_responden", array("no_ktp"=>$post["2"]) )->row_array();
				if($cekresponden){
					echo 3;
					exit;
				}

				$array_responden = array(
					"nama_responden" => $post['1'],
					"no_ktp" => $post['2'],
					"no_hp" => $post['3'],
					"create_date" => date('Y-m-d H:i:s'),
					"create_by" => "Survey Responden"
				);
				$insert = $this->db->insert("tbl_responden", $array_responden);
				if($insert){
					unset($post["1"]);
					unset($post["2"]);
					unset($post["3"]);
					
					$id = $this->db->insert_id();
					$arr_pertanyaan = array();
					foreach($post as $k => $v){
						$exp = explode("_", $k);
						
						if(!in_array($exp[1], $arr_pertanyaan)){
							$array_jwb = array(
								"tbl_responden_id" => $id,
								"tbl_pertanyaan_id" => $exp[1],
							);

							if($exp[0] == "2"){
								$array_jwb["tbl_pertanyaan_pilihan_id"] = $v;
							}elseif($exp[0] == "5"){
								$array_jwb["tingkat_kepentingan"] = $post[$exp[0]."_".$exp[1]."_kepentingan"];
								$array_jwb["tingkat_kinerja"] = $post[$exp[0]."_".$exp[1]."_kinerja"];
							}

							$this->db->insert("tbl_jawaban_responden", $array_jwb);
							array_push($arr_pertanyaan, $exp[1]);
						}
						
					}
				}

			break;
		}

		if($this->db->trans_status() == false){
			$this->db->trans_rollback();
			return 0;
		}else{
			return $this->db->trans_commit();	
		}
	}
}