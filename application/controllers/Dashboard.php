<?php 
class Dashboard extends CI_Controller{
    public function index(){

        // $data['judulDashboard'] = 'Dashboard | Shoez.';
        $this->load->view('dashboard');
    }
}

?>