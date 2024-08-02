<x-layout>
    <h1 class="text-white text-2xl sm:text-3xl md:text-4xl font-bold mb-6">Marketplace</h1>
    <div class="max-w-[80vw] mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($stores as $store)
            <x-professional-card
                :avatar="$store['profile_picture_url']"
                :firstname="$store['firstname']"
                :lastname="$store['lastname']"
                :rating="$store['rating']"
                :availability="$store['availability']"
                :skills="json_encode($store['skills'])"
                :storeId="$store['id']"
            />
        @endforeach
    </div>
</x-layout>
