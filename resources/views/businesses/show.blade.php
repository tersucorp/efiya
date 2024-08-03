<x-layout>
    <h1>Store</h1>
    <div class="bg-gray-100 min-h-screen">
        <!-- Banner with overlay -->
        <div class="relative h-screen md:h-[40rem] lg:h-[50rem]">
          <img src="{{ $business['banner']}}" alt="Store Banner" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

          <!-- Store information overlay -->
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-2">{{ $business['business_name'] }}</h1>
            <p class="text-sm md:text-base mb-2">
                {{ $business['house_number'] }} {{ $business['street'] }}, {{ $business['city'] }}, {{ $business['state']}} {{ $business['country'] }}</p>
            <p class="text-sm md:text-base mb-4 max-w-2xl">{{ $business['description']}}</p>

            <div class="flex flex-wrap gap-4 mb-4">
              <div>
                <h2 class="font-semibold">Services</h2>
                <ul class="list-disc list-inside">
                    @php
                        $servicesArray = explode(',', $business['services']);
                    @endphp

                    @foreach($servicesArray as $service)
                        <li>{{ trim($service) }}</li>
                    @endforeach
                </ul>
              </div>
              <div>
                <h2 class="font-semibold">Owner</h2>
                <p>John Doe</p>
              </div>
              <div>
                <h2 class="font-semibold">Contact</h2>
                <p>Phone: {{ $business['phone'] }}</p>
                <p>Email: {{ $business['email'] }}</p>
              </div>
            </div>

            <!-- Social Media and WhatsApp Icons -->
            <div class="flex space-x-4 mb-4">
              <a href="{{ $business['instagram']}}" target="_blank" class="text-white hover:text-blue-400 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
              </a>
              <a href="{{ $business['tiktok']}}" target="_blank" class="text-white hover:text-pink-400 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                </svg>
              </a>
              <a href="{{ $business['facebook']}}" target="_blank" class="text-white hover:text-blue-600 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
              <a href="{{ $business['twitter']}}" target="_blank" class="text-white hover:text-blue-400 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
              <a href="https://wa.me/{{ $business['phone']}}" target="_blank" class="text-white hover:text-green-400 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 0a12 12 0 1 1 0 24 12 12 0 0 1 0-24zm.14 4.5a7.34 7.34 0 0 0-6.46 10.82l-.42 2.64 2.68-.58a7.34 7.34 0 0 0 3.76.85 7.35 7.35 0 0 0 7.35-7.35 7.35 7.35 0 0 0-7.35-7.35zm4.26 10.45c-.16.45-.96.87-1.35.93-.35.05-.76.07-1.23-.08-.47-.15-1-.34-1.58-.67a8.57 8.57 0 0 1-2.89-2.57 3.78 3.78 0 0 1-.79-2 2.18 2.18 0 0 1 .69-1.64c.2-.23.46-.34.61-.34.15 0 .3 0 .43.02.14.01.32-.05.5.38.18.43.63 1.5.69 1.61s.08.23.02.36c-.07.12-.1.2-.2.31-.1.12-.21.26-.3.35-.1.1-.21.2-.09.39.12.19.53.8 1.14 1.3.78.64 1.44.84 1.64.93.2.1.32.08.44-.05.12-.13.51-.6.64-.8.13-.21.26-.17.44-.1.18.07 1.14.54 1.34.64.2.1.33.15.38.23.05.08.05.46-.11.9z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Product Grid -->
        <div class="container mx-auto px-4 py-8">
          <h2 class="text-2xl font-bold mb-6">Our Products</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Repeat this product card for each product -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <img src="path/to/product-image.jpg" alt="Product" class="w-full h-48 object-cover">
              <div class="p-4">
                <h3 class="font-semibold mb-2">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2">Short product description</p>
                <p class="text-lg font-bold">$19.99</p>
              </div>
            </div>
            <!-- Repeat product card end -->
          </div>
        </div>
      </div>
</x-layout>
