<?php

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public $controllers;


    public function __construct() {
        session_start();
        $url = $this->parseURL();
        // var_dump($url);
        
        if(empty($url)) $url[0] = 'home';
        if(file_exists('app/controllers/'.ucfirst($url[0]).'.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        if($this->controller != 'lang') $_SESSION['last_page'] = $this->controller;
        require_once 'app/controllers/'.ucfirst($this->controller).'.php';
        $this->controller = new $this->controller;
        
        if(isset($url[1])) {
            $url[1] = str_replace('-','_',$url[1]);
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if(!empty($url)) {
            $this->params = array_values($url);
        }

        if($this->method != 'idn' || $this->method != 'eng') $_SESSION['last_page'] = $_SESSION['last_page'].'/'.$this->method;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}