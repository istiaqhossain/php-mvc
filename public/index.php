<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\controllers\SiteController;

$app = new Application(dirname(__DIR__));
$app->router->get('/',[SiteController::class,'frontPage']);
$app->run();