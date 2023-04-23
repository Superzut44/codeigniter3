<?php

class Film_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function findAllByGenreId(int $id)
	{
		/*$qb = $this->db
			->select('film.*')
			->select('genre.nom')
			->from('film')
			->join('genre','genre.id = film.genre_id')
			->where('genre.id=', $id);*/
		$qb = $this->db
			->select ('*')
			->from('film');
		//$qb->get_compiled_select();
		return $qb->get()->result_array();
	}
}
