<?php

class Info extends Controller {
    private $lang;   

    public function index() {
        $this->view('about/index');
    }

    // public function news() {
    //     $data['active'] = 'profile';
    //     $model = $this->model('NewsModel');
    //     $data['news'] = $model->getPageNews();
    //     $data['title'] = $this->getContent('news');
    //     $this->view_versi3('info/news',$data);
    // }

    // public function detail_news($url) {
    //     $model = $this->model('NewsModel');
    //     $data['news'] = $model->getDetailNews($url);
    //     $data['title'] = $this->getContent('detail-news');
    //     $this->view_versi3('info/news-detail',$data);
    // }

    public function video() {
        $data['active'] = 'vision';
        $this->view('info/gallery_video',$data);
    }

    // public function gallery() {
    //     $data['active'] = 'strategic';
    //     $data['title'] = $this->getContent('gallery');
    //     $this->view_versi3('info/gallery_photo',$data);
    // }

    // public function contact() {
    //     $data['active'] = 'bod';
    //     $data['title'] = $this->getContent('contact');
    //     $this->view_versi3('info/contact',$data);
    // }
    
    // public function career_old($url=null) {
    //     if($url!==null) return $this->careerpath($url);
    //     $data['data'] = $this->model('CareerModel')->getData(null);
    //     $data['title'] = $this->getContent('career');
    //     $this->view_versi3('career/index',$data);
    // }

    // public function careerpath($careerid) {
    //     $id = substr($careerid,strpos($careerid,'-')+1);
    //     $data['model'] = $this->model('CareerModel')->getData($id);
    //     if($data['model']==null) header('location:'.BASE_URL.'info/career');
    //     $this->viewwotemplate('career/form',$data);
    // }

    public function submitform()
    {
        $model = $this->model('InfoModel');
        $public_key = "6Le-DpMlAAAAALaTmCl5NhpAdMKZPFkwVV1DmRjV"; 
        $private_key = "6Le-DpMlAAAAALYjbBcdT7OXDNMMO9V2Q_65uEQX"; 
        $url_verify = "https://www.google.com/recaptcha/api/siteverify";
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $response_key = $data->captcha;
        // $response = file_get_contents($url_verify."?secret=".$private_key."&response=".$response_key);
        $url = $url_verify."?secret=".$private_key."&response=".$response_key;
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_URL,$url);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $response = json_decode($response);
        $message = [
            'status' => 'fail',
            'code' => 200,
            'message' => 'Data tidak tersimpan'
        ];
        if($response -> success == true){
            $data = (array) $data;
            $model->saveContactUs($data);
            $message = [
                'status' => 'success',
                'code' => 200,
                'message' => 'Data berhasil disimpan',
            ];
            echo json_encode($message);
        } else{
            echo json_encode($message);
        }
    }

    public function page() {

    }
}