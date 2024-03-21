<?php

namespace WPG\IT\Website\controllers\API;

use WPG\IT\Website\controllers\API\CareerApi;
use WPG\IT\Website\controllers\Auth as AuthToken;
use WPG\IT\Website\core\Router;

class Main
{
    // Version 1
    // public function __construct(string $endpoint, ?array $values)
    // {
    //     // check token
    //     if(!$this->verifyToken()) exit();
    //     Router::add('GET','employee',CareerApi::class,'getEmployee');
    //     Router::add('GET','employee/([0-9]*)',CareerApi::class,'getDetail');
    //     Router::getPath('test');
    //     Router::run($endpoint);
    //     // print_r($values[0]);
    //     // if($class === 'employee') return new CareerApi($method,$values);
    // }

    // Version 2
    public function __construct(string $endpoint)
    {
        // check token
        if(!$this->verifyToken()) exit();
        Router::add('GET','employee',CareerApi::class,'getEmployee');
        Router::add('GET','employee/([0-9]*)',CareerApi::class,'getDetail');
        Router::add('GET','employee/([0-9]*)/photo',CareerApi::class,'getPhoto');
        Router::add('GET','employee/([0-9]*)/ijazah',CareerApi::class,'getIjazah');
        Router::add('GET','employee/([0-9]*)/cv',CareerApi::class,'getCv');
        Router::add('GET','employee/([0-9]*)/identity',CareerApi::class,'getIdentity');
        Router::add('GET','employee/([0-9]*)/education',CareerApi::class,'getEducation');
        Router::add('GET','employee/([0-9]*)/experience',CareerApi::class,'getExperience');
        Router::add('GET','employee/([0-9]*)/family',CareerApi::class,'getFamily');
        Router::add('GET','employee/([0-9]*)/emergency',CareerApi::class,'getEmergency');
        Router::add('GET','employee/([0-9]*)/organization',CareerApi::class,'getOrganization');
        Router::run($endpoint);
    }

    private function verifyToken() :bool
    {
        $auth = new AuthToken();
        $verify = json_decode($auth->verify());

        // if($verify[0]->status !== 'success') echo json_encode($verify);
        if($verify->status !== 'success') {
            echo json_encode($verify);
            return false;
        }
        return true;
    }
}
