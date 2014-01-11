<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LeagueTest extends CI_Model 
{
	function testLeagueNameNotNull()
	{
		//Test 1
		$result = $this->db->query("SELECT league_name FROM league LIMIT 1")->result();
        $test = $result->league_name;
		$test_res = ($test === null); // matches content and data type
        $expected_result = false;
        $test_name = 'Checks if a league exists';
        $this->unit->run($test_res, false, $test_name); 
	}
}

/* End of file leagueTestModel.php */
/* Location: ./application/controllers/leagueTestModel.php */