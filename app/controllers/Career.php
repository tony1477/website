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
        if($data['identityid']=='')
            $this->models->saveIdentityCard($data);
        else
            $this->models->updateIdentityCard($data);
        // $this->models->saveIdentityCard($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }

    public function getDataIdentityCard()
    {
        header("Content-Type: application/json");
        $arr = array(
            'fail' => 400,
            'code' => 'FAILED',
            'message'=>'NOT ALLOWED'
        );
        // if($this->request->isAJAX()) {
            $request_body = file_get_contents('php://input');
            $data = json_decode($request_body);
            $data = (array) $data;
            try {
                $this->models = $this->model('CareerModel');
                $res = $this->models->getDataIdentityCard($data['employeeid']);
                $arr = [
                    'status' => 'success',
                    'code' => 200,
                    'data' => $res
                ];
            } catch (\Exception $e) {
                $arr = array(
                    'status' => $e->getMessage(),
                    'code' => 400
                );
            }
        // }
        $response = json_encode($arr);
        echo $response;
    }

    public function delIdentityCard()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->id;
        // var_dump($data);
        $this->models->delIdentityCard($data[0]);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'message' => 'Data berhasil terhapus'
        ];

        echo json_encode($message);
    }

    public function saveEducationHistory()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        if($data['educationid']=='')
            $this->models->saveEducationHistory($data);
        else
            $this->models->updateEducationHistory($data);
        // $this->models->saveIdentityCard($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }

    public function getDataEducationHistory()
    {
        header("Content-Type: application/json");
        $arr = array(
            'fail' => 400,
            'code' => 'FAILED',
            'message'=>'NOT ALLOWED'
        );
        // if($this->request->isAJAX()) {
            $request_body = file_get_contents('php://input');
            $data = json_decode($request_body);
            $data = (array) $data;
            try {
                $this->models = $this->model('CareerModel');
                $res = $this->models->getDataEducationHistory($data['employeeid']);
                $arr = [
                    'status' => 'success',
                    'code' => 200,
                    'data' => $res
                ];
            } catch (\Exception $e) {
                $arr = array(
                    'status' => $e->getMessage(),
                    'code' => 400
                );
            }
        // }
        $response = json_encode($arr);
        echo $response;
    }

    public function delEducationHistory()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->id;
        // var_dump($data);
        $this->models->delEducationHistory($data[0]);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'message' => 'Data berhasil terhapus'
        ];

        echo json_encode($message);
    }

    public function saveWorkExperience()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        if($data['experienceid']=='')
            $this->models->saveWorkExperience($data);
        else
            $this->models->updateWorkExperience($data);
        // $this->models->saveIdentityCard($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }

    public function getDataWorkExperience()
    {
        header("Content-Type: application/json");
        $arr = array(
            'fail' => 400,
            'code' => 'FAILED',
            'message'=>'NOT ALLOWED'
        );
        // if($this->request->isAJAX()) {
            $request_body = file_get_contents('php://input');
            $data = json_decode($request_body);
            $data = (array) $data;
            try {
                $this->models = $this->model('CareerModel');
                $res = $this->models->getDataWorkExperience($data['employeeid']);
                $arr = [
                    'status' => 'success',
                    'code' => 200,
                    'data' => $res
                ];
            } catch (\Exception $e) {
                $arr = array(
                    'status' => $e->getMessage(),
                    'code' => 400
                );
            }
        // }
        $response = json_encode($arr);
        echo $response;
    }

    public function delWorkExperience()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->id;
        // var_dump($data);
        $this->models->delWorkExperience($data[0]);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'message' => 'Data berhasil terhapus'
        ];

        echo json_encode($message);
    }

    public function saveFamily()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        if($data['familyid']=='')
            $this->models->saveFamily($data);
        else
            $this->models->updateFamily($data);
        // $this->models->saveIdentityCard($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }

    public function getDataFamily()
    {
        header("Content-Type: application/json");
        $arr = array(
            'fail' => 400,
            'code' => 'FAILED',
            'message'=>'NOT ALLOWED'
        );
        // if($this->request->isAJAX()) {
            $request_body = file_get_contents('php://input');
            $data = json_decode($request_body);
            $data = (array) $data;
            try {
                $this->models = $this->model('CareerModel');
                $res = $this->models->getDataFamily($data['employeeid']);
                $arr = [
                    'status' => 'success',
                    'code' => 200,
                    'data' => $res
                ];
            } catch (\Exception $e) {
                $arr = array(
                    'status' => $e->getMessage(),
                    'code' => 400
                );
            }
        // }
        $response = json_encode($arr);
        echo $response;
    }

    public function delFamily()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->id;
        // var_dump($data);
        $this->models->delFamily($data[0]);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'message' => 'Data berhasil terhapus'
        ];

        echo json_encode($message);
    }

    public function saveEmergencyContact()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->dataForm;
        if($data['emergencyid']=='')
            $this->models->saveEmergencyContact($data);
        else
            $this->models->updateEmergencyContact($data);
        // $this->models->saveIdentityCard($data);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'id' => $data['employeeid']
        ];

        echo json_encode($message);
    }

    public function getDataEmergencyContact()
    {
        header("Content-Type: application/json");
        $arr = array(
            'fail' => 400,
            'code' => 'FAILED',
            'message'=>'NOT ALLOWED'
        );
        // if($this->request->isAJAX()) {
            $request_body = file_get_contents('php://input');
            $data = json_decode($request_body);
            $data = (array) $data;
            try {
                $this->models = $this->model('CareerModel');
                $res = $this->models->getDataEmergencyContact($data['employeeid']);
                $arr = [
                    'status' => 'success',
                    'code' => 200,
                    'data' => $res
                ];
            } catch (\Exception $e) {
                $arr = array(
                    'status' => $e->getMessage(),
                    'code' => 400
                );
            }
        // }
        $response = json_encode($arr);
        echo $response;
    }

    public function delEmergencyContact()
    {
        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);
        $this->models = $this->model('CareerModel');
        $data = (array) $data->id;
        // var_dump($data);
        $this->models->delEmergencyContact($data[0]);
        
        $message = [
            'status' => 'success',
            'code' => 200,
            'message' => 'Data berhasil terhapus'
        ];

        echo json_encode($message);
    }

    public function getName($filename)
    {
        $rand = rand(0,1000000);
        $loc = getcwd().'/public/assets/img/career/jobseeker';
        $newname = 'user-'.$rand.'-'.$filename;
        if(file_exists($loc.'/'.$newname)):
            $this->getName($filename);
        endif;
        return $newname;
    }

    public function uploadfile()
    {
        header("Content-Type: application/json");
        $arr = array(
            'fail' => 400,
            'code' => 'FAILED',
            'message'=>'NOT ALLOWED'
        );
        // if($this->request->isAJAX()) {
            try {

                $loc = getcwd().'/public/assets/img/career/jobseeker';
                $filename = $_FILES['file']['name'];
                $newname = $this->getName($filename);

                if(move_uploaded_file($_FILES['file']['tmp_name'], $loc.'/'.$newname)):
                    $data = ['user_foto' => $newname];
                    $arr = array(
                        'status' => 'success',
                        'code' => 200,
                        'nama_file' => $data['user_foto'],
                    );
                endif;
            } catch (\Exception $e) {
                $arr = array(
                    'status' => $e->getMessage(),
                    'code' => 400
                );
            }
        // }
        $response = json_encode($arr);
        echo $response;
    }
    public function page() {

    }
}