<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // is_logged_in();
        $this->load->model('M_product');
    }
    public function index(){
        $data['judul'] = "Data Produk";
        $data['produk'] = $this->M_product->getAllProduct();
        $data['user'] =$this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['no'] = 1;

        if($this->input->post('keyword')){
            $data['produk'] = $this->M_product->cariDataProduct();
        }

        $this->load->view('templates/header_dashbo', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar',$data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer_dashbo');
    }
    public function tambah(){
        $data['judul'] = "Tambah Data Produk";
        $data['user'] =$this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_barang','nama barang', 'required');
        $this->form_validation->set_rules('harga_beli','Harga Beli','required|numeric');
        $this->form_validation->set_rules('harga_jual','Harga Jual','required|numeric');
        $this->form_validation->set_rules('stok','Stok','required|numeric');
        if($this->form_validation->run()==false){
            $this->load->view('templates/header_dashbo',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('product/tambah', $data);
            $this->load->view('templates/footer_dashbo');    
        }else{
            $this->M_product->tambahData();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Data berhasil ditambahkan!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
           redirect('product');
        }
    }
    public function hapus($id)
    {
        $this->M_product->hapusData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Data berhasil dihapus!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('product');
    }
    public function ubah($id){
        $data['judul'] = 'Ubah Produk';
        $data['produk'] = $this->M_product->getProductById($id);
        $data['user'] =$this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('harga_beli','Harga Beli','required|numeric');
        $this->form_validation->set_rules('harga_jual','Harga Jual','required|numeric');
        $this->form_validation->set_rules('stok','Stok','required|numeric');
        if($this->form_validation->run() == false){
            $this->load->view('templates/header_dashbo',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('product/ubah', $data);
            $this->load->view('templates/footer_dashbo');
        }else{
            $this->M_product->ubahData($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Data berhasil diubah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
           redirect('product');
        }
    }
}