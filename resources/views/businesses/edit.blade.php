<x-layout>
    <x-businesses-nav />
    <div class="max-w-[80vw] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold mb-8 text-white">Edit Business: {{ $business->business_name }}</h2>

        <form method="POST" action="/businesses/{{ $business->id }}" class="space-y-8">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-input-field id="business_name" label="Business Name" value="{{ $business->business_name }}" required />
                <x-dropdown-field id="business_type" label="Business Type" :options="[
                    'service' => 'Service',
                    'product' => 'Product',
                    'plumber' => 'Plumber',
                    'cleaner' => 'Cleaner',
                    'carpenter' => 'Carpenter',
                    'fashion' => 'Fashion',
                    'service' => 'Service',
                    'office' => 'Office',
                    'mechanic' => 'Mechanic',
                    'electrician' => 'Electrician',
                    'tailor' => 'Tailor'
                ]"
                value="{{ $business->business_type }}" required />
                <div class="text-white">{{ $business->business_type }}</div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="tax_id" label="Tax ID" value="{{ $business->tax_id }}" nullable/>
                <x-input-field id="reg_no" label="Registration Number" value="{{ $business->reg_no }}" nullable />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="website_url" label="Website URL" type="url" value="{{ $business->website_url }}" nullable />
                <x-input-field id="email" label="Email" type="email" value="{{ $business->email }}" required />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="phone" label="Phone" type="tel" value="{{ $business->phone }}" required />
                <x-input-field id="secondary_phone" label="Secondary Phone" type="tel" value="{{ $business->secondary_phone }}" nullable />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-input-field id="house_number" label="House Number" value="{{ $business->house_number }}" nullable />
                <x-input-field id="street" label="Street" value="{{ $business->street }}" nullable />
                <x-input-field id="city" label="City" value="{{ $business->city }}" required />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-dropdown-field id="state" label="State"
                :options="[
                    'north dakota' => 'North Dakota',
                    'kansas' => 'Kansas',
                    'south dakota' => 'South Dakota',
                    'iowa' => 'Iowa',
                    'idaho' => 'Idaho',
                    'state1' => 'State1',
                    'florida' => 'Florida',
                    'texas' => 'Texas',
                    'virginia' => 'Virginia',
                    'california' => 'California',
                    'district of columbia' => 'District of Columbia',
                    'rhode island' => 'Rhode Island',
                    'new jersey' => 'New Jersey',
                    'oregon' => 'Oregon',
                    'mississippi' => 'Mississippi',
                    'west virginia' => 'West Virginia',
                    'new mexico' => 'New Mexico',
                    'tennessee' => 'Tennessee',
                    'maryland' => 'Maryland',
                    'nebraska' => 'Nebraska',
                    'kentucky' => 'Kentucky',
                    'illinois' => 'Illinois',
                    'ohio' => 'Ohio',
                    'vermont' => 'Vermont',
                    'new york' => 'New York',
                    'maine' => 'Maine',
                    'wisconsin' => 'Wisconsin'
                ]"
                value="{{ $business->state }}" required />
                <x-dropdown-field id="country" label="Country"
                :options="[
                    'tokelau' => 'Tokelau',
                    'british indian ocean territory (chagos archipelago)' => 'British Indian Ocean Territory (Chagos Archipelago)',
                    'djibouti' => 'Djibouti',
                    'benin' => 'Benin',
                    'wallis and futuna' => 'Wallis and Futuna',
                    'country1' => 'Country1',
                    'bahamas' => 'Bahamas',
                    'panama' => 'Panama',
                    'guernsey' => 'Guernsey',
                    'angola' => 'Angola',
                    'iceland' => 'Iceland',
                    'trinidad and tobago' => 'Trinidad and Tobago',
                    'saint helena' => 'Saint Helena',
                    'syrian arab republic' => 'Syrian Arab Republic',
                    'malta' => 'Malta',
                    'niue' => 'Niue',
                    'chile' => 'Chile',
                    'reunion' => 'Reunion',
                    'somalia' => 'Somalia',
                    'japan' => 'Japan',
                    'kyrgyz republic' => 'Kyrgyz Republic',
                    'turks and caicos islands' => 'Turks and Caicos Islands',
                    'morocco' => 'Morocco',
                    'israel' => 'Israel',
                    'south africa' => 'South Africa',
                    'nauru' => 'Nauru',
                    'sweden' => 'Sweden',
                    'nigeria' => 'Nigeria',
                    'hungary' => 'Hungary',
                    'guatemala' => 'Guatemala',
                    'cote d\'ivoire' => 'Cote d\'Ivoire',
                    'sao tome and principe' => 'Sao Tome and Principe',
                    'palestinian territories' => 'Palestinian Territories',
                    'seychelles' => 'Seychelles',
                    'monaco' => 'Monaco',
                    'india' => 'India',
                    'ethiopia' => 'Ethiopia',
                    'luxembourg' => 'Luxembourg',
                    'grenada' => 'Grenada',
                    'afghanistan' => 'Afghanistan',
                    'christmas island' => 'Christmas Island'
                ]"
                value="{{ $business->country }}" nullable />
                <x-input-field id="zip_code" label="ZIP Code" value="{{ $business->zip_code }}"  nullable />
            </div>

            <x-textarea-field id="description" label="Business Description" value="{{ $business->description }}" required />
            <x-textarea-field id="services" label="Services Offered" value="{{ $business->services }}" required />

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-input-field id="twitter" label="Twitter" nullable value="{{ $business->twitter }}" />
                <x-input-field id="facebook" label="Facebook" nullable value="{{ $business->facbook }}" />
                <x-input-field id="instagram" label="Instagram" nullable value="{{ $business->instagram }}" />
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-input-field id="opening_hours" label="Opening Hours" type="time" value="{{ date('H:i', strtotime($business->opening_hours)) }}" nullable />
                <x-input-field id="closing_hours" label="Closing Hours" type="time" value="{{ date('H:i', strtotime($business->closing_hours)) }}" nullable />
            </div>

            <x-textarea-field id="delivery_options" label="Delivery Options" value="{{ $business->delivery_options }}" nullable />
            <x-textarea-field id="return_policy" label="Return Policy" value="{{ $business->return_policy }}" nullable />


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-avatar-field id="avatar" label="Avatar" value="{{ $business->avatar }}"/>
                <x-banner-field id="banner" label="Banner" value="{{ $business->banner }}"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-32">
                <button type="submit" class="w-full bg-[#FDC936] text-customDark-200 px-6 py-3 rounded-full hover:bg-[#e0b22f] transition duration-300">Update</button>
                <a href="/users/dashboard/businesses" class="w-full bg-red-600 text-white text-center px-6 py-3 rounded-full hover:bg-red-400 transition duration-300">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
