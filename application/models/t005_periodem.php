<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t005_periodem extends CI_Model {

	private $_table = 't005_periode';

	public function ambil_data_semua() {
		return $this->db->get($this->_table)->result();
	}

	public function simpan($data) {
		$this->db->insert($this->_table, $data);
	}

	public function ambil_data_by_id($id) {
		return $this->db->get_where($this->_table, ['id' => $id]);
	}

	public function update($data, $id) {
		$this->db->update($this->_table, $data, ['id' => $id]);
	}

	public function hapus($id) {
		$this->db->delete($this->_table, ['id' => $id]);
	}
}