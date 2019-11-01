<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subgrupm extends CI_Model {

	private $_table = 't02_subgrup';

	public function ambil_data_semua() {
		$q = '
			select
				sg.*,
				g.name as grup_name
			from
				t02_subgrup sg
				left join t01_grup g on sg.grup_id = g.id
			order by
				sg.grup_id, sg.kode
		'; // echo $q;
		return $this->db->query($q)->result();
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