<?php
defined('BASEPATH') or exit('No direct script access allowed');

class t006_saldoawalm extends CI_Model {

	private $_table = 't006_saldoawal';

	public function ambil_data_semua() {
		$q = '
			select
				sa.*,
				concat(date_format(per.start,"%d-%m-%Y"), " s.d. ", date_format(per.end, "%d-%m-%Y")) as periode,
				ak.nama as akun_nama
			from
				t006_saldoawal sa
				left join t005_periode per on sa.periode_id = per.id
				left join t004_akun ak on sa.akun_id = ak.id
			order by
				ak.kode
		'; // echo $q;
		return $this->db->query($q)->result();
	}

	public function simpan($data) {
		$this->db->insert($this->_table, $data);
	}

	public function ambil_data_by_id($id) {
		$q = '
			select
				ak.*,
				ma.nama as matauang_nama,
				sg.nama as subgrup_nama,
				g.id as grup_id,
				g.name as grup_name
			from
				t004_akun ak
				left join t003_matauang ma on ak.matauang_id = ma.id
				left join t002_subgrup sg on ak.subgrup_id = sg.id
				left join t001_grup g on sg.grup_id = g.id
			where
				ak.id = '.$id.'
			order by
				sg.grup_id, sg.kode, ak.kode
		'; // echo $q;
		return $this->db->query($q);
	}

	public function update($data, $id) {
		$this->db->update($this->_table, $data, ['id' => $id]);
	}

	public function hapus($id) {
		$this->db->delete($this->_table, ['id' => $id]);
	}
}