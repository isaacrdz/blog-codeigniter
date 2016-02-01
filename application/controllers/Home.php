<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('post');
		$result = $this->post->getPost();


		$this->load->view('partials/header');



		$data = array('consulta' => $result );
		$this->load->view('partials/home',$data);



		$this->load->view('partials/form');

		


	}
}
