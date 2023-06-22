<?php

class M_transaksi extends CI_Model {
	protected $_table = 'transaksi';

	public function tambah($data){
		return $this->db->insert_batch($this->_table, $data);
	}

	public function lihat_no_transaksi($no_transaksi){
		return $this->db->get_where($this->_table, ['no_transaksi' => $no_transaksi])->result();
	}

	public function hapus($no_transaksi){
		return $this->db->delete($this->_table, ['no_transaksi' => $no_transaksi]);
	}
}