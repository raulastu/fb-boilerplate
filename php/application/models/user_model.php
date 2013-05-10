<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_user($fbId)
	{	
		$query = $this->db->get_where('fb_users', array('fb_id' => $fbId));
		return $query->row_array();
	}

}