@extends('layout.app')
@section('meta')
    <title>Jig and Fixture Manufacturing Company in Kolkata - BMT</title>
    <meta name="description" content="Find the best jigs and fixtures at Banerjee Machines & Tools - A top jig manufacturing company. Get top-quality jigs & fixtures for your business today.">
    <meta name="keywords" content="Jig and Fixture, Jig Manufacturing, Jig Manufacturing Companies">
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[450px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/jigFixtureHome.png') }}" class="min-h-full w-full h-[450px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">


            <h1 class="text-xl md:text-3xl text-white font-bold text-left mb-4">
                Precision Jigs & Fixtures for Every Industry
            </h1>

            <p class="text-white mt-4 font-semibold text-md">
                Enhance your manufacturing process with custom-designed jigs and fixtures that improve accuracy, reduce production time, and ensure seamless operations.
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
                        <img src="{{ asset('assets/image/machine1.png') }}"
                            alt="Mould and Moulding"
                            class="w-full h-full rounded-lg shadow-lg object-cover">
                    </div>
                </div>

            </div>

            
            <div class="py-8 md:py-12 px-6 ">
                <h2 class="text-3xl font-bold text-black">Jig & Fixture</h2>
                <p class="mt-4 text-gray-600">
                    Jigs and fixtures are essential tools in manufacturing and assembly, designed to hold and support workpieces while ensuring accurate and consistent production. These tools enhance efficiency by improving accuracy, reducing human error, and minimizing production time. At Banerjee Machines & Tools Co., we specialize in providing high-precision, custom solutions tailored to your specific needs.
                </p>


                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Custom-designed to meet client-specific requirements.
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Enhance manufacturing accuracy and reduce production time.
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Applicable for industries like automotive, aerospace, electronics, and more.

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F8F7F0] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Jig & Fixture</i></h2>
        <h1 class="text-2xl md:text-4xl text-black font-bold text-center mb-4">
            Our Jig & Fixture Services
        </h1>

        <p class="text-gray-600 mt-4">
            We offer a wide range of services for designing, manufacturing, and supplying jigs and fixtures that cater to various industries. Whether you need solutions for small or large-scale production, we have the capabilities to deliver high-quality, precision tools that ensure smooth and efficient operations</p>



        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mt-6 gap-16 md:gap-8">

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/jig fixture/Design.jpg') }}" class="w-full h-[350px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Design & Engineering
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/jig fixture/Production.jpg') }}" class="w-full h-[350px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Production
                    </p>
                </div>
            </div>

            <div class="relative group ">
                <img src="{{ asset('assets/image/Services/jig fixture/consult.jpg') }}" class="w-full h-[350px] rounded-lg shadow-lg object-cover">
                <div class="flex items-center justify-center mb-2 relative">
                    <p class="absolute translate-y-1 text-sm mt-2 bg-[#0B5BDB] text-white p-2 p-2 rounded hover:bg-blue-700 transition">
                        Consultation
                    </p>
                </div>
            </div>



        </div>
    </div>
</section>


<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Process Section</i></h2>
        <h1 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            How we Work
        </h1>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    1
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Consultation</h2>
                    <p>
                        We start by understanding your production needs and offer expert guidance to meet your requirements.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    2
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Design</h2>
                    <p>Our engineers create custom designs using advanced CAD software to ensure precision and efficiency.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    3
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Manufacturing</h2>
                    <p>High-precision machines are used to manufacture your jigs and fixtures to the highest standards.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    4
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Testing & Delivery</h2>
                    <p>We rigorously test each fixture for performance and quality, ensuring timely delivery to meet your production deadlines.</p>
                </div>
            </div>
        </div>

    </div>
</section>


<div class="bg-[#F8F7F0] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/Services/jig fixture/why-choose-us.jpg') }}"
                alt="Workers in industry"
                class="h-full w-full object-cover max-h-[450px] md:max-h-[400px] md:w-auto">
        </div>


        <div class="px-[5%]">
            <!-- <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Benefits </i></h2> -->
            <h1 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Why Choose Us
            </h1>
            <p class="text-gray-500 mt-4">
                With decades of experience and expertise in jig and fixture manufacturing, we are your trusted partner for all your tooling needs. Our commitment to quality, precision, and customer satisfaction sets us apart in the industry.
            </p>


            <div class="mt-6  space-y-2">
                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-400 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">30 years of expertise in jig and fixture manufacturing.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">

                    <i class="fas fa-check-circle text-blue-500  text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Custom solutions are designed to meet specific production requirements.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">

                    <i class="fas fa-check-circle text-blue-600 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">High precision and accuracy for superior performance.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700  text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Timely delivery and responsive customer support.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700  text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Expertise across industries like automotive, aerospace, electronics, and more.</h4>
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
            <h1 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Get in Touch for More Details
            </h1>
            <form action="{{ route('contact.store') }}" method="POST" class="mt-6 w-full ">
                @csrf
                @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
                @endif
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Name" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                    <input type="email" name="email" placeholder="Email Address" class="border  border-black outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                </div>
                <input type="hidden" value="Jigs And Fixture" name="service" id="" required>

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
    <h1 class="text-2xl md:text-4xl font-bold text-center mb-6">
        Don't see your question here? Drop us a line!
    </h1>
   
    <div class="space-y-4">
        @php
        $faqs = [
        ["question" => "What are jigs and fixtures used for?", "answer" => "Jigs and fixtures are tools used in manufacturing to hold and support workpieces during production, ensuring accuracy and consistency."],
        ["question" => "How do custom jigs and fixtures improve production efficiency?", "answer" => "Custom-designed tools help reduce production time, improve accuracy, and streamline manufacturing processes."],
        ["question" => "What industries benefit from your jig and fixture services?", "answer" => "We cater to industries like automotive, aerospace, electronics, and other manufacturing sectors that require precision tooling."],
        ["question" => "How do you ensure the quality and accuracy of your jigs and fixtures?", "answer" => "We use advanced machinery, rigorous testing procedures, and high-quality materials to ensure top-tier accuracy and durability."],
        ["question" => "Can you design jigs and fixtures for both small and large-scale production?", "answer" => "Yes, we design and manufacture jigs and fixtures suitable for both small and large-scale production, ensuring scalability and efficiency."]
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