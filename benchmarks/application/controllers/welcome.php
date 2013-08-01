<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('welcome_message');
		$this->output->enable_profiler(true);
		$this->load->library('calendar');

echo $this->calendar->generate();
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */