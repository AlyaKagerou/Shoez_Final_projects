<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_models extends CI_Model {

public function __construct()

 {
 parent::__construct();
 $this->load->database();
 }


// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('barang');
 $query = $this->db->get();
 return $query->result();
 }


}