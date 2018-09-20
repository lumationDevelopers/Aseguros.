<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tematicas extends CI_Controller {


	public function index()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('tematicas/index');
		$this->load->view('header_footer/footer');
	}

		public function crear()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('tematicas/crear');
		$this->load->view('header_footer/footer');
	}


}