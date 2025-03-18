<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require "functions.php";
require "Database.php";
require "router.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS link -->
</head>

<body class="bg-gray-100">
    <!-- Content Section -->
    <header>
        <h1 class="text-4xl font-bold text-center my-4">Welcome to My Page</h1>
    </header>

    <!-- Register Button -->
    <div class="text-center mt-5">
        <a href="/work" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Register</a>
        <!-- OR use button instead of a link -->
        <!-- <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Register</button> -->
    </div>

</body>

</html>