<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_event extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_event');
	}

	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('tambah_event', $data);
		$this->load->view('template/footer');


	}
}
