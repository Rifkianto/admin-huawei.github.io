<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function update($data, $id) {
		$this->db->where("id", $id);
		$this->db->update("admin", $data);

		return $this->db->affected_rows();
	}
	
	function register($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password,
			'nama'=>$nama
		);
		$this->db->insert('admin',$data_user);
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->row();
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */