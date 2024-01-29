<?php

namespace WPG\IT\Website\core;

use WPG\IT\Website\controllers\API\CareerApi;
use WPG\IT\Website\controllers\API\ResponseAPI;

class Router
{
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function) :void 
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function getPath($path)
    {
        print_r(self::$routes);
        // $arr = array_filter(self::$routes,function($value){
        //     return 
        // })
    }

    public static function run($path) :void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        foreach(self::$routes as $route) {
            $pattern = "#^".$route['path']."$#";
            if(preg_match($pattern,$path,$variables) && $method == $route['method']) {
                // echo "CONTROLLER ".$route['controller']. ", FUNCTION ".$route['function'];
                $fn = $route['function'];
                $class = $route['controller'];
                $controller = new $class();
                array_shift($variables);
                call_user_func_array([$controller,$fn],$variables);
                // print_r($variables);
                return;
            }
        }
        echo ResponseAPI::failed("Can't get your resources",404);
    }
}
