<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/white-cropped-Favicon-2-192x192.png" sizes="192x192">

        <title>Websters Property</title>
        <meta name="description" content="Property Sales and Rental Services in Brisbane. First Home Buyers and Investors confidently buy Real Estate with Websters Property. Office in Fortitude Valley.">
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
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




            <!-- Splash with video -->
            <div class="h-screen flex justify-center items-center text-white pb-16 px-4" style="background-image: url(img/Hero-Background-3-comp.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
                <div class="flex flex-col items-center container mx-auto">
                    <h2 class="text-white text-xl uppercase pb-8 text-center">
                        ATTENTION FIRST HOME BUYER
                    </h2>
                    <p class=" text-lg md:text-4xl pb-8 font-semibold text-center">
                    Finally! The New Way To Use Free Grant Funding To Become Finance Approved In Just 7 Days - Guaranteed!
                    </p>
                    <p class="text-md md:text-lg pb-8 text-center">
                        Even If you Have Less Than a 5% Deposit Or Money For Stamp Duty!
                    </p>
                    <button class="px-8 py-6 text-md md:px-10 md:py-8 md:text-lg bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange">Book your free consultation</button>
                </div>
            </div>




            <!-- section 1 -->
            <div class="container mx-auto flex flex-col justify-center py-16 px-4">
                <div class="flex justify-center pb-8">
                    <h2 class="text-lg md:text-4xl font-semibold text-center">
                        Finally…A Quick & Easy Way To Buy Your First Home Now Without Waiting Until You Have A Full 10-20% Deposit!
                    </h2>
                </div>
                <!-- big screen -->
                <div class="hidden md:block">
                    <div class="h-80 flex jusitfy-end w-full px-10">
                        <div class="w-full flex items-center h-full">
                            <div class="pr-12 max-w-3xl">
                                <h3 class="text-xl font-semibold pb-4">
                                    Are you sick of researching properties and visiting Display Homes?
                                </h3>
                                    Tired of Paying Rent and paying off someone else’s mortgage? Looking for ways to get into your First Home faster? At Property Partners, we help First Home Buyers achieve their desired outcomes in the shortest time possible.
                            </div>
                        </div>
                        <div class="w-100 flex items-center h-full">
                            <img class="w-100" src="img/Image-Circle-1.png">
                        </div>
                    </div>
                    <div class="h-80 flex justify-between w-full px-10">
                        <div class="w-100 flex items-center h-full">
                            <img class="w-100" src="img/CIRCLE-IMAGE-B3.png">
                        </div>
                        <div class="w-full flex items-center h-full">
                            <div class="pl-12 max-w-3xl">
                                <h3 class="text-xl font-semibold pb-4">
                                    Over the last 7 Years years we’ve shown hundreds of First Home Buyers how to easily use their existing savings to get into the Property Market.
                                </h3>
                                    We’ve shown hundreds of people that they are already in a position to realise their property goals and created hundreds of homes for our clients, and we can do the same for you too.
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Small Screen -->
                <div class="block md:hidden">
                    <div class="">
                        <div class="w-full flex justify-center items-center">
                            <img class="w-80" src="img/Image-Circle-1.png">
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="">
                                <h3 class="text-xl font-semibold pb-4">
                                    Are you sick of researching properties and visiting Display Homes?
                                </h3>
                                    Tired of Paying Rent and paying off someone else’s mortgage? Looking for ways to get into your First Home faster? At Property Partners, we help First Home Buyers achieve their desired outcomes in the shortest time possible.
                            </div>
                        </div>
                        
                    </div>
                    <div class="">
                        <div class="w-full flex justify-center items-center">
                            <img class="w-80" src="img/CIRCLE-IMAGE-B3.png">
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="">
                                <h3 class="text-xl font-semibold pb-4">
                                    Over the last 7 Years years we’ve shown hundreds of First Home Buyers how to easily use their existing savings to get into the Property Market.
                                </h3>
                                    We’ve shown hundreds of people that they are already in a position to realise their property goals and created hundreds of homes for our clients, and we can do the same for you too.
                            </div>
                        </div>
                        
                    </div>
                </div>
                

            </div>




            <!-- section 2 -->
            <div class="bg-gray-200 py-10 md:py-20 px-4">
                <div class="container mx-auto flex flex-col items-center justify-center text-center">
                    <img class="rounded-full md:mb-20" src="img/Checklist-Icon-150x150.png">
                    <h2 class="text-xl font-semibold mb-10 md:mb-20">Simply Follow Our Proven Strategies For Finance Approval & You’ll Avoid Missing Out On A Once In A Lifetime Property Market Window</h2>
                    <button class="px-12 py-8 bg-blue-800 text-orange-300 font-bold text-lg rounded-lg uppercase glow-orange">Claim your free consultation</button>
                </div>
            </div>




            <!-- section 3 -->
            <!-- big screen -->
            <div class="py-20 container mx-auto hidden md:block">
                <div class="h-80 flex jusitfy-between w-full px-10">
                    <div class="w-full flex items-center h-full">
                        <div class="pr-12 max-w-3xl">
                            <h3 class="text-xl font-semibold pb-4">
                                Buying your First Home can be much easier than you think.
                            </h3>
                            <p class="mb-4">
                                Many people simply don’t know the correct steps to take which makes them take far longer than required, to achieve their goal. 
                                We’ve done all the hard work for you, so all you need to do is follow our step-by-step blueprint and you’ll achieve your goal in no time.
                            </p>
                            <p>
                                You won’t just save time either. When you follow our advice closely, you also save money and get a better product than you would ever have been able to achieve on your own.
                            </p>
                        </div>
                    </div>
                    <div class="w-100 flex items-center h-full">
                        <img class="w-100" src="img/CIRCLE-IMAGE-A2.png">
                    </div>
                </div>
            </div>
            <!-- small screen -->
            <div class="block md:hidden py-10 w-full">
                <div class="w-full px-4">
                    <div class="w-full flex items-center h-full">
                        <div class="">
                            <h3 class="text-xl font-semibold pb-4">
                                Buying your First Home can be much easier than you think.
                            </h3>
                            <p class="mb-4">
                                Many people simply don’t know the correct steps to take which makes them take far longer than required, to achieve their goal. 
                                We’ve done all the hard work for you, so all you need to do is follow our step-by-step blueprint and you’ll achieve your goal in no time.
                            </p>
                            <p>
                                You won’t just save time either. When you follow our advice closely, you also save money and get a better product than you would ever have been able to achieve on your own.
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex items-center h-full">
                        <img class="w-80" src="img/CIRCLE-IMAGE-A2.png">
                    </div>
                </div>
            </div>




            <!-- section 4 -->
            <!-- large screen -->
            <div class="hidden md:block h-full py-20 flex justify-center items-center text-white" style="background-image: url(img/BG-Home-Interior-Blue-comp.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
                <div class="bg-white md:p-20 w-full rounded-lg flex flex-col items-center container mx-auto">
                    
                    <h2 class="text-4xl pb-8 font-semibold text-center">
                        Here's What Our Clients Have To Say
                    </h2>
                    <div class="mb-20">
                        <img class="" src="img/Maree-Review-Email-resize-2.png" alt="Maree review email saying: happy with the overall result despite how complicated our situation is. thank you very much, Maree.">
                        <div class="md:flex">
                            <img class="h-full" src="img/Jeff-Review-E-mail.png" alt="Jeff feedback email saying: Yes all went super well, thank you andrew. Anthony was a Champion and Jason and Elissa did a teriffic job on the finance.">
                            <img class="h-full" src="img/Text-Message_01.png" alt="text message saying: thankyou very much for all your help with this purchase. Leanne and I couldn't have got through this process by ourselves and everything has just been terrific. thumbs up.">
                        </div>
                        
                        
                    </div>
                    
                    <button class="px-12 py-8 bg-blue-800 text-orange-300 font-bold text-lg rounded-lg uppercase glow-orange">Claim your free consultation</button>
                </div>
            </div>
            <!-- small screen -->
            <div class="block md:hidden h-full pt-40 flex justify-center items-center text-white" style="background-image: url(img/BG-Home-Interior-Blue.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
                <div class="bg-white py-10 w-full flex flex-col items-center container mx-auto">
                    
                    <h2 class="text-lg pb-8 font-semibold text-center">
                        Here's What Our Clients Have To Say
                    </h2>
                    <div class="mb-10">
                        <img class="" src="img/Maree-Review-Email-resize-2.png" alt="Maree review email saying: happy with the overall result despite how complicated our situation is. thank you very much, Maree.">
                        <img class="h-full" src="img/Jeff-Review-E-mail.png" alt="Jeff feedback email saying: Yes all went super well, thank you andrew. Anthony was a Champion and Jason and Elissa did a teriffic job on the finance.">
                        <img class="h-full" src="img/Text-Message_01.png" alt="text message saying: thankyou very much for all your help with this purchase. Leanne and I couldn't have got through this process by ourselves and everything has just been terrific. thumbs up.">
                    </div>
                    <button class="px-8 py-6 text-md bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange">Book your free consultation</button>
                </div>
            </div>



            <!-- section 5 -->
            <div class="bg-gray-200 py-20">
                <div  class="container mx-auto flex flex-col items-center justify-center ">
                    <div class="w-full flex items-center justify-center text-center">
                        <h2 class="text-lg md:text-4xl font-semibold text-center pb-6">
                            Here’s A Brief Outline Of What We’ll Cover In Your FREE 30-Minute Consultation…
                        </h2>
                    </div>
                    <div class="flex flex-col items-center justify-center">    
                        <div class="flex pr-4 max-w-3xl">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 m-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <h3 class="text-black font-bold">
                        
                                WARNING: You Could Be At Serious Risk Of Running Your Credit Rating 
                                </h3>
                                <p class="pb-6">
                                    Are you trying to organise your own finance? Bad idea! We’ll show you why this is a HUGE mistake and how it leaves you open to putting you in a position where you will be unable to be approved with any decent lender at a reasonable interest rate.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex pr-4 max-w-3xl">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 m-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <h3 class="text-black font-bold">
                        
                                The Proven Finance Strategies We’ve Used To Help Hundreds Of Buyers
                                </h3>
                                <p class="pb-6">
                                    We’ll reveal the bullet proof strategies we’ve used to assist a plethora of clients consistently for the past 8 years
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex pr-4 max-w-3xl">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 m-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <h3 class="text-black font-bold">
                        
                                The Devastating Mistakes Made By Virtually All First Home Buyers
                                </h3>
                                <p class="pb-6">
                                    Nearly every person looking to buy their first home makes these common yet devastating financial mistakes – find out what they are so you can avoid them!
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex pr-4 max-w-3xl">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 m-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <h3 class="text-black font-bold">
                        
                                3 Simple Tips To Get Into Your New Home In A Matter Of Weeks
                                </h3>
                                <p class="pb-6">
                                    These strategies can help you reduce the total amount in interest paid on your loan facility paying off your loan YEARS earlier than you ever thought possible
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex pr-4 max-w-3xl">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 m-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <h3 class="text-black font-bold">
                        
                                The Old Myths & Downright Lies Told By The Building Industry
                                </h3>
                                <p class="pb-6">
                                    Many people still believe these old wives-tales and dirty lies told by the building industry – find out what they are so you can protect yourself
                                </p>
                            </div>
                        </div>
                    
                    </div>
                    <div class="">
                        <button class="px-8 py-6 text-md bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange">Book your free consultation</button>
                    </div>
                
                </div>
            </div>



            <!-- section 6 -->
            <div class="container mx-auto flex flex-col justify-center py-16 px-4">
                <div class="flex justify-center pb-8">
                    <h2 class="text-lg md:text-4xl font-semibold text-center">
                       Sadly, 63% Of Those Wishing To Buy A New Home Will Never Be Able To Get Fiance Approval Without The Right Help
                    </h2>
                </div>
                <!-- big screen -->
                <div class="hidden md:block">
                    <div class="h-80 flex jusitfy-between w-full px-10">
                        <div class="w-full md:flex items-center h-full">
                            <div class="pr-12 max-w-3xl">
                                <h3 class="text-xl font-semibold pb-4">
                                    Sadly, 63% of first Home Buyers will never reach their new home goals.
                                </h3>
                                <p>It’s not their fault, they just haven’t been taught the right way to manage their finance and housing transaction. It doesn’t have to be this way for you though.</p>
                                <p>We can show you exactly how we achieve results and how we’ve help our clients make their property dreams come true, using the same strategies. Reserve your consultation today to see how you can achieve the same result, and do it much faster than you ever thought was possible.</p>
                            </div>
                        </div>
                        <div class="w-100 flex items-center h-full">
                            <img class="w-100" src="img/CIRCLE-IMAGE-A3.png">
                        </div>
                    </div>
                    <div class="h-80 flex justify-between w-full px-10">
                        <div class="w-100 flex items-center h-full">
                            <img class="w-100" src="img/CIRCLE-IMAGE-B2.png">
                        </div>
                        <div class="w-full flex items-center h-full">
                            <div class="pl-12 max-w-3xl">
                                <h3 class="text-xl font-semibold pb-4">
                                    Save Yourself Months And All The Aggravation Associated with Dealing With The Finance Process By Using Our Proven Process for Buy Your First Home.
                                </h3>

                                <p>Why waste months going it alone, trying to figure things out for yourself? You can save this time and get a much better result when you get our expert advice team to assist you to manage the buying process. It’s like a shortcut which gives you peace of mind, helps you mitigate the pitfalls associated with property transactions and will inevitably save you thousands on your lending.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Small Screen -->
                <div class="block md:hidden">
                    <div class="">
                        <div class="w-full flex justify-center items-center">
                            <img class="w-80" src="img/CIRCLE-IMAGE-A3.png">
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="">
                                <h3 class="text-xl font-semibold pb-4">
                                    Sadly, 63% of first Home Buyers will never reach their new home goals.
                                </h3>
                                <p>It’s not their fault, they just haven’t been taught the right way to manage their finance and housing transaction. It doesn’t have to be this way for you though.</p>
                                <p>We can show you exactly how we achieve results and how we’ve help our clients make their property dreams come true, using the same strategies. Reserve your consultation today to see how you can achieve the same result, and do it much faster than you ever thought was possible.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="">
                        <div class="w-full flex justify-center items-center">
                            <img class="w-80" src="img/CIRCLE-IMAGE-B2.png">
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="">
                                <h3 class="text-xl font-semibold pb-4">
                                    Save Yourself Months And All The Aggravation Associated with Dealing With The Finance Process By Using Our Proven Process for Buying Your First Home.
                                </h3>
                                <p>Why waste months going it alone, trying to figure things out for yourself? You can save this time and get a much better result when you get our expert advice team to assist you to manage the buying process. It’s like a shortcut which gives you peace of mind, helps you mitigate the pitfalls associated with property transactions and will inevitably save you thousands on your lending.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                

            </div>



            <!-- section 7 -->
            <div class="bg-gray-200 py-10 md:py-20 px-4">
                <div class="container mx-auto flex flex-col items-center justify-center text-center">
                    <img class="rounded-full md:mb-20" src="img/House-Hand-Icon-150x150.png">
                    <h2 class="text-xl font-semibold mb-10 md:mb-20">Are You Ready To Help Yourself Realise Your Property Dreams?</h2>
                    <button class="px-12 py-8 bg-blue-800 text-orange-300 font-bold text-lg rounded-lg uppercase glow-orange">Claim your free consultation</button>
                </div>
            </div>



            <!-- section 8 -->
            <div class=" bg-gray-200 py-24 md:p-20">
                <div class="flex justify-center pb-8">
                    <h2 class="text-lg md:text-4xl font-semibold text-center">
                        Here’s What You Can Expect When You Book Your FREE Consultation…
                    </h2>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="bg-white w-100 h-100 rounded p-8 m-4 flex flex-col items-center justify-start">
                        <button class="bg-gray-200 rounded-full text-4xl font-bold primary w-20 h-20 shadow-md mb-8">1</button>
                        <h3 class="text-md md:text-2xl font-semibold mb-4">
                            The Cold Hard TRUTH about the Current State of the Lending During the Covid-19 Pandemic
                        </h3>
                        <p>
                            We reveal what’s REALLY happening behind the scenes and why it seems so much harder to become finance Approved in the current marketplace
                        </p>
                    </div>
                    <div class="bg-white w-100 h-100 rounded p-8 m-4 flex flex-col items-center justify-start">
                        <button class="bg-gray-200 rounded-full text-4xl font-bold primary w-20 h-20 shadow-md mb-8">2</button>
                        <h3 class="text-md md:text-2xl font-semibold mb-4">
                            4 Little Tips to Help You Ensure That You End Up With A Home You're In Love With!
                        </h3>
                        <p>
                            We’ve used these tips and tricks to accelerate the results for our clients so they can buy their first home much faster – now YOU can do the same!
                        </p>
                    </div>
                    <div class="bg-white w-100 h-100 rounded p-8 m-4 flex flex-col items-center justify-start">
                        <button class="bg-gray-200 rounded-full text-4xl font-bold primary w-20 h-20 shadow-md mb-8">3</button>
                        <h3 class="text-md md:text-2xl font-semibold mb-4">
                            Beware of Property Marketing Groups And Developer Incentives  
                        </h3>
                        <p>
                            “Hey these guys are giving me a great deal”, Wrong! We’ll show why you should be EXTREMELY wary of some vendors offers, there’s a lot more to it than first meets the eye and what you should do instead
                        </p>
                    </div>
                    <div class="bg-white w-100 h-100 rounded p-8 m-4 flex flex-col items-center justify-start">
                        <button class="bg-gray-200 rounded-full text-4xl font-bold primary w-20 h-20 shadow-md mb-8">4</button>
                        <h3 class="text-md md:text-2xl font-semibold mb-4">
                            What Is Lenders Mortgage Insurance, What Will It Cost Me and What Impact Does That Have On The End Cost of My Home?
                        </h3>
                        <p>
                            This all-important piece of the puzzle is crucial to becoming a homeowner and without it you are doomed to failure – make sure you have this at all costs!
                        </p>
                    </div>
                    <div class="bg-white w-100 h-100 rounded p-8 m-4 flex flex-col items-center justify-start">
                        <button class="bg-gray-200 rounded-full text-4xl font-bold primary w-20 h-20 shadow-md mb-8">5</button>
                        <h3 class="text-md md:text-2xl font-semibold mb-4">
                            What Never To Do When Dealing With A Financier
                        </h3>
                        <p>
                            Understanding Bank Lending Policy is crucial to getting into your new home. These essential Items will ensure your deal is approved and that your purchase doesn’t fall over in the final stages leaving your without your deposit and Crying!
                        </p>
                    </div>
                </div>
                <div class="w-full flex items-center justify-center">
                    <button class="px-8 py-6 text-md md:text-lg md:px-12 md:py-8 bg-blue-800 text-orange-300 font-bold rounded-lg uppercase glow-orange">Claim your free consultation</button>

                </div>
            </div>




            <!-- Section 9 -->
            <div class="px-4 py-24 md:p-20 ">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-100" src="img/icon-guarantee-placeholder.png" alt="">
                    <h2 class="text-lg md:text-4xl font-semibold text-center mb-6">
                        Our Rock-Solid 100% Approval Guarantee
                    </h2>
                    <p class="mb-8 text-center max-w-3xl">
                        When you work with Property Partners we’re so confident that we can find you a finance and property solution that in the extremely unlikely event we can’t help you, we’ll write you a cheque for $500 – no questions asked. See T’s and C’s
                    </p>
                    <button class="px-8 py-6 text-md md:text-lg md:px-12 md:py-8 bg-blue-800 text-orange-300 font-bold rounded-lg uppercase glow-orange">Claim your free consultation</button>
                    
                </div>
            </div>



            <!-- section 10 -->
            <div class="min-h-screen flex justify-center items-center text-white py-24 px-4" style="background-image: url(img/BG-Meeting-blue-comp.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
                <div class="w-full container mx-auto">
                    <div class="w-full flex justify-center">
                        <img class="w-24" src="img/circle-logo-small.png" alt="small logo image">
                    </div>
                     <div class=" text-lg md:text-4xl mb-16 md:mb-10 font-semibold text-center">
                        Why Choose Websters Property?
                    </div>
                    <!-- Big Screen -->
                    <div class="flex flex-wrap justify-around items-start">
                        <div class="w-64 flex flex-col items-center justify-center mb-16 md:mb-0">
                            <div class=" pb-8">
                                <svg viewBox="0 0 24 24" class="w-20 rounded-full border-white border-4 p-4">
                                    <path class="white" d="M9 22H5a1 1 0 0 1-1-1V11l8-8 8 8v10a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v4a1 1 0 0 1-1 1zm3-9a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                    <path class="white" d="M12.01 4.42l-8.3 8.3a1 1 0 1 1-1.42-1.41l9.02-9.02a1 1 0 0 1 1.41 0l8.99 9.02a1 1 0 0 1-1.42 1.41l-8.28-8.3z"/>
                                </svg>
                            </div>
                            <p class=" text-center font-bold text-white">
                                Over 436 properties settled
                            </p>
                        </div>
                        <div class="w-64 flex flex-col items-center justify-center mb-16 md:mb-0">
                            <div class=" pb-8">
                                <svg viewBox="0 0 24 24" class="w-20 rounded-full border-white border-4 p-4">
                                    <path class="white" d="M9 11a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                                    <path class="white" d="M16 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1zm1-8.41l3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 1 1 1.4-1.42l1.3 1.3z"/>
                                </svg>
                            </div>
                            <p class=" text-center font-bold text-white">
                                Over 1000+ loan approvals for clients
                            </p>
                        </div>
                        <div class="w-64 flex flex-col items-center justify-center mb-16 md:mb-0">
                            <div class=" pb-8">
                                <svg viewBox="0 0 24 24" class="w-20 rounded-full border-white border-4 p-4">
                                    <path class="white" d="M3 8h18v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8zm6 3l-1 1v4l1 1H4l1-1v-4l-1-1h5zm5.5 0l-1 1v4l1 1h-5l1-1v-4l-1-1h5zm5.5 0l-1 1v4l1 1h-5l1-1v-4l-1-1h5zM3 20h18a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z"/>
                                    <path class="primary" d="M4 18h16a1 1 0 0 1 1 1v1H3v-1a1 1 0 0 1 1-1zm8.4-15.91l9 4c1 .43.68 1.91-.4 1.91H3c-1.08 0-1.4-1.48-.4-1.91l9-4a1 1 0 0 1 .8 0z"/>
                                </svg>
                            </div>
                            <p class=" text-center font-bold text-white">
                                Combined 80 years real-estate and investment experience
                            </p>
                        </div>
                        <div class="w-64 flex flex-col items-center justify-center mb-16 md:mb-0">
                            <div class=" pb-8">
                                <svg viewBox="0 0 24 24" class="w-20 rounded-full border-white border-4 p-4">
                                    <path class="white" d="M4 3h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm16 12V7a2 2 0 0 1-2-2H6a2 2 0 0 1-2 2v8a2 2 0 0 1 2 2h12c0-1.1.9-2 2-2zM8 7h8a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2z"/>
                                    <path class="white" d="M11.65 18.23a4 4 0 1 1 4.7 0l2.5 3.44-2.23-.18-1.48 1.68-.59-4.2a4.04 4.04 0 0 1-1.1 0l-.6 4.2-1.47-1.68-2.23.18 2.5-3.44zM14 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                </svg>
                            </div>
                            <p class=" text-center font-bold text-white">
                                Qualified and ASIC Registered Financial Advisers at your disposal
                            </p>
                        </div>
                    </div>
                   
                </div>
            </div>



            <!-- section 11 -->
            <!-- large screen -->
            <div class="hidden md:block h-full py-24 flex justify-center items-center bg-gray-200">
                <div class="flex flex-col items-center container mx-auto">
                    
                    <h2 class="text-4xl pb-12 font-semibold text-center">
                        Here's What We've Been Up To Recently
                    </h2>
                    <div class="mb-20 flex flex-wrap w-full justify-center">
                        <img class="" src="img/Google-Reviews_01-1.png">
                        <img class="" src="img/Google-Reviews_02-1.png">
                        <img class="" src="img/Google-Reviews_03-1.png">
                        <img class="" src="img/Google-Reviews_04-1.png">                        
                        
                        
                    </div>
                    
                    <button class="px-12 py-8 bg-blue-800 text-orange-300 font-bold text-lg rounded-lg uppercase glow-orange">Claim your free consultation</button>
                </div>
            </div>
            <!-- small screen -->
            <div class="block md:hidden h-full py-24 flex justify-center items-center bg-gray-200">
                <div class="flex flex-col items-center container mx-auto">
                    
                    <h2 class="text-lg pb-8 font-semibold text-center">
                        Here's What We've Been Up To Recently
                    </h2>
                    <div class="mb-10">
                        <img class="" src="img/Google-Reviews_01-1.png">
                        <img class="" src="img/Google-Reviews_02-1.png">
                        <img class="" src="img/Google-Reviews_03-1.png">
                        <img class="" src="img/Google-Reviews_04-1.png">
                        
                    </div>
                    <button class="px-8 py-6 text-md bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange">Book your free consultation</button>
                </div>
            </div>




            <!-- Section 12 -->
            <div class="px-4 py-20 min-h-screen">
                <div class="flex flex-col justify-center items-center">
                    <div class="max-w-3xl">
                        <h2 class="text-lg md:text-4xl font-semibold text-center mb-6">
                            Claim Your FREE No-Obligation 30-Minute Consultation (Valued At $269)
                        </h2>
                        <p class="mb-4">
                            During this no-obligation call, our experts will discuss your specific situation and how we can help you reach your New Home goals in just a matter of days.
                            
                            
                        </p>
                        <p class="mb-8">
                            Here’s what you’ll discover in your FREE consultation…
                        </p>
                        <div class="flex pr-4">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 mx-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <p class="pb-6">
                                    How to leverage your current position into a finance approval in just 7 days without the blood, sweat and tears usually involved with dealing with the banks.
                                </p>
                            </div>
                        </div>
                        <div class="flex pr-4">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 mx-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <p class="pb-6">
                                    The exact process we’ve used to take hundreds of clients from renter to home owner in the blink of an eye.
                                </p>
                            </div>
                        </div>
                        <div class="flex pr-4">
                            <div>
                                <svg  viewBox="0 0 24 24" class="w-6 mx-3"><circle cx="12" cy="12" r="10" class="primary"/><path class="white" d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z"/></svg>    
                            </div>
                            <div class="text-sm">
                                <p class="pb-6">
                                The biggest problem people come to us with which keeps them down financially – no matter what else they do!
                                </p>
                            </div>
                        </div>
                        <p class="mb-8">
                        This is ONLY for people who are serious about changing their financial position and realising their home-ownership dreams. Places are strictly limited. Enter your details below now to avoid disappointment and secure your consultation.
                        </p>
                    </div>
                    
                    <button class="px-8 py-6 text-md md:text-lg md:px-12 md:py-8 bg-blue-800 text-orange-300 font-bold rounded-lg uppercase glow-orange">Claim your free consultation</button>


                </div>
            </div>


        </div>
    </body>
</html>
