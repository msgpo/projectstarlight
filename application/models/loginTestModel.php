<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginTestModel extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('LoginModel','',TRUE);
	}
	
	/* In this test, the valid values of the credentials are the following:
	 * Username: kureido
	 * Password: sniper
	 */
	
	function testCorrectCredentials()
	{
		$result = $this->LoginModel->checkCredentials("kureido","sniper");
		$test_res = ($result > 0); // matches content, the return value is the id
        $expected_result = true;
        $test_name = 'Has the user submitted the correct details?';
        $this->unit->run($test_res, $expected_result, $test_name); 
	}
	
	function testBlankCredentials()
	{
		$result = $this->LoginModel->checkCredentials("","");
		$test_res = ($result === -1); // matches content, -1 means field should not be blank
        $expected_result = true;
        $test_name = 'Has the user submitted blank spaces?';
        $this->unit->run($test_res, $expected_result, $test_name); 
	}
	
	function testWrongUsername()
	{
		$result = $this->LoginModel->checkCredentials("puryagabamatapobre","sniper");
		$test_res = ($result === -2); // matches content, -2 means invalid username OR password
        $expected_result = true;
        $test_name = 'Has the user entered a wrong username?';
        $this->unit->run($test_res, $expected_result, $test_name); 
	}
	
	function testWrongPassword()
	{
		$result = $this->LoginModel->checkCredentials("kureido","crazedgunman");
		$test_res = ($result === -2); // matches content, -2 means invalid username OR password
        $expected_result = true;
        $test_name = 'Has the user entered a wrong password?';
        $this->unit->run($test_res, $expected_result, $test_name); 
	}
}

/* End of file loginTestModel.php */
/* Location: ./application/controllers/loginTestModel.php */