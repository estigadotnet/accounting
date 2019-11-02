<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t001_grup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t001_grupm');
	}

	public function index() {
		$data['rs'] = $this->t001_grupm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t001_grupl', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->load->view('layout/header');
		$this->load->view('t001_grupt');
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'name' => $this->input->post('name')
		);
		$this->t001_grupm->simpan($data);
		redirect(site_url('t001_grup'));
	}

	public function edit($id, $hapus = null) {
		$data['r'] = $this->t001_grupm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('t001_gruph', $data);
		}
		else {
			// load form edit data
			$this->load->view('t001_grupe', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'name' => $this->input->post('name')
		);
		$this->t001_grupm->update($data, $id);
		redirect(site_url('t001_grup'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->t001_grupm->hapus($id);
		redirect(site_url('t001_grup'));
	}
}