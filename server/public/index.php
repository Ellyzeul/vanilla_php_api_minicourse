<?php

require_once ".." . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use Calendar\Routing\Router;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . DIRECTORY_SEPARATOR . "..");
$dotenv->safeLoad();

$uri = $_SERVER['REQUEST_URI'];
$request = json_decode(file_get_contents('php://input'), true);

Router::handle($uri, $request);
