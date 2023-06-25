<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Produk_models');
    }
    public function index(){
        $data['judul'] = 'Data Produk';
        $data['produk'] = $this->Produk_models->getAllProduk();

        $this->load->view('templates/header_dashbo',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer_dashbo');
    }
    public function tambah(){
        $data['judul'] = 'Tambah Produk';
        
        $this->load->view('templates/header_dashbo',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/tambah', $data);
        $this->load->view('templates/footer_dashbo');
    }
		
}
