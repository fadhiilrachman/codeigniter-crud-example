<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster_MataKuliah extends CI_Model {

	public function add_new($name) {
		$d_t_d = array(
			'nama_matakuliah' => $name
		);
		$this->db->insert('matakuliah', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'Data Mata kuliah berhasil ditambahkan');
	}

	public function update($id,$name) {
		$d_t_d = array(
			'nama_matakuliah' => $name
		);
		$this->db->where('id_matakuliah', $id)->update('matakuliah', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'Data mata kuliah berhasil diubah');
	}

	public function delete($id) {
		$this->db->delete('matakuliah', array('id_matakuliah' => $id));
	}

	public function get_data($id) {
		$q=$this->db->select('*')->from('matakuliah')->where('id_matakuliah', $id)->limit(1)->get();
		if( $q->num_rows() < 1 ) {
			redirect( base_url('/') );
		}
		return $q->row();
	}

	public function list_all() {
		$q=$this->db->select('*')->get('matakuliah');
		return $q->result();
	}

}

/* End of file DataMaster_MataKuliah.php */
/* Location: ./application/models/DataMaster_MataKuliah.php */