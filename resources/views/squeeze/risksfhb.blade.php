@extends ('layouts.master')

@section('content')


<x-splash-lander class="">



    <!-- Phone Screen -->
    <div class="w-full sm:hidden text-center">
        <h2 class="text-white text-sm sm:text-md font-semibold pb-8 mt-10  sm:text-start">
            Limited To The First 25 Approved Applicants - Get $55,000 Towards Your First Home - Download Our Guide and Reserve Your Equity Boost Right NOW!
        </h2>
        <div class="flex justify-center w-full sm:hidden sm:text-start">
            <img class="w-3/4" src="/images/Booklet-8Risk-FHB-optimised.webp" alt="">
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
        <modal-button btn_text="download your copy now">
        <div class="w-full">
                    <h2 class="text-lg md:text-4xl font-semibold text-center pb-6">
                        We'll deliver it to your inbox
                    </h2>
                    <form accept-charset="UTF-8" action="https://dj831.infusionsoft.com/app/form/process/c0652428999f11d0beaea367d0dab68a" class="" id="inf_form_c0652428999f11d0beaea367d0dab68a" method="POST">
                        <input name="inf_form_xid" type="hidden" value="c0652428999f11d0beaea367d0dab68a" />
                        <input name="inf_form_name" type="hidden" value="Funnel 1: HVCO Opt~br~Page Form with phone field" />
                        <input name="infusionsoft_version" type="hidden" value="1.70.0.252135" />
                        <div class="">
                            <label hidden for="">First Name *</label>
                            <input class="p-4 mb-2 w-full text-gray-600 text-lg border border-gray-300 border-1 rounded-md " id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" />
                        </div>
                        <div class="">
                            <label hidden for="">Email *</label>
                            <input class="p-4 mb-2 w-full text-gray-600 text-lg border border-gray-300 border-1 rounded-md " id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" />
                        </div>
                        <div class="">
                            <label hidden for="">Phone *</label>
                            <input class="p-4 mb-2 w-full text-gray-600 text-lg border border-gray-300 border-1 rounded-md " id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" type="text" />
                        </div>
                        <div>
                            <div>&nbsp;</div>
                        </div>
                        <div class="flex justify-center">
                            <button class="infusion-recaptcha px-8 py-6 text-md md:px-10 md:py-8 md:text-lg bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange" 
                            id="recaptcha_c0652428999f11d0beaea367d0dab68a" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
        </modal-button>
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
            <modal-button btn_text="download your copy now">
                <div class="w-full">
                    <h2 class="text-lg md:text-4xl font-semibold text-center pb-6">
                        We'll deliver it to your inbox
                    </h2>
                    <form accept-charset="UTF-8" action="https://dj831.infusionsoft.com/app/form/process/c0652428999f11d0beaea367d0dab68a" class="" id="inf_form_c0652428999f11d0beaea367d0dab68a" method="POST">
                        <input name="inf_form_xid" type="hidden" value="c0652428999f11d0beaea367d0dab68a" />
                        <input name="inf_form_name" type="hidden" value="Funnel 1: HVCO Opt~br~Page Form with phone field" />
                        <input name="infusionsoft_version" type="hidden" value="1.70.0.252135" />
                        <div class="">
                            <label hidden for="">First Name *</label>
                            <input class="p-4 mb-2 w-full text-gray-600 text-lg border border-gray-300 border-1 rounded-md " id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" />
                        </div>
                        <div class="">
                            <label hidden for="">Email *</label>
                            <input class="p-4 mb-2 w-full text-gray-600 text-lg border border-gray-300 border-1 rounded-md " id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" />
                        </div>
                        <div class="">
                            <label hidden for="">Phone *</label>
                            <input class="p-4 mb-2 w-full text-gray-600 text-lg border border-gray-300 border-1 rounded-md " id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" type="text" />
                        </div>
                        <div>
                            <div>&nbsp;</div>
                        </div>
                        <div class="flex justify-center">
                            <button class="infusion-recaptcha px-8 py-6 text-md md:px-10 md:py-8 md:text-lg bg-blue-800 text-orange-300 font-bold  rounded-lg uppercase glow-orange" 
                            id="recaptcha_c0652428999f11d0beaea367d0dab68a" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </modal-button>

        </div>
        <div class="w-full flex items-center justify-center">
            <img src="/images/Booklet-8Risk-FHB-optimised.webp" alt="">
        </div>

    </div>


</x-splash-lander>

<x-download-eight-risk />

<x-current-events-offers />

<x-why-choose-us />

<x-consult-expectations />

<x-are-you-ready-cta />


@endsection