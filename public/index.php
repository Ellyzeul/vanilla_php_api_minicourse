<?php

require_once ".." . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use Calendar\Routing\Router;
use Calendar\View\View;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . DIRECTORY_SEPARATOR . "..");
$dotenv->safeLoad();

$uri = $_SERVER['REQUEST_URI'];
$request = json_decode(file_get_contents('php://input'), true);

try {
    Router::handle($uri, $request);
}
catch (Error $e) {
    View::render([
        "error_message" => "Algum erro ocorreu no servidor..."
    ], 500);
}
