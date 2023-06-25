<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_models');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['judul'] = 'Kategori Produk';
        $data['all_kategori'] = $this->Kategori_models->getAllKategori();
        $data['no'] = 1;

        $this->load->view('templates/header_dashbo',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer_dashbo');
    }
    public function tambah(){
        $data['judul'] = 'Tambah Kategori';
        
        $this->form_validation->set_rules('kategori_new', 'Kategori Baru', 'required',[
            'required' => 'Kategori Baru harus di isi!'
        ]);
        if($this->form_validation->run() == false){
            $this->load->view('templates/header_dashbo',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('kategori/tambah', $data);
            $this->load->view('templates/footer_dashbo');
        }else{
           $this->Kategori_models->tambahData();
           $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">Data berhasil ditambahkan!</div>');
           redirect('kategori');
        }
    }
    public function hapus($id)
    {
        $this->Kategori_models->hapusData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">Data berhasil dihapus!</div>');
        redirect('kategori');
    }
}