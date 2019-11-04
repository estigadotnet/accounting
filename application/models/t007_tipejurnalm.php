<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t007_tipejurnalm extends CI_Model {

	private $_table = 't007_tipejurnal';

	public function ambil_data_semua() {
		$this->db->order_by('kode asc');
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