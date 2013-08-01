<?php

class Site extends Controller{
	
	function index(){
	$data['message'] = "";
	
		$this->load->view('site_view', $data);
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	function login(){
	
		$this->form_validation->set_rules('name', 'Name Field', 'required');
		$this->form_validation->set_rules('password', 'Password Field', 'required');
		$this->form_validation->set_rules('email', 'Email Field', 'required|valid_email');
		
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		
		$data['message'] = "<a href='../site'> try again </a>";
		
		
		if (($this->form_validation->run())==false){
			$data['message'] .= "error occured";
		}
		
		$this->load->view('site_view', $data);
	}
}