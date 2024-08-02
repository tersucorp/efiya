<nav class='bg-black text-white w-full px-4 py-4'>
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo and Text (Left) -->
        <div class="flex items-center">
            <img class="w-12 h-12" src="https://cdn-icons-png.flaticon.com/512/8948/8948758.png" alt="Efiya Icon">
            <a href="/" class="text-xl ml-2 font-bold">Efiya</a>
        </div>

        <!-- Mobile Menu Button (Right on mobile, hidden on desktop) -->
        <button id="mobile-menu-button" class="md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Desktop Navigation (Center, hidden on mobile) -->
        <ul class="hidden md:flex items-center space-x-6">
            <li><a class="{{ request()->is('/') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/'>Home</a></li>
            <li><a class="{{ request()->is('/marketplace') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/marketplace'>Marketplace</a></li>
            <li><a class="{{ request()->is('/services') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/services'>Services</a></li>
            <li><a class="{{ request()->is('/about') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/about'>About</a></li>
        </ul>

        <!-- Desktop Buttons (Right, hidden on mobile) -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="/signin" class="border-2 hover:bg-white hover:text-black py-2 px-4 rounded-full">Signin</a>
            <a href="/signup" class="hover:text-[#FDC936]">Join us &#10230;</a>
        </div>
    </div>

    <!-- Mobile Menu (Full screen, hidden by default) -->
    <div id="mobile-menu" class="fixed inset-0 bg-black z-50 hidden md:hidden">
        <div class="flex justify-between items-center p-4">
            <div class="flex items-center">
                <img class="w-12 h-12" src="https://cdn-icons-png.flaticon.com/512/8948/8948758.png" alt="Efiya Icon">
                <a href="/" class="text-xl ml-2 font-bold">Efiya</a>
            </div>
            <button id="close-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-center justify-center h-full space-y-8 text-2xl">
            <li><a href='/' class="{{ request()->is('/') ? 'text-[#FDC936]':'hover:text-gray-500'}}">Home</a></li>
            <li><a href='/marketplace' class="{{ request()->is('/marketplace') ? 'text-[#FDC936]':'hover:text-gray-500'}}">Marketplace</a></li>
            <li><a href='/services' class="{{ request()->is('/services') ? 'text-[#FDC936]':'hover:text-gray-500'}}">Services</a></li>
            <li><a href='/about' class="{{ request()->is('/about') ? 'text-[#FDC936]':'hover:text-gray-500'}}">About</a></li>
            <li><a href="/signin" class="border-2 hover:bg-white hover:text-black py-2 px-4 rounded-full">Signin</a></li>
            <li><a href="/signup" class="hover:text-[#FDC936]">Join us &#10230;</a></li>
        </ul>
    </div>
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
