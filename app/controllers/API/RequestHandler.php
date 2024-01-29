<?php

namespace WPG\IT\Website\controllers\API;

class RequestHandler
{
    public static function get(string $request)
    {
        $filter = strpos($request,'?');
        $str = substr($request,($filter+1));
        $requestData = explode('&',$str);

        $reduceArray = function ($result,$item) {
            list($key,$value) = explode('=',$item);
            $result[$key] = $value;
            return $result;
        };

        return array_reduce($requestData,$reduceArray,[]);
    }
}
