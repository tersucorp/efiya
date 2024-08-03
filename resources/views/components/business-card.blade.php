@props(['businessId', 'businessName', 'avatar', 'services', 'owner', 'rating', 'availability', ])

<div class="w-full max-w-sm mx-auto relative overflow-hidden shadow-lg group">
    <div class="flex flex-col">
        <!-- Profile Image -->
        <div class="h-96">
            <img src="{{ $avatar }}" alt="Profile Image" class="w-full h-full object-cover rounded-lg">
        </div>
        <!-- Name and services (visible by default) -->
        <div class="text-white p-4">
            <h3 class="text-xl font-bold">{{ $businessName }}</h3>
            <x-star-rating :rating="$rating" />
            <div class="mt-2">
                    <span class="text-xs sm:text-sm">{{ $services }}</span>
            </div>
        </div>
    </div>

    <!-- Overlay (visible on hover) -->
    <div class="absolute inset-0 bg-black bg-opacity-95 text-white p-4 sm:p-6 flex flex-col justify-between transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-in-out">
        <div>
            <h3 class="text-xl font-bold mb-2">{{ $businessName }}</h3>
            <x-star-rating :rating="$rating" />
            <div class="gap-2 my-6">
                <p><strong>Core Services</strong></p>

                <div class="mt-2">
                    <span class="text-xs sm:text-sm">{{ $services }}</span>
                </div>

            </div>
            <div>
                <strong>About me</strong>
                <p class="text-xs sm:text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <img src="{{ $avatar }}" alt="Avatar" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full">
            <a href="/businesses/{{ $businessId }}" class="text-sm sm:text-base text-yellow-400 hover:text-yellow-600 transition-colors duration-200">
                check me out &#10230;
            </a>
        </div>
    </div>
</div>
