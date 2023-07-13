<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function widget()
	{
		$this->load->view('pages_view/widget');
	}
	
	public function index2()
	{
		$this->load->view('dashboard/dashboard2');
	}
}
