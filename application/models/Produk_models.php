<?php  

class Produk_models extends CI_Model{
    public function getAllProduk()
    {
        return $this->db->get('barang')->result_array();
    }
    public function tambahData()
    {
        $data = [
            'kode_barang'=> $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' =>$this->input->post('stok'),
            'satuan' => $this->input->post('satuan')
        ];
        $this->db->insert('barang', $data);
    }
}