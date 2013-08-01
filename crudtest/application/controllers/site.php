<?php

class Site extends Controller{

		
	function index(){
		$message['message'] = "";
		$this->load->view('welcome_message', $message);
	}
	
	function create(){
	
		$data = array(
			'name' => $this->input->post('insert')
			
		);
		
		$this->site_model->insertitem($data);
		
		$this->load->view('welcome_message',$data);
	}
	
	function david(){
		$message['message'] = "David";
		$this->load->view('welcome_message',$message);
		
	}
}//ends class


?>