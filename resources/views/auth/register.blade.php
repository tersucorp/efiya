<x-layout>
    <x-main-nav />
    <div class="flex max-w-[80vw] mx-auto">
        <!-- Left Column (Form) -->
        <div class="w-full h-full lg:w-1/2 xl:pr-36 md:py-16 text-white">
            <h2 class="text-3xl font-bold mb-8">Register</h2>
            <p class="mb-6">Have an account? <a href="/login" class="underline">Login</a></p>

            <form method="POST" action="/register" class="space-y-8">
                @csrf

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-8 md:space-y-0">
                    <x-input-field type="text" id="firstname" placeholder="" label="First Name" required/>
                    <x-input-field type="text" id="lastname" placeholder="" label="Last Name" required/>
                </div>

                <x-input-field id="email" type="email" placeholder="" label="Email address" required/>
                <x-input-field id="phone" type="tel" placeholder="" label="Phone number" required/>

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-8 md:space-y-0">
                    <x-input-field id="password" type="password" placeholder="" label="Password" required/>
                    <x-input-field id="password_confirmation" type="password" placeholder="" label="Confirm Password" required/>
                </div>

                <button type="submit" class="w-full bg-[#FDC936] text-[#000] px-6 py-3 rounded-full hover:bg-[#e0b22f] transition duration-300">Register</button>
            </form>

            <div class="mt-10">
                <p class="text-center text-sm text-gray-600 mb-4">Or Register with</p>
                <div class="flex justify-center space-x-4">
                    <button class="p-2 border border-gray-300 rounded-md"><img src="path-to-google-icon" alt="Google" class="w-6 h-6"></button>
                    <button class="p-2 border border-gray-300 rounded-md"><img src="path-to-facebook-icon" alt="Facebook" class="w-6 h-6"></button>
                    <button class="p-2 border border-gray-300 rounded-md"><img src="path-to-apple-icon" alt="Apple" class="w-6 h-6"></button>
                </div>
            </div>
        </div>

        <!-- Right Column (Blue background with text and logo) -->
        <div class="hidden w-1/2 bg-[#000] lg:flex flex-col justify-center items-center text-white p-12">
            <img src="path-to-your-logo" alt="Company Logo" class="w-24 h-24 mb-8">
            <h1 class="text-4xl font-bold mb-4">Welcome to Grafhi.</h1>
            <p class="text-center">Let's get you all set up so you can verify your personal account and begin setting up your profile.</p>
        </div>
    </div>
</x-layout>
