<?php

namespace WPG\IT\Website\services;

use WPG\IT\Website\repository\CareerRepository;
use WPG\IT\Website\services\AssetService;

class CareerService
{
    private CareerRepository $careerRepo;
    public function __construct()
    {
        $this->careerRepo = new CareerRepository();
    }
    
    public function getAllEmployee(array $request) :array
    {
        $draw = $request['draw'];
        $filters = [
            'start' => intval($request['start']),
            'length' => intval($request['length']),
            'search' => $request['search']['value'],
        ];
        $data = $this->careerRepo->getEmployees($filters);
        $response = [
            'draw' => $draw,
            'data' => $data,
            'recordsTotal' => 96,
            'recordsFiltered' => 96
        ];
        return $response;
    }

    public function getPersonalEmployee(int $id) :?array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getDetail($id);
        return $data;
    }

    public function getEmployee(int $id) :array
    {
        $response = [
            'personal' => $this->careerRepo->getDetail($id),
            // 'emergency' => $this->careerRepo->getEmployeeContact($id),
            // 'family' => $this->careerRepo->getEmployeeFamily($id),
            // 'education' => $this->careerRepo->getEmployeeEducation($id),
            // 'identity' => $this->careerRepo->getEmployeeIdentity($id),
            // 'organization' => $this->careerRepo->getEmployeeOrganization($id),
            // 'workexperience' => $this->careerRepo->getEmployeeWorkExperience($id)
        ];
        return $response;
    }

    public function getPhotoEmployee(int $id) :array
    {
        $data = $this->careerRepo->getPhoto($id);
        if($data['photo']=='') throw new \Exception("Photo tidak dilampirkan", 1);
        
        $response = [
            'file' => $data['photo'],
            'path' => AssetService::getPhoto(),
            'fullpath' => AssetService::getPhoto().'\\'.$data['photo']
        ];
        return $response;
    }

    public function getIjazahEmployee(int $id) :array
    {
        $data = $this->careerRepo->getIjazah($id);
        // if($data['ijazah']=='') throw new \Exception("Ijazah tidak dilampirkan", 1);
        $response = [
            'file' => $data['ijazah'],
            'path' => AssetService::getDoc(),
            'fullpath' => AssetService::getDoc().'\\'.$data['ijazah']
        ];
        return $response;
    }

    public function getCvEmployee(int $id) :array
    {
        $data = $this->careerRepo->getCv($id);
        // if($data['cv']=='') throw new \Exception("Ijazah tidak dilampirkan", 1);
        $response = [
            'file' => $data['cv'],
            'path' => AssetService::getDoc(),
            'fullpath' => AssetService::getDoc().'\\'.$data['cv']
        ];
        return $response;
    }

    public function getIdentityEmployee(int $id) :array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getEmployeeIdentity($id);
        // if($data['cv']=='') throw new \Exception("Ijazah tidak dilampirkan", 1);
        // $response = [
        //     // 'draw' => $draw,
        //     // 'data' => $data,
        //     // 'recordsTotal' => 96,
        //     // 'recordsFiltered' => 96
        //     'data' => $data
        // ];
        // return $response;
        return $data;
    }

    public function getEducationEmployee(int $id) :array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getEmployeeEducation($id);
        return $data;
    }

    public function getExperienceEmployee(int $id) :array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getEmployeeWorkExperience($id);
        return $data;
    }

    public function getFamilyEmployee(int $id) :array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getEmployeeFamily($id);
        return $data;
    }

    public function getEmergencyEmployee(int $id) :array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getEmployeeContact($id);
        return $data;
    }

    public function getOrganizationEmployee(int $id) :array
    {
        $draw = $request['draw'] ?? 1;
        $data = $this->careerRepo->getEmployeeOrganization($id);
        return $data;
    }
}
