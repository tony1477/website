<?php

class Sustainability extends Controller {

  public function index() {
    $this->view('about/index');
  }

  public function policy() {
    $data['active'] = 'policy';
    $data['data'] = $this->model('SustainabilityModel')->getPolicy();
    $data['title'] = $this->getContent('policy');
    $data['meta-description'] = 'Kami memahami pentingnya keberlanjutan dalam bisnis kelapa sawit kami. Oleh karena itu, kami berkomitmen untuk menjalankan kebijakan budi daya kelapa sawit yang berkelanjutan untuk lingkungan, komunitas, dan bisnis kami sendiri';
    $data['meta-keywords'] = 'keberlanjutan, kebijakan budi daya kelapa sawit, lingkungan, komunitas, bisnis.';
    $this->view_versi3('sustainability/policy',$data);
  }
  public function certification() {
    $data['active'] = 'certification';
    $data['data'] = $this->model('SustainabilityModel')->getCertification();
    $data['title'] = $this->getContent('certification');
    $data['meta-description'] = 'Kami memahami pentingnya sertifikasi keberlanjutan dalam bisnis kelapa sawit kami. Oleh karena itu, kami berkomitmen untuk memenuhi standar sertifikasi yang paling ketat dan menawarkan produk kelapa sawit berkualitas tinggi yang dihasilkan secara bertanggung jawab.';
    $data['meta-keywords'] = 'sertifikasi keberlanjutan, bisnis kelapa sawit, standar sertifikasi, produk kelapa sawit berkualitas tinggi, bertanggung jawab.';
    $this->view_versi3('sustainability/certification',$data);
  }
  public function environment() {
    $data['active'] = 'environment';
    $data['data'] = $this->model('SustainabilityModel')->getEnvironment();
    $data['title'] = $this->getContent('environment');
    $data['meta-description'] = 'Wilian Perkasa berkomitmen untuk mengelola lingkungan dan berupaya untuk selalu menerapkan praktik bisnis yang meminimalkan dampak terhadap lingkungan.';
    $data['meta-keywords'] = 'lingkungan yang sehat, keberlanjutan lingkungan, bisnis kelapa sawit, memprioritaskan, generasi mendatang.';
    $this->view_versi3('sustainability/environment',$data);
  }
  public function gcg() {
    $data['active'] = 'community';
    $data['data'] = $this->model('SustainabilityModel')->getCSR();
    $data['title'] = $this->getContent('gcg-title');
    $data['meta-description'] = 'Tata kelola perusahaan yang baik adalah prinsip utama di Wilian Perkasa. Kami berkomitmen menjalankan bisnis dengan integritas dan transparansi untuk mencapai keberhasilan jangka panjang. Temukan bagaimana kami memastikan keberlanjutan bisnis kami.';
    $data['meta-keywords'] = 'tata kelola perusahaan yang baik, integritas, transparansi, bisnis kelapa sawit, keberhasilan jangka panjang, keberlanjutan bisnis.';
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