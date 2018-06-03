<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster_Nilai extends CI_Model {

	public function add_new($id_mahasiswa,$id_matakuliah,$nilai) {
		$d_t_d = array(
			'id_mahasiswa' => $id_mahasiswa,
			'id_matakuliah' => $id_matakuliah,
			'nilai' => $nilai
		);
		$this->db->insert('nilai', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'Nilai berhasil ditambahkan');
	}

	public function update($id_nilai,$id_mahasiswa,$id_matakuliah,$nilai) {
		$d_t_d = array(
			'id_mahasiswa' => $id_mahasiswa,
			'id_matakuliah' => $id_matakuliah,
			'nilai' => $nilai
		);
		$this->db->where('id_nilai', $id_nilai)->update('nilai', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'Data nilai berhasil diubah');
	}

	public function delete($id) {
		$this->db->delete('nilai', array('id_nilai' => $id));
	}

	public function get_data($id) {
		$q=$this->db->select('*')->from('nilai')->where('id_nilai', $id)->limit(1)->get();
		if( $q->num_rows() < 1 ) {
			redirect( base_url('/') );
		}
		return $q->row();
	}

	public function list_all() {
		$q=$this->db->select('n.nilai, n.id_nilai, mhs.nama_mahasiswa, mk.nama_matakuliah')
				->from('nilai as n')
				->join('mahasiswa as mhs', 'n.id_mahasiswa = mhs.id_mahasiswa', 'LEFT')
				->join('matakuliah as mk', 'n.id_matakuliah = mk.id_matakuliah', 'LEFT')
				->get();
		return $q->result();
	}

}

/* End of file DataMaster_Nilai.php */
/* Location: ./application/models/DataMaster_Nilai.php */