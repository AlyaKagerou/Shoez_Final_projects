<?php 
class Dashboard extends CI_Controller{
    public function index(){

        $data['judul'] = 'Dashboard | Shoez.';
        $this->load->view('dashboard');
    }
}

?>