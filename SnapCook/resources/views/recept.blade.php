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

    @include('nav')
    <!--Begin resultaat gedeelte-->
<h1 class="text-4xl font-semibold text-center pt-16 pb-10">Resultaat</h1>

<div class="flex items-center justify-center border-black pb-20">
    <div class="flex items-center justify-center w-9/12 border-top border-2 border-black pb-20 pt-20">
      <img src="img/pizza.png" class="mr-32" width="500" height="500">
        <div class="flex items-center justify-center w-3/12">
            <div class="flex flex-col  items-center justify-center w-full p-5">
                <p class="text-2xl font-semibold mb-4">Foto word geproceseerd</p>
                <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                    <svg class="w-16 h-16 animate-spin text-gray-300" viewBox="0 0 64 64" fill="none"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                        <path
                            d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083 61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3 32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32 3L32 3Z"
                            stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928 36.6232 59.5759 40.9762"
                            stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                        </path>
                    </svg>
                </div>
                <p class="text-2xl font-semibold">Resultaten onderaan</p>
            </div>
        </div>
    </div>
</div>

<!--Eind resultaat gedeelte-->


<!--Begin recept gedeelte-->
<div class="pb-40 flex flex-col items-center justify-center h-[1000px]" style="background-color: #F3F2F2;">
    <h1 class="text-2xl font-semibold text-center pt-32 pb-10">Recepten nodig voor uw gewenst gerecht</h1>

    <div class="bg-white w-8/12 p-10 flex justify-center">
        <div class="items-start">
            <div class="flex items-center mb-2">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-2xl font-semibold">750 gram bloem</label>
            </div>
            <div class="flex items-center mb-2">
                <input id="default-checkbox1" type="checkbox" value="" class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox1" class="ms-2 text-2xl font-semibold">250 gram kaas</label>
            </div>
            <div class="flex items-center mb-2">
                <input id="default-checkbox2" type="checkbox" value="" class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox2" class="ms-2 text-2xl font-semibold">250 gram tomatensaus</label>
            </div>
            <div class="flex items-center mb-2">
                <input id="default-checkbox3" type="checkbox" value="" class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox3" class="ms-2 text-2xl font-semibold">100 gram ananas</label>
            </div>
            <div class="flex items-center mb-2">
                <input id="default-checkbox4" type="checkbox" value="" class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox4" class="ms-2 text-2xl font-semibold">100 gram kipfilet</label>
            </div>
            <div class="flex items-center mb-2">
                <input id="default-checkbox5" type="checkbox" value="" class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox5" class="ms-2 text-2xl font-semibold">50 gram uien</label>
            </div>
            <div class="flex items-center">
                <input id="default-checkbox6" type="checkbox" value="" class="w-4 h-4 mr-2 text-pink-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox6" class="ms-2 text-2xl font-semibold">25 gram peterselie</label>
            </div>
        </div>
    </div>
</div>

<!--Eind recept gedeelte-->

@include('footer')

</body>
</html>