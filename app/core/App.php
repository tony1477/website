<?php

namespace WPG\IT\Website\core;

use WPG\IT\Website\controllers\API\Main as API;
use WPG\IT\Website\core\Config;
use WPG\IT\Website\core\Router;
class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    private $class_prefix = Config::APP_NAMESPACE.'controllers\\';
    public $controllers;


    public function __construct() {
        session_start();
        $url = $this->parseURL();
        // var_dump($url);
    
        if($url[0] == 'api') return $this->ApiController($url);
        if(empty($url)) $url[0] = 'Home';
        if(file_exists('app/controllers/'.ucfirst($url[0]).'.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
            
        if($this->controller != 'lang') $_SESSION['last_page'] = $this->controller;
        $class = $this->class_prefix.$this->controller;
        $this->controller = new $class();
        
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

        if($this->method != 'idn' || $this->method != 'eng') 
            if($this->params!=null) $_SESSION['last_page'] = $_SESSION['last_page'].'/'.$this->method.'/'.$this->params[0];
            else $_SESSION['last_page'] = $_SESSION['last_page'].'/'.$this->method;
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

    private function ApiController(array $url)
    {
        if(!isset($url[1])) {
            header('Location: '.'/'); 
            exit();
        }
        /**
         * Version 1
         * not used (Deprecated)
         * use version 2 instead
         * 
         * $class = $url[1];
         * $url = array_slice($url,2);
         * $params = array_values($url);
         * new API($class,$params);        
         */
        
        /**
         * Version 2
         * Named all url as endpoint
         * 
         */
        $url = array_slice($url,1);
        $endpoint = join('/',$url);
        new API($endpoint);

        // Router::add('GET','/api','API/NO','index');
        // Router::add('GET','/auth','Auth','index');
        // Router::add('POST','/auth','Auth','index');

        // Router::run();
    }
}