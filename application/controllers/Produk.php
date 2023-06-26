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
        $data['no'] = 1;

        $this->load->view('templates/header_dashbo',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer_dashbo');
    }
    public function tambah(){
        $data['judul'] = 'Tambah Produk';
        
        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('harga_beli','Harga Beli','required|numeric');
        $this->form_validation->set_rules('harga_jual','Harga Jual','required|numeric');
        $this->form_validation->set_rules('stok','Stok','required|numeric');
        if($this->form_validation->run() == false){
            $this->load->view('templates/header_dashbo',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('produk/tambah', $data);
            $this->load->view('templates/footer_dashbo');
        }else{
            $this->Produk_models->tambahData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Data berhasil ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
           redirect('produk');
        }
    }
    public function hapus($id)
    {
        $this->Produk_models->hapusData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Data berhasil dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('produk');
    }
    public function ubah(){
        $data['judul'] = 'Ubah Produk';
        
        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('harga_beli','Harga Beli','required|numeric');
        $this->form_validation->set_rules('harga_jual','Harga Jual','required|numeric');
        $this->form_validation->set_rules('stok','Stok','required|numeric');
        if($this->form_validation->run() == false){
            $this->load->view('templates/header_dashbo',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('produk/ubah', $data);
            $this->load->view('templates/footer_dashbo');
        }else{
            $this->Produk_models->ubahData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Data berhasil ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
           redirect('produk');
        }
    }
		
} 
