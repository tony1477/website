<?php

class Home extends Controller {
    
    public function index() {
        // $data['nama'] = 'Martoni';
        $data['nav'] = $this->nav;
        $this->view('home/index',$data);
        // $this->view('templates/template');
    }

    public function index2()
    {
        $data['nav'] = $this->nav;
        $this->view('home/index2',$data);
    }
}