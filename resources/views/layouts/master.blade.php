<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/white-cropped-Favicon-2-192x192.png" sizes="192x192">

    <title>Websters Property Partners</title>
    <meta name="description" content="Specialised in Brand New Property Sales in Greater Brisbane. From First Home Buyers to adept Investors, confidently buy Real Estate with Websters Property.">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat"
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
        <div class="bg-white w-full h-16 sm:h-20 px-4 md:px-8 sm:py-4 py-2 flex justify-between fixed">
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
    </div>
    <script type="text/javascript" src="https://dj831.infusionsoft.app/app/webTracking/getTrackingCode"></script>
    <script type="text/javascript" src="https://dj831.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.252135"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script>
    <script type="text/javascript" src="https://dj831.infusionsoft.com/app/timezone/timezoneInputJs?xid=c0652428999f11d0beaea367d0dab68a"></script>
</body>

</html>