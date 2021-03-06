<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/white-cropped-Favicon-2-192x192.png" sizes="192x192">

        <title>Websters Property</title>
        <meta name="description" content="Property Sales and Rental Services in Brisbane. First Home Buyers and Investors confidently buy Real Estate with Websters Property. Office in Fortitude Valley.">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: "Montserrat"
            }
            h1, h2, h3, h4, h5, h6, a {
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
        <div id="app">

        <!-- Top Bar -->
        <div class="bg-white w-full h-20 px-4 md:px-8 py-4 flex justify-between fixed">
                <div class="w-full">
                    <h1 class="hidden">Websters Property Partners</h1>
                    <img class="h-full" src="img/PP-Logo-Narrow-sml.png" alt="Logo for Websters Property Partners">
                </div>
                
                <div class="h-full flex items-center">
                    <a class="text-xl font-bold flex" href="tel:0730411165">
                    <svg viewBox="0 0 24 24" class="h-8 mr-2">
                        <path class="primary" d="M4 2h4a1 1 0 0 1 .98.8l1 5a1 1 0 0 1-.27.9l-2.52 2.52a12.05 12.05 0 0 0 5.59 5.59l2.51-2.52a1 1 0 0 1 .9-.27l5 1c.47.1.81.5.81.98v4a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2z"/>
                        <path class="primary" d="M22 10a1 1 0 0 1-2 0 6 6 0 0 0-6-6 1 1 0 0 1 0-2 8 8 0 0 1 8 8zm-4 0a1 1 0 0 1-2 0 2 2 0 0 0-2-2 1 1 0 0 1 0-2 4 4 0 0 1 4 4z"/>
                    </svg>
                    <span class="hidden md:block whitespace-no-wrap">
                        07 3041 1165
                    </span>
                    </a>
                </div>
            </div>
            <div class="h-20 w-full"></div>
            
        </div>




        
    </body>
</html>
