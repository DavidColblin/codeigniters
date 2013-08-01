<?php

class ci_test extends Model {
	
	function getAlls() {
		$q = $this->db->get('tabletest');
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
		return $data;
		}
	}
	
	function getperQuery(){
		
		$query = $this->db->query('SELECT * FROM tabletest');
		
		if ($query->num_rows() > 0){
			foreach ($query->result() as $rows){
				$data[] = $rows;
			}//ends foreach
		}
		
		return $data;
	
	}//ends function getperQuery
	
}

