<?php

class About extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function profile() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('AboutModel')->getProfile(1);
        $data['data2'] = $this->model('AboutModel')->getProfile(2);
        // $data['data2'] = $this->model('AboutModel')->getProfile(2);
        $this->view('about/profile',$data);
    }

    public function vision() {
        $data['active'] = 'vision';
        $this->view('about/visi-misi',$data);
    }
    public function strategic() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('AboutModel')->getStrategi();
        $this->view('about/strategic',$data);
    }
    public function bod() {
        $data['active'] = 'bod';
        $data['data'] = $this->model('AboutModel')->getBOD();
        $this->view('about/bod',$data);
    }
    public function structureorg() {
        $data['active'] = 'structure';
        $this->view('about/structure',$data);
    }

    public function milestone($company=null) {
        if($company!=null) {
            $data['active'] = 'milestone';
            if(file_exists('app/views/about/milestone/'.$company.'.php'))
                $this->view('about/milestone/'.$company,$data);
            else
                $this->view('about/milestone',$data);
            return;
        }
        $data['active'] = 'milestone';
        $this->view('about/milestone',$data);
    }

    public function page() {

    }
}