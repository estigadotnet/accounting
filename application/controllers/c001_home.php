<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c001_home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('layout/header');
		$this->load->view('c001_homel');
		$this->load->view('layout/footer');
	}
}