<?php

class Business extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function plantation() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('BusinessModel')->getPlantation();
        $data['title'] = $this->getContent('business-plantation');
        $this->view_versi3('business/plantation',$data);
    }

    public function mill() {
        $data['active'] = 'vision';
        $data['data'] = $this->model('BusinessModel')->getMill();
        $data['title'] = $this->getContent('business-mill');
        $this->view_versi3('business/mill',$data);
    }
    public function trading() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('BusinessModel')->getTrading();
        $data['title'] = $this->getContent('business-trading');
        $this->view_versi3('business/trading',$data);
    }
    public function lemongrass() {
        $data['active'] = 'bod';
        $this->view_versi3('business/lemongrass',$data);
    }
    public function fnb() {
        $data['active'] = 'structure';
        $data['data'] = $this->model('BusinessModel')->getFnb();
        $data['title'] = $this->getContent('business-fnb');
        $this->view_versi3('business/fnb',$data);
    }

    public function agronomy()
    {
        $data['title'] = $this->getContent('business-agro');
        $this->view_versi3('business/agronomy',$data);
    }
    public function location_map()
    {
        $data['title'] = $this->getContent('location-map');
        $this->view_versi3('business/location-map',$data);
    }

    public function page() {

    }
}