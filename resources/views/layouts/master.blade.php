<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/white-cropped-Favicon-2-192x192.png" sizes="192x192">

    <title>Websters Property Partners</title>
    <meta name="description" content="Specialised in Brand New Property Sales in Greater Brisbane. From First Home Buyers to adept Investors, confidently buy Real Estate with Websters Property.">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://dj831.infusionsoft.app/app/webTracking/getTrackingCode" defer></script>
    <script type="text/javascript" src="https://dj831.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.252135" defer></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer></script>
    <script type="text/javascript" src="https://dj831.infusionsoft.com/app/timezone/timezoneInputJs?xid=c0652428999f11d0beaea367d0dab68a" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a {
            font-family: "Montserrat";
            color: #1e4975;
        }

        .primary {
            color: #1e4975;
            fill: #1e4975;
        }

        .white {
            color: white;
            fill: white;
        }

        .glow-orange {
            box-shadow: 0 0 3px orange m-1, 0 0 10px orange;
            transition: 0.2s;
        }

        .glow-orange:hover {
            box-shadow: 0 0 8px orange, 0 0 30px orange;
        }
    </style>
</head>

<body>
    <div id="app" class="relative">
        <!-- Top Bar -->
        <div class="bg-white w-full h-16 sm:h-20 px-4 md:px-16 sm:py-3 py-2 flex justify-between fixed">
            <a class="w-full" href="/">
                <h1 class="hidden">Websters Property Partners</h1>
                <img class="h-10 sm:h-full" src="img/PP-Logo-Narrow-sml.png" alt="Logo for Websters Property Partners">
            </a>

            <div class="h-10 sm:h-full flex items-center">
                <a class="text-xl font-bold flex" href="tel:0730411165">
                    <svg viewBox="0 0 24 24" class="h-8 mr-2">
                        <path class="primary" d="M4 2h4a1 1 0 0 1 .98.8l1 5a1 1 0 0 1-.27.9l-2.52 2.52a12.05 12.05 0 0 0 5.59 5.59l2.51-2.52a1 1 0 0 1 .9-.27l5 1c.47.1.81.5.81.98v4a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2z" />
                        <path class="primary" d="M22 10a1 1 0 0 1-2 0 6 6 0 0 0-6-6 1 1 0 0 1 0-2 8 8 0 0 1 8 8zm-4 0a1 1 0 0 1-2 0 2 2 0 0 0-2-2 1 1 0 0 1 0-2 4 4 0 0 1 4 4z" />
                    </svg>
                    <span class="hidden md:block whitespace-no-wrap">
                        07 3041 1165
                    </span>
                </a>
            </div>
        </div>
        <div class="h-12 sm:h-16 w-full"></div>
        <main class="py-4">
            @yield('content')
        </main>
        
            <!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
    <nav class="-mx-5 -my-2 flex flex-wrap justify-around" aria-label="Footer">
      <div class="px-5 py-2">
        <a href="/about" class="text-base text-gray-500 hover:text-gray-900">
          About
        </a>
      </div>

      <div class="px-5 py-2">
        <a href="/blog" class="text-base text-gray-500 hover:text-gray-900">
          Blog
        </a>
      </div>

      <div class="px-5 py-2">
        <a href="/press" class="text-base text-gray-500 hover:text-gray-900">
          Press
        </a>
      </div>

      <div class="px-5 py-2">
        <a href="/privacy" class="text-base text-gray-500 hover:text-gray-900">
          Privacy
        </a>
      </div>
    </nav>
    <div class="mt-8 mb-8 flex justify-center space-x-6">
      <a href="https://www.facebook.com/WebstersPropertyPartners" class="text-gray-400 hover:text-gray-500">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>
    <p class="mt-8 text-center text-base text-gray-400">
      &copy; 2020 Webster's Property Partners. All rights reserved.
    </p>
  </div>
</footer>

        
    </div>

</body>

</html>