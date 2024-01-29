<?php

namespace WPG\IT\Website\controllers;
use WPG\IT\Website\core\Controller;
class News extends Controller {
    public function index()
    {
        $model = $this->model('NewsModel');
        $data['news'] = $model->getPageNews();
        $data['title'] = $this->getContent('news');
        $this->view_versi3('info/news',$data);
    }

    public function read($url) {
        $model = $this->model('NewsModel');
        $data['news'] = $model->getDetailNews($url);
        $data['title'] = $this->getContent('detail-news');
        $this->view_versi3('info/news-detail',$data);
    }
}