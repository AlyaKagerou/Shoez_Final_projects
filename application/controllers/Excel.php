<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {
 public function __construct() {
 parent::__construct();
 $this->load->model('Excel_models', 'Excel_models');
 }


public function export_excel_barang(){
 $data = array( 'title' => 'Laporan Barang Shoez.',
 'barang' => $this->Excel_models->listing());
 $this->load->view('product/laporan-barang-excel',$data);
 }

}