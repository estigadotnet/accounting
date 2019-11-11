<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t101_jurnalm extends CI_Model {

	private $_table = 't101_jurnal';
	private $_table_d = 't102_jurnald';

	public function ambil_data_semua() {
		$this->db->order_by('createon asc');
		return $this->db->get_where($this->_table, ['period_id' => $this->session->userdata('period_id')])->result();
	}

	public function simpan($data, $detail) {
		$this->db->insert($this->_table, $data);
		$id = $this->db->insert_id();
		foreach ($detail as $key => $value) $detail[$key]['jurnal_id'] = $id;
		$this->db->insert_batch($this->_table_d, $detail);
		// var_dump($detail); exit;
		// var_dump($data); exit;
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