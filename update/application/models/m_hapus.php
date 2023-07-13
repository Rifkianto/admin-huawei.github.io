<?php
Class m_hapus extends CI_Model
{
    function Getid($id = '')
    {
      return $this->db->get_where('produk', array('id' => $id))->row();
    }
    function HapusProduk($id)
    {
        $this->db->delete('produk',array('id' => $id));
    }
}