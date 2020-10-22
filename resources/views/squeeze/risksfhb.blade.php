@extends ('layouts.master')

@section('content')


<x-splash-lander>
    <!-- Phone Screen -->
    <div class="w-full sm:hidden text-center">
        <h2 class="text-white text-sm sm:text-md font-semibold pb-8 mt-10  sm:text-start">
            Limited To The First 25 Approved Applicants - Get $55,000 Towards Your First Home - Download Our Guide and Reserve Your Equity Boost Right NOW!
        </h2>
        <div class="flex justify-center w-full sm:hidden sm:text-start">
            <img class="w-3/4" src="/img/Booklet-8Risk-FHB-optimised.png" alt="">
        </div>
        <p class=" text-2xl tracking-wider md:text-4xl pb-8 font-bold sm:text-start">
            Download This Free Guide To Register For Your $55,000 First Home Grant Boost RIGHT NOW!
        </p>
        <p class="text-md md:text-lg pb-8 sm:text-start">
            HAVE YOU HEARD?
            <br>
            The $25k Federal HomeBuilder grant can now be used as part of your deposit!
            <br>
            Also, the First Home Loan Deposit Scheme has opened up another 10,000 places while lifting the Brisbane metro price cap up to $650,000.
        </p>
    </div>

    <!-- Larger screen -->
    <div class="sm:flex pt-6 hidden sm:block">
        <div class="w-full">
            <h2 class="text-white text-sm sm:text-md font-semibold pb-8 mt-10 text-start">
                Limited To The First 25 Approved Applicants - Get $55,000 Towards Your First Home - Download Our Guide and Reserve Your Equity Boost Right NOW!
            </h2>
            <p class=" text-2xl tracking-wider md:text-4xl pb-8 font-bold text-start">
                Download This Free Guide To Register For Your $55,000 First Home Grant Boost RIGHT NOW!
            </p>
            <p class="text-md md:text-lg pb-8 text-start">
                The $25k Federal HomeBuilder grant can now be used as part of your deposit!
                Also, the First Home Loan Deposit Scheme has opened up another 10,000 places while lifting the Brisbane metro price cap up to $650,000.
            </p>
          
        </div>
        <div class="w-full flex items-center justify-center">
            <img src="/img/Booklet-8Risk-FHB-optimised.png" alt="">
        </div>
    </div>


</x-splash-lander>

<x-download-eight-risk />

<x-current-events-offers/>

<x-why-choose-us />

<x-consult-expectations/>

<x-are-you-ready-cta/>


@endsection