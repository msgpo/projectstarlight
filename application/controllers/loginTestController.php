<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginTestController extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('LoginTestModel','',TRUE);
	}

	public function index()
	{
		//Test 1
		$this->LoginTestModel->testCorrectCredentials();
		$this->LoginTestModel->testBlankCredentials();
		$this->LoginTestModel->testWrongUsername();
		$this->LoginTestModel->testWrongPassword();
		echo $this->unit->report();
		
		echo base_url();
	}
}

/* End of file LeagueTest.php */
/* Location: ./application/controllers/LeagueTest.php */