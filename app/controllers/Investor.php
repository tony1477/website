<?php

class Investor extends Controller {
    public function index() {
        // $this->comp_release();
        $data['active'] = 'index';
        $this->view('investor/index',$data);
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