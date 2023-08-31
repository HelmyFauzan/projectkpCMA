<?php

class aboutus extends MY_Controller
{

    public function index()
    {
    $data['title'] = 'AboutUs';
    $data['page'] = 'pages/aboutus';

     $this->view($data);
    }
}
