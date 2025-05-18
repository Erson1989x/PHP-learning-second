<?php

$URL = parse_url($_SERVER["REQUEST_URI"])["path"];
/*
if($URL === "/") {
    require "controllers/index.php";
} elseif($URL === "/about") {
    require "controllers/about.php";
} elseif($URL === "/contact") {
    require "controllers/contact.php";
}
    */

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact"=> "controllers/contact.php",
    "/notes" => "controllers/notes.php",
    "/note" => "controllers/note.php",
];

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function routeTo($URL, $routes) {
    if(array_key_exists($URL, $routes)) {
        require $routes[$URL];
    } else {
        abort();
    };
}

routeTo($URL, $routes);