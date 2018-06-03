<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Rekap extends CI_Model {

	public function list_all() {
		$q=$this->db->select('n.nilai, n.id_nilai, mhs.nama_mahasiswa, mk.nama_matakuliah')
				->from('nilai as n')
				->join('mahasiswa as mhs', 'n.id_mahasiswa = mhs.id_mahasiswa', 'LEFT')
				->join('matakuliah as mk', 'n.id_matakuliah = mk.id_matakuliah', 'LEFT')
				->get();
		return $q->result();
	}

}

/* End of file M_Rekap.php */
/* Location: ./application/models/M_Rekap.php */