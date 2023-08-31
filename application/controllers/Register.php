<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $is_login = $this->session->userdata('is_login');
        
        if ($is_login) {
            redirect(base_url());   
            return;
        }
    }

    public function index()
    {
        // Apakah ada post ke controller ini
        if (!$_POST) {
            $input = (object) $this->register->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->register->validate()) {
            $data['title'] = 'Register';
            $data['input'] = $input;
            $data['page'] = 'pages/auth/register';

            $this->view($data);

            return;
        }

        // Input data
        if ($this->register->run($input)) {
            $this->session->set_flashdata('Berhasil melakukan registrasi');
            redirect(base_url());
        } else {
            $this->session->set_flashdata('registrasi gagal');
            redirect(base_url('register'));
        }
    }
}

