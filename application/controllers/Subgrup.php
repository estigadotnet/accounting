<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subgrup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('subgrupm');
		$this->load->model('grup');
	}

	public function index() {
		$data['rs'] = $this->subgrupm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('subgrupl', $data);
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
		$data['r'] = $this->grupm->ambil_data_by_id($id)->row();
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