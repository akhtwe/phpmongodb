<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/guests/index.php';
        break;
    case '' :
        require __DIR__ . '/guests/index.php';
        break;
    case '/guests/add' :
        require __DIR__ . '/guests/add.php';
        break;
    default:
        http_response_code(404);
        echo '<h3 style="text-align:center;">404 Not Found!</h3>';
        die();
        break;
}