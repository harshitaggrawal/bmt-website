<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font-Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .card {
        width: 100%;
        border-radius: 10px;
    }

    i.fa-star {
        color: orangered;
    }


    .card-body h2 {
        font-size: 1.2em;
        text-transform: capitalize;
    }

    /* Indicators */
    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: grey;
        width: 30px;
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 15px;
        height: 15px;
        background: grey;
        transition: all .2s ease;
    }


    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
        position: relative;
        background-color: rgba(255, 166, 0, 0.3);
        width: 30px;
        padding: 5px;
    }

    .owl-carousel .owl-nav button.owl-next:hover,
    .owl-carousel .owl-nav button.owl-prev:hover {
        background-color: grey;
    }

    .owl-carousel .owl-nav button.owl-next::before,
    .owl-carousel .owl-nav button.owl-prev::before {
        width: 100%;
        height: 100%;
        color: grey;
        /* inset: 0;
        position: absolute; */
    }

    .owl-carousel .owl-nav button.owl-next::before {
        content: '\f061';
        /*unicode for arrow-right*/
        font-family: 'Font Awesome 5 Free';
        /* Font family for Font Awesome */
        font-weight: 900;
        /* Font weight for the solid style (fas) */
        margin-right: 5px;
    }

    .owl-carousel .owl-nav button.owl-prev::before {
        content: '\f060';
        /*unicode for arrow-left*/
        font-family: 'Font Awesome 5 Free';
        /* Font family for Font Awesome */
        font-weight: 900;
        /* Font weight for the solid style (fas) */
        margin-right: 5px;
    }

    .owl-carousel .owl-nav .owl-next [aria-label="Next"],
    .owl-carousel .owl-nav .owl-prev [aria-label="Previous"] {
        visibility: hidden
            /*The Span element*/
    }

    /* 3D Spinner */
    .owl-carousel .item {
        text-align: center;
        padding: 10px;
        margin-bottom: 10px;
        opacity: .2;
        -webkit-transform: scale3d(0.8, 0.8, 1);
        transform: scale3d(0.8, 0.8, 1);
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .owl-carousel .owl-item.active.center .item {
        opacity: 1;
        -webkit-transform: scale3d(1.0, 1.0, 1);
        transform: scale3d(1.0, 1.0, 1);
    }
</style>

<div class="text-center w-full px-[9%] pt-8 pb-2 bg-[#f9f8f3]">
    <h2 class="text-[#FE6D00] font-[900] md:text-[24px] mb-[2px]"><i>Out Testimonials</i></h2>
    <h2 class="text-2xl md:text-4xl text-black font-bold mb-2">
        What They Say
    </h2>
</div>

<div class="owl-carousel owl-theme w-full px-[9%] py-8 bg-[#f9f8f3]">


    <div class="item item1">
        <div class="card  bg-white rounded-2xl shadow-md p-6 text-center">
            <!-- Profile Image -->
            <div class="flex justify-start gap-4">
                <div class="w-16 h-16 bg-black flex justify-center items-center rounded-full">
                    <i class="fa fa-user text-3xl mx-auto text-white" aria-hidden="true"></i>
                    <!-- <img src="{{ asset('assets/image/t1.png') }}" alt="Profile Image" class="w-full h-full object-cover rounded-full"> -->
                </div>
                <!-- Name & Role -->
                <div class="">
                    <h5 class="mt-3 font-semibold text-lg">Rajesh Mehta</h5>
                    <p class="text-gray-500 text-sm">CEO</p>
                </div>
            </div>
            <!-- Star Rating -->
            <div class="flex justify-end mt-1 text-yellow-500">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <!-- Title & Review -->
            <!-- <h6 class="mt-3 text-lg font-bold">It was a very good experience</h6> -->
            <p class="text-gray-600 text-sm mt-2">
                The precision and durability of the moulds provided by Banerjee Machine & Tools Co. have significantly improved our production efficiency. Their craftsmanship is truly outstanding!
            </p>
        </div>
    </div><!--[End of Item one]-->

    <div class="item item2">
        <div class="card  bg-white rounded-2xl shadow-md p-6 text-center">
            <!-- Profile Image -->
            <div class="flex justify-start gap-4">
            <div class="w-16 h-16 bg-black flex justify-center items-center rounded-full">
                    <i class="fa fa-user text-3xl mx-auto text-white" aria-hidden="true"></i>
                    <!-- <img src="{{ asset('assets/image/t1.png') }}" alt="Profile Image" class="w-full h-full object-cover rounded-full"> -->
                </div>
                <!-- Name & Role -->
                <div class="">
                    <h5 class="mt-3 font-semibold text-lg">Ankit Sharma –
                    </h5>
                    <p class="text-gray-500 text-sm">Production Head </p>
                </div>
            </div>
            <!-- Star Rating -->
            <div class="flex justify-end mt-1 text-yellow-500">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <!-- Title & Review -->
            <!-- <h6 class="mt-3 text-lg font-bold">It was a very good experience</h6> -->
            <p class="text-gray-600 text-sm mt-2">
                Their moulding process is efficient, and the end results are flawless. The team’s professionalism and commitment to quality set them apart from the rest.
            </p>
        </div>
    </div><!--[End of Item two]-->

    <div class="item item3">
        <div class="card  bg-white rounded-2xl shadow-md p-6 text-center">
            <!-- Profile Image -->
            <div class="flex justify-start gap-4">
            <div class="w-16 h-16 bg-black flex justify-center items-center rounded-full">
                    <i class="fa fa-user text-3xl mx-auto text-white" aria-hidden="true"></i>
                    <!-- <img src="{{ asset('assets/image/t1.png') }}" alt="Profile Image" class="w-full h-full object-cover rounded-full"> -->
                </div>
                <!-- Name & Role -->
                <div class="">
                    <h5 class="mt-3 font-semibold text-lg"> Vikram Nair
                    </h5>
                    <p class="text-gray-500 text-sm">Director</p>
                </div>
            </div>
            <!-- Star Rating -->
            <div class="flex justify-end mt-1 text-yellow-500">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <!-- Title & Review -->
            <!-- <h6 class="mt-3 text-lg font-bold">It was a very good experience</h6> -->
            <p class="text-gray-600 text-sm mt-2">
                Banerjee Machine & Tools Co. has been our go-to partner for CNC machining. Their precision and timely deliveries make them a valuable asset to our business.
            </p>
        </div>
    </div><!--[End of Item three]-->

    <div class="item item4">
        <div class="card  bg-white rounded-2xl shadow-md p-6 text-center">
            <!-- Profile Image -->
            <div class="flex justify-start gap-4">
            <div class="w-16 h-16 bg-black flex justify-center items-center rounded-full">
                    <i class="fa fa-user text-3xl mx-auto text-white" aria-hidden="true"></i>
                    <!-- <img src="{{ asset('assets/image/t1.png') }}" alt="Profile Image" class="w-full h-full object-cover rounded-full"> -->
                </div>
                <!-- Name & Role -->
                <div class="">
                    <h5 class="mt-3 font-semibold text-lg">Ramesh Iyer
                    </h5>
                    <p class="text-gray-500 text-sm">Plant Manager</p>
                </div>
            </div>
            <!-- Star Rating -->
            <div class="flex justify-end mt-1 text-yellow-500">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

          
            <p class="text-gray-600 text-sm mt-2">
                We’ve been sourcing industrial valves from Banerjee Machine & Tools Co. for years. Their products are durable, reliable, and built to withstand extreme conditions.
            </p>
        </div>
    </div>

    <div class="item item5">
        <div class="card  bg-white rounded-2xl shadow-md p-6 text-center">
            <!-- Profile Image -->
            <div class="flex justify-start gap-4">
            <div class="w-16 h-16 bg-black flex justify-center items-center rounded-full">
                    <i class="fa fa-user text-3xl mx-auto text-white" aria-hidden="true"></i>
                    <!-- <img src="{{ asset('assets/image/t1.png') }}" alt="Profile Image" class="w-full h-full object-cover rounded-full"> -->
                </div>
                <!-- Name & Role -->
                <div class="">
                    <h5 class="mt-3 font-semibold text-lg">Manish Patel
                    </h5>
                    <p class="text-gray-500 text-sm">Head of Operations</p>
                </div>
            </div>
            <!-- Star Rating -->
            <div class="flex justify-end mt-1 text-yellow-500">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <!-- Title & Review -->
            <!-- <h6 class="mt-3 text-lg font-bold">It was a very good experience</h6> -->
            <p class="text-gray-600 text-sm mt-2">
                Their jigs & fixtures have streamlined our manufacturing process, reducing setup time and increasing efficiency. A great investment for any production unit!
            </p>
        </div>
    </div>




</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    });
</script>