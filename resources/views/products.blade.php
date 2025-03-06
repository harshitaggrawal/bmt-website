@extends('layout.app')
@section('meta')
    <title>BMT-Products</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[400px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/Products/Our-Products.jpg') }}"
            class="min-h-full w-full h-[400px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">
            <h1 class="text-2xl md:text-4xl text-white font-bold text-left mb-4">
              Our Products
            </h1>

            <p class="text-white mt-4 font-semibold text-md">
                From concept to creation, we bring your ideas to life with cutting-edge manufacturing expertise.
            </p>

        </div>
    </div>
</div>

<div class="bg-[#FFFFFF] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/Products/How-we-work.jpg') }}"
                alt="Workers in industry"
                class="h-full w-full rounded object-cover max-h-[450px] md:max-h-[550px] md:w-auto">
        </div>


        <div class="px-[5%]">

            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Products </i></h2>
            <h1 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                How we Work for you
            </h1>
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

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Products</i></h2>
        <h1 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Our Working Products
        </h1>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 ">
            <div class="bg-[#f8f7f0] pb-4 text-black rounded">
                <img src="{{ asset('assets/image/Products/working/PlantMachineries.jpg') }}" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Plant & Machinery
                </h2>
                <p class="px-4">

                    Our modern machinery and plants are equipped with the latest innovations to increase production capacity. We use advanced automation and precise engineering techniques to achieve consistent, high-quality results while minimizing lead times and maximizing cost-efficiency. </p>

            </div>



            <div class="bg-[#f8f7f0] pb-4 text-black rounded">
                <img src="{{ asset('assets/image/Products/working/Design.jpg') }}" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Design
                </h2>
                <p class="px-4">
                    We had a team of expert designers who used modern design tools to transform concepts into reality. By understanding client requirements, we develop robust designs that form the foundation for superior manufacturing outcomes.
                </p>
            </div>

            <div class="bg-[#f8f7f0] pb-4 text-black rounded">
                <img src="{{ asset('assets/image/Products/working/Testing.jpg') }}" alt="">
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

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Our Products</i></h2>
        <h1 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            What we Offer
        </h1>

        <p class="text-gray-600 mt-4 mb-8">
            Banerjee Machines & Tools Co. provides a wide range of high-precision engineering services tailored to meet the diverse needs of various industries. Our expertise ensures smooth manufacturing processes, improved operational efficiency, and top-notch output. Discover our main services below:
        </p>


        
        <div class="grid grid-cols-1 md:grid-cols-2 mt-4 gap-6">

            <!-- Service 1 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/Products/offer/MouldandMoulding.jpg') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Mould and Moulding</h3>
                    <a href="/moulds-Moulding"
                        class="bg-orange-500 text-white w-[160px] px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/Products/offer/Machining.jpg') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end items-left p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Machining</h3>
                    <a href="/machines"
                        class="bg-orange-500 text-white w-[160px] px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/Products/offer/Valve.jpg') }}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Valves</h3>
                    <a href="/valves"
                        class="bg-orange-500 text-white w-[160px] px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('assets/image/Products/offer/Jig Fixture.jpg')}}" class="w-full h-[300px] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-6">
                    <h3 class="text-white text-left text-xl font-semibold">Jig & Fixture</h3>
                    <a href="/jig-&-fixture"
                        class="bg-orange-500 w-[160px] text-white px-4 py-2 mt-3 rounded-md transition duration-300 hover:bg-orange-600">
                        View Details
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- @include('blogs.blogInclude') -->
<!-- Contact Form Section -->
<div class="bg-white">
    <div class="relative w-full h-[550px] md:h-[500px]">
        <div class="absolute inset-0 bg-white opacity-50"></div>
        <img src="{{ asset('assets/image/map.png') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col justify-center px-4 w-full px-[9%] md:px-[15%]">

            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Contact Us </i></h2>
            <h1 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Get in Touch for More Details
            </h1>
            <form action="{{ route('contact.store') }}" method="POST" class="mt-6 w-full ">
                @csrf
                @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
                @endif
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Name" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                    <input type="email" name="email" placeholder="Email Address" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                </div>
                <input type="hidden" value="All" name="service" id="" required>

                <div class="mt-4">
                    <input type="text" name="phone" placeholder="Phone Number" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black">
                </div>

                <div class="mt-4">
                    <textarea name="message" placeholder="Write a Message" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black h-32" required></textarea>
                </div>

                <button type="submit" class="mt-4 bg-[#052250] text-white py-3 px-12 rounded hover:bg-blue-900">
                    Submit
                </button>
            </form>
        </div>
    </div>

</div>


<div class="w-full px-[8%] py-8 bg-[#FFFFFF]">
    <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-2"><i>Check Out Our(FAQ) </i></h2>
    <h1 class="text-2xl md:text-4xl font-bold text-center mb-6">
        Don't see your question here? Drop us a line!
    </h1>
    <div class="space-y-4">
        @php
        $faqs = [
        ["question" => "What are the different types of moulds?", "answer" => "Common types include injection moulds, compression moulds, blow moulds, extrusion moulds, and rotational moulds."],
        ["question" => "Which materials are commonly used for moulds?", "answer" => "Moulds are usually made from steel, aluminium, or composite materials depending on the application and durability required."],
        ["question" => "How long does a mould last?", "answer" => "The lifespan of a mould depends on the material, usage, and maintenance. High-quality steel moulds can last for thousands to millions of cycles."],
        ["question" => "How do you maintain a mould?", "answer" => "Regular cleaning, lubrication, and inspection for wear and tear help extend the mould’s lifespan and maintain product consistency."],
        ["question" => "What are the advantages of CNC machining over manual machining?", "answer" => "CNC machining offers greater accuracy, repeatability, efficiency, and the ability to produce complex geometries."],
        ["question" => "What materials can be machined?", "answer" => "Metals (steel, aluminium, titanium), plastics, composites, and ceramics can all be machined depending on the requirements."],
        ["question" => "What are the main types of valves?", "answer" => "Common types include ball valves, gate valves, globe valves, check valves, and butterfly valves."],
        ["question" => "What factors should be considered when selecting a valve?", "answer" => "Flow rate, pressure, temperature, material compatibility, and application type determine the best valve selection."],
        ["question" => "What is the difference between a jig and a fixture?", "answer" => "A jig is a device that holds and guides the cutting tool, ensuring accuracy and repeatability in machining operations. A fixture, on the other hand, securely holds the workpiece in place during machining but does not guide the tool."],
        ["question" => "Can jigs and fixtures be customized for specific applications?", "answer" => "Yes, they can be designed and manufactured to meet the specific needs of a particular part, ensuring optimal performance and precision."]
        ];

        @endphp

        @foreach ($faqs as $index => $faq)
        <div class="rounded shadow-sm transition-all">
            <button
                class="faq-toggle border-b border-gray-200 w-full flex justify-between items-center p-4 text-left font-medium bg-gray-100 hover:bg-gray-200 transition duration-300"
                data-index="{{ $index }}">
                <span>{{ $faq['question'] }}</span>
                <span class="faq-icon text-gray-600"><i class="fa fa-plus"></i></span>
            </button>

            <div class="faq-answer max-h-0 bg-gray-100 overflow-hidden transition-[max-height] duration-300 p-0">
                <p class="text-gray-700 p-4">{{ $faq['answer'] }}</p>
            </div>
        </div>
        @endforeach

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggles = document.querySelectorAll(".faq-toggle");

        toggles.forEach(toggle => {
            toggle.addEventListener("click", function() {
                const index = this.getAttribute("data-index");
                const answer = this.nextElementSibling;
                const icon = this.querySelector(".faq-icon i");

                if (answer.style.maxHeight) {
                    answer.style.maxHeight = null;
                    icon.classList.remove("fa-times");
                    icon.classList.add("fa-plus");
                } else {
                    document.querySelectorAll(".faq-answer").forEach(el => el.style.maxHeight = null);
                    document.querySelectorAll(".faq-icon i").forEach(el => {
                        el.classList.remove("fa-times");
                        el.classList.add("fa-plus");
                    });
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.classList.remove("fa-plus");
                    icon.classList.add("fa-times");
                }
            });
        });
    });
</script>

@endsection