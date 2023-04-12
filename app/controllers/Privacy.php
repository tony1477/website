<?php
class Privacy extends Controller {
    
    public function index() {
        $data['nav'] = $this->nav;
        $this->view_versi3('privacy/privacy',$data);
    }

}