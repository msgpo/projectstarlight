<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SportModel extends CI_Model 
{
	function getSportById($id)
	{
		$result = $this->db->query("SELECT sport_name FROM sport WHERE sport_id = '$id'");
		if ($result->num_rows() > 0)
		{
			return $result->row()->sport_name;
		}
		else
		{
			return "No sports listed";
		}
	}
	
	function listAllSports()
	{
		return $this->db->get('sport');
	}
	
	function addNewSport($sport)
	{
		$this->db->insert('sport', $sport);
	}
}


/* End of file sportModel.php */
/* Location: ./application/controllers/sportModel.php */