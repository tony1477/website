<?php

namespace WPG\IT\Website\controllers\API;

class RequestHandler
{
    public static function get(string $request) :?array
    {
        $queryString = parse_url($request, PHP_URL_QUERY);
        parse_str($queryString, $requestData);
        return $requestData;
    }
    
    public static function get_1(string $request)
    {
        $filter = strpos($request,'?');
        $str = substr($request,($filter+1));
        $requestData = explode('&',$str);

        $reduceArray = function ($result,$item) {
            list($key,$value) = explode('=',urldecode($item));
            $result[$key] = $value;
            return $result;
        };

        return array_reduce($requestData,$reduceArray,[]);
    }
}
