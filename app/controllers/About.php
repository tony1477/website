<?php

namespace WPG\IT\Website\controllers;
use WPG\IT\Website\core\Controller;

class About extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function profile() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('AboutModel')->getProfile(1);
        $data['data2'] = $this->model('AboutModel')->getProfile(2);
        $data['title'] = $this->getContent('company-profile');
        $data['meta-description'] = 'Wilian Perkasa berdiri pada tanggal 10 Juli 2019,merupakan perusahaan induk yang produksi dan penjualan minyak sawit mentah, inti sawit, produk Agronomi, Trading Cangkang, serta produk bahan makanan dan minuman';
        // $data['data2'] = $this->model('AboutModel')->getProfile(2);
        $this->view_versi3('about/profile',$data);
    }

    public function vision() {
        $data['active'] = 'vision';
        $data['title'] = $this->getContent('vision');
        $data['meta-description'] = "Visi Misi Wilian Perkasa : 'Meningkatkan kualitas hidup melalui pengembangan multi industri dan menjadi perusahaan yang dipercaya'";
        $this->view_versi3('about/visi-misi',$data);
    }
    public function strategic() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('AboutModel')->getStrategi();
        $data['title'] = $this->getContent('strategic-business');
        $data['meta-description'] = 'Strategi bisnis perusahaan dibangun atas komitmen dan konsistensi sesuai hukum, peraturan, dan standar keberlanjutan';
        $this->view_versi3('about/strategic',$data);
    }
    public function bod() {
        $data['active'] = 'bod';
        $data['data'] = $this->model('AboutModel')->getBOD();
        $data['title'] = $this->getContent('bod');
        $data['meta-description'] = 'Seluruh anggota Dewan, Corporate Head selalu memonitor penerapan Good Corporate Governance (GCG) secara berkelanjutan.';
        $this->view_versi3('about/bod',$data);
    }
    public function structureorg() {
        $data['active'] = 'structure';
        $data['title'] = $this->getContent('structure-org');
        $data['meta-description'] = 'Wilian Perkasa perusahaan yang terus berkembang dan bertumbuh, pelajari lebih lanjut tentang struktur kami.';
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
        $data['meta-description'] = 'Perjalanan bisnis Wilian Perkasa, dimulai sejak tahun tahun 2000-an hingga saat ini terus eksis.';
        $this->view_versi3('about/milestone',$data);
    }

    public function page() {

    }
}