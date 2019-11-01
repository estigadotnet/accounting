<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('grupm');
	}

	public function index() {
		$data["rs"] = $this->grupm->ambil_data_semua(); // ambil semua data
		$this->load->view('layout/header');
		$this->load->view('grupl', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->load->view('layout/header');
		$this->load->view('grupt');
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'name' => $this->input->post('name')
		);
		$this->grupm->simpan($data);
		redirect(site_url('grup'));
	}
}