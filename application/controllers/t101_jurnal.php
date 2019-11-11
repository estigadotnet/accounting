<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t101_jurnal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t101_jurnalm');
		$this->load->model('t007_tipejurnalm');
		$this->load->model('t004_akunm');
	}

	public function index() {
		$data['rs'] = $this->t101_jurnalm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t101_jurnall', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$data['rs_tipejurnal'] = $this->t007_tipejurnalm->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t101_jurnalt', $data);
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$detail = [];
		foreach ($this->input->post('akun_id', TRUE) as $key => $value) $detail[$key]['akun_id'] = $value;
		foreach ($this->input->post('debet', TRUE) as $key => $value) $detail[$key]['debet'] = $value;
		foreach ($this->input->post('kredit', TRUE) as $key => $value) $detail[$key]['kredit'] = $value;
		$data = array(
			'tipejurnal_id' => $this->input->post('tipejurnal_id'),
			'period_id' => $this->session->userdata('period_id'),
			'createon' => date('Y-m-d H:i:s'),
			'keterangan' => $this->input->post('keterangan'),
			'person_id' => null,
			'nomer' => null
		);
		$this->t101_jurnalm->simpan($data, $detail);
		redirect(site_url('t101_jurnal'));
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

	public function ambil_data_akun() {
		$nama_akun = $this->t004_akunm->ambil_data_semua_jurnal($this->input->get('q', TRUE));
		echo json_encode((object)[
			'nama_akun' => $nama_akun
		]);
	}
}