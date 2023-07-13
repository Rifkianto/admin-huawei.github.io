<?php
Class M_produk extends CI_Model
{
  function TampilProduk() 
    {
        $this->db->order_by('produk', 'ASC');
        return $this->db->from('produk')
          ->get()
          ->result();
    }
    function Getproduk($produk = '')
    {
      return $this->db->get_where('produk', array('id' => $id))->row();
    }
    function get_id($id){
      $query = $this->db->get_where('produk', array('id' => $id));
      return $query;
    }
    function edit_data($where,$table){		
      return $this->db->get_where($table,$where);
    }

    public function save($data, $id) {
      $this->db->insert("produk", $data);
  
      return $this->db->affected_rows();
    }

    
    public function update($data, $id) {
      $this->db->where("id", $id);
      $this->db->update("produk", $data);
  
      return $this->db->affected_rows();
    }
    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
    function Getid($id = '')
    {
      return $this->db->get_where('produk', array('id' => $id))->row();
    }
    function Hapusproduk($produk)
    {
        $this->db->delete('produk',array('id' => $id));
    }
}

?>