<?php

class Carrer extends Controller {
    public function index() {
        $data['data'] = $this->model('');
        $this->view('carrer/index');
    }

    // public function news() {
    //     $data['active'] = 'profile';
    //     $this->view('info/news',$data);
    // }

    public function page() {

    }
}