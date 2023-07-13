<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_produk');

		$this->userdata = $this->session->userdata('userdata');
		
		$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
	}

	public function index()
	{
		$data['userdata'] 		= $this->userdata;
		$data['hasil']=$this->M_produk->TampilProduk();
		$this->template->load('layouts/template', "tabel/tabel", $data);
		
	}
	public function view_tabel()
	{
		$data['userdata'] 		= $this->userdata;
		$data['hasil']=$this->M_produk->TampilProduk();
		$this->template->load('layouts/template', "tabel/view", $data);
		
	}
	function tambah(){
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "tabel/tambah", $data);
      }
	  function hapus($id){
		$where = array('id' => $id);
		$this->M_produk->hapus_data($where,'produk');
		redirect('tabel/index');
	}
public function save() {
	$this->form_validation->set_rules('produk', 'Produk', 'trim|required');
		$this->form_validation->set_rules('spek', 'Spek', 'trim|required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');

	$data = $this->input->post();
	if ($this->form_validation->run() == TRUE) {
		$config['upload_path'] = './assets/dist/img/';
		$config['allowed_types'] = 'jpg|png';
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data_gambar = $this->upload->data();
			$data['gambar'] = $data_gambar['file_name'];
		}

		$result = $this->M_produk->save($data, $id);
		if ($result > 0) {
			$this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah'));
			redirect('tabel/index');
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
			redirect('tabel/tambah');
		}
	} else {
		$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
		redirect('tabel/tambah');
	}
}


public function update() {
	$this->form_validation->set_rules('produk', 'Produk', 'trim');
		$this->form_validation->set_rules('spek', 'Spek', 'trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'trim');
		$this->form_validation->set_rules('harga', 'Harga', 'trim');
		
	$id = $this->input->post('id');
	$this->db->where('id', $id);
	$data = $this->input->post();
	if ($this->form_validation->run() == TRUE) {
		$config['upload_path'] = './assets/dist/img/';
		$config['allowed_types'] = 'jpg|png|webp|jpeg';
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data_gambar = $this->upload->data();
			$data['gambar'] = $data_gambar['file_name'];
		}

		$result = $this->M_produk->update($data, $id);
		if ($result > 0) {
			$this->session->set_flashdata('msg', show_succ_msg('Data Produk Berhasil diubah'));
			redirect('tabel/index');
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Data Produk Gagal diubah'));
			redirect('tabel');
		}
	} else {
		$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
		redirect('tabel');
	}
}


function edit2($id){
	$where = array('id' => $id);
	$data['produk'] = $this->M_produk->edit_data($where,'produk')->result();
	$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "tabel/edit", $data);
}

	
}