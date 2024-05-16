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

<!-- Start Header home -->
<div style="background-image: url('img/indeximg.png'); background-repeat: no-repeat; background-size: cover;" class=" py-24 sm:py-32">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <p class="text-base font-semibold leading-7 text-green-200">Snap&Cook</p>
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Plaats De Foto En</h2>
      <h2 class="text-4xl pl-32 font-bold tracking-tight text-white sm:text-6xl">Maak Het Zelf!</h2>
    </div>
  </div>
</div>
<!-- Eind Header home -->












<!-- Start Home tekst -->
<section class="pb-8">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg flex flex-col justify-between">
                <div>
                    <p class="mt-4 text-gray-600 text-lg">Snap&Cook, opgericht in 2024 door het trio Fabio, Ravda en Yasin, is een culinaire revolutie in etenmaken. Met een vurig geloof in de kracht van technologie om de manier waarop we koken te transformeren, is Snap&Cook uitgegroeid tot een baken van innovatie in het culinaire landschap. Door hun visionaire platform combineert het bedrijf naadloos de kunst van het koken met geavanceerde AI-technologie, waardoor gebruikers hun culinaire creativiteit als nooit tevoren kunnen ontketenen.</p>
                    <p class="mt-4 text-gray-600 text-lg">De kern van het ethos van Snap&Cook is een toewijding aan toegankelijkheid en inclusiviteit in de keuken. Via hun gebruiksvriendelijke website kunnen individuen van alle vaardigheidsniveaus met vertrouwen aan een culinaire reis beginnen. De intuïtieve interface van het platform stelt gebruikers in staat afbeeldingen van gerechten te uploaden, waardoor de door AI aangedreven motor gedetailleerde recepten, kookinstructies en zelfs voedingsinformatie genereert. Deze naadloze integratie van beeldherkenning en AI vereenvoudigt niet alleen het kookproces, maar opent ook een wereld van culinaire mogelijkheden voor gebruikers wereldwijd. </p>
                    <p class="mt-4 text-gray-600 text-lg">Snap&Cook: een levendige gemeenschap van voedselliefhebbers die samen delen, leren en inspireren. Met interactieve functies en live demonstraties is het platform meer dan alleen een receptenbron; het is een culinair ecosysteem dat de vreugde van koken viert en iedereen uitnodigt om de keuken te verkennen.</p>
                </div>
            </div>
            <div class="md:mt-0 flex justify-center items-center">
                <div class="custom-image-container overflow-hidden rounded-lg">
                    <img src="img/hometext.jpg" alt="About Us Image" class="object-cover w-full h-full">
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.custom-image-container {
    width: 700px;
    height: 300px;
}

@media (min-width: 768px) {
    .custom-image-container {
        width: 350px;
        height: 700px;
    }
}
</style>
<!-- Eind Home tekst -->


<!-- Start Stats home  -->
<div class="max-w-screen-xl mx-auto">
  <dl class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

  <div class="pl-6">
  <div class="relative overflow-hidden rounded-lg bg-gradient-to-t from-blue-500 to-blue-200 px-6 pb-16 pt-8 shadow sm:px-8 sm:pt-10" style="height: 300px; width: 350px">
  <!-- Add the image as a background with opacity -->
  <div class="absolute inset-0 bg-cover bg-center rounded-lg" style="background-image: url('img/stats1.jpg'); opacity: 0.5; "></div>
  <div class="h-full">
    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
      <div class="absolute inset-x-0 bottom-0 bg-blue-100 px-4 py-1 sm:px-6 w-full text-center">
        <p class="text-xl font-light text-black">+ 10.000 gebruikers per maand</p>
      </div>
    </dd>
  </div>
</div>
</div>

<div class="pl-6">
<div class="relative overflow-hidden rounded-lg bg-gradient-to-t from-blue-500 to-blue-200 px-6 pb-16 pt-8 shadow sm:px-8 sm:pt-10" style="height: 300px; width: 350px">
  <!-- Add the image as a background with opacity -->
  <div class="absolute inset-0 bg-cover bg-center rounded-lg" style="background-image: url('img/stats2.jpg'); opacity: 0.5; "></div>
  <div class="h-full">
    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
      <div class="absolute inset-x-0 bottom-0 bg-blue-100 px-4 py-1 sm:px-6 w-full text-center">
        <p class="text-xl font-light text-black">Duizenden recepten</p>
      </div>
    </dd>
  </div>
</div>
</div>

<div class="pl-6">
<div class="relative overflow-hidden rounded-lg bg-gradient-to-t from-blue-500 to-blue-200 px-6 pb-16 pt-8 shadow sm:px-8 sm:pt-10" style="height: 300px; width: 350px">
  <!-- Add the image as a background with opacity -->
  <div class="absolute inset-0 bg-cover bg-center rounded-lg" style="background-image: url('img/stats3.jpg'); opacity: 0.5; "></div>
  <div class="h-full">
    <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
      <div class="absolute inset-x-0 bottom-0 bg-blue-100 px-4 py-1 sm:px-6 w-full text-center">
        <p class="text-xl font-light text-black">4.8 sterren op google</p>
      </div>
    </dd>
  </div>
</div>
</div>

  </dl>
</div>
<!-- End Stats home  -->




<?php include 'footer.php'; ?>
</body>
</html>