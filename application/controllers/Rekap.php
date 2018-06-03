<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_Rekap');
		$this->md_rekap = $this->M_Rekap;
	}

	public function index()
	{
		redirect( base_url() );
	}

	public function nilai_mhs()
	{
		$data['list_rekap'] = $this->md_rekap->list_all();
		$this->load->view('rekap_nilaimhs', $data);
	}

}

/* End of file Rekap.php */
/* Location: ./application/controllers/Rekap.php */