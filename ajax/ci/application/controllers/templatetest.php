<?php
class Templatetest extends Controller{

	function index(){
		 
			$data = "Data Forwarded";
		 
		 
		$message['data'] = $data;
		$this->load->view('templatetest', $message);
	}
	
	function form(){
	
		$message['data'] = "Hello " . $this->input->post('name') . "! :)";
		$this->load->view('templatetest', $message);
	}
	
	function ajax(){
		$name = $this->input->post('name');
		echo  "HELLO $name";
	}
}

?>