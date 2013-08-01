<?php

class Site extends Controller{

	function index(){
		$this->load->model('site_model');
		$data['records'] = $this->site_model->getAll();
		
		$this->load->view('home', $data);
	}
	
	function create(){
		$this->load->model('site_model');
		
		$data = array (
					'name' => $this->input->post('createname')
				);
				
		$this->site_model->insert($data);
		header("Location: http://localhost/ci/index.php/site");
	}
	
	function delete($id){
	//$id passed in the third segment, converted into a passing variable.
		$this->load->model('site_model');
		//$this->site_model->delete($this->uri->segment(3));
		$this->site_model->delete($id);
		header("Location: http://localhost/ci/index.php/site");
	
	}
	

}
	