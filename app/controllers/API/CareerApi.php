<?php

namespace WPG\IT\Website\controllers\API;

use WPG\IT\Website\core\Controller;
use WPG\IT\Website\services\CareerService;


class CareerApi extends Controller
{
    private CareerService $careerService;
    public function __construct()
    {
        $this->careerService = new CareerService();
    }

    public function getEmployee()
    {
        try {
            $requestData = RequestHandler::get($_SERVER['REQUEST_URI']);
            $data = $this->careerService->getAllEmployee($requestData);
            echo ResponseAPI::successDataTable($data);
            // var_dump($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getDetail(int $id)
    {
        try {
            $data = $this->careerService->getEmployee($id);
            echo ResponseAPI::successData($data);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getPhoto(int $id)
    {
        try {
            $data = $this->careerService->getPhotoEmployee($id);
            echo ResponseAPI::successView($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getIjazah(int $id)
    {
        try {
            $data = $this->careerService->getIjazahEmployee($id);
            echo ResponseAPI::successView($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getCv(int $id)
    {
        try {
            $data = $this->careerService->getCvEmployee($id);
            echo ResponseAPI::successView($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getIdentity(int $id)
    {
         try {
            $data = $this->careerService->getIdentityEmployee($id);
            echo ResponseAPI::successData($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getEducation(int $id)
    {
         try {
            $data = $this->careerService->getEducationEmployee($id);
            echo ResponseAPI::successData($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getExperience(int $id)
    {
         try {
            $data = $this->careerService->getExperienceEmployee($id);
            echo ResponseAPI::successData($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getFamily(int $id)
    {
         try {
            $data = $this->careerService->getFamilyEmployee($id);
            echo ResponseAPI::successData($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getEmergency(int $id)
    {
         try {
            $data = $this->careerService->getEmergencyEmployee($id);
            echo ResponseAPI::successData($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getOrganization(int $id)
    {
         try {
            $data = $this->careerService->getOrganizationEmployee($id);
            echo ResponseAPI::successData($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = intval($e->getCode()) ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }
}
