@extends('layout.app')
@section('meta')
    <title>About Us - Banerjee Machine & Tools Co.</title>
    <meta name="description" content="At BMT, we specialize in high-quality Moulding, Machining, Valve solutions, and Jig & Fixture manufacturing. Learn more about us today.">
    <meta name="keywords" content="">
    <link rel="canonical" href="https://www.bmt.co.in/about" />
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[400px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/About Us/About-us-hero-banner.jpg') }}"
            class="min-h-full w-full h-[400px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">
            <h1 class="text-2xl md:text-4xl text-white font-bold text-left mb-4">
                About Us
            </h1>

            <p class="text-white mt-4 font-semibold text-md">
                Empower India's digital future through innovation, precision, and excellence in engineering solutions. </p>
        </div>
    </div>

</div>

<div class="bg-white px-[9%] py-12 w-full">
    <div class="mx-auto py-10">
        <div class="grid md:grid-cols-2 gap-8 items-center">

            <div>
                <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-left mb-[2px]"><i>Welcome To </i></h2>
                <h2 class="text-2xl md:text-4xl text-black font-bold text-left mb-2">
                    Banerjee Machine &
                    Tools Co.
                </h2>
                <h4 class="text-blue-500 py-2 font-bold">
                    Creating Opportunities, Empowering Lives, and Shaping India's Industrial Future.
                </h4>
                <p class="text-gray-500 mt-4">
                    With 30 years of expertise in the machining and manufacturing industry, we provide businesses with high-quality engineering solutions. By using modern CNC machines and other conventional machines, we specialise in mould and moulding services, machining, valve services, and jig & fixture solutions. Aiming to contribute to India's vision of a digital future, we work continuously to deliver projects that create jobs, shape lives, and propel the economy.
                    <br>
                    We're committed to serving both government and private sectors with dependable, cost-effective solutions. From the delicate artistry of industrial moulding to the robust demands of large-scale infrastructure projects, our team's dedication and technical proficiency ensure every task is executed with meticulous attention to detail and a steadfast commitment to excellence.
            </div>


            <div class="">
                <img src="{{ asset('assets/image/aboutpage.png') }}" alt="" class="h-full w-full md:w-[80%] md:h-[80%] object-cover">
            </div>
        </div>
    </div>
</div>


<section class="bg-[#F8F7F0] py-8 px-[9%] w-full">
    <div class="w-full  text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Our Expertise</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Our Expertise
        </h2>
        <p class="text-gray-600 mt-4">

            At Banerjee Machine & Tools Co., we understand that each industry has unique challenges. We combine our engineering expertise with modern technology to provide precise, reliable, and cost-effective products and services to our clients.

        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">

            <div class="bg-white px-4 text-center">
                <div class="py-4 w-full h-full" style="border-top: 6px solid lightgray;border-bottom: 6px solid lightgray;">
                    <i class="fas fa-rocket text-red-500 my-4 text-4xl"></i>
                    <h3 class="text-lg font-semibold m-4">Mould and Moulding</h3>
                    <p class="text-gray-600 mt-2">
                        Our mould and moulding solutions are engineered to meet the highest standards of precision. We specialise in crafting durable, intricate moulds for a wide range of industries, enhancing production processes, minimising waste, and maximising output quality. </p>
                </div>
            </div>


            <div class="bg-white px-4 text-center">
                <div class="py-4 w-full h-full" style="border-top: 6px solid lightgray;border-bottom: 6px solid lightgray;">
                    <i class="fas fa-cogs text-red-500 my-4 text-4xl"></i>
                    <h3 class="text-lg font-semibold m-4">Machining Services</h3>
                    <p class="text-gray-600 mt-2">
                        Our machining services produce components to exacting specifications, guaranteeing optimal performance and longevity. We combine advanced technology with seasoned expertise to achieve unparalleled accuracy. </p>
                </div>
            </div>


            <div class="bg-white px-4 text-center">
                <div class="py-4 w-full h-full" style="border-top: 6px solid lightgray;border-bottom: 6px solid lightgray;">
                    <i class="fas fa-industry text-red-500 my-4 text-4xl"></i>
                    <h3 class="text-lg font-semibold m-4">Valve Services</h3>
                    <p class="text-gray-600 mt-2">
                        We provide reliable valve manufacturing and maintenance services, designing valves for industrial applications that demand precision and durability. From design to installation, we adhere to stringent industry standards. </p>
                </div>
            </div>


            <div class="bg-white px-4 text-center">
                <div class="py-4 w-full h-full" style="border-top: 6px solid lightgray;border-bottom: 6px solid lightgray;">
                    <i class="fas fa-tools text-red-500 my-4 text-4xl"></i>
                    <h3 class="text-lg font-semibold m-4">Jig & Fixture Services</h3>
                    <p class="text-gray-600 mt-2">
                        Our jig and fixture services focus on enhancing manufacturing processes by providing the necessary support and alignment tools. These solutions ensure improved efficiency, consistency, and precision across a variety of industrial operations, reducing errors and maximising productivity. </p>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Core Values</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Core Values
        </h2>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">

            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    1
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Quality</h2>
                    <p>We don't just talk about quality; we live it. We source the finest materials and maintain rigorous quality control throughout every stage of production. Our goal is to consistently exceed your expectations.</p>
                </div>
            </div>


            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    2
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Innovation</h2>
                    <p>We're always seeking new and better ways to serve you. We invest in the latest technologies and foster a culture of creative problem-solving, ensuring we deliver the most effective engineering solutions.</p>
                </div>
            </div>


            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    3
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Customer Focus</h2>
                    <p>Your satisfaction is our priority. We tailor our services to your specific needs, working closely with you to ensure projects are completed on time, within budget, and to the highest standards. We believe in building lasting partnerships through exceptional service.</p>
                </div>
            </div>


            <div class="flex gap-4 justify-start">
                <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg font-bold px-4 py-2">
                    4
                </div>
                <div class="text-black text-left">
                    <h2 class="font-bold">Sustainability</h2>
                    <p>We're committed to environmentally responsible practices. By optimising our processes and embracing green technologies, we strive to contribute positively to our environment and community.</p>
                </div>
            </div>
        </div>

        <div class="mt-12">
            <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Certifications and Awards</i></h2>

            <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
                Certifications and Awards
            </h2>
        </div>



    </div>
</section>


<div class="relative px-[10%] p-6 bg-[#f7f6f0] grid grid-cols-4 md:grid-cols-4 gap-6">

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


<section class="bg-[#FFFFFF] py-8 px-[9%] w-full">
    <div class="w-full text-center ">

        <h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>Facilities and Technology</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-2">
            Facilities and Technology
        </h2>
        <p class="text-gray-600 mt-4">
            We've invested in the best manufacturing facilities and modern technology to make sure we can provide our customers with truly accurate and reliable solutions.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            <div class="bg-[#f8f7f0] text-black rounded">
                <img src="{{ asset('assets/image/About Us/facility/f1.jpg') }}" class="w-full max-h-[250px] object-cover" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Advanced Machining Center
                </h2>
                <p class="px-4">
                    Our machining center is the heart of our precision work. We use advanced CNC machines that allow us to create even the most intricate components with remarkable accuracy, ensuring a perfect fit and finish every time. </p>
            </div>

            <div class="bg-[#f8f7f0] text-black rounded">
                <img src="{{ asset('assets/image/About Us/facility/f2.jpg') }}" class="w-full min-h-[250px] object-cover" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Robust Moulding Workshop
                </h2>
                <p class="px-4">

                    Our moulding workshop is equipped with the latest technology, enabling us to produce high-quality moulds for diverse applications. We focus on efficiency and repeatability so our clients can rely on consistent, top-tier results.
                </p>

            </div>

            <div class="bg-[#f8f7f0] text-black rounded">
                <img src="{{ asset('assets/image/About Us/facility/f3.jpg') }}" class="w-full max-h-[250px] object-cover" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Valve Manufacturing Lab
                </h2>
                <p class="px-4">

                    We've established a dedicated valve manufacturing lab, furnished with specialised tools and machinery. This allows us to craft durable and dependable valve solutions tailored to the specific needs of various industries, guaranteeing long-lasting performance. </p>

            </div>

            <div class="bg-[#f8f7f0] text-black rounded">
                <img src="{{ asset('assets/image/About Us/facility/f4.jpg') }}" class="w-full max-h-[250px] object-cover" alt="">
                <h2 class="px-4 py-2 font-bold ">
                    Jig and Fixture Setup
                </h2>
                <p class="px-4">

                    Our jig and fixture workshop is where we ensure precision and consistency across all projects. With cutting-edge equipment and expert craftsmanship, we design and fabricate tools that not only optimise production but also significantly enhance the overall quality of our products.
                </p>
            </div>

        </div>
    </div>
</section>




<div class="bg-black text-white px-[9%] py-8 w-full">
    <div class="flex items-center flex-wrap align-center justify-around gap-4 ">
        <h2 class="text-3xl  font-bold">Partner with us to shape the future of engineering excellence. </h2>
        <a href="/contact" class="mt-4 hover:bg-[#052250] text-white py-3 px-12 rounded bg-blue-900">Contact Us</a>

    </div>
</div>

@endsection