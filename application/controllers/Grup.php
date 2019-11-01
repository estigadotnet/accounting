<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('grupm');
	}

	public function index() {
		$data['rs'] = $this->grupm->ambil_data_semua(); // ambil semua data
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

	public function edit($id, $hapus = null) {
		$data['r'] = $this->grupm->ambil_data_by_id($id)->row_array();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('gruph', $data);
		}
		else {
			// load form edit data
			$this->load->view('grupe', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'name' => $this->input->post('name')
		);
		$this->grupm->update($data, $id);
		redirect(site_url('grup'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->grupm->hapus($id);
		redirect(site_url('grup'));
	}
}