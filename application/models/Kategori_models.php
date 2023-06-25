<?php  

class Kategori_models extends CI_Model{
    public function getAllKategori()
    {
        return $this->db->get('categories')->result_array();
    }
	public function tambahData()
	{
		$data = [
			"name" => $this->input->post('kategori_new', true)
		];
		$this->db->insert('categories', $data);
	}
	public function hapusData($id)
	{
		// $this->db->where('id', $id);
		$this->db->delete('categories',['id'=> $id]);
	}
}
