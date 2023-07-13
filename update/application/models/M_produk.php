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
    function edit($where,$table){		
    
      return $this->db->get_where($table,$where);
    }

    public function saveupdate($data, $id) {
      
      $this->db->update("produk", $data);
      $this->db->where('id', $id);
      return $this->db->affected_rows();
      
    }

    public function save($data, $id) {
      $this->db->insert("produk", $data);
  
      return $this->db->affected_rows();
    }
    
    
}

?>