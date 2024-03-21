<?php

namespace WPG\IT\Website\controllers\API;

class ResponseAPI
{
    public static function success(array $data, string $message='') :string
    {
        http_response_code(200);
        return json_encode([
            'message' => $message != '' ? $message : 'Your request was processed!',
            'status' => $data['status']
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

    public static function successData(array $data) :?string
    {
        return json_encode([
            'status' => 'success',
            'message' => 'Data was sucessful retrieved',
            'data' => $data
        ]);
    }

    public static function successView(array $data) 
    {
        header("Access-Control-Allow-Origin: *");
        try {
            // $filename = $data['file'];
            $file = new \SplFileInfo($data['file']);
            $contentType = 'image/jpeg';
            if ($file->getExtension() === 'pdf') $contentType = 'application/pdf';
            if(!file_exists($data['fullpath'])) {
                throw new \Exception('File not found',404);
            }
            header('Content-Type: '.$contentType);
            header('Content-Disposition: inline; filename='.basename($data['fullpath']));
            readfile($data['fullpath']);
            // return $data['fullpath'];
        }
        catch(\Exception $e) {
            $code = $e->getCode() ?? 404;
            return self::failed($e->getMessage(), $code);
        }
    }
}
