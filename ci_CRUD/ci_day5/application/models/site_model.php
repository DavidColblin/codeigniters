<?php

class Site_model extends Model {
	
	function get_records()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	function add_record($data) 
	{
		$this->db->insert('data', $data);
		return;
	}
	
	function update_record($data) 
	{
		$this->db->where('id', 12);
		$this->db->update('data', $data);
	}
	
	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('data');
	}
	
}