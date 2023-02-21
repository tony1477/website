<?php

class Business extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function plantation() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('BusinessModel')->getPlantation();
        $this->view('business/plantation',$data);
    }

    public function mill() {
        $data['active'] = 'vision';
        $data['data'] = $this->model('BusinessModel')->getMill();
        $this->view('business/mill',$data);
    }
    public function trading() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('BusinessModel')->getTrading();
        $this->view('business/trading',$data);
    }
    public function lemongrass() {
        $data['active'] = 'bod';
        $this->view('business/lemongrass',$data);
    }
    public function fnb() {
        $data['active'] = 'structure';
        $data['data'] = $this->model('BusinessModel')->getFnb();
        $this->view('business/fnb',$data);
    }

    public function page() {

    }
}