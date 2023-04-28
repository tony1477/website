<?php

class Investor extends Controller {
    public function index() {
        // $this->comp_release();
        $data['active'] = 'index';
        $data['title'] = $this->getContent('investor-relation');
        $data['meta-description'] = 'Cari tahu bagaimana Wilian Perkasa bisa membantu Anda mencapai tujuan keuangan Anda dengan investasi yang tepat. Bergabunglah dengan investor kami yang sukses dan nikmati pengembalian investasi yang mengesankan';
        $data['meta-keywords'] = 'Investasi yang menguntungkan, Investasi kelapa sawit, Harga minyak sawit mentah (CPO), Industri kelapa sawit yang berkembang, Penelitian dan pengembangan kelapa sawit';
        $this->view_versi3('investor/index',$data);
    }

    public function comp_release() {
        $data['active'] = 'comp-release';
        $this->view('investor/release',$data);
    }

    public function meeting_stakeholder() {
        $data['active'] = 'meet-skhl';
        $this->view('investor/rups',$data);
    }

    public function annual_report() {
        $data['active'] = 'ann-rpt';
        $this->view('investor/annual',$data);
    }

    public function financial_statement() {
        $data['active'] = 'fin-stmt';
        $this->view('investor/financial',$data);
    }

    public function financial_highlight() {
        $data['active'] = 'fin-higlight';
        $this->view('investor/highlights',$data);
    }
}