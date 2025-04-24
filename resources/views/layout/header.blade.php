<header class="fixed w-full top-2 md:top-6 z-50">
    <div class="bg-[#FFFFFF] rounded-xl max-w-[100%] mx-[5%] shadow-md px-2 sm:px-4 lg:px-[5%]">
        <div class="flex justify-between items-center py-3">

            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/image/logo.png') }}" alt="Logo" class=" h-6 md:h-8 w-auto">
            </a>

            <nav class="hidden md:flex space-x-6">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                 <!-- Services Dropdown -->
                 <div class="relative">
                    <a href="#" class="nav-link {{( request()->is('services') || request()->is(route('machines')) || request()->is(route('moulds-Moulding')) || request()->is(route('jig-&-fixture')) || request()->is(route('valves')) ) ? 'active' : '' }}">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu hidden absolute left-0 bg-[#f0f0f0] shadow-md py-2 w-48 rounded-lg z-10">
                        <!-- <a href="/services" class="block px-4 py-2 text-gray-700 hover:text-blue-500">Services Overview</a> -->
                        <a href="{{ route('moulds-Moulding') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-500">Moulds & Moulding</a>
                        <a href="{{route('machines')}}" class="block px-4 py-2 text-gray-700 hover:text-blue-500">Machines</a>
                        <a href="{{ route('valves') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-500">Valves</a>
                        <a href="{{ route('jig-&-fixture') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-500">Jig & Fixture</a>

                    </div>
                </div>

                <a href="/products" class="nav-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
                <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About Us</a>               
                <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact Us</a>
                <a href="/blog" class="nav-link {{ request()->is('blog') || request()->is('blog/*') ? 'active' : '' }}">Industry News</a>

            </nav>

            <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
                <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-t border-[#f0f0f0] flex flex-col space-y-2 pb-4 pt-1">
            <a href="/" class="nav-link block {{ request()->is('/') ? 'active' : '' }}">Home</a>
              <!-- Mobile Dropdown for Services -->
              <div class="relative">
                <a href="#" class="nav-link block {{( request()->is('services') || request()->is(route('machines')) || request()->is( route('moulds-Moulding') ) || request()->is(route('jig-&-fixture')) || request()->is(route('valves')) ) ? 'active' : '' }}">
                    Services <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <div class="mobile-dropdown-menu hidden flex-col pb-1 pt-1">
                    <!-- <a href="/services" class="px-4 py-2 nav-link block">Services Overview</a> -->
                    <a href="{{ route('moulds-Moulding') }}" class="px-4 py-2 nav-link block">Moulds & Moulding</a>
                    <a href="{{route('machines')}}" class="nav-link px-4 py-2 block">Machines</a>
                    <a href="{{ route('valves') }}" class="nav-link px-4 py-2 block">Valves</a>
                    <a href="{{ route('jig-&-fixture') }}" class="px-4 py-2 nav-link block">Jig & Fixture</a>
                </div>
            </div>

            <a href="/products" class="nav-link block {{ request()->is('products') ? 'active' : '' }}">Products</a>
           
            <a href="/about" class="nav-link block {{ request()->is('about') ? 'active' : '' }}">About Us</a>
            <a href="/contact" class="nav-link block {{ request()->is('contact') ? 'active' : '' }}">Contact Us</a>
           <a href="/blog" class="nav-link block {{ request()->is('blog') ? 'active' : '' }}">Industry News</a>
        </div>
    </div>
</header>


<style>
    /* For desktop - show dropdown on hover */
nav .relative:hover .dropdown-menu {
    display: block;
}

/* Hide dropdown initially */
.dropdown-menu {
    display: none;
}

/* For mobile - hide dropdown initially */
.mobile-dropdown-menu {
    display: none;
}

/* Show the dropdown menu when mobile item is clicked */
.mobile-dropdown-menu.show {
    display: flex;
    flex-direction: column;
    padding: 1rem;
}

/* Dropdown item hover effect */
.dropdown-menu a:hover,
.mobile-dropdown-menu a:hover {
    color: #2563EB;
    background-color: #f0f0f0;
}
/* General style for nav-link */
.nav-link {
    position: relative;
    color: #4B5563;
    font-weight: 500;
    transition: color 0.3s ease;
}

/* Hover effect for nav-link */
.nav-link:hover {
    color: #2563EB;;
}

/* Active nav-link with line below */
.nav-link.active {
    color: #2563EB;; /* active link color */
}

.nav-link.active::before {
    content: "";
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #2563EB; /* The color of the line */
}

/* For mobile dropdown items */
.mobile-dropdown-menu a:hover,
.dropdown-menu a:hover {
    color: #2563EB;
    background-color: #f0f0f0;
}



</style>

<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
    let menu = document.getElementById('mobile-menu');
    let hamburger = document.getElementById('hamburger-icon');
    let close = document.getElementById('close-icon');

    menu.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    close.classList.toggle('hidden');
});

// Toggle the dropdown on mobile view when "Services" is clicked
document.querySelectorAll('.nav-link').forEach(link => {
    if (link.textContent.trim() === 'Services') {
        link.addEventListener('click', function(e) {
            const dropdownMenu = link.nextElementSibling; // Get the mobile dropdown menu
            if (dropdownMenu) {
                dropdownMenu.classList.toggle('show');
            }
        });
    }
});

</script>