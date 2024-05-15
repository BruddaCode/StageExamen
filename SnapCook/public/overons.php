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
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Dark overlay -->
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

<div style="background-color: #F3F2F2;" class="">
<section class="">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg flex flex-col justify-between"> <!-- Added flex and justify-between -->
                <div>
                    <p class="mt-4 text-gray-600 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                        eros at lacus feugiat hendrerit sed ut tortor. Suspendisse et magna quis elit efficitur consequat.
                        Mauris eleifend velit a pretium iaculis. Donec sagittis velit et magna euismod, vel aliquet nulla
                        malesuada. Nunc pharetra massa lectus, a fermentum arcu volutpat vel.</p>
                </div>
                <div class="mt-auto pt-4"> <!-- Added mt-auto -->
                    <a class="text-green-700 font-semibold">Fabio Wolthuis | Back End Developer</a>
                </div>
            </div>
            <div class=" md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg flex flex-col justify-between"> <!-- Added flex and justify-between -->
                <div>
                    <p class="mt-4 text-gray-600 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                        eros at lacus feugiat hendrerit sed ut tortor. Suspendisse et magna quis elit efficitur consequat.
                        Mauris eleifend velit a pretium iaculis. Donec sagittis velit et magna euismod, vel aliquet nulla
                        malesuada. Nunc pharetra massa lectus, a fermentum arcu volutpat vel.</p>
                </div>
                <div class="mt-auto pt-4"> <!-- Added mt-auto -->
                    <a class="text-green-700 font-semibold">Ravda Tukuc | Front End Developer</a>
                </div>
            </div>
            <div class=" md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg flex flex-col justify-between"> <!-- Added flex and justify-between -->
                <div>
                    <p class="mt-4 text-gray-600 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                        eros at lacus feugiat hendrerit sed ut tortor. Suspendisse et magna quis elit efficitur consequat.
                        Mauris eleifend velit a pretium iaculis. Donec sagittis velit et magna euismod, vel aliquet nulla
                        malesuada. Nunc pharetra massa lectus, a fermentum arcu volutpat vel.</p>
                </div>
                <div class="mt-auto pt-4"> <!-- Added mt-auto -->
                    <a class="text-green-700 font-semibold">Yasin Coban | Front End Developer</a>
                </div>
            </div>
            <div class=" md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>
</div>





<!-- Eind Over Ons sectie-->

<?php include 'footer.php'; ?>
</body>
</html>