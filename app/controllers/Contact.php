<?php

class Contact extends Controller {
    public function index() {
        $data['title'] = $this->getContent('contact');
        $this->view_versi3('info/contact',$data);
    }

    public function page() {

    }
}