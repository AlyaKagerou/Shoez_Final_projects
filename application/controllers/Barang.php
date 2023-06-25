<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_barang', 'm_barang');
    }
    public function index(){
        $this->data['judul'] = 'Data Barang';
        $this->data['all_barang'] = $this->m_barang->lihat();
        $this->data['no'] = 1;

        $this->load->view('templates/header_dashbo',$this->data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('barang/index', $this->data);
        $this->load->view('templates/footer_dashbo');
    }
}
