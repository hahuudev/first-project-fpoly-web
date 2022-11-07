<?php
class Auth extends Controller
{

    public function index()
    {
    }

    public function login()
    {
        $data['props'] = [];
        $data['content'] = 'pages/login';
        $this->render('layouts/nolayout', $data);
    }
    public function resgister()
    {
    }
}
