<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('layout/header');
		$this->load->view('homel');
		$this->load->view('layout/footer');
	}
}