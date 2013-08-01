<?php
	
	class Site_model extends Model{
	
		function insertitem($data){
			
			$query = "UPDATE tabletest SET name = 'updated' WHERE id= 1";
			
			$this->db->insert('tabletest', $data);
			$this->db->query($query);
			
		}
		
		function readAll(){
			
			$data = $this->db->get('tabletest');
			
			
			if ($data->num_rows() > 0){
				foreach ($data->result()  as $row){
					$data2[] = $row;
				}
			}
			return $data2;
		}
		
		function delete($index){
			
			//$indexArray = array('id' => $this->uri->segment(3));
			
			$query = "DELETE FROM tabletest WHERE id =". $index; 
			
			$this->db->query($query);
		}
		
		
		
	}

?>