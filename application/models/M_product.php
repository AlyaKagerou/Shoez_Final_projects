<?php 

class M_product extends CI_Model{
    public function getAllProduct(){
        return $this->db->get('barang')->result_array();
    }
    public function tambahData(){
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
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }
    public function getProductById($id){
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }
    public function ubahData(){
        $data = [
            'kode_barang'=> $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' =>$this->input->post('stok'),
            'satuan' => $this->input->post('satuan')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang', $data);
    }
    public function cariDataProduct(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        return $this->db->get('barang')->result_array();
    }
}