<?php

class Info extends Controller {
    private $lang;   

    public function index() {
        $this->view('about/index');
    }

    public function news() {
        $data['active'] = 'profile';
        $model = $this->model('NewsModel');
        $data['news'] = $model->getPageNews();
        $data['title'] = $this->getContent('news');
        $this->view_versi3('info/news',$data);
    }

    public function detail_news($url) {
        $model = $this->model('NewsModel');
        $data['news'] = $model->getDetailNews($url);
        $data['title'] = $this->getContent('detail-news');
        $this->view_versi3('info/news-detail',$data);
    }

    public function video() {
        $data['active'] = 'vision';
        $this->view('info/gallery_video',$data);
    }

    public function gallery() {
        $data['active'] = 'strategic';
        $data['title'] = $this->getContent('gallery');
        $this->view_versi3('info/gallery_photo',$data);
    }

    public function contact() {
        $data['active'] = 'bod';
        $data['title'] = $this->getContent('contact');
        $this->view_versi3('info/contact',$data);
    }
    
    public function career($url=null) {
        if($url!==null) return $this->careerpath($url);
        $data['data'] = $this->model('CareerModel')->getData(null);
        $data['title'] = $this->getContent('career');
        $this->view_versi3('career/index',$data);
    }

    public function careerpath($careerid) {
        $id = substr($careerid,strpos($careerid,'-')+1);
        $data['model'] = $this->model('CareerModel')->getData($id);
        if($data['model']==null) header('location:'.BASE_URL.'info/career');
        $this->viewwotemplate('career/form',$data);
    }

    public function page() {

    }
}