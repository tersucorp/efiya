<nav class='text-white flex justify-between items-center w-[92%] mx-auto text-xl'>
    <div class="flex items-center mr-28">
        <img class="w-16" src="https://cdn-icons-png.flaticon.com/512/8948/8948758.png" alt="Efiya Icon">
        <a href="/" class="text-2xl ml-2 font-bold">Efiya</a>
    </div>
    <ul class="flex items-center gap-[4vw]">
        <li><x-navlink class="{{ request()->is('/') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/'>Home</x-navlink></li>
        <li><x-navlink class="{{ request()->is('/marketplace') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/marketplace'>Marketplace</x-navlink></li>
        <li><x-navlink class="{{ request()->is('/services') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/services'>Services</x-navlink></li>
        <li><x-navlink class="{{ request()->is('/about') ? 'text-[#FDC936]':'hover:text-gray-500'}}" href='/about'>About</x-navlink></li>
    </ul>
    <div>
        <a href="/signin" class="border-2 hover:bg-white hover:text-[#000] py-3 px-6 rounded-full">Signin</a>
        <a href="/signup" class="text-[#000] hover:text-white bg-white hover:bg-[#000] hover:border-2 py-3 px-6 rounded-full ml-3">Join us &#10230;</a>
    </div>
</nav>
