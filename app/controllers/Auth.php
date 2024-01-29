<?php

namespace WPG\IT\Website\controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use WPG\IT\Website\core\Config;
use WPG\IT\Website\core\Controller;
use WPG\IT\Website\entity\Identity;
use WPG\IT\Website\repository\IdentityRepository;


class Auth extends Controller
{
    private IdentityRepository $IdentityRepository;
    
    public function __construct()
    {
        $this->IdentityRepository = new IdentityRepository();
    }
    public function index()
    {
        // check request method
        $request = $_SERVER['REQUEST_METHOD'];
        if($request==='GET') return header('Location: '.'/');
        if($request==='POST') return $this->getToken();
    }

    private function getToken()
    {
        $response=[];
        header('Content-Type: application/json; charset=utf-8');
        try {
            // check username & password was sent
            if(!isset($_POST['username']) || !isset($_POST['password'])) throw new \Exception("Credentials was not valid",401);
            
            // username or password can't be blank
            if((trim($_POST['username'])==='') || trim($_POST['password'])==='') throw new \Exception("Username or password can't be blank", 401);            
            
            // filter input
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            // check credentials
            // $authUser = ['username'=>'admin','password'=>'adminjuga','userid'=>1];
            // if($username!==$authUser['username'] || $password!==$authUser['password']) throw new \Exception("Invalid Authorized Access", 401);
            $userIdentity=$this->verifyIdentity($username,$password);
            if($userIdentity==null) throw new \Exception("Invalid Authorized Access", 401);
            
            $currentTime = time();
            $expired = $currentTime + Config::MAX_TOKEN_LIMIT;

            $payload = [
                'issued' => 'AuthServer',
                'audience' => 'e-recruitment',
                'issuedAt' => $currentTime,
                'notBefore' => $currentTime,
                'expired' => $expired,
                'userid' => $userIdentity->getId()
            ];
            $token = JWT::encode($payload,Config::SECRET_KEY,Config::TOKEN_ALGO);
            $payload['token'] = $token;
            if($this->model('AuthModel')->store($payload)!==true) throw new \Exception("Something goes wrong, contact your administrator", 400);
            // for testing
            // $store = $this->model('AuthModel')->store($payload);
            // if($store!==true) return throw new \Exception($store, 400);
            
            $reponse['status'] = 'success';
            $response['data'] = [
                'token' => $token,
                'userId' => $userIdentity->getUsername()
            ];
            http_response_code(200);
        }
        catch(\Exception $e) {
            $response['status'] = 'unauthorized';
            $response['message'] = $e->getMessage();
            http_response_code($e->getCode());
        }
        echo json_encode($response);
    }

    public function verify()
    {
        return $this->verifyToken();
    }

    private function verifyToken() :string
    {
        $headers = getallheaders();
        header('Content-Type: application/json; charset=utf-8');
        $response = [];
        try {
            $bearer = isset($headers['Authorization']) ? $headers['Authorization'] : null;
            if (!$bearer) throw new \Exception('No token provided',401); 
            // trim Bearer
            $token = str_replace('Bearer ','',$bearer);
            if($token=='Bearer') throw new \Exception('No token provided',401); 
            
            JWT::decode($token, new Key(Config::SECRET_KEY, Config::TOKEN_ALGO));
            // check expired
            $validate = $this->model('AuthModel')->checkValidate($token);
            if($validate==null) throw new \Exception("Token expired, please relogin", 401);
            
            // $response[] = array('status'=>'success');
            $response['status'] = 'success';
        }
        catch(\Exception $e) {
            $response['status'] = 'unauthorized';
            $response['message'] = $e->getMessage();
            http_response_code($e->getCode());
        }
        return json_encode($response);
    }

    private function verifyIdentity(string $username, string $password) :?Identity
    {
        $user = new Identity($username, $password);
        // if(!$this->IdentityRepository->verify($user)); return null;
        if(!$verify=$this->IdentityRepository->verify($user)) return null;
        return $verify;
    }
}
