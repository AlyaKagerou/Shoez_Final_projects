<?php 
class Login extends CI_Controller{
    public function index(){

        $data['judul'] = 'Login Page | Shoez.';
        $this->load->view('templates/header-login', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer-login');
    }
}

?>