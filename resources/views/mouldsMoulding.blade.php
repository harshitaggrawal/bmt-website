@extends('layout.app')
@section('meta')
<title>Mould and Moulding Manufacturing Company in Kolkata - BMT</title>
<meta name="description" content="Upgrade your manufacturing process with premium mould & moulding! Banerjee Machines & Tools is Kolkata's top mould & moulding manufacturer. Contact us now.">
<meta name="keywords" content="Mould Maker in Kolkata, Mould Manufacturing Company in Kolkata, Injection Moulding Company in Kolkata">
<link rel="canonical" href="https://www.bmt.co.in/mould-moulding-manufacturing-company-kolkata" />
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[450px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/Services/Service-Hero-Banner.jpg')  }}" class="min-h-full w-full h-[450px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">


            <h1 class="text-xl md:text-3xl text-white font-bold text-left mb-4">
                Precision-Engineered Moulds and Moulding for Every Industry
            </h1>


            <p class="text-white mt-4 font-semibold text-md">
                Enhance your production process with custom-designed moulds and moulding services that improve precision, reduce cycle time, and ensure consistent, high-quality results.
            </p>
            
            <a href="/contact" class="mt-4 bg-[#052250] w-[260px] text-white py-3 px-12 rounded hover:bg-blue-900">
            Get a Detailed Quote!
            </a>
        </div>
    </div>

</div>

<section class="bg-white">
    <div class="w-full ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center md:pr-[9%]">
            <!-- Image Section -->
            <div class="flex w-full justify-center min-h-[350px] align-center bg-blue-600 relative">
                <div class="absolute flex inset-0 opacity-100">
                    <div class="basis-3/4 bg-blue-600"></div>
                    <div class="block basis-1/4 bg-white"></div>
                </div>

                <div class="relative flex  shadow-xl rounded-xl bg-white my-16 ml-[18%] mr-[5%]">

                    <div class="">
                        <img src="{{ asset('assets/image/mould1.png') }}"
                            alt="Mould and Moulding"
                            class="w-full h-full rounded-lg shadow-lg object-cover">
                    </div>
                </div>

            </div>

            <!-- Text Content (Unchanged) -->
            <div class="py-8 md:py-12 px-6 ">
                <h2 class="text-3xl font-bold text-black"> Moulds & Moulding </h2>
                <p class="mt-4 text-gray-600">
                    Moulds and moulding services are vital in manufacturing for creating precise and consistent parts. These tools are designed to shape materials with high accuracy, ensuring efficiency and reduced waste. At Banerjee Machines & Tools Co., we specialize in providing high-quality, custom moulds and moulding services that cater to your specific production needs.
                </p>

                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Custom-designed moulds to meet client-specific production requirements.
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Enhance production efficiency and reduce cycle times.
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Suitable for industries such as automotive, consumer products, and more.
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="bg-[#F8F7F0] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Mould and Moulding</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-4">
            Service Overview
        </h2>

        <h4 class="text-center text-blue-600 text-xl md:text-3xl font-bold">Comprehensive Mould Services</h4>

        <p class="text-gray-600 mt-4">
            We offer a wide range of moulding services, including custom mould design, precision mould fabrication, and high-quality moulding solutions. Whether you need single prototype moulds or high-volume production, our expert team delivers reliable, high-performance moulds that meet your exact specifications. </p>



        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 mt-6 gap-16 md:gap-4">


            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/Comprehensive/s1.jpg')  }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        compression moulds
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/Comprehensive/s2.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Injection moulds
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/Comprehensive/s3.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Resin Transfer
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/Comprehensive/s4.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Press Tools
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/Comprehensive/s5.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        forging Die
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/Comprehensive/s6.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Die Casting
                    </p>
                </div>
            </div>



        </div>


        <h4 class="text-center text-blue-600 text-xl md:text-3xl font-bold mt-16 ">End-to-End Moulds Solutions</h4>

        <p class="text-gray-600 mt-4">
            From concept to completion, we provide end-to-end mould solutions, including custom mould design, precise fabrication, and efficient moulding services. Our team ensures that every step of the process meets the highest standards of quality and precision, delivering reliable, cost-effective moulds for your production needs </p>



        <div class="grid grid-cols-1 md:grid-cols-2 justify-center lg:grid-cols-3 mt-6 gap-16 md:gap-4">
            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/endmould/c1.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        compression Moulding
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/endmould/c2.jpg')}}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Injection Moulding
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Mouldandmoulding/endmould/c3.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Resin Transfer Moulding
                    </p>
                </div>
            </div>



        </div>


    </div>
</section>


<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Process Section</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Our Mould Manufacturing Process
        </h2>

        <p class="text-gray-600 mt-4">
            We follow a systematic approach to deliver high-quality moulds for every project, ensuring precise execution and timely delivery. </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    1
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Design & Engineering</h2>
                    <p>We begin by understanding your needs, followed by custom mould design and engineering.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    2
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Material Selection & Machining</h2>
                    <p>Using the highest-grade materials, we leverage advanced CNC machining for precision.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    3
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Quality Testing & Inspection</h2>
                    <p>Each mould undergoes rigorous testing to ensure maximum durability and functionality.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    4
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Final Assembly & Delivery</h2>
                    <p>Our moulds are carefully assembled, packaged, and delivered on time, ensuring a seamless experience.</p>
                </div>
            </div>
        </div>

    </div>
</section>


<div class="bg-[#F8F7F0] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/Services/jig fixture/why-choose-us.jpg')  }}"
                alt="Moulding process in industry"
                class="h-full w-full object-cover max-h-[450px] md:max-h-[400px] md:w-auto">
        </div>

        <div class="px-[5%]">
            <!-- <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Benefits </i></h2> -->
            <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Why Choose Us
            </h2>
            <p class="text-gray-500 mt-4">
                With years of experience in mould manufacturing and moulding services, we are your trusted partner for all your moulding needs. Our expertise, attention to detail, and commitment to quality make us a leader in the moulding industry.
            </p>

            <div class="mt-6 space-y-2">
                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-400 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Over 30 years of expertise in mould and moulding solutions.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-500 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Custom-designed moulds tailored to your specific needs.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-600 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">High precision and durability for long-lasting moulds.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Fast and efficient mould production to meet deadlines.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Moulding expertise across various industries including automotive, consumer products, and more.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
                    <input type="text" name="name" placeholder="Name" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                    <input type="email" name="email" placeholder="Email Address" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                </div>
                <input type="hidden" value="Moulds And Moulding" name="service" id="" required>

                <div class="mt-4">
                    <input type="text" name="phone" placeholder="Phone Number" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black">
                </div>

                <div class="mt-4">
                    <textarea name="message" placeholder="Write a Message" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black h-32" required></textarea>
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
    <h2 class="text-2xl md:text-4xl font-bold text-center mb-6">
        Don't see your question here? Drop us a line!
    </h2>
    <div class="space-y-4">
        @php
        $faqs = [
        ["question" => "What types of moulds do you manufacture?",
        "answer" => "From injection moulds to compression moulds, we make diverse moulds based on industry needs."],
        ["question" => "What industries do you serve?",
        "answer" => "We make moulds for a variety of industries, including automotive, consumer goods, packaging, electronics, and more."],

        ["question" => "Do you offer custom mould solutions?",
        "answer" => "Yes, we provide custom-designed moulds to meet specific industry needs, ensuring optimal performance and efficiency.
        "],
        ["question" => "How do you ensure mould quality?",
        "answer" => "We use advanced CNC machining techniques, high-quality materials, and rigorous quality control to ensure precision and durability.
        "],
        ["question" => "How can I place an order?",
        "answer" => "You can contact us directly through our website, phone, or email to discuss your moulding requirements and receive a detailed quote.
        "],
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
