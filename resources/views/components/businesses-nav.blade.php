<nav>
    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-black text-white p-4 hidden md:hidden">
        <!-- Close Button -->
        <div class="flex justify-between items-center mb-4">
            <x-logo />
            <button id="close-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Basic Links -->
        <div class="mb-4">
            <ul class="space-y-2">
                <li><x-navlink href='/' :active="request()->is('/')">Home</x-navlink></li>
                <li><x-navlink href='/businesses' :active="request()->is('businesses')">Marketplace</x-navlink></li>
                <li><x-navlink href='/services' :active="request()->is('services')">Services</x-navlink></li>
                <li><x-navlink href='/about' :active="request()->is('about')">About</x-navlink></li>
                <li><x-navlink href='/blog' :active="request()->is('blog')">Blog</x-navlink></li>
                <li><x-navlink href='/businesses/create'>Sell a service</x-navlink></li>
                <li><x-navlink href='/businesses/services'>Let's help your business</x-navlink></li>
                <li><x-navlink href='/help/faq'>faq</x-navlink></li>
                <li><x-navlink href="/help/contact-us">Contact Us</x-navlink></li>
            </ul>
        </div>

        <!-- Categories -->
        <div class="mb-4">
            <h2 class="font-bold text-lg mb-2">Categories</h2>
            <ul class="space-y-2">
                <li><a href="/category/accessories-computing-5227">Computers and Accessories</a></li>
                <li><a href="/category/phones-tablets-5294">Phones and Tablets</a></li>
                <li><a href="/category/electronics-5261">Electronics</a></li>
                <li><a href="/category/efiya-fashion-1259">Efiya Fashion</a></li>
                <li><a href="/category/home-kitchen-602">Home and Kitchen</a></li>
                <li><a href="/category/baby-kids-toys-8">Baby, Kids and Toys</a></li>
                <li><a href="/category/beauty-health-personal-care-4">Beauty, Health & Personal Care</a></li>
            </ul>
        </div>

        <!-- Signup and Login Buttons -->
        <div class="mt-auto">
            <a href="/signin" class="block w-full text-center bg-white text-black py-2 rounded mb-2">Login</a>
            <a href="/signup" class="block w-full text-center bg-black border-2 border-white text-white py-2 rounded">Signup</a>
        </div>
    </div>

    <!-- Top level nav (replacing the original first row) -->
    <section class='bg-black text-white w-full px-4 py-4'>
        <div class="max-w-[80vw] mx-auto flex justify-between items-center">
            <!-- Logo and Text (Left) -->
            <x-logo />

            <!-- Mobile Menu Button (Right on mobile, hidden on desktop) -->
            <button id="mobile-menu-button" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Desktop Navigation (Center, hidden on mobile) -->
            <ul class="hidden md:flex items-center space-x-6">
                <li><x-navlink href='/' :active="request()->is('/')">Home</x-navlink></li>
                <li><x-navlink href='/businesses' :active="request()->is('businesses')">Marketplace</x-navlink></li>
                <li><x-navlink href='/services' :active="request()->is('services')">Services</x-navlink></li>
                <li><x-navlink href='/about' :active="request()->is('about')">About</x-navlink></li>
                <li><x-navlink href='/blog' :active="request()->is('blog')">Blog</x-navlink></li>
            </ul>

            <!-- Desktop Buttons (Right, hidden on mobile) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="/signin" class="border-2 hover:bg-white hover:text-black py-2 px-4 rounded-full">Signin</a>
                <a href="/signup" class="hover:text-[#FDC936]">Join us &#10230;</a>
                <a href="/users/dashboard" class="hover:text-[#FDC936]">Dashboard</a>
            </div>
        </div>
    </section>

    <!-- Second row -->
    <section class="bg-white hidden md:block">
        <div class="max-w-[80vw] mx-auto px-4 flex justify-center items-center gap-6">
            <x-navlink href='/businesses/create' class="flex-none">Sell a service</x-navlink>
            <x-navlink href='/businesses/services' class="flex-none">Let's help your business</x-navlink>
            <div class="flex flex-grow items-center">
                <input
                    type="search"
                    name=""
                    id=""
                    placeholder="Search for services, professionals, and products"
                    class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none"
                />
                <button
                    type="submit"
                    class="bg-[#FDC936] text-[#000] px-4 py-3 hover:bg-[#e0b22f] transition duration-300 rounded-r-lg"
                >
                    <svg height="15" viewBox="0 0 15 15" width="15" xmlns="http://www.w3.org/2000/svg" aria-label="search" class="_964ee_2R_VR" name="search">
                        <path d="M6.222 0C2.8 0 0 2.794 0 6.216s2.8 6.222 6.222 6.222a6.174 6.174 0 0 0 3.538-1.121l3.364 3.357a1.091 1.091 0 0 0 1.555 0 1.095 1.095 0 0 0 0-1.549l-3.363-3.364a6.164 6.164 0 0 0 1.12-3.545C12.437 2.794 9.638 0 6.223 0zm0 2.19a4.007 4.007 0 0 1 4.018 4.026 4.007 4.007 0 0 1-4.018 4.025 4.008 4.008 0 0 1-4.025-4.025A4.008 4.008 0 0 1 6.222 2.19z" fill="#ffffff" fill-rule="nonzero"></path>
                    </svg>
                </button>
            </div>
            <x-navlink href='/help/faq' class="flex-none">faq</x-navlink>
            <x-navlink href="/help/contact-us" class="flex-none">Contact Us</x-navlink>
        </div>
    </section>



    <!-- Third row -->
    <section class="bg-[#F24636] text-white hidden md:block">
        <div class="max-w-[80vw] mx-auto px-4 py-2">
            <ul class="flex flex-wrap items-center justify-between">
                <li class="relative group">
                    <a href="#" class="block py-2">
                        All Categories
                        <svg class="w-4 h-4 ml-1 inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li><a href="/category/accessories-computing-5227" class="block py-2">Computers and Accessories</a></li>
                <li><a href="/category/phones-tablets-5294" class="block py-2">Phones and Tablets</a></li>
                <li><a href="/category/electronics-5261" class="block py-2">Electronics</a></li>
                <li><a href="/category/efiya-fashion-1259" class="block py-2">Efiya Fashion</a></li>
                <li><a href="/category/home-kitchen-602" class="block py-2">Home and Kitchen</a></li>
                <li><a href="/category/baby-kids-toys-8" class="block py-2">Baby, Kids and Toys</a></li>
                <li><a href="/category/beauty-health-personal-care-4" class="block py-2">Beauty, Health & Personal Care</a></li>
            </ul>
        </div>
    </section>
</nav>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    function toggleMobileMenu() {
        mobileMenu.classList.toggle('hidden');
    }

    mobileMenuButton.addEventListener('click', toggleMobileMenu);
    closeMenuButton.addEventListener('click', toggleMobileMenu);
</script>
