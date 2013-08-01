<?php

class site extends Controller{
	function index(){
	
		//$data['data'] = 'asd';
		$this->load->model('ci_test');
		$data['data'] =  $this->ci_test->getperQuery();
		$this->load->view('home',$data);
		
		
		
		

	}//ends index()

}//ends class

?>