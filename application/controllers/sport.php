<?php

class Sport extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('SportModel','',TRUE);
	}
	
	public function index()
	{
		$this->load->library('table');
    
		$sports_qry = $this->SportModel->listAllSports();

		// generate HTML table from query results
		$sports_table = $this->table->generate($sports_qry);
	
		// display information for the view
		$data['title'] = "League Management System - Allowed Sport List";
		$data['headline'] = "G'day, mates.";
		$data['include'] = 'sport_list';
		$data['data_table'] = $sports_table;

		$this->load->view('template', $data);
	}
}