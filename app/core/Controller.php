<?php

// require_once('../app/helper/Helper.php');
class Controller {
    public $layout = 'templates/template';
    public $view_folder = 'app/views/';
    public $catalog;
    public $nav;
    
    public function __construct() {
        // $this->nav = $this->model('LangModel')->getNav();
        $this->menu = $this->model('LangModel')->getMenu();
    }

    public function view($main,$data=[]) {
        $menu = $this->menu;
        $main = $this->view_folder.$main.'.php';
        // echo dirname(__FILE__).$main;
        require_once 'app/views/'.$this->layout.'.php';
    }

    public function viewwotemplate(string $view, array $data) {
        require_once 'app/views/'.$view.'.php';
    }

    public function model($model) {
        require_once('app/models/'.$model.'.php');
        return new $model;
    }
}