<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t007_tipejurnal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t007_tipejurnalm');
	}

	public function index() {
		$data['rs'] = $this->t007_tipejurnalm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t007_tipejurnall', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->load->view('layout/header');
		$this->load->view('t007_tipejurnalt');
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->t007_tipejurnalm->simpan($data);
		redirect(site_url('t007_tipejurnal'));
	}

	public function edit($id, $hapus = null) {
		$data['r'] = $this->t007_tipejurnalm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('t007_tipejurnalh', $data);
		}
		else {
			// load form edit data
			$this->load->view('t007_tipejurnale', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama')
		);
		$this->t007_tipejurnalm->update($data, $id);
		redirect(site_url('t007_tipejurnal'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->t007_tipejurnalm->hapus($id);
		redirect(site_url('t007_tipejurnal'));
	}
}