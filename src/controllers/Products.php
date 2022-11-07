<?php
class Products extends Controller
{

    public function index()
    {



        // Bắt buộc phải có đủ các trường này để render ra giao diện
        $data['props'] = [];
        $data['content'] = 'pages/product';
        $this->render('layouts/defaultLayout', $data);
    }
}
