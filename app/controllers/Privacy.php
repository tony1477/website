<?php

namespace WPG\IT\Website\controllers;
use WPG\IT\Website\core\Controller;
class Privacy extends Controller {
    
    public function index() {
        $data['nav'] = $this->nav;
        $data['title'] = $this->getContent('privacy-policy');
        $this->view_versi3('privacy/privacy',$data);
    }

}