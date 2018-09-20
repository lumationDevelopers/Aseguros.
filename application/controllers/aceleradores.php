<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aceleradores extends CI_Controller {


	public function index()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('aceleradores/index');
		$this->load->view('header_footer/footer');
	}

		public function crear()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('aceleradores/crear');
		$this->load->view('header_footer/footer');
	}


}