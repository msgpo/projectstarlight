<?php

class Sport extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('SportModel','',TRUE);
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('table');
	}
	
	public function index()
	{
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
	
	public function addsport()
	{
		// display information for the view
		$data['title'] = "League Management System - Add new sport";
		$data['headline'] = "Add a New Sport";
		$data['include'] = 'sport_add';

		$this->load->view('template', $data);
	}
	
	public function createsport()
	{
		$this->SportModel->addNewSport($_POST);
		redirect('sport/index','refresh');
	}
}