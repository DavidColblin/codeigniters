<?php

class Site extends Controller{
	
	function index(){
	
		$data2['data2'] = $this->site_model->readAll();
		
		$this->load->view('home', $data2);
	}
	
	function insert(){
		
		$data = array(
			'name' => $this->input->post('insert')
		);
		
		$this->site_model->insertitem($data);
		
		$this->index();
	}
	
	function delete($index){
	
		$this->site_model->delete($index);
		$data2['data2'] = $this->site_model->readAll();
		$this->load->view('home',$data2);
	}
	
	function uritest($msg1, $msg2){
			echo "message1: ". $msg1;
			echo "</br> message2: " . $msg2;
		}
		
	
}//ends class

?>