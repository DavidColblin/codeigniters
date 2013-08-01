<?php

class site_model extends Model{

	function insertitem($data){
		
		$this->db->insert('tabletest',$data);
	}
}

?>