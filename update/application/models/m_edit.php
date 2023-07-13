<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_edit extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM produk";

		$data = $this->db->query($sql);

		return $data->result();
	}
    public function update($data) {
		$sql = "UPDATE produk SET produk='" .$data['produk'] ."', spek='" .$data['spek'] ."', jenis=" .$data['jenis'] .", gambar=" .$data['gambar'] .", harga=" .$data['harga'] ." WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}