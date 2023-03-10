<?php

class Home extends Controller {
    
    public function index() {
        // $data['nama'] = 'Martoni';
        // $data['nav'] = $this->nav;
        // $this->view('home/index',$data);
        $this->index1_new();
        // $this->view('templates/template');
    }

    public function index2()
    {
        $data['nav'] = $this->nav;
        $this->view('home/index2',$data);
    }

    public function index3()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
    }

    public function index1_new()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
    }

    public function index2_new()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
    }

    public function index3_new()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
    }
}