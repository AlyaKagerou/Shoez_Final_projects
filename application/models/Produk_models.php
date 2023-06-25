<?php  

class Produk_models extends CI_Model{
    public function getAllProduk()
    {
        return $this->db->get('products')->result_array();
    }
}