<?php
class indexController extends index{
    public function __construct(){
    }
    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/header/edi.php';
        require_once 'views/index/layouts/formu.php';
        require_once 'views/index/footer/termi.php';
        require_once 'views/layouts/footer.php';
    }
    public function Busqueda(){                
        require_once 'views/layouts/header2.php';
        require_once 'views/index/layouts/index.php';
        require_once 'views/layouts/footer.php';
    }
    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=index&method=Busqueda') : 'Error en el registro';
    }
}