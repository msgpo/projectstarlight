<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginTestModel extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('LoginModel','',TRUE);
	}
	

	function testCorrectCredentials()
	{
		$result = $this->LoginModel->checkCredentials("kureido","sniper");
		$test_res = ($result === 1); // matches content
        $expected_result = true;
        $test_name = 'Has the user submitted the correct details?';
        $this->unit->run($test_res, $expected_result, $test_name); 
	}
}

/* End of file loginTestModel.php */
/* Location: ./application/controllers/loginTestModel.php */