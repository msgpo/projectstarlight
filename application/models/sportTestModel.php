<?php

class SportTestModel extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('SportModel','',TRUE);
	}	
		/* Sport Sample Data:
		 * ID: 1
		 * Sport Name: Australian Rules Football
		 */
		
	function testIfSportExists()
	{
		$result = $this->SportModel->getSportById(1);
		$test_res = $result; // matches content, the return value is the id
		$test_name = 'Checks if a sport with a certain ID number exists';
		$this->unit->run($test_res, 'is_string', $test_name); 
	}
	
	function testForNonExistentSport()
	{
		$result = $this->SportModel->getSportById(0);
		$test_res = $result; // matches content, the return value is the id
		$test_name = 'Checks if a sport does not exist, given a certain ID';
		$this->unit->run($test_res, "No sports listed", $test_name); 
	}

}

/* End of file sportTestModel.php */
/* Location: ./application/models/sportTestModel.php */