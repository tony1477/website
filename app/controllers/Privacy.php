<?php
class Privacy extends Controller {
    
    public function index() {
        $data['nav'] = $this->nav;
        $this->view('privacy/privacy',$data);
    }

}