<?php
class Site extends Controller{
	
	function index(){
		
		$this->load->view('homepage');
	}
	
	function form(){
	
			$name['data'] = $this->input->post('name');
			
			if ($ajax = $this->input->post('ajax')){
				echo $name['data'];
			}
			else{
				$this->load->view('homepage', $name);
			
	
			}
			
	}

}