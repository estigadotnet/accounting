<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subgrup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('subgrupm');
		$this->load->model('grupm');
	}

	public function index() {
		$data['rs'] = $this->subgrupm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('subgrupl', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$data['rs_grup'] = $this->grupm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('subgrupt', $data);
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'grup_id' => $this->input->post('grup_id'),
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->subgrupm->simpan($data);
		redirect(site_url('subgrup'));
	}

	public function edit($id, $hapus = null) {
		$data['rs_grup'] = $this->grupm->ambil_data_semua();
		$data['r'] = $this->subgrupm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('subgruph', $data);
		}
		else {
			// load form edit data
			$this->load->view('subgrupe', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'grup_id' => $this->input->post('grup_id'),
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->subgrupm->update($data, $id);
		redirect(site_url('subgrup'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->subgrupm->hapus($id);
		redirect(site_url('subgrup'));
	}
}