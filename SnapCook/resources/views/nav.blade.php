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
    <title>Navbar</title>
</head>
<body>
<script src="/src/script.js"></script>

<nav style="background-color: #F3F2F2;" class= border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="/img/logo.png" class="h-40" alt="Logo" />
    </a>
    <!-- Dropdown button initially hidden -->
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse hidden md:flex" id="dropdown-button">
      <!-- dropdown svg -->
      <a href="#" class="flex items-center">

      </a>
    </div>
    <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{ route('index') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded md:hover:bg-transparent  md:hover:text-green-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 hover:text-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
        </li>
        <li>
          <a href="{{ route('scanner') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 hover:text-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Scanner</a>
        </li>
        <li>
          <a href="{{ route('overons') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 hover:text-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Over Ons</a>
        </li>
        <li>
          <a href="{{ route('contact') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 hover:text-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




</body>
</html>
