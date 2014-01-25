<?php

class SportTestController extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('SportTestModel','',TRUE);
	}
	
	public function index()
	{
		//Test 1
		$this->SportTestModel->testIfSportExists();
		$this->SportTestModel->testForNonExistentSport();
		echo $this->unit->report();
	}
}

