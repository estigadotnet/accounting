<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('akunm');
		$this->load->model('subgrupm');
		$this->load->model('matauangm');
	}

	public function index() {
		$data['rs'] = $this->akunm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('akunl', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$data['rs_subgrup'] = $this->subgrupm->ambil_data_semua();
		$data['rs_matauang'] = $this->matauangm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('akunt', $data);
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'subgrup_id' => $this->input->post('subgrup_id'),
			'matauang_id' => $this->input->post('matauang_id')
		);
		$this->akunm->simpan($data);
		redirect(site_url('akun'));
	}

	public function edit($id, $hapus = null) {
		$data['rs_subgrup'] = $this->subgrupm->ambil_data_semua();
		$data['rs_matauang'] = $this->matauangm->ambil_data_semua();
		$data['r'] = $this->akunm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('akunh', $data);
		}
		else {
			// load form edit data
			$this->load->view('akune', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'subgrup_id' => $this->input->post('subgrup_id'),
			'matauang_id' => $this->input->post('matauang_id')
		);
		$this->akunm->update($data, $id);
		redirect(site_url('akun'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->akunm->hapus($id);
		redirect(site_url('akun'));
	}
}