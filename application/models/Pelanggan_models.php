<?php  

class Pelanggan_models extends CI_Model{
    protected $useAutoIncrement = true;
    public function getAllPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
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
        $this->db->insert('pelanggan', $data);
    }
    public function ubahData()
    {
        $data = [
            'kode_barang'=> $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' =>$this->input->post('stok'),
            'satuan' => $this->input->post('satuan')
        ];
        $this->db->insert('pelanggan', $data);
    }
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pelanggan');
    }
}