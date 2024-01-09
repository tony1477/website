<?php
require_once 'vendor/autoload.php';
use WPG\IT\Website\core\App;

date_default_timezone_set('Asia/Jakarta');
define('BASE_URL','http://'.$_SERVER['SERVER_NAME'].'/website/');

$app = new App;