<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Over Ons</title>
</head>
<body>

<?php include 'nav.php'; ?>

<!-- Start Over Ons intro sectie -->
<div class="relative">
  <div class="absolute inset-0 bg-cover" style="background-image: url('img/overonsbg.png');">
    <div class="absolute inset-0 bg-white opacity-50"></div> <!-- Dark overlay -->
  </div>
  <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8 relative z-10">
    <div class=" max-w-2xl text-start  pl-3">
      <h2 class="text-4xl font- tracking-tight text-white sm:text-4xl">Over Ons</h2><br><p class="text-2xl text-white font-light">Lees een beetje over ons groep</p>
    </div>
  </div>
</div>
<!-- Eind Over Ons intro sectie -->

<!-- Start Over Ons sectie-->
<div style="background-color: #F3F2F2;" class="flex flex-col items-center text-center mx-auto lg:px-36">
    <p class="text-sm font-semibold text-green-600 pb-2 pt-6">Over Ons</p>
    <p class="pb-3 text-2xl max-w-screen-md mx-4">
        Wij bij Snap&Cook dachten over een paar ideeen voor applicaties. toen kwam de idee van een applicatie die je helpt de recept te vinden van maaltijden. wij begonnen te werken rond mei, het duurde een week om het website te maken. onderaan vind je de developers/eigenaars van snap&cook en hun contributies naar het website.
    </p>
</div>


<div id="about" class="relative bg-white overflow-hidden mt-16">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <p>Donec porttitor, enim ut dapibus lobortis, lectus sem tincidunt dui, eget ornare lectus ex nonlibero. Nam rhoncus diam ultrices porttitor laoreet. Ut mollis fermentum ex, vel viverra loremvolutpat sodales. In ornare porttitor odio sit amet laoreet. Sed laoreet, nulla a posuereultrices, purus nulla tristique turpis, hendrerit rutrum augue quam ut est. Fusce malesuadaposuere libero, vitae dapibus eros facilisis euismod. Sed sed lobortis justo, ut tinciduntvelit. Mauris in maximus eros.</p>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://cdn.pixabay.com/photo/2016/03/23/04/01/woman-1274056_960_720.jpg" alt="">
    </div>
</div>





<!-- Eind Over Ons sectie-->

<?php include 'footer.php'; ?>
</body>
</html>