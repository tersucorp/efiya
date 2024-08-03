<x-layout>
    <div class="max-w-[80vw] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold mb-8 text-white">Business Registration</h2>

        <form method="POST" action="/business" class="space-y-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-input-field id="business_name" label="Business Name" required />
                <x-dropdown-field id="business_type" label="Business Type" :options="['service' => 'Service', 'product' => 'Product']" required />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="tax_id" label="Tax ID" nullable />
                <x-input-field id="reg_no" label="Registration Number" nullable />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="website_url" label="Website URL" type="url" nullable />
                <x-input-field id="email" label="Email" type="email" required />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="phone" label="Phone" type="tel" required />
                <x-input-field id="secondary_phone" label="Secondary Phone" type="tel" nullable />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-input-field id="house_number" label="House Number" nullable />
                <x-input-field id="street" label="Street" nullable />
                <x-input-field id="city" label="City" required />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-dropdown-field id="state" label="State" :options="['state1' => 'State 1', 'state2' => 'State 2']" required />
                <x-dropdown-field id="country" label="Country" :options="['country1' => 'Country 1', 'country2' => 'Country 2']" nullable />
                <x-input-field id="zip_code" label="ZIP Code" nullable />
            </div>

            <x-textarea-field id="description" label="Business Description" required />
            <x-textarea-field id="services" label="Services Offered" required />

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-input-field id="twitter" label="Twitter" nullable />
                <x-input-field id="facebook" label="Facebook" nullable />
                <x-input-field id="instagram" label="Instagram" nullable />
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="opening_hours" label="Opening Hours" type="time" nullable />
                <x-input-field id="closing_hours" label="Closing Hours" type="time" nullable />
            </div>

            <x-textarea-field id="delivery_options" label="Delivery Options" nullable />
            <x-textarea-field id="return_policy" label="Return Policy" nullable />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-input-field id="avatar" label="Avatar" type="file" nullable />
                <x-input-field id="banner" label="Banner" type="file" nullable />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-avatar-field id="avatar" label="Avatar" />
                <x-banner-field id="banner" label="Banner" />
            </div>

            <button type="submit" class="w-full bg-[#FDC936] text-[#000] px-6 py-3 rounded-full hover:bg-[#e0b22f] transition duration-300">Register Business</button>
        </form>
    </div>
</x-layout>
