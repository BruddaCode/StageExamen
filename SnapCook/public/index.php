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

<header style="background-color: #F3F2F2;" class="">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-2xl flex flex-col justify-between"> <!-- Added flex and justify-between -->
                <div>
                <h2 class="mt-4 pl-2 text-gray-900 text-4xl" style="font-size: 80px;">Plaats de foto</h2>
                <h2 class="mt-4 pl-6 text-gray-900 text-4xl" style="font-size: 80px;">En maak het zelf!</h2>


                </div>
            </div>
            <div class="md:mt-0 flex justify-center items-center"> <!-- Modified to flex and centered -->
                <div style="width: 700px; height: 300px; overflow: hidden; ">
                    <img src="img/indeximg.png" alt="About Us Image" class="object-cover" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</header>


<?php include 'footer.php'; ?>
</body>
</html>