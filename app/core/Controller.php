<?php

namespace WPG\IT\Website\core;
use WPG\IT\Website\helper\Helper;
use WPG\IT\Website\core\Config;
// require_once('../app/helper/Helper.php');
class Controller {
    public $layout = 'templates/template';
    public $layout_versi3 = 'templates/template_versi3';
    public $view_folder = 'app/views/';
    public $catalog;
    public $nav;
    private $helper;
    private $menu_versi3;
    private $menu;

    public function __construct() {
        // $this->nav = $this->model('LangModel')->getNav();
        $this->getLang();
        $this->menu = $this->model('LangModel')->getMenu();
        $this->menu_versi3 = $this->model('LangModel')->getMenu_versi3();
        $this->helper = new Helper();
    }

    public function view($main,$data=[]) {
        $menu = $this->menu;
        $main = $this->view_folder.$main.'.php';
        // echo dirname(__FILE__).$main;
        require_once 'app/views/'.$this->layout.'.php';
    }

    public function view_versi3($main,$data=[]) {
        $menu = $this->menu_versi3;
        $main = $this->view_folder.$main.'.php';
        // echo dirname(__FILE__).$main;
        require_once 'app/views/'.$this->layout_versi3.'.php';
    }

    public function viewwotemplate( $view,  $data) {
        require_once 'app/views/'.$view.'.php';
    }

    public function model($model) {
        // require_once('app/models/'.$model.'.php');
        $class = Config::APP_NAMESPACE.'models\\'.$model;
        return new $class();
    }

    public function getUrl()
    {
        return $this->helper->getUrl();
    }

    public function getLang()
    {
        if(!isset($_SESSION['lang'])) $_SESSION['lang']='id';
        return $_SESSION['lang'];
    }

    public function getContent($text)
    {
        return $this->helper->getContent($text);
    }

    public function getContentDb($text)
    {
        return $this->helper->getContentDb($text);
    }

    public function getNewsTitle($resource)
    {
        return $this->helper->getNewsTitle($resource);
    }

    public function getNewsHighlight($resource)
    {
        return $this->helper->getNewsHighlight($resource);
    }

    public function getNewsContent($resource)
    {
        return $this->helper->getNewsContent($resource);
    }
}