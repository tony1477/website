<?php

class Home extends Controller {
    
    public function index() {
        // $data['nama'] = 'Martoni';
        $data['nav'] = $this->nav;
        $this->view('home/index',$data);
        // $this->view('templates/template');
    }
}