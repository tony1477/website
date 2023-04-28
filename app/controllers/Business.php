<?php

class Business extends Controller {
    public function index() {
        $this->view('about/index');
    }

    public function plantation() {
        $data['active'] = 'profile';
        $data['data'] = $this->model('BusinessModel')->getPlantation();
        $data['title'] = $this->getContent('business-plantation');
        $data['meta-description'] = 'Mengelola Perkebunan Kelapa Sawit dengan praktik berkelanjutan dan tanggung jawab.';
        $this->view_versi3('business/plantation',$data);
    }

    public function mill() {
        $data['active'] = 'vision';
        $data['data'] = $this->model('BusinessModel')->getMill();
        $data['title'] = $this->getContent('business-mill');
        $data['meta-description'] = 'Wilan Perkasa melakuan pengelolaan Bisnis Pengolahan Kelapa Sawit dengan memperhatikan terhadap aspek lingkungan.';
        $this->view_versi3('business/mill',$data);
    }
    public function trading() {
        $data['active'] = 'strategic';
        $data['data'] = $this->model('BusinessModel')->getTrading();
        $data['title'] = $this->getContent('business-trading');
        $data['meta-description'] = 'Wilian Trading Perkasa atau disebut WTP bergerak di bidang Industri pembelian dan penjualan cangkang kelapa Sawit dan produk Nabati Lainnya.';
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
        $data['meta-description'] = 'Wilian Perkasa turut menciptakan gebrakan baru di dalam dunia kuliner, sejalan dengan visi misi perusahaan menjadi muli industri.';
        $this->view_versi3('business/fnb',$data);
    }

    public function agronomy()
    {
        $data['title'] = $this->getContent('business-agro');
        $data['meta-description'] = 'PT. Serai Wangi; salah satu pengembangan bisnis multi industri Wilian Perkasa yang bergerak di bidang Agronomy dan buah-buahan.';
        $this->view_versi3('business/agronomy',$data);
    }
    public function location_map()
    {
        $data['title'] = $this->getContent('location-map');
        $data['meta-description'] = 'Wilian Perkasa merupakan perusahaan induk dengan anak perusahaan yang terlibat di dalam produksi dan penjualan minyak sawit, dan buah-buahan, dan fnb.';
        $this->view_versi3('business/location-map',$data);
    }

    public function page() {

    }
}