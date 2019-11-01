<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akunm extends CI_Model {

	private $_table = 't04_akun';

	public function ambil_data_semua() {
		$q = '
			select
				ak.*,
				ma.nama as matauang_nama,
				sg.nama as subgrup_nama,
				g.id as grup_id,
				g.name as grup_name
			from
				t04_akun ak
				left join t03_matauang ma on ak.matauang_id = ma.id
				left join t02_subgrup sg on ak.subgrup_id = sg.id
				left join t01_grup g on sg.grup_id = g.id
			order by
				sg.grup_id, sg.kode, ak.kode
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