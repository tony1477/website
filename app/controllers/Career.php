<?php

class Career extends Controller {
    private $models;
    public function index() {
        $data['data'] = $this->model('CareerModel')->getData(null);
        $data['title'] = $this->getContent('career');
        $this->view_versi3('career/index',$data);
    }

    public function apply($careerid) {
        $id = substr($careerid,strpos($careerid,'-')+1);
        $data['model'] = $this->model('CareerModel')->getData($id);
        if($data['model']==null) header('location:'.BASE_URL.'career');
        $data['title'] = 'Apply Position';
        $data['careerid'] = $id;
        $this->viewwotemplate('career/form',$data);
    }

    public function saveprofile()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        if($data['employeeid']==0)
            $employeeid = $this->models->saveProfile($data);
        else
            $this->models->updateProfile($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => ($data['employeeid']==0 ? $employeeid : $data['employeeid'])
        ];

        echo json_encode($message);
    }

    public function saveidentitycontact()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        $this->models->updateIdentityContact($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }

    public function saveidentitycard()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        $this->models->saveIdentityCard($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }
    public function page() {

    }
}