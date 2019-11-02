<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t002_subgrup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t002_subgrupm');
		$this->load->model('t001_grupm');
	}

	public function index() {
		$data['rs'] = $this->t002_subgrupm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t002_subgrupl', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$data['rs_grup'] = $this->t001_grupm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t002_subgrupt', $data);
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'grup_id' => $this->input->post('grup_id'),
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->t002_subgrupm->simpan($data);
		redirect(site_url('t002_subgrup'));
	}

	public function edit($id, $hapus = null) {
		$data['rs_grup'] = $this->t001_grupm->ambil_data_semua();
		$data['r'] = $this->t002_subgrupm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('t002_subgruph', $data);
		}
		else {
			// load form edit data
			$this->load->view('t002_subgrupe', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'grup_id' => $this->input->post('grup_id'),
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->t002_subgrupm->update($data, $id);
		redirect(site_url('t002_subgrup'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->t002_subgrupm->hapus($id);
		redirect(site_url('t002_subgrup'));
	}
}