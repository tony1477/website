<?php

class Sustainability extends Controller {

  public function index() {
    $this->view('about/index');
  }

  public function policy() {
    $data['active'] = 'policy';
    $data['data'] = $this->model('SustainabilityModel')->getPolicy();
    $data['title'] = $this->getContent('policy');
    $this->view_versi3('sustainability/policy',$data);
  }
  public function certification() {
    $data['active'] = 'certification';
    $data['data'] = $this->model('SustainabilityModel')->getCertification();
    $data['title'] = $this->getContent('certification');
    $this->view_versi3('sustainability/certification',$data);
  }
  public function environment() {
    $data['active'] = 'environment';
    $data['data'] = $this->model('SustainabilityModel')->getEnvironment();
    $data['title'] = $this->getContent('environment');
    $this->view_versi3('sustainability/environment',$data);
  }
  public function gcg() {
    $data['active'] = 'community';
    $data['data'] = $this->model('SustainabilityModel')->getCSR();
    $data['title'] = $this->getContent('gcg-title');
    $this->view_versi3('sustainability/community',$data);
  }
  public function osh() {
    $data['active'] = 'osh';
    $data['data'] = $this->model('SustainabilityModel')->getOSH();
    $this->view('sustainability/osh',$data);
  }
  // public function policy() {
  //   $data['active'] = 'policy';
  //   $this->view('sustainability/policy',$data);
  // }
}