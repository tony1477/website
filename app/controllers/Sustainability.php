<?php

class Sustainability extends Controller {

  public function index() {
    $this->view('about/index');
  }

  public function policy() {
    $data['active'] = 'policy';
    $data['data'] = $this->model('SustainabilityModel')->getPolicy();
    $this->view_versi3('sustainability/policy',$data);
  }
  public function certification() {
    $data['active'] = 'certification';
    $data['data'] = $this->model('SustainabilityModel')->getCertification();
    $this->view_versi3('sustainability/certification',$data);
  }
  public function environment() {
    $data['active'] = 'environment';
    $data['data'] = $this->model('SustainabilityModel')->getEnvironment();
    $this->view_versi3('sustainability/environment',$data);
  }
  public function gcg() {
    $data['active'] = 'community';
    $data['data'] = $this->model('SustainabilityModel')->getCSR();
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