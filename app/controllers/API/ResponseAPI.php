<?php

namespace WPG\IT\Website\controllers\API;

class ResponseAPI
{
    public static function success(array $data) :string
    {
        http_response_code(200);
        return json_encode([
            'draw' => $data['draw'],
            'recordsTotal' => $data['recordsTotal'],
            'recordsFiltered' => $data['recordsFiltered'],
            'data' => $data['data']
        ]);
    }

    public static function failed(string $message, int $responseCode) :string
    {
        http_response_code($responseCode);
        return json_encode([
            'status' => 'failed',
            'message' => $message
        ]);
    }

    public static function successDataTable(array $data) :?string
    {
        return json_encode([
            'draw' => $data['draw'],
            'recordsTotal' => $data['recordsTotal'],
            'recordsFiltered' => $data['recordsFiltered'],
            'data' => $data['data']
        ]);
    }
}
