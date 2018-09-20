<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends CI_Controller {

	public function index()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('pais/index');
		$this->load->view('header_footer/footer');

		$this->load->library('GuzzleHttp');
		$client = new GuzzleHttp\Client();
		$res = $client->request('GET', 'http://aseguro-api.us-east-2.elasticbeanstalk.com/api/countries');
		echo $res->getStatusCode();
	}

	public function crear()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('pais/crear.php');
		$this->load->view('header_footer/footer');
	}

	public function editar()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('pais/editar.php');
		$this->load->view('header_footer/footer');
	}



}
