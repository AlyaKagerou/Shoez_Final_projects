<?php
Class Laporan_pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Laporan Data Barang',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Daftar Nama-nama Barang',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'Kode Barang',1,0);
        $pdf->Cell(30,6,'Nama Barang',1,0);
        $pdf->Cell(30,6,'Harga Beli',1,0);
        $pdf->Cell(30,6,'Harga Jual',1,0);
        $pdf->Cell(30,6,'Stok Barang',1,0);
        $pdf->Cell(30,6,'Satuan',1,1);
        $pdf->SetFont('Arial','',10);
        $kasir = $this->db->get('barang')->result();
        foreach ($kasir as $row){
            $pdf->Cell(30,6,$row->kode_barang,1,0);
            $pdf->Cell(30,6,$row->nama_barang,1,0);
            $pdf->Cell(30,6,$row->harga_beli,1,0);
            $pdf->Cell(30,6,$row->harga_jual,1,0); 
            $pdf->Cell(30,6,$row->stok,1,0); 
            $pdf->Cell(30,6,$row->satuan,1,1); 
        }
        $pdf->Output();
    }
}