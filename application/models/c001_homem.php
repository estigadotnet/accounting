<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c001_homem extends CI_Model {

	private $_table_periode = 't005_periode';

	public function ambil_data_semua() {
		return $this->db->get_where($this->_table_periode, ['isaktif' => 1]);
	}

	public function ambil_data_num_row() {
		return $this->db->get_where($this->_table_periode, ['isaktif' => 1])->num_rows();
	}
}