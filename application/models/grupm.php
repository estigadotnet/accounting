<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grupm extends CI_Model {

	// nama tabel default
	private $_table = "t01_grup";

	 // ambil semua data
	public function ambil_data_semua() {
		return $this->db->get($this->_table)->result_array();
	}
}