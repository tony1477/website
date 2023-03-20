<?php

class Lang extends Controller {
    
    public function __construct()
    {
        if(!isset($_SESSION['last_page'])) $_SESSION['last_page'] = 'home/index';
    }

    public function index()
    {
        $this->idn();
    }
    
    public function idn()
    {
        // echo 'id';
        $_SESSION['lang'] = 'id';
        $last_page = substr($_SESSION['last_page'],0,-4);
        $this->reloadPage($last_page);
    }
    public function eng()
    {
        // echo 'en';
        $_SESSION['lang'] = 'en';
        $last_page = substr($_SESSION['last_page'],0,-4);
        $this->reloadPage($last_page);
    }

    private function reloadPage(string $last_page)
    {
        $url = explode('/',$last_page);
        header('Location: '. BASE_URL.$last_page);
        exit;
        // require_once 'app/controllers/'.$url[0].'.php';
        // $controller = new $url[0];
        // call_user_func_array([$controller, $url[1]],[]);
    }
}