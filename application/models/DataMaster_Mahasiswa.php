<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster_Mahasiswa extends CI_Model {

	public function add_new($name) {
		$d_t_d = array(
			'nama_mahasiswa' => $name
		);
		$this->db->insert('mahasiswa', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'Data mahasiswa berhasil ditambahkan');
	}

	public function update($id,$name) {
		$d_t_d = array(
			'nama_mahasiswa' => $name
		);
		$this->db->where('id_mahasiswa', $id)->update('mahasiswa', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'Data mahasiswa berhasil diubah');
	}

	public function delete($id) {
		$q=$this->db->select('*')->from('mahasiswa')->where('id_mahasiswa', $id)->limit(1)->get();
		if( $q->num_rows() < 1 ) {
			redirect( base_url('/') );
		}
		$this->db->delete('mahasiswa', array('id_mahasiswa' => $id));
	}

	public function get_data($id) {
		$q=$this->db->select('*')->from('mahasiswa')->where('id_mahasiswa', $id)->limit(1)->get();
		if( $q->num_rows() < 1 ) {
			redirect( base_url('/') );
		}
		return $q->row();
	}

	public function list_all() {
		$q=$this->db->select('*')->get('mahasiswa');
		return $q->result();
	}

}

/* End of file DataMaster_Mahasiswa.php */
/* Location: ./application/models/DataMaster_Mahasiswa.php */