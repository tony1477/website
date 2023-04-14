<?php

class Home extends Controller {
    
    public function index() {
        // $data['nama'] = 'Martoni';
        // $data['nav'] = $this->nav;
        // $this->view('home/index',$data);
        $this->index1_new();
        // $this->view('templates/template');
    }

    public function index2()
    {
        $data['nav'] = $this->nav;
        $this->view('home/index2',$data);
    }

    public function index3()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
    }

    public function index1_new()
    {
        $data['nav'] = $this->nav;
        $data['title'] = $this->getContent('home');
        $this->view_versi3('home/index3',$data);
    }

    public function index2_new()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
    }

    public function index3_new()
    {
        $data['nav'] = $this->nav;
        $this->view_versi3('home/index3',$data);
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
                // var_dump($_FILES);
                $filename = $_FILES['file']['name'];
                $newname = $this->getName($filename);

                if(move_uploaded_file($_FILES['file']['tmp_name'], $loc.'/'.$newname)):
                    $data = ['user_foto' => $newname];
                    // $this->model->update(user()->id,$data);
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
}