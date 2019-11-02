<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t003_matauang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t003_matauangm');
	}

	public function index() {
		$data['rs'] = $this->t003_matauangm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t003_matauangl', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->load->view('layout/header');
		$this->load->view('t003_matauangt');
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->t003_matauangm->simpan($data);
		redirect(site_url('t003_matauang'));
	}

	public function edit($id, $hapus = null) {
		$data['r'] = $this->t003_matauangm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('t003_matauangh', $data);
		}
		else {
			// load form edit data
			$this->load->view('t003_matauange', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->t003_matauangm->update($data, $id);
		redirect(site_url('t003_matauang'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->t003_matauangm->hapus($id);
		redirect(site_url('t003_matauang'));
	}
}