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
<script src="/src/script.js"></script>

<!-- Start Scanner foto unput sectie -->
<div class="relative">
  <div class="absolute inset-0 bg-cover" style="background-image: url('img/recepten.png');">
    <div class="absolute inset-0 bg-white opacity-50"></div> <!-- Dark overlay -->
  </div>
  <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8 relative z-10">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-light tracking-tight text-gray-900 sm:text-4xl">Maak uw favorite gerecht<br>Met één foto!</h2>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <!-- in dit sectie moet de foto kunnen geplaats worden en dan nadat het geplaatst is gaat die naar de recepten pagina -->

        <label for="dropzone-file" class="flex flex-col items-center justify-center w-1/3 h-30 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-blue-400 dark:bg-gray-700 hover:bg-blue-500 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
    <div class="flex flex-col items-center justify-center pt-5 pb-6">
        <svg class="w-8 h-8 mb-4 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
        </svg>
        <p class="mb-2 text-sm text-white dark:text-gray-400"><span class="font-semibold">Plaats</span> of Sleep</p>
        <p class="text-xs text-white dark:text-gray-400">SVG, PNG, JPG of GIF</p>
    </div>
    <input id="dropzone-file" type="file" class="hidden" />
  </label>

    </div>
    </div>
  </div>
</div>
<!-- Eind Scanner foto unput sectie -->


<!-- Start Scanner uitleg sectie -->
<div style="background-color: #F3F2F2;" class="relative items-center text-center">
    <h2 class="text-5xl font-light pb-16 pt-6">Hoe het werkt</h2>
    <p class="pb-3">Kijk de video hieronder voor een korte uitleg</p>
    <div class="flex justify-center items-center">
        <video class="max-w-full max-h-full pt-4 pb-14" controls style="width: 70vw; height: auto;">
            <source src="img/testvideoscanner.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<!-- Eind Scanner uitleg sectie -->

@include('footer')
</body>
</html>
