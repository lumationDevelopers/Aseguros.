<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo extends CI_Controller {

	public function index()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('archivo/index');
		$this->load->view('header_footer/footer');
	}

	public function crear()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('archivo/crear');
		$this->load->view('header_footer/footer');
	}

	public function editar()
	{
		$this->load->view('header_footer/header');
		$this->load->view('menu/menu');
		$this->load->view('archivo/editar');
		$this->load->view('header_footer/footer');
	}

}