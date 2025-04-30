@extends('layout.app')
@section('meta')
    <title>BMT-Services</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[400px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/Services/Service-Hero-Banner.jpg') }}"
            class="min-h-full w-full h-[400px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">
            <h1 class="text-2xl md:text-4xl text-white font-bold text-left mb-4">
                Services
            </h1>

            <p class="text-white mt-4 font-semibold text-md">
                One of the leading machining and manufacturing companies in Kolkata, India. With 30 years of manufacturing excellence, Banerjee Machines & Tools Co. has been committed to delivering reliable and high-quality engineering solutions. </p>

        </div>
    </div>
</div>

<div class="bg-[#FFFFFF] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/servicehome.png') }}"
                alt="Workers in industry"
                class="h-full w-full rounded object-cover max-h-[450px] md:max-h-[550px] md:w-auto">
        </div>


        <div class="px-[5%]">

            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Services </i></h2>
            <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Precision-Engineered Custom Manufacturing Solutions
            </h2>
            <p class="text-gray-500 mt-4">

                At Banerjee Machines & Tools, we specifically deliver custom manufacturing solutions that prioritize quality, accuracy, and cost-effectiveness. Our modern production facility and streamlined processes allow us to serve a wide range of industries, including automotive, aerospace, consumer goods, lighting, and electronics.
            </p>

            <p class="text-gray-500 mt-2">
                With a strong commitment to innovation and customer satisfaction, we make sure that every product meets the highest standards of excellence. With advanced technology, a proficient team, and a quality-first approach, we promise outstanding products and services that improve your operational success and efficiency.
            </p>



        </div>
    </section>
</div>

<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Process</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Our Working Process
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 ">
            <div class="bg-[#f8f7f0] pb-4 text-black rounded">
                <img src="{{ asset('assets/image/ft1.png') }}" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Plant & Machinery
                </h2>
                <p class="px-4">

                    Our modern machinery and plants are equipped with the latest innovations to increase production capacity. We use advanced automation and precise engineering techniques to achieve consistent, high-quality results while minimizing lead times and maximizing cost-efficiency. </p>

            </div>



            <div class="bg-[#f8f7f0] pb-4 text-black rounded">
                <img src="{{ asset('assets/image/ft3.png') }}" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Design
                </h2>
                <p class="px-4">
                    We had a team of expert designers who used modern design tools to transform concepts into reality. By understanding client requirements, we develop robust designs that form the foundation for superior manufacturing outcomes.
                </p>
            </div>

            <div class="bg-[#f8f7f0] pb-4 text-black rounded">
                <img src="{{ asset('assets/image/ft4.png') }}" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Testing Facility
                </h2>
                <p class="px-4">
                    At Banerjee Machines & Tools Co., we emphasize quality. Our dedicated testing facility ensures that every product meets the highest industry standards. From durability evaluation to precision evaluation, our in-depth testing process ensures reliability and optimal performance.
                </p>
            </div>
        </div>


    </div>
</section>

<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Our Services</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            What we Offer
        </h2>

        <p class="text-gray-600 mt-4 mb-8">
            Banerjee Machines & Tools Co. provides a wide range of high-precision engineering services tailored to meet the diverse needs of various industries. Our expertise ensures smooth manufacturing processes, improved operational efficiency, and top-notch output. Discover our main services below:
        </p>



        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Service 1 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/ser1.png') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Mould and Moulding</h3>
                    <a href="{{ route('moulds-Moulding') }}"
                        class="bg-orange-500 text-white w-[160px] px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/ser2.png') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end items-left p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Machining</h3>
                    <a href="{{route('machines')}}"
                        class="bg-orange-500 text-white w-[160px] px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/ser3.png') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Valves</h3>
                    <a href="{{ route('valves') }}"
                        class="bg-orange-500 text-white w-[160px] px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/ser4.png') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Jig & Fixture</h3>
                    <a href="{{ route('jig-&-fixture') }}"
                        class="bg-orange-500 w-[160px] text-white px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection