<?php
	
class Site_model extends model{
	
	function getAll(){
		$all = $this->db->query("SELECT * FROM table_test");
		//$all = $this->db->get('table_test');
		
		if ($all->num_rows() >0){
			foreach($all->result() as $row){
				$data[] = $row;
			}
			//return $data;
			return $all->result();
		}
		
	}
	
	function insert($data){
		$this->db->insert('table_test',$data);
	}
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('table_test');
	}
}

?>