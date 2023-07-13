<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model('model_mahasiswa');
        $this->load->model('M_admin');

		$this->userdata = $this->session->userdata('userdata');
		
		$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
    }

	function index()
	{
        $data['userdata'] 		= $this->userdata;
        $data['hasil']=$this->model_mahasiswa->TampilMahasiswa();
		$this->template->load('layouts/template', "tabel/data-mahasiswa", $data);
    }
}
   