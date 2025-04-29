<?php 

require "functions.php";

$URL = parse_url($_SERVER["REQUEST_URI"])["path"];

if($URL === "/") {
    require "controllers/index.php";
} elseif($URL === "/about") {
    require "controllers/about.php";
} elseif($URL === "/contact") {
    require "controllers/contact.php";
}

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact"=> "controllers/contact.php",
];
 