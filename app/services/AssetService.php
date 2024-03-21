<?php

namespace WPG\IT\Website\services;

class AssetService
{
    public const ASSET_FOLDER = 'public\assets';
    private static string $photoFolder = 'img\career\jobseeker';
    private static string $docFolder = 'protected\recruitment';
    
    public static function getPhoto() :string
    {
        return self::ASSET_FOLDER."\\".self::$photoFolder;
    }

    public static function getDoc() :string
    {
        return self::ASSET_FOLDER."\\".self::$docFolder;
    }
}