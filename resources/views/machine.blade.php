@extends('layout.app')
@section('meta')
    <title>CNC Machining Services in Kolkata - BMT</title>
    <meta name="description" content="Banerjee Machines & Tools specializes in CNC Machining Services in Kolkata. Get high-quality, precision-engineered parts today. Contact us now.">
    <meta name="keywords" content="CNC Machine in Kolkata, CNC Services, CNC Machining Service">
    <link rel="canonical" href="https://www.bmt.co.in/cnc-machining-services-kolkata" />

    @endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[450px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/machineHome.png') }}" class="min-h-full w-full h-[450px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">


            <h1 class="text-xl md:text-3xl text-white font-bold text-left mb-4">
                Precision CNC Machining Services in Kolkata
            </h1>


            <p class="text-white mt-3 font-semibold text-md">
                With over 30 years of expertise, Banerjee Machines & Tools Co. delivers high-quality, precision-driven CNC machining solutions for industries such as automotive, aerospace, and consumer goods. We offer both small and large-scale production to meet your needs.

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

            <div class="flex w-full justify-center min-h-[350px] align-center bg-blue-600 relative">
                <div class="absolute flex inset-0 opacity-100">
                    <div class="basis-3/4 bg-blue-600"></div>
                    <div class="block basis-1/4 bg-white"></div>
                </div>

                <div class="relative flex  shadow-xl rounded-xl bg-white my-16 ml-[18%] mr-[5%]">

                    <div class="">
                        <img src="{{ asset('assets/image/machine1.png') }}"
                            alt="Mould and Moulding"
                            class="w-full h-full rounded-lg shadow-lg object-cover">
                    </div>
                </div>

            </div>


            <div class="py-8 md:py-12 px-6 ">


                <h2 class="text-3xl font-bold text-black">Machining</h2>
                <p class="mt-4 text-gray-600">
                    Banerjee Machines & Tools Co. is a trusted CNC machining service provider in Kolkata, offering reliable, high-precision machining for both small-scale and large-volume production. With advanced CNC technology, we guarantee flawless results for every project.
                </p>

                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Advanced CNC technology for precision machining
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Versatile services for diverse industries
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Capability to handle both small and large-scale production
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> High-quality materials and expert craftsmanship
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> On-time delivery with rigorous quality control
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F8F7F0] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Machining</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-4">
            Machining Services Overview
        </h2>

        <h4 class="text-center text-blue-600 text-xl md:text-3xl font-bold">Our Machining Services</h4>

        <p class="text-gray-600 mt-4">
            We offer a wide range of CNC machining services that include precision milling, turning, and grinding. Whether you need custom components or mass production runs, our skilled team delivers high-performance solutions that meet your exact specifications.
        </p>



        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 mt-6 gap-16 md:gap-4">




            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Machine/m1.jpg') }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        CNC Milling
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Machine/m2.jpg')  }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        CNC Turning
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Machine/m3.jpg')  }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        CNC Grinding
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Machine/m4.jpg')  }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Custom CNC Services
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/Machine/m5.jpg')  }}" class="w-full h-[250px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Die Casting
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
            How we Work
        </h2>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">

            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    1
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Consultation & Design</h2>
                    <p>
                        We begin by understanding your requirements and providing expert design solutions tailored to your needs.
                    </p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    2
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Material Selection</h2>
                    <p>
                        Choose top-quality materials that are best suited for your project to ensure long-lasting performance.
                    </p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    3
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">CNC Machining</h2>
                    <p>We use advanced CNC technology to deliver high-precision machining, ensuring accuracy and optimal results.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    4
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Quality Inspection & Delivery</h2>
                    <p>
                        Each part undergoes thorough quality inspection before we deliver it on time, ensuring it meets your specifications and deadlines.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


<div class="bg-[#F8F7F0] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/Services/jig fixture/why-choose-us.jpg')  }}"
                alt="Workers in industry"
                class="h-full w-full object-cover max-h-[450px] md:max-h-[400px] md:w-auto">
        </div>


        <div class="px-[5%]">

            <!-- <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Benefits </i></h2> -->
            <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Why Choose Us
            </h2>
            <p class="text-gray-500 mt-4">
                With more than three decades of expertise, we specialise in providing high-precision CNC machining services tailored to meet the specific needs of various industries. Our commitment to excellence ensures reliable results, prompt delivery, and rigorous quality control for every project.
            </p>


            <div class="mt-6  space-y-2">
                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-400 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">30+ years of industry-leading machining experience.</h4>
                    </div>
                </div>
                <div class="flex items-center justify-start space-x-4">

                    <i class="fas fa-check-circle text-blue-500  text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Advanced CNC technology for unmatched precision.</h4>
                    </div>
                </div>
                <div class="flex items-center justify-start space-x-4">

                    <i class="fas fa-check-circle text-blue-600 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Tailored machining solutions for diverse industrial applications.</h4>
                    </div>
                </div>
                <div class="flex items-center justify-start space-x-4">

                    <i class="fas fa-check-circle text-blue-700  text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Consistent delivery and exceptional customer support.</h4>
                    </div>
                </div>
                <div class="flex items-center justify-start space-x-4">

                    <i class="fas fa-check-circle text-blue-800  text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Comprehensive quality checks to guarantee superior performance.</h4>
                    </div>
                </div>
            </div>



        </div>
    </section>
</div>

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
                    <input type="text" name="name" placeholder="Name" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                    <input type="email" name="email" placeholder="Email Address" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                </div>
                <input type="hidden" value="Machines" name="service" id="" required>

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
        ["question" => "What is CNC machining?", "answer" =>"CNC machining uses computer-controlled tools to manufacture parts with high precision.
        "],
        ["question" => "What industries do you serve?", "answer" => " We serve industries like automotive, aerospace, medical, and more.
        "],
        ["question" => " How do you ensure the quality of your machined parts?
        ", "answer" => " We employ advanced quality control measures to ensure that every part meets your specifications.
        "],
        ["question" => " How long does it take to complete a CNC machining project?
        ", "answer" => " The timeline varies based on complexity, but we strive to meet agreed-upon deadlines.
        "],
        ["question" => " How can I request a quote for CNC machining?
        ", "answer" => "CNC machining offers greater accuracy, repeatability, efficiency, and the ability to produce complex geometries."],

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