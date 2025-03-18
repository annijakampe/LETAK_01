<?php
require "router.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <h1>Welcome to the Intermediate Page</h1>
        <p>Press Enter to go to the main page.</p>

        <body>
            <button onclick="window.location.href='/work'">Go to Main Page</button>
        </body>
    </div>

</body>

</html>