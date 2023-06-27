<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 //$this->load->model('admin/user_model');
 $this->load->model('Excel_models', 'Excel_models');
 }


public function export_excel_barang(){
 $data = array( 'title' => 'Laporan Excel',
 'barang' => $this->Excel_models->listing());
 $this->load->view('produk/laporan_barang_excel',$data);
 }

}

/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */