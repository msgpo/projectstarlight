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
		$tmpl = array (
      'table_open' => '<table border="0" cellpadding="3" cellspacing="0">',
      'heading_row_start' => '<tr bgcolor="#66cc44">',
      'row_start' => '<tr bgcolor="#dddddd">' 
      );
    $this->table->set_template($tmpl); 
    
    $this->table->set_empty("&nbsp;"); 
  
    $this->table->set_heading('', 'Sport Name');
  
    $table_row = array();
    foreach ($sports_qry->result() as $sport)
    {
      $table_row = NULL;
      $table_row[] = anchor('sport/edit/' . $sport->sport_id, 'Edit');
      $table_row[] = $sport->sport_name;

      $this->table->add_row($table_row);
    }    

		$sports_table = $this->table->generate();
	
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