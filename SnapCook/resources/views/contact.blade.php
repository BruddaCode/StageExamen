<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body style="background-color: #F3F2F2;">

    @include('nav')

<!-- Start contact intro sectie -->
<div class="relative">
  <div class="absolute inset-0 bg-cover" style="background-image: url('img/contactbg.png');">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Dark overlay -->
  </div>
  <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8 relative z-10">
    <div class=" max-w-2xl text-start  pl-3">
      <h2 class="text-4xl font- tracking-tight text-white sm:text-4xl">Contact</h2><br><p class="text-2xl text-white font-light">Hier kunt u contact met ons opnemen</p>
    </div>
  </div>
</div>
<!-- Eind contact intro sectie -->



<!--Begin contact info-->

<div class=" py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-12 px-6 sm:gap-y-16 lg:grid-cols-2 lg:px-8">
        <div class="  py-12 sm:py-16">
            <div class="mx-auto max-w-2xl ">
                <p class=" font-semibold leading-7 text-green-400">Contact</p>
                <p class="text-2xl leading-8">Bij Snap&Cook vinden wij dat de meningen en vragen van ons klanten erg belangrijk is.
                    De feedback helpt om ons bedrijf beter te maken voor de consument.</p>
            </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto ">
            <div class=" flex-wrap">
                <div class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="50" fill="#CAE7FF"/>
                                    <path d="M48.125 69.0625C44.0625 63.9844 35 51.875 35 45C35 36.7188 41.6406 30 50 30C58.2812 30 65 36.7188 65 45C65 51.875 55.8594 63.9844 51.7969 69.0625C50.8594 70.2344 49.0625 70.2344 48.125 69.0625ZM50 50C52.7344 50 55 47.8125 55 45C55 42.2656 52.7344 40 50 40C47.1875 40 45 42.2656 45 45C45 47.8125 47.1875 50 50 50Z" fill="#0064B0"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6 grow">
                            <p class="mb-2 font-bold dark:text-white">
                                Adress: Lomberdon 34A
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-200">
                                Rotterdam, Nederland
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="50" fill="#CAE7FF"/>
                                    <path d="M69.9219 60.2344L68.0469 68.125C67.8125 69.2969 66.875 70.0781 65.7031 70.0781C46.0156 70 30 53.9844 30 34.2969C30 33.125 30.7031 32.1875 31.875 31.9531L39.7656 30.0781C40.8594 29.8438 42.0312 30.4688 42.5 31.4844L46.1719 40C46.5625 41.0156 46.3281 42.1875 45.4688 42.8125L41.25 46.25C43.9062 51.6406 48.2812 56.0156 53.75 58.6719L57.1875 54.4531C57.8125 53.6719 58.9844 53.3594 60 53.75L68.5156 57.4219C69.5312 57.9688 70.1562 59.1406 69.9219 60.2344Z" fill="#0064B0"/>
                                </svg>

                            </div>
                        </div>
                        <div class="ml-6 grow">
                            <p class="mb-2 font-bold dark:text-white">
                                Telefoonnummer:
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-200">
                                06 43 80 63 87
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                    <div class="items-center flex">
                        <div class="shrink-0">
                            <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="50" fill="#CAE7FF"/>
                                    <path d="M66.25 35C68.2812 35 70 36.7188 70 38.75C70 40 69.375 41.0938 68.4375 41.7969L51.4844 54.5312C50.5469 55.2344 49.375 55.2344 48.4375 54.5312L31.4844 41.7969C30.5469 41.0938 30 40 30 38.75C30 36.7188 31.6406 35 33.75 35H66.25ZM46.9531 56.5625C48.75 57.8906 51.1719 57.8906 52.9688 56.5625L70 43.75V60C70 62.8125 67.7344 65 65 65H35C32.1875 65 30 62.8125 30 60V43.75L46.9531 56.5625Z" fill="#0064B0"/>
                                </svg>

                            </div>
                        </div>
                        <div class="ml-6 grow">
                            <p class="mb-2 font-bold dark:text-white">Email:</p>
                            <p class="text-neutral-500 dark:text-neutral-200">
                                info@snapcook.nl
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<!--Eind contact info-->


<!--Begin Contact Form-->
    <section class="dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight text-center dark:text-white">Contact Form</h2>
            <form action="#" class="space-y-8 bg-white p-10 pt-16">
                <div>
                    <label for="naam" ></label>
                    <input type="text" id="naam" class="shadow-sm bg-blue-100 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Naam" required>
                </div>
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="telefoon"></label>
                        <input type="tel" id="telefoon" class="shadow-sm bg-blue-100 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Telefoonnummer" required>
                    </div>
                    <div class="flex-1">
                        <label for="onderwerp"></label>
                        <input type="text" id="onderwerp" class="shadow-sm bg-blue-100 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Onderwerp" required>
                    </div>
                </div>
                <div>
                    <label for="email"></label>
                    <input type="email" id="email" class="shadow-sm bg-blue-100 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="E-mail" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="bericht"></label>
                    <textarea id="bericht" rows="6" class="block p-3 w-full text-sm text-gray-900 bg-blue-100 border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Bericht..."></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="py-3 px-5 text-white font-medium text-center rounded-lg bg-blue-300 sm:w-fit hover:bg-blue-200 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                </div>
            </form>
        </div>
    </section>



    <!--Eind Contact Form-->

@include('footer')

</body>
</html>
