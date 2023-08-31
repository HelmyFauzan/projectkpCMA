<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $model = strtolower(get_class($this));  // This mewakili file2 yang ada di folder Controllers
        
        if (file_exists(APPPATH . 'models/' . $model . '_model.php')) {
            // Param 1: load model, 2: nama controller - pasang model pada controller saat ini
            $this->load->model($model . '_model', $model, true);
        }
    }

    public function view($data)
    {
        $this->load->view('layouts/app', $data);
    }
}

