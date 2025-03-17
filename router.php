<?php

$routes  = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contacts" => "controllers/contacts.php",
    "/work" => "controllers/work.php",
];

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
