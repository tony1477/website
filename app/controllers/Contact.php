<?php

namespace WPG\IT\Website\controllers;
use WPG\IT\Website\core\Controller;
class Contact extends Controller {
    public function index() {
        $data['title'] = $this->getContent('contact');
        $this->view_versi3('info/contact',$data);
    }

    public function page() {

    }
}