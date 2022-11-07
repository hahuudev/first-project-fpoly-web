<?php
class Home extends Controller
{

    public function index()
    {

        var_dump("_DIR_ROOT,", _DIR_ROOT);
        echo "</br>";
        var_dump('Domian: ', DOMAIN);
        // Bắt buộc phải có đủ các trường này để render ra giao diện
        // Props để mình muốn gửi dưx liệu j qua view render ra giao diện 
        // Vd gửi một mảng các snar phâmr products = [{id: id, name:..}, {id: 2, name: ...}] 
        // => $data['props']['products'] = products bên file view sẽ nhận đc biến produvts đó
        $data['props'] = [];
        $data['content'] = 'pages/home';
        $this->render('layouts/defaultLayout', $data);
    }
}
