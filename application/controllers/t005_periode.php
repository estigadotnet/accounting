<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t005_periode extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('t005_periodem');
	}

	public function index() {
		$data['rs'] = $this->t005_periodem->ambil_data_semua();
		$this->load->view('layout/header');
		$this->load->view('t005_periodel', $data);
		$this->load->view('layout/footer');
	}

	public function tambah() {
		$this->load->view('layout/header');
		$this->load->view('t005_periodet');
		$this->load->view('layout/footer');
	}

	public function simpan() {
		$data = array(
			'start' => date('Y-m-d', strtotime($this->input->post('start'))),
			'end' => date('Y-m-d', strtotime($this->input->post('end'))),
			'isaktif' => (($this->input->post('isaktif[0]') == '1') ? 1 : 0)
		);
		$this->t005_periodem->simpan($data);
		redirect(site_url('t005_periode'));
	}

	public function edit($id, $hapus = null) {
		$data['r'] = $this->t005_periodem->ambil_data_by_id($id)->row();
		$this->load->view('layout/header');

		if ($hapus == 1) {
			// load form konfirmasi hapus data
			$this->load->view('t005_periodeh', $data);
		}
		else {
			// load form edit data
			$this->load->view('t005_periodee', $data);
		}
		
		$this->load->view('layout/footer');
	}

	public function update($id) {
		$data = array(
			'start' => date('Y-m-d', strtotime($this->input->post('start'))),
			'end' => date('Y-m-d', strtotime($this->input->post('end'))),
			'isaktif' => (($this->input->post('isaktif[0]') == 1) ? 1 : 0)
		);
		$this->t005_periodem->update($data, $id);
		redirect(site_url('t005_periode'));
	}

	public function hapus($id) {
		$this->edit($id, 1);
	}

	public function hapus_data($id) {
		$this->t005_periodem->hapus($id);
		redirect(site_url('t005_periode'));
	}
}