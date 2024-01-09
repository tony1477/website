<?php

namespace WPG\IT\Website\controllers;
use WPG\IT\Website\core\Controller;
class Gallery extends Controller {
    public function index() {
        $data['active'] = 'strategic';
        $data['title'] = $this->getContent('gallery');
        $data['meta-description'] = 'Gallery Wilian Perkasa';
        $data['meta-keywords'] = 'Album foto';
        $this->view_versi3('info/gallery_photo',$data);
    }

    public function page() {

    }
}