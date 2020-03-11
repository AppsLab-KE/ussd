<?php

$uri = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '':
        echo "working";
        break;
    case '/':
        echo "still at home";
    break;
    case 'about':
        echo "about us page";
        break;
    default:
        echo "404";
        break;
}

var_dump($uri);
