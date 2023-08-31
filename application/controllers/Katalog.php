<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends MY_Controller {

    public function index($page = null)
    {
        $data['title'] = 'Katalog';
        $data['content']    = $this->katalog->select(
                [
                    'product.id', 'product.title AS product_title', 'product.description', 'product.color', 'product.image', 'product.price', 'product.is_available',
                    'category.title AS category_title', 'category.slug AS category_slug'
                ]
            )
            ->join('category')                  
            ->where('product.is_available', 1)  
            ->paginate($page)
            ->get();
        $data['total_rows'] = $this->katalog->where('product.is_available', 1)->count();
        $data['pagination'] = $this->katalog->makePagination(base_url('katalog/index'), 2, $data['total_rows']);
        $data['page'] = 'pages/katalog/index';     

        $this->view($data);
    }

    
    public function detail($id)
    {
        $this->load->model('Product_model');
        $data = array(
            'title' => 'Detail Produk',
            'product' => $this->Product_model->getProductbById($id)->row(), 
            'page' => 'pages/katalog/detail'
        );
        $this->view($data);
    }
}
