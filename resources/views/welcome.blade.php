@extends ('layouts.master')

@section('content')

<body>
    <div id="app">

        <!-- Splash with video -->
        <div class="min-h-screen flex justify-center items-center text-white pb-16 px-4" 
        style="background-image: url(img/Hero-Background-5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: cover;">
            <div class="flex flex-col items-center container mx-auto">
                <h2 class="text-white text-xl uppercase pb-8 text-center">
                    ATTENTION FIRST HOME BUYER
                </h2>
                <p class=" text-lg md:text-4xl pb-8 font-semibold text-center">
                    Get Up To $55,000 Towards Your First Home RIGHT NOW! We're In The Final Stages Of HomeBuilder And Land Is Running Out!
                </p>
                <p class="text-md md:text-lg pb-8 text-center">
                    FHOG and HomeBuilder Can Now Be Used As Deposit – Find Out If You Qualify For A Loan NOW!
                </p>
                <div class="mb-8 flex justify-center w-full">
                    <iframe class="hidden sm:block" width="800" height="450" src="https://www.youtube.com/embed/_Cu77G2zMUg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="sm:hidden" width="400" height="225" src="https://www.youtube.com/embed/_Cu77G2zMUg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <a href="https://calendly.com/property-partners-finance-strategist/free-30-minutes-deposit-strategy-session" 
                class="px-8 py-6 text-center text-md md:px-10 md:py-8 md:text-lg bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange">Book your free consultation</a>
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
                            Tired of Paying Rent and paying off someone else’s mortgage? Looking for ways to get into your First Home faster? 
                            At Property Partners, we help First Home Buyers achieve their desired outcomes in the shortest time possible.
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
                            We’ve shown hundreds of people that they are already in a position to realise their property goals and created hundreds of homes for our 
                            clients, and we can do the same for you too.
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
        <x-download-eight-risk/>




        <!-- section 2 -->
        <x-proven-strategies-cta/>



        <!-- section 3 -->
        <x-first-home-easy-think/>



        <!-- section 4 -->
        <x-client-testimonials-one/>



        <!-- section 5 -->
        <x-consult-outline-cta/>



        <!-- section 6 -->
        <x-sadly-never/>

        

        <!-- section 7 -->
        <x-are-you-ready-cta/>



        <!-- section 8 -->
        <x-consult-expectations/>




        <!-- Section 9 -->
        <x-approval-guarantee/>



        <!-- section 10 -->
        <x-why-choose-us/>



        <!-- section 11 -->
        <x-client-reviews/>




        <!-- Section 12 -->
        <x-claim-consult-cta/>


    </div>
</body>

@endsection