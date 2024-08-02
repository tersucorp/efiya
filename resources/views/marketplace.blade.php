<x-layout>
    <h1 class="text-white text-2xl sm:text-3xl md:text-4xl font-bold mb-6">Marketplace</h1>
    <div class="max-w-[80vw] mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($businesses as $business)
            <x-business-card
                :avatar="$business['avatar']"
                :businessName="$business['business_name']"
                :rating="$business['average_rating']"
                :services="json_encode($business['services'])"
                :businessId="$business['id']"
            />
        @endforeach
    </div>
</x-layout>
