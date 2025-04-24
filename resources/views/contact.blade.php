@extends('layout.app')
@section('meta')
    <title>Contact Us - Banerjee Machine & Tools Co.</title>
    <meta name="description" content="Need help with industrial solutions? Contact BMT for expert support in Moulding, Machining, Valves, and Jig & Fixture design. Let's build something great.">
    <meta name="keywords" content="">
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[350px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/contactHome.png') }}"
            class="min-h-full w-full h-[350px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">
            <h1 class="text-2xl md:text-4xl text-white font-bold text-left mb-4">
                Contact Us
            </h1>

            <p class="text-white mt-4 font-semibold text-md"> 
                Get in touch with us for precision-engineered solutions. We are committed to delivering high-quality workmanship that meets your exact requirements. </p>
        </div>
    </div>

</div>

<div class="bg-white px-[9%] py-12 w-full">
    <div class="mx-auto py-10">
        <div class="w-full md:w-[60%]">
            <h2 class="text-3xl font-bold text-black mb-4 uppercase">Connect with  <span class="text-blue-600">US</span></h2>
            <p class="text-gray-600 mb-6">Visit our facility or reach out online to explore how our advanced manufacturing solutions can support your business. Let’s create excellence together!</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Left Section -->
            <div>

                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <i class="fas fa-phone text-blue-600 text-xl"></i>
                        <div class="flex flex-col gap-2">
                            <h1 class="font-semibold">Call Us Now</h1>
                            <a href="tel:+91 98300 83027" class="text-gray-700">+91 98300 83027</a>
                        </div>

                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fas fa-envelope text-blue-600 text-xl"></i>
                        <div class="flex flex-col gap-2">
                            <h1 class="font-semibold">Email</h1>
                            <a href="mailto:bmtco2012@gmail.com" class="text-gray-700">bmtco2012@gmail.com</a>
                        </div>

                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                        <div class="flex flex-col gap-2">
                            <h1 class="font-semibold">Office Address</h1>
                            <p class="text-gray-700">12/5, Bhattacharya Para Lane, <br> Kolkata - 700036 West Bengal</p>

                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fas fa-clock text-blue-600 text-xl"></i>
                        <div class="flex flex-col gap-2">
                            <h1 class="font-semibold">Working Hours</h1>
                            <p class="text-gray-700">Mon-Fri (8am - 6pm) <br> Sat-Sun (10am - 2pm)</p>

                        </div>

                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fas fa-phone-volume text-blue-600 text-xl"></i>
                        <div class="flex flex-col gap-2">
                            <h1 class="font-semibold">Emergency Contact (24 hours / 7 days )</h1>
                            <a href="tel:+91 98300 83027" class="text-gray-700">+91 98300 83027</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Section (Image Collage) -->
            <div class="p-[5%]">
                <img src="{{ asset('assets/image/contactPage.png') }}" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</div>

<div class="bg-[#F8F7F0] px-[9%] py-8 w-full">
    <div class="flex items-center flex-wrap align-center justify-around gap-4 md:gap-12">
        <h1 class="text-3xl text-black font-bold">Follow Us On</h1>


        <div class="flex space-x-4 mt-4 text-xl">
            <a href="#" class="text-white bg-orange-500 w-12 h-12 flex items-center justify-center rounded-full hover:bg-orange-600">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-white bg-orange-500 w-12 h-12 flex items-center justify-center rounded-full hover:bg-orange-600">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white bg-orange-500 w-12 h-12 flex items-center justify-center rounded-full hover:bg-orange-600">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white bg-orange-500 w-12 h-12 flex items-center justify-center rounded-full hover:bg-orange-600">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</div>

<div class="bg-black text-white px-[9%] py-8 w-full">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center justify-center gap-8">
        <div class="">
            <h2 class="text-2xl md:text-5xl font-bold mb-4">Have a project in mind? <br>Share your requirements</h2>
            <h2 class="text-gray-200 text-xl font-bold mb-6">our experts will craft the perfect solution! <br> Fill out the form now and take the first step towards precision, innovation, and success.</h2>
        </div>

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
            @endif

            <input type="text" name="name" placeholder="Name" class="border mt-4 outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <input type="email" name="email" placeholder="Email Address" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                <input type="text" name="phone" placeholder="Phone Number" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>

            </div>

            <div class="mt-4">
                <select name="service" class="border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required>
                    <option value="all">Service Interested In</option>
                    <option value="Moulds & Moulding">Moulds & Moulding</option>
                    <option value="Machining">Machining</option>
                    <option value="Valves">Valves</option>
                    <option value="Jig & Fixture">Jig & Fixture</option>
                </select>
            </div>

            <textarea name="message" placeholder="Write a Message" rows="4" class="mt-4 border outline-0 px-3 py-2 w-full rounded-lg bg-gray-100 text-black" required></textarea>

            <button type="submit" class="mt-4 bg-[#052250] text-white py-3 px-12 rounded hover:bg-blue-900">Submit Inquiry</button>
        </form>
    </div>
</div>

<div class="w-full h-[350px]">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29459.227798134943!2d88.3805691!3d22.6387406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89dbc4a75b6bb%3A0xa01ac1a82300f101!2s12%2F5%2C%20Bhattacharjee%20Para%20Ln%2C%20Joyshree%2C%20Baranagar%2C%20West%20Bengal%20700036!5e0!3m2!1sen!2sin!4v1739965351876!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="bg-[#FFFFFF] px-[9%] py-8 w-full">
    <div class="flex items-center flex-wrap align-center justify-around gap-4 ">
        <h1 class="text-2xl text-black font-bold">Schedule Your Consultation for Precision Engineering Solutions.</h1>
        <button  class="mt-4 bg-[#052250] text-white py-3 px-12 rounded hover:bg-blue-900">Make an Appointment</button>
      
    </div>
</div>

@endsection