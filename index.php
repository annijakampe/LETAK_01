<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// session_start();

if (!isset($_SESSION['intermediate_visited'])) {
    $_SESSION['intermediate_visited'] = true;
    header('Location: intermediate.php');
    exit();
}

require "functions.php";
require "Database.php";
require "router.php";
