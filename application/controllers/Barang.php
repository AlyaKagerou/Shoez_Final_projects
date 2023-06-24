<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
        $this->data['aktif'] = 'barang';
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
    public function tambah(){
        if($this->session->login['role'] == 'kasir'){
            $this->session->set_flashdata('error', 'Tambah data hanya untuk Admin');
            redirect('penjualan');
        }
        $this->data['title'] = 'Tambah Barang';
        $this->load->view('barang/tambah',$this->data);
    }
    public function proses_tambah(){
        if($this->session->login['role'] == 'kasir'){
            $this->session->set_flashdata('error', 'Tambah data hanya untuk admin');
            redirect('penjualan');
        }
        $data = [
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
        ];
        if($this->m_barang->tambah($data)){
            $this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Ditambahkan');
            redirect('barang');
        }else{
            $this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Ditambahkan');
            redirect('barang');
        }

    }
    public function ubah($id){
        if($this->session->login['role'] == 'kasir'){
            $this->set_flashdata('error', 'ubah data hanya untuk admin');
            redirect('penjualan');
        }
        $this->data['title'] = 'Ubah Barang';
        $this->data['barang'] = $this->m_barang->lihat_id($id);
        $this->load->view('barang/ubah', $this->data);
    }
    public function proses_ubah($kode_barang){
        if($this->session->login['role'] == 'kasir'){
            $this->session->set_flashdata('error', 'Ubah data hanya untuk admin');
            
        }
        $data = [
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
        ];
        if($this->m_barang->ubah($data, $kode_barang)){
            $this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Diubah');
            redirect('barang');
        }else{
            $this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Diubah!');
            redirect('barang');
        }
    }
}