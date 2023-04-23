<?php

class Genres_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function findAll()
	{
		return $this->db->get('genre')->result_array();
	}
}
