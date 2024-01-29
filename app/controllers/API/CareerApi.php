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
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = $e->getCode() ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }

    public function getDetail(int $id)
    {
        try {
            $data = $this->careerService->getEmployee($id);
            echo ResponseAPI::successDataTable($data);
            // print_r($requestData);
        }
        catch (\Exception $e) {
            $code = $e->getCode() ?? 400;
            echo ResponseAPI::failed($e->getMessage(),$code);
        }
    }
}
