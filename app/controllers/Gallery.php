<?php

class Gallery extends Controller {
    public function index() {
        $data['active'] = 'strategic';
        $data['title'] = $this->getContent('gallery');
        $this->view_versi3('info/gallery_photo',$data);
    }

    public function page() {

    }
}