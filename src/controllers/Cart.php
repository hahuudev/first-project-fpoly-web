<?php
class Cart extends Controller
{
    public function index()
    {
        $data['props'] = [];
        $data['content'] = 'pages/UserPages/cart';
        $this->render('layouts/defaultLayout', $data);
    }
}
