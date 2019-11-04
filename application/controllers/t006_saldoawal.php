<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t006_saldoawal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t005_periodem');
		$this->load->model('t004_akunm');
		$this->load->model('t006_saldoawalm');
	}

	public function index() {
		$data['rs'] = $this->t006_saldoawalm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t006_saldoawall', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$data['rs_periode'] = $this->t005_periodem->ambil_data_semua();
		$data['rs_akun'] = $this->t004_akunm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t006_saldoawalt', $data);
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'periode_id' => $this->input->post('periode_id'),
			'akun_id' => $this->input->post('akun_id'),
			'debet' => $this->input->post('debet'),
			'kredit' => $this->input->post('kredit'),
			'saldo' => $this->input->post('saldo')
		);
		$this->t006_saldoawalm->simpan($data);
		redirect(site_url('t006_saldoawal'));
	}

	public function edit($id, $hapus = null) {
		$data['rs_subgrup'] = $this->t002_subgrupm->ambil_data_semua();
		$data['rs_matauang'] = $this->t003_matauangm->ambil_data_semua();
		$data['r'] = $this->t004_akunm->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('t004_akunh', $data);
		}
		else {
			// load form edit data
			$this->load->view('t004_akune', $data);
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
		$this->t004_akunm->update($data, $id);
		redirect(site_url('t004_akun'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->t004_akunm->hapus($id);
		redirect(site_url('t004_akun'));
	}
}