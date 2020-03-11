<?php

require('vendor/autoload.php');
use Dotenv\Dotenv;

$uri = $_SERVER['REQUEST_URI'];

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump($_ENV['APP_NAME']);

$sessionId = $_POST['sessionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = $_POST['phoneNumber'];
$text = $_POST['text'];

if ($text == "") {
    $response = "END Welcome marvin \n";
    $response .= "1. Working well \n";
    $response .= "2. Oooh yeah \n";
}
header('Content-type: text/plain');
echo $response;
