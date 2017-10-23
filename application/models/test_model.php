<?php 
/**
* 
*/
class Test_model extends CI_Model{

	function get_all_post(){
		//$query=$this->db->query('SELECT * FROM job');
		$this->db->where('CompanyId',1);
		$this->db->select('Name,Email');
		$query=$this->db->get('job');//select * from job
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[]=$row;	
			}
		}
			return $data;
		
	}

	function add_new_post($data){
		$query=$this->db->insert('job',$data);
		return $query;
	}
}
 