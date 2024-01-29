<?php

namespace WPG\IT\Website\services;

use WPG\IT\Website\repository\CareerRepository;


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
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data)
        ];
        return $response;
    }

    public function getEmployee(int $id) :array
    {
        $data = $this->careerRepo->getDetail($id);
        $response = [
            'data' => $data
        ];
        return $response;
    }
}
