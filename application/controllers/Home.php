<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_Home');
		$this->m_home = $this->M_Home;
	}

	public function index()
	{
		$data['jml_mhs'] = $this->m_home->jumlahMhs();
		$data['jml_mk'] = $this->m_home->jumlahMK();
		$data['jml_nilai'] = $this->m_home->jumlahNilai();
		$this->load->view('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */