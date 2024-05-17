<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Over Ons</title>
</head>
<body>

    @include('nav')

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
                    <p class="mt-4 text-gray-600 text-lg">Hallo, ik ben Fabio, backend developer bij Snap&Cook. Mijn passie is het creëren van robuuste systemen voor ons platform. Ik werk aan de technische infrastructuur en verbeter de gebruikerservaring. Met mijn team werk ik aan nieuwe functies voor de toekomst van koken.</p>
                </div>
                <div class="mt-auto pt-4"> <!-- Added mt-auto -->
                    <a class="text-green-700 font-semibold">Fabio Wolthuis | Back End Developer</a>
                </div>
            </div>
            <div class="md:mt-0 flex justify-center items-center"> <!-- Modified to flex and centered -->
                <div style="width: 300px; height: 300px; overflow: hidden; border-radius: 15px;">
                    <img src="img/overons1.jpg" alt="About Us Image" class="object-cover" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg flex flex-col justify-between"> <!-- Added flex and justify-between -->
                <div>
                    <p class="mt-4 text-gray-600 text-lg">Hoy, ik ben Ravda, frontend developer bij Snap&Cook. Ik focus op het ontwerpen van een gebruiksvriendelijke interface die koken eenvoudig maakt. Mijn dagen zijn gevuld met het verkennen van nieuwe ontwerpconcepten en het vinden van creatieve oplossingen voor de gebruikerservaring. Ik ben trots om deel uit te maken van dit innovatieve team dat de kookwereld verandert.</p>
                </div>
                <div class="mt-auto pt-4"> <!-- Added mt-auto -->
                    <a class="text-green-700 font-semibold">Ravda Tukuc | Front End Developer</a>
                </div>
            </div>
            <div class="md:mt-0 flex justify-center items-center"> <!-- Modified to flex and centered -->
                <div style="width: 300px; height: 300px; overflow: hidden; border-radius: 15px;">
                    <img src="img/overons2.jpg" alt="About Us Image" class="object-cover" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pb-24">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg flex flex-col justify-between"> <!-- Added flex and justify-between -->
                <div>
                    <p class="mt-4 text-gray-600 text-lg">Hoy, ik ben Yasin, een van de frontend developers bij Snap&Cook. Mijn wereld draait om het vormgeven van het gezicht van ons platform, waarbij ik me richt op het creëren van een meeslepende en gebruiksvriendelijke ervaring. Als frontend developer werk ik aan het combineren van creativiteit en technologie om een visueel aantrekkelijke en functionele gebruikersinterface te ontwerpen.</p>
                </div>
                <div class="mt-auto pt-4"> <!-- Added mt-auto -->
                    <a class="text-green-700 font-semibold">Yasin Coban | Front End Developer</a>
                </div>
            </div>
            <div class="md:mt-0 flex justify-center items-center"> <!-- Modified to flex and centered -->
                <div style="width: 300px; height: 300px; overflow: hidden; border-radius: 15px;">
                    <img src="img/overons3.jpg" alt="About Us Image" class="object-cover" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
</div>




<!-- Eind Over Ons sectie-->

@include('footer')
</body>
</html>
