<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_admin');

        $this->userdata = $this->session->userdata('userdata');
        
        $this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

        if ($this->session->userdata('status') == '') {
            redirect('Auth');
        }
    }


	public function index()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "home", $data);
		
	}
	public function index2()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "home2", $data);
		
	}
	public function contactUs()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "contact/team", $data);
		
	}
	
	public function learnmore1()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "learnmore1", $data);
		
	}
	public function learnmore2()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "learnmore2", $data);
		
	}
	public function learnmore3()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "learnmore3", $data);
		
	}
	public function learnmore4()
	{
		$data['userdata'] 		= $this->userdata;
		$this->template->load('layouts/template', "learnmore4", $data);
		
	}
	
	public function updateProfil() {
		if ($this->userdata != '') {
			$data = $this->M_admin->select($this->userdata->id);

			$this->session->set_userdata('userdata', $data);
			$this->userdata = $this->session->userdata('userdata');
		}
	}

	
	
}
