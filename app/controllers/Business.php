<?php

class Business extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function plantation() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('BusinessModel')->getPlantation();
        $this->view_versi3('business/plantation',$data);
    }

    public function mill() {
        $data['active'] = 'vision';
        $data['data'] = $this->model('BusinessModel')->getMill();
        $this->view_versi3('business/mill',$data);
    }
    public function trading() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('BusinessModel')->getTrading();
        $this->view_versi3('business/trading',$data);
    }
    public function lemongrass() {
        $data['active'] = 'bod';
        $this->view_versi3('business/lemongrass',$data);
    }
    public function fnb() {
        $data['active'] = 'structure';
        $data['data'] = $this->model('BusinessModel')->getFnb();
        $this->view_versi3('business/fnb',$data);
    }

    public function page() {

    }
}