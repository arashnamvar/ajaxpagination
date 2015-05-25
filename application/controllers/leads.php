<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class leads extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("lead");
		// $this->output->enable_profiler();
	}

	public function index()
	{	
		$this->load->view("index");
	}

	public function update()
	{
		$update_data = $this->input->post();
		$lol = $this->lead->update_results($update_data);
		$data["all_results"] = $lol;
		$this->load->view("/partials/leads", $data);
	}
		// IF user changes the name or dates, then run a query with that information in the query, generate new pagination in the partial based off of the results 
		// IF user just clicks on a page, then do a query with the same inputs from last time (make sure they're still in the form) (make the new page number be bolded that was selected)

}

//end of main controller