<?php

class Info extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function news() {
        $data['active'] = 'profile';
        $this->view_versi3('info/news',$data);
    }

    public function video() {
        $data['active'] = 'vision';
        $this->view('info/gallery_video',$data);
    }
    public function gallery() {
        $data['active'] = 'strategic';
        $this->view_versi3('info/gallery_photo',$data);
    }
    public function contact() {
        $data['active'] = 'bod';
        $this->view_versi3('info/contact',$data);
    }
    
    public function career($url=null) {
        $data['data'] = $this->model('CareerModel')->getData(null);
        if($url!==null) return $this->careerpath($url);
        $this->view_versi3('career/index',$data);
    }

    public function careerpath(string $careerid) {
        $data['id'] = $careerid;
        $this->viewwotemplate('career/form',$data);
    }
    public function page() {

    }
}