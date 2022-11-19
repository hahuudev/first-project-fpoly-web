<?php
class Home extends Controller
{

    public function index()
    {
        $this->homeModel = $this->model('ProductModel');
        $products = $this->homeModel->getFullProducts();
        $categories = $this->homeModel->getFullCategories();
        $data['props']['products'] = $products;
        $data['props']['categories'] = $categories;
        $data['content'] = 'pages/home';
        $this->render('layouts/defaultLayout', $data);
    }

    public function product()
    {
        echo 'hi';
    }
}
