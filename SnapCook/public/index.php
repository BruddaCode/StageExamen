<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// // Bootstrap Laravel and handle the request...
// (require_once __DIR__.'/../bootstrap/app.php')
//     ->handleRequest(Request::capture());
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>

<?php include 'nav.php'; ?>
<!--Begin header-->
<header style="background-color: #F3F2F2;" >
    <div class="flex items-center ml-20">
        <div
    <h1 class="text-6xl" >Plaats De Foto En </h1>
    <h1 class="text-6xl">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Maak Het Zelf! </h1>
    </div>
    <img  class="ml-auto mr-20" height="553" width="730" src="img/indeximg.png">
    </div>

    <div class="flex justify-center pt-20 pb-20">
        <button class="bg-gray-700 hover:bg-gray-500 text-white text-3xl py-4 px-12 rounded-full" onclick="window.location='scanner.php'">
        Scan nu </button>
    </div>

</header>

<!--Eind header-->
<?php include 'footer.php'; ?>

</body>
</html>
