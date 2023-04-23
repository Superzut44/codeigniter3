<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('parser');
		$this->load->model('genres_model');
		$this->load->model('film_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		#$this->load->view('welcome_message',['msg'=>'coucou']);
		$this->parser->parse('welcome_message', ['msg' => 'yo yo!']);
	}

	public function listerGenre()
	{

		$genres = $this->genres_model->findAll();
		$this->parser->parse('liste_genres', ['genres' => $genres]);
	}

	public function listerFilmsParGenreId($id)
	{
		$filmsParGenre = $this->film_model->findAllByGenreId(1);
		$this->parser->parse('liste_films', ['films' => $filmsParGenre]);
	}
}
