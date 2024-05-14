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

<!--Begin titel img achtergrond-->
<div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(img/overons.png);">
    <div class="flex items-center  h-full w-full">
        <div class="">
            <h1 class="text-white text-6xl pl-20">Over Ons</h1>
            <h1 class="text-white text-4xl pl-20 mt-16 -mb-16">Lees een beetje Over Ons Groep</h1>
        </div>
    </div>
</div>


<!--Eind titel img achtergrond-->

<!--Begin Over Ons text-->

<div class="  py-12 sm:py-16">
    <div class="mx-auto max-w-4xl text-center">
        <p class="text-base font-semibold leading-7 text-green-400">Over Ons</p>
        <p class="mt-6 text-4xl leading-8">Wij bij Snap&Cook dachten over een paar ideeen voor applicaties. toen kwam de idee van een applicatie die je helpt de recept te vinden van maaltijden. wij begonnen te werken rond mei, het duurde een week om het website te maken. onderaan vind je de developers/eigenaars van snap&cook en hun contributies naar het website</p>
    </div>
</div>

<!--Eind Over Ons text-->

<!--Begin Ons team-->
<div class="py-24 sm:py-32 ml-32 mr-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20  lg:max-w-4xl lg:gap-x-8 xl:max-w-none">
            <li class="flex flex-col gap-6 xl:flex-row">
                <img class="aspect-[4/5] w-1/4 flex-none rounded-2xl object-cover" src="https://static.vecteezy.com/system/resources/previews/001/840/618/non_2x/picture-profile-icon-male-icon-human-or-people-sign-and-symbol-free-vector.jpg" alt="">
                <div class="flex-auto pl-10 pr-10">
                    <h3 class="text-3xl font-semibold leading-8 tracking-tight ">Fabio</h3>
                    <p>Back end Developer</p>
                    <p class="mt-6 text-2xl leading-7 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </li>
            <li class="flex flex-col gap-6 xl:flex-row">
                <img class="aspect-[4/5] w-1/4 flex-none rounded-2xl object-cover" src="https://static.vecteezy.com/system/resources/previews/001/840/618/non_2x/picture-profile-icon-male-icon-human-or-people-sign-and-symbol-free-vector.jpg" alt="">
                <div class="flex-auto pl-10 pr-10">
                    <h3 class="text-3xl font-semibold leading-8 tracking-tight ">Ravda</h3>
                    <p>Front end Developer</p>
                    <p class="mt-6 text-2xl leading-7 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </li>

            <li class="flex flex-col gap-6 xl:flex-row">
                <img class="aspect-[4/5] w-1/4 flex-none rounded-2xl object-cover" src="https://static.vecteezy.com/system/resources/previews/001/840/618/non_2x/picture-profile-icon-male-icon-human-or-people-sign-and-symbol-free-vector.jpg" alt="">
                <div class="flex-auto pl-10 pr-10">
                    <h3 class="text-3xl font-semibold leading-8 tracking-tight ">Yasin</h3>
                    <p>Front end Developer</p>
                    <p class="mt-6 text-2xl leading-7 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--Eind Ons team-->

<?php include 'footer.php'; ?>

</body>
</html>
