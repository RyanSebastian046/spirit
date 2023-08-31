<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load library dan model yang diperlukan
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function index() {
        $this->load->view('login_form');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_form');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if ($this->auth_model->check_login($username, $password)) {
                // Jika login sukses, redirect ke halaman lain
                redirect('admin/Admin/dashboard');
            } else {
                $data['error'] = 'Username atau password salah';
                $this->load->view('login_form', $data);
            }
        }
    }
}
?>
