<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {  
    public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
	}
    public function index() {
		$this->load->view('auth/register_page');
    
    }

    public function register()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[admin.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = MD5($this->input->post('password'));
			$nama = $this->input->post('nama');
			$this->M_admin->register($username,$password,$nama);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('auth');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}

}
}