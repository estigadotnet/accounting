<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("grupm");
	}

	public function index() {
		$data["rs"] = $this->grupm->ambil_data_semua(); // ambil semua data
		$this->load->view("layout/header");
		$this->load->view("grupl", $data);
		$this->load->view("layout/footer");
	}
}