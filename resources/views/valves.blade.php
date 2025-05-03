@extends('layout.app')
@section('meta')
<title>Valve Manufacturing Company in Kolkata - BMT</title>
<meta name="description" content="Banerjee Machines & Tools - The most reliable Valve Manufacturer in Kolkata. Get precision-crafted valves for industrial applications. Contact us today.">
<meta name="keywords" content="Valve Manufacturer in Kolkata, Valve Manufacturing Company in Kolkata">
<link rel="canonical" href="https://www.bmt.co.in/valve-manufacturing-company-kolkata" />
@endsection
@section('content')

<div class="bg-white">
    <div class="relative w-full h-[550px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/valvesHome.png') }}" class="min-h-full w-full h-[550px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">


            <h1 class="text-xl md:text-3xl text-white font-bold text-left mt-8 mb-4">
                Precision-Engineered Valves for Every Industry
            </h1>

            <p class="text-white mt-4 font-semibold text-md">
                Banerjee Machines & Tools Co. is a leading valve manufacturer in Kolkata, delivering high-performance, precision-engineered industrial valves. With 30 years of expertise, we craft CNC-machined and conventionally manufactured valves that meet top industry standards. Our focus on quality, innovation, and customer satisfaction ensures reliable solutions for diverse applications.
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

            <div class="flex w-full justify-center min-h-[450px] align-center bg-blue-600 relative">
                <div class="absolute flex inset-0 opacity-100">
                    <div class="basis-3/4 bg-blue-600"></div>
                    <div class="block basis-1/4 bg-white"></div>
                </div>

                <div class="relative flex  shadow-xl rounded-xl bg-white my-16 ml-[5%] md:ml-[18%] mr-[5%]">

                    <div class="">
                        <img src="{{ asset('assets/image/valves1.png') }}"
                            alt="Mould and Moulding"
                            class="w-full h-full rounded-lg shadow-lg object-cover">
                    </div>
                </div>

            </div>

            <div class="py-8 px-6 ">
                <h2 class="text-2xl font-bold text-black"> High-Performance Valves for Industrial Applications</h2>
                <p class="mt-4 text-gray-600">
                    Valves are essential components used to control, regulate, and direct the flow of liquids, gases, and slurries across various industries. They function by opening, closing, or partially obstructing passageways to ensure precise flow management, pressure control, and system safety. Available in multiple types, including gate, globe, ball, and check valves, each variant is designed to meet specific operational requirements.
                    <br>At Banerjee Machines & Tools Co., we specialise in manufacturing premium-quality industrial valves that offer exceptional performance in demanding environments.
                </p>

                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Custom-designed valves for specific applications and requirements.
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Enhance system reliability and control over fluid and gas flow.
                    </li>
                    <li class="flex items-center text-black bg-gray-100 py-1 px-4 font-bold rounded">
                        <i class="fa fa-circle mr-2 text-[6px]" aria-hidden="true"></i> Applicable for industries like oil & gas, power, chemical, and more.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#F8F7F0] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Valves</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-4">
            Expert Valve Manufacturing Solutions
        </h2>

        <p class="text-gray-600 mt-4">

            At Banerjee Machines & Tools Co., we specialise in the production of precisely engineered valves, providing reliable and high-performance solutions for industrial applications. Our advanced CNC machining, strict quality control, and premium material selection ensure that every valve meets the highest industry standards. Designed for efficiency and durability, our valves serve multiple industries, including oil and gas, power generation, chemical processing, and water purification.
        </p>

        <h3 class="my-3 mt-4 text-left text-blue-600 text-xl font-bold">Application</h3>

        <div class=" space-y-1">


            <div class="flex items-center justify-start space-x-2">
                <i class="fas fa-check text-blue-400 text-md"></i>
                <div>
                    <p class="text-md">
                        <strong>Industrial Flow Control</strong>—Ensuring smooth and efficient regulation of liquids and gases.
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <i class="fas fa-check text-blue-400 text-md"></i>
                <div>
                    <p class="text-md">
                        <strong>High-Pressure Systems</strong>—Reliable performance in extreme pressure environments.
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <i class="fas fa-check text-blue-400 text-md"></i>
                <div>
                    <p class="text-md">
                        <strong>Corrosive Environments</strong>—Resistant to rust, wear, and chemical exposure for longevity.
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <i class="fas fa-check text-blue-400 text-md"></i>
                <div>
                    <p class="text-md">
                        <strong>Temperature-Resistant Operations</strong>—Engineered to function optimally in extreme heat or cold.
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-start space-x-2">
                <i class="fas fa-check text-blue-400 text-md"></i>
                <div>
                    <p class="text-md">
                        <strong>Custom Engineering Solutions</strong>—Designed for specific industry needs and operational efficiency.
                    </p>
                </div>
            </div>


        </div>

    </div>
</section>


<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">
        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>With Specification</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-6">
            Our Valve Categories
        </h2>



        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mt-6 gap-8">

            <div class=" group ">
                <img src="{{ asset('assets/image/Services/valve/v1.jpg') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">


                    <h2 class="text-black font-bold text-xl">Forged Steel Gate Valve</h2>
                    <p class="text-left text-gray-500">
                        Designed for efficient flow control in high-pressure environments, ensuring durability and performance even under extreme conditions.

                    </p>
                    <p><strong>Pressure Rating: </strong> Up to 2500 PSI</p>
                    <p><strong>Sizes: </strong> ½” to 24”</p>
                    <p><strong>Materials: </strong> Forged Carbon Steel, Stainless Steel, Alloy Steel</p>

                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Forged Steel Gate Valve Specs</a>
                    </div>
                </div>
            </div>

            <div class=" group ">
                <img src="{{ asset('assets/image/v2.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Globe Valve</h2>
                    <p class="text-left text-gray-500">
                        Provides precise throttling control to maintain consistent flow in various industrial applications, ideal for regulating flow at varying rates.

                    </p>
                    <p><strong>Pressure rating: </strong> 150 PSI to 4500 PSI</p>
                    <p><strong>Sizes: </strong> ½” to 36”</p>
                    <p><strong>Materials: </strong> Cast Iron, Stainless Steel, Bronze</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Globe Valve Specs</a>
                    </div>
                </div>
            </div>


            <div class=" group ">
                <img src="{{ asset('assets/image/v3.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Ball Valve</h2>
                    <p class="text-left text-gray-500">
                        Ensures tight sealing and smooth operation, making it ideal for fluid regulation in systems that demand precision and reliability in flow control.

                    </p>
                    <p><strong>Pressure rating: </strong> Up to 6000 PSI</p>
                    <p><strong>Sizes: </strong> ¼” to 48”</p>
                    <p><strong>Materials: </strong> Carbon Steel, Brass, PTFE, Stainless Steel</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Ball Valve Specs</a>
                    </div>
                </div>
            </div>

            <div class=" group ">
                <img src="{{ asset('assets/image/v4.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Check Valve</h2>
                    <p class="text-left text-gray-500">
                        Prevents backflow, maintaining directional flow control in piping systems by ensuring fluid only moves in one direction.

                    </p>
                    <p><strong>Pressure rating: </strong>200 PSI to 5000 PSI</p>
                    <p><strong>Sizes: </strong>½” to 42”.</p>
                    <p><strong>Materials: </strong> Cast Steel, Bronze, Alloy Steel</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Check Valve specs</a>
                    </div>
                </div>
            </div>

            <div class=" group ">
                <img src="{{ asset('assets/image/v5.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-cover">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Butterfly Valve</h2>
                    <p class="text-left text-gray-500">
                        A lightweight, cost-effective solution, perfect for controlling large flow systems in industries where space and cost-efficiency are important.

                    </p>
                    <p><strong>Pressure rating: </strong> 150 PSI to 900 PSI</p>
                    <p><strong>Sizes: </strong> 2” to 120”</p>
                    <p><strong>Materials: </strong> Ductile Iron, Stainless Steel, Aluminium Bronze</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Butterfly Valve specs</a>
                    </div>
                </div>
            </div>

            <div class=" group ">
                <img src="{{ asset('assets/image/v6.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Plug Valve</h2>
                    <p class="text-left text-gray-500">
                        Designed for fast shut-off in demanding conditions, offering exceptional reliability and ease of operation in systems that require a quick response.

                    </p>
                    <p><strong>Pressure rating: </strong> 150 PSI to 6000 PSI</p>
                    <p><strong>Sizes: </strong> ½” to 36”</p>
                    <p><strong>Materials: </strong> Cast Iron, Stainless Steel, PTFE-Coated Metal</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Plug Valve specs</a>
                    </div>
                </div>
            </div>


            <div class=" group ">
                <img src="{{ asset('assets/image/v7.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Pressure Relief Valve</h2>
                    <p class="text-left text-gray-500">
                        Prevents system overpressure and ensures the safety and efficiency of your equipment, automatically releasing pressure when it exceeds safe limits.

                    </p>
                    <p><strong>Pressure rating: </strong> 150 PSI to 5000 PSI</p>
                    <p><strong>Sizes: </strong> ½” to 24”</p>
                    <p><strong>Materials: </strong> Stainless Steel, Brass, Carbon Steel</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Pressure Relief Valve specs</a>
                    </div>
                </div>
            </div>


            <div class=" group ">
                <img src="{{ asset('assets/image/v8.png') }}" class="w-full h-[250px] rounded-lg border border-gray-500 border-2 object-contain">
                <div class="text-left mt-4 space-y-2">
                    <h2 class="text-black font-bold text-xl">Diaphragm Valve</h2>
                    <p class="text-left text-gray-500">
                        Perfect for controlling highly corrosive or viscous fluids, offering durability and precise control in environments where chemical compatibility is critical.

                    </p>
                    <p><strong>Pressure rating: </strong> 50 PSI to 1500 PSI</p>
                    <p><strong>Sizes: </strong> ½” to 48”.</p>
                    <p><strong>Materials: </strong> PTFE, Cast Iron, Stainless Steel.</p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 text-md rounded">View Diaphragm Valve specs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F8F7F0] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Process Section</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Our Work Process
        </h2>

        <p class="text-gray-600 mt-4">
            We follow a structured and quality-driven work process to deliver world-class valve solutions: </p>
    </div>
</section>
<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    1
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Design & Engineering</h2>
                    <p>Understanding your requirements and creating innovative designs.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    2
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Material Selection & Machining</h2>
                    <p>Using high-grade materials and precision CNC machining.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    3
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Quality Testing & Inspection</h2>
                    <p>Conducting rigorous tests to ensure durability and efficiency.</p>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    4
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Final Assembly & Delivery</h2>
                    <p>Ensuring timely delivery with a focus on excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="bg-[#F8F7F0] text-gray-800 w-full px-[9%]">
    <section class="py-12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

        <div class="relative h-full">
            <img src="{{ asset('assets/image/Services/jig fixture/why-choose-us.jpg')  }}"
                alt="Valves in industrial applications"
                class="h-full w-full object-cover max-h-[450px] md:max-h-[400px] md:w-auto">
        </div>

        <div class="px-[5%]">
            <!-- <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Our Benefits </i></h2> -->
            <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                Why Choose Us
            </h2>
            <p class="text-gray-500 mt-4">
                With decades of experience in valve manufacturing and servicing, we are your trusted partner for all your valve needs. Our precision engineering, quality control, and industry expertise make us the leading choice for valve solutions.
            </p>

            <div class="mt-6 space-y-2">
                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-400 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Over 30 years of experience in valve manufacturing and servicing.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-500 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Custom valve solutions designed for specific industrial applications.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-600 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">High-quality valves with superior performance and reliability.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Efficient valve servicing to ensure optimal operation and longevity.</h4>
                    </div>
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <i class="fas fa-check-circle text-blue-700 text-xl md:text-2xl"></i>
                    <div>
                        <h4 class="font-bold text-md">Expertise across industries such as oil & gas, chemical, power, and more.</h4>
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
                <input type="hidden" value="Valves" name="service" id="" required>

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
        ["question" => "What types of valves do you manufacture?", "answer" => "We manufacture gate valves, globe valves, ball valves, check valves, and custom-engineered valves based on client requirements."],
        ["question" => "What industries do you serve?", "answer" => "Our valves are used in oil & gas, chemical processing, water treatment, power plants, and various industrial applications."],
        ["question" => "Do you offer custom valve solutions?", "answer" => "Yes, we provide custom-engineered valve solutions to meet specific industry needs."],
        ["question" => "How do you ensure valve quality?", "answer" => "We follow a strict quality control process, including CNC precision machining and rigorous performance testing."],
        ["question" => "How can I place an order?", "answer" => "You can contact us directly through our website, phone, or email to discuss your requirements."]
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