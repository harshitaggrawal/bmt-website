@extends('layout.app')
@section('meta')
<title>Mould and Moulding | Machining | Valve | Jig and Fixture - BMT</title>
<meta name="description" content="BMT offers precision Mould & Moulding, Machining, Valve, and Jig & Fixture services. Get reliable industrial solutions tailored to your needs. Contact us now.">
<meta name="keywords" content="Mould Manufacturing Company in Kolkata, Injection Moulding Company in Kolkata, CNC Machine in Kolkata, Valve Manufacturing Company in Kolkata, Jig and Fixture">
<meta name="google-site-verification" content="89VWcE5CDl5-qUSktgzKMs3rXzKV2f8erxz0Dzigrqw" />

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Banerjee Machine & Tools Co.",
        "image": "https://www.bmt.co.in/assets/image/logo.png",
        "@id": "https://www.bmt.co.in/",
        "url": "https://www.bmt.co.in/",
        "telephone": "98300 83027",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "12/5, Bhattacharya Para Lane",
            "addressLocality": "Kolkata",
            "postalCode": "700036",
            "addressCountry": "India"
        },
        "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "08:00",
                "closes": "18:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Saturday",
                    "Sunday"
                ],
                "opens": "10:00",
                "closes": "14:00"
            }
        ]
    }
</script>

<link rel="canonical" href="https://www.bmt.co.in/" />
@endsection

@section('content')
<div class="bg-white">
    <div class="relative w-full h-[550px]">
        <div class="absolute inset-0"></div>
        <video src="{{ asset('assets/image/BMT_final.mp4') }}" autoplay loop muted playsinline class="min-h-full w-full h-[550px] object-cover"></video>
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">

            <h1 class="text-[#FFFFFF] font-[900] md:text-[24px] text-left mb-[2px]">Welcome To</h1>
            <h1 class="text-2xl md:text-6xl text-white font-bold text-left mb-4">
                Banerjee Machine & Tools Co.
            </h1>


            <p class="text-white mt-4 font-semibold text-md">
                From concept to creation, we bring your ideas to life with cutting-edge manufacturing expertise.

            </p>
            <a href="/contact" class="mt-4 bg-[#052250] w-[200px] text-white py-3 px-12 rounded hover:bg-blue-900">
                Contact Us
            </a>
        </div>
    </div>

</div>
<!-- Services  -->
<div class="bg-[#f9f8f3] text-gray-800 w-full px-[9%]">
    <section class="py-12 text-center">
        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Our Services</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            What We Offer
        </h2>

        <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
            At Banerjee Machine & Tools Co., we specialize in delivering high-precision manufacturing solutions tailored to your industry needs. Our commitment to quality and innovation ensures top-tier products and services for all your machining and tooling requirements. </p>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

            <div class="relative group">
                <img src="{{ asset('assets/image/Home/Home_Mould.jpg') }}" alt="Moulds" class="w-full h-80 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2  bg-white shadow-lg rounded-lg p-4 w-10/12 -translate-y-8 transition duration-300">
                    <div class="flex items-center justify-center mb-2 relative">
                        <span class="bg-[#FF9E56] rounded-lg absolute -translate-y-4">
                            <img src="{{ asset('assets/image/serviceIcon.png') }}" class="w-12 h-auto" alt="">
                        </span>
                    </div>
                    <h4 class="font-bold text-lg py-2">Moulds</h4>
                    <div class="flex items-center justify-center mb-2 relative">
                        <a href="{{ route('moulds-Moulding') }}" class="absolute translate-y-4 mt-2 bg-[#0B5BDB] text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Read More
                        </a>
                    </div>

                </div>
            </div>


            <div class="relative group">
                <img src="{{ asset('assets/image/Home/Home_Moulding.jpg') }}" alt="Moulding" class="w-full h-80 object-cover rounded-lg shadow-lg">

                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2  bg-white shadow-lg rounded-lg p-4 w-10/12 -translate-y-8 transition duration-300">
                    <div class="flex items-center justify-center mb-2 relative">
                        <span class="bg-[#FF9E56] rounded-lg absolute -translate-y-4">
                            <img src="{{ asset('assets/image/serviceIcon.png') }}" class="w-12 h-auto" alt="">
                        </span>
                    </div>
                    <h4 class="font-bold text-lg py-2">Moulding</h4>
                    <div class="flex items-center justify-center mb-2 relative">
                        <a href="{{ route('moulds-Moulding') }}" class="absolute translate-y-4 mt-2 bg-[#0B5BDB] text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Read More
                        </a>
                    </div>

                </div>
            </div>

            <div class="relative group">
                <img src="{{ asset('assets/image/Home/Home_Machining.jpg') }}" alt="Machining" class="w-full h-80 object-cover rounded-lg shadow-lg">


                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2  bg-white shadow-lg rounded-lg p-4 w-10/12 -translate-y-8 transition duration-300">
                    <div class="flex items-center justify-center mb-2 relative">
                        <span class="bg-[#FF9E56] rounded-lg absolute -translate-y-4">
                            <img src="{{ asset('assets/image/serviceIcon.png') }}" class="w-12 h-auto" alt="">
                        </span>
                    </div>
                    <h4 class="font-bold text-lg py-2">Machining</h4>
                    <div class="flex items-center justify-center mb-2 relative">
                        <a href="{{route('machines')}}" class="absolute translate-y-4 mt-2 bg-[#0B5BDB] text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Read More
                        </a>
                    </div>

                </div>

            </div>

            <div class="relative group">
                <img src="{{ asset('assets/image/Home/Home_Valve.jpg') }}" alt="Valves" class="w-full h-80 object-cover rounded-lg shadow-lg">


                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2  bg-white shadow-lg rounded-lg p-4 w-10/12 -translate-y-8 transition duration-300">
                    <div class="flex items-center justify-center mb-2 relative">
                        <span class="bg-[#FF9E56] rounded-lg absolute -translate-y-4">
                            <img src="{{ asset('assets/image/serviceIcon.png') }}" class="w-12 h-auto" alt="">
                        </span>
                    </div>
                    <h4 class="font-bold text-lg py-2">Valves</h4>
                    <div class="flex items-center justify-center mb-2 relative">
                        <a href="{{ route('valves') }}" class="absolute translate-y-4 mt-2 bg-[#0B5BDB] text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Read More
                        </a>
                    </div>

                </div>
            </div>

            <div class="relative group">
                <img src="{{ asset('assets/image/Home/Home_Jig Fixture.jpg') }}" alt="Steel Rolls" class="w-full h-80 object-cover rounded-lg shadow-lg">


                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2  bg-white shadow-lg rounded-lg p-4 w-10/12 -translate-y-8 transition duration-300">
                    <div class="flex items-center justify-center mb-2 relative">
                        <span class="bg-[#FF9E56] rounded-lg absolute -translate-y-4">
                            <img src="{{ asset('assets/image/serviceIcon.png') }}" class="w-12 h-auto" alt="">
                        </span>
                    </div>
                    <h4 class="font-bold text-lg py-2">Jigs & Fixtures</h4>
                    <div class="flex items-center justify-center mb-2 relative">
                        <a href="{{ route('jig-&-fixture') }}" class="absolute translate-y-4 mt-2 bg-[#0B5BDB] text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            Read More
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<!-- get in touch  -->
<div class="bg-[#FFFFFF] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/Home/why-choose-us.jpg') }}"
                alt="Workers in industry"
                class="h-full w-full object-cover max-h-[450px] md:max-h-[550px] md:w-auto">
        </div>


        <div class="px-[5%]">

            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Benefits </i></h2>
            <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Why Choose Us
            </h2>
            <p class="text-gray-500 mt-4">
                Banerjee Machine & Tools Co. – Your trusted partner in precision engineering. We specialize in Moulds, Moulding, Machining, Valves, and Jig & Fixture, delivering high-quality manufacturing solutions with excellence and innovation. </p>

            <!-- Features List -->
            <div class="mt-6  space-y-4">
                <div class="flex items-start  space-x-4">
                    <i class="fas fa-check-circle text-blue-400 mt-2 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-lg">20+ Years of Experience</h4>
                        <p class="text-gray-500 text-sm">Expertise built over decades in precision manufacturing.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-blue-500 mt-2 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-lg">Industry Certifications</h4>
                        <p class="text-gray-500 text-sm">Compliant with international quality standards.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-blue-600 mt-2 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-lg">Customized Solutions</h4>
                        <p class="text-gray-500 text-sm">Tailored to meet unique project requirements.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700 mt-2 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-lg">24/7 Customer Support</h4>


                        <p class="text-gray-500 text-sm pb-6">Reliable assistance whenever you need it.</p>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <a href="/contact" class="mt-6 bg-[#354F9C] text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Contact Us
            </a>
        </div>
    </section>
</div>

<!-- Project section -->
<div class="relative w-full text-gray-800 px-[9%]">
    <!-- Background Layer -->
    <div class="absolute top-0 left-0 w-full h-1/2 bg-[#f9f8f3]"></div>

    <div class="text-center relative pt-12">
        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] mb-[2px]"><i>Explore Projects</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold mb-2">
            Our Work in Action
        </h2>
        <p class="text-gray-500 mt-4">
            At Banerjee Machines & Tools Co., every project reflects our expertise in precision engineering and high-quality manufacturing. Here’s a glimpse of our recent work:
        </p>
    </div>
    <!-- Carousel Section -->
    <section class="relative pt-4 pb-12 mx-auto">
        <div class="relative w-full overflow-hidden">
            <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
                <!-- Slides -->
                <div class="min-w-full relative">
                    <img src="{{ asset('assets/image/Home/project/p1.jpg') }}" class="w-full h-[450px] object-cover">
                    <div class="absolute left-10 bottom-10 text-white p-6 rounded-lg">
                        <h2 class="text-2xl font-bold">Automotive Mould Manufacturing</h2>
                        <p class="text-sm">Designed high-precision moulds for critical automotive parts, ensuring durability and seamless performance.
                        </p>
                        <a href="#" class="underline">View Our Portfolio</a>
                    </div>
                </div>

                <div class="min-w-full relative">
                    <img src="{{ asset('assets/image/Home/project/p2.jpg') }}" class="w-full h-[450px] object-cover">
                    <div class="absolute left-10 bottom-10 text-white p-6 rounded-lg">
                        <h2 class="text-2xl font-bold">Aerospace CNC Machining</h2>
                        <p class="text-sm">Produced lightweight, high-strength components meeting stringent aerospace industry standards.
                        </p>
                        <a href="#" class="underline">View Our Portfolio</a>
                    </div>
                </div>

                <div class="min-w-full relative">
                    <img src="{{ asset('assets/image/Home/project/p3.jpg') }}" class="w-full h-[450px] object-cover">
                    <div class="absolute left-10 bottom-10 text-white p-6 rounded-lg">
                        <h2 class="text-2xl font-bold">Industrial Valve Solutions</h2>
                        <p class="text-sm">Engineered and manufactured durable industrial valves optimized for high-pressure applications.
                        </p>
                        <a href="#" class="underline">View Our Portfolio</a>
                    </div>
                </div>

                <div class="min-w-full relative">
                    <img src="{{ asset('assets/image/Home/project/p4.jpg') }}" class="w-full h-[450px] object-cover">
                    <div class="absolute left-10 bottom-10 text-white p-6 rounded-lg">
                        <h2 class="text-2xl font-bold">Custom Tooling & Prototyping</h2>
                        <p class="text-sm">Delivered specialized tooling solutions tailored to unique industry requirements.
                        </p>
                        <a href="#" class="underline">View Our Portfolio</a>
                    </div>
                </div>

                <!-- <div class="min-w-full relative">
                    <img src="{{ asset('assets/image/p5.png') }}" class="w-full h-[450px] object-cover">
                    <div class="absolute left-10 bottom-10 text-white p-6 rounded-lg">
                        <h2 class="text-2xl font-bold">PROJECT</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="underline">View Our Portfolio</a>
                    </div>
                </div> -->
            </div>

            <!-- Controls -->
            <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-black bg-gray-100 h-8 w-8 flex justify-center items-center rounded-full">
                &#10094;
            </button>
            <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-black bg-gray-100 h-8 w-8 flex justify-center items-center rounded-full">
                &#10095;
            </button>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carousel = document.getElementById("carousel");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        let index = 0;
        const slides = document.querySelectorAll("#carousel > div");
        const totalSlides = slides.length;
        const slideWidth = slides[0].clientWidth;

        function updateCarousel() {
            carousel.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        function nextSlide() {
            index = (index + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            index = (index - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        nextBtn.addEventListener("click", nextSlide);
        prevBtn.addEventListener("click", prevSlide);

        // Auto slide every 3 seconds
        setInterval(nextSlide, 3000);
    });
</script>



<!-- Our Promise Section -->
<div class="relative w-full text-gray-800 px-[9%]">
    <!-- Background Layer -->
    <div class="absolute top-0 left-0 w-full h-3/5 bg-[#f9f8f3]"></div>

    <section class="relative py-16">
        <div class="text-center">
            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] mb-[2px]"><i>Our Promise</i></h2>
            <h2 class="text-2xl md:text-4xl text-black font-bold mb-2">
                Quality You Can Trust
            </h2>
        </div>


        <div class="relative mt-6 mx-[10%] p-2 md:p-6 bg-white rounded-lg shadow-lg grid grid-cols-4 md:grid-cols-4 gap-6">
            <!-- Repeat for each image -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/image/q1.png') }}" class="w-[100px] h-[100px] object-contain">
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/image/q2.png') }}" class="w-[100px] h-[100px] object-contain">
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/image/q3.png') }}" class="w-[100px] h-[100px] object-contain">
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/image/q4.png') }}" class="w-[100px] h-[100px] object-contain">
            </div>

        </div>
    </section>
</div>

@include('testimonials')

<!-- @include('blogs.blogInclude') -->

<!-- Contact Form Section -->
<div class="bg-white">
    <div class="relative w-full h-[550px] md:h-[500px]">
        <div class="absolute inset-0 bg-white opacity-50"></div>
        <img src="{{ asset('assets/image/map.png') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col justify-center px-4 w-full px-[9%] md:px-[15%]">

            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Contact Us </i></h2>
            <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Get in Touch for More Details
            </h2>
            <form action="{{ route('contact.store') }}" method="POST" class="mt-6 w-full ">
                @csrf
                @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
                @endif
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Name" class="border border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                    <input type="email" name="email" placeholder="Email Address" class="border border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                </div>
                <div class="mt-4">
                    <input type="text" name="phone" placeholder="Phone Number" class="border-black border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black">
                </div>

                <div class="mt-4">
                    <textarea name="message" placeholder="Write a Message" class="border border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black h-32" required></textarea>
                </div>

                <input type="hidden" value="All Service" name="service" id="" required>
                <button type="submit" class="mt-4 bg-[#052250] text-white py-3 px-12 rounded hover:bg-blue-900">
                    Submit
                </button>
            </form>
        </div>
    </div>

</div>

<!-- FAQ Section -->
<div class="w-full px-[8%] py-8 bg-[#FFFFFF]">
    <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-2"><i>Check Out Our(FAQ) </i></h2>
    <h2 class="text-2xl md:text-4xl font-bold text-center mb-6">
        Don't see your question here? Drop us a line!
    </h2>
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