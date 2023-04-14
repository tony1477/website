<?php

class About extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function profile() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('AboutModel')->getProfile(1);
        $data['data2'] = $this->model('AboutModel')->getProfile(2);
        $data['title'] = $this->getContent('company-profile');
        // $data['data2'] = $this->model('AboutModel')->getProfile(2);
        $this->view_versi3('about/profile',$data);
    }

    public function vision() {
        $data['active'] = 'vision';
        $data['title'] = $this->getContent('vision');
        $this->view_versi3('about/visi-misi',$data);
    }
    public function strategic() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('AboutModel')->getStrategi();
        $data['title'] = $this->getContent('strategic-business');
        $this->view_versi3('about/strategic',$data);
    }
    public function bod() {
        $data['active'] = 'bod';
        $data['data'] = $this->model('AboutModel')->getBOD();
        $data['title'] = $this->getContent('bod');
        $this->view_versi3('about/bod',$data);
    }
    public function structureorg() {
        $data['active'] = 'structure';
        $data['title'] = $this->getContent('structure-org');
        $this->view_versi3('about/structure',$data);
    }

    public function milestone($company=null) {
        if($company!=null) {
            $data['active'] = 'milestone';
            if(file_exists('app/views/about/milestone/'.$company.'.php'))
                $this->view('about/milestone/'.$company,$data);
            else
                $this->view_versi3('about/milestone',$data);
            return;
        }
        $data['active'] = 'milestone';
        $data['title'] = $this->getContent('milestone');
        $this->view_versi3('about/milestone',$data);
    }

    public function page() {

    }
}