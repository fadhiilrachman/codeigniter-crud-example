<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

	public function jumlahMhs() {
		$q=$this->db->select('*')->get('mahasiswa');
		return $q->num_rows();
	}

	public function jumlahMK() {
		$q=$this->db->select('*')->get('matakuliah');
		return $q->num_rows();
	}

	public function jumlahNilai() {
		$q=$this->db->select('*')->get('nilai');
		return $q->num_rows();
	}

}

/* End of file M_Home.php */
/* Location: ./application/models/M_Home.php */