<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c001_home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('c001_homem');
	}

	public function index() {
		$data['r'] = $this->c001_homem->ambil_data_semua()->row();
		$data['num_row'] = $this->c001_homem->ambil_data_num_row();
		if ($data['num_row'] == 1) {
			$this->session->set_userdata('period_id', $data['r']->id);
		}
		$this->load->view('layout/header');
		$this->load->view('c001_homel', $data);
		$this->load->view('layout/footer');
	}
}