<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LeagueTestController extends CI_Controller 
{

	public function index()
	{
		//Test 1
        $this->load->library('unit_test');
        $this->load->model('LeagueTest','',TRUE);
		$this->LeagueTest->testLeagueNameNotNull();
		
		echo $this->unit->report();
		
		echo base_url();
	}
}

/* End of file LeagueTest.php */
/* Location: ./application/controllers/LeagueTest.php */