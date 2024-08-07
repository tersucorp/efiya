<x-layout>
    <x-main-nav />
    <div class="flex max-w-[80vw] mx-auto">
        <!-- Left Column (Form) -->
        <div class="w-full h-full lg:w-1/2 xl:pr-36 md:py-16 text-white">
            <h2 class="text-3xl font-bold mb-8">Login</h2>
            <p class="mb-6">Don't have an account? <a href="/register" class="underline">Login</a></p>

            <form method="POST" action="/login" class="space-y-8">
                @csrf

                <x-input-field id="email" name="email" type="email" placeholder="" label="Email address" required/>
                <x-input-field id="password" name="password" type="password" placeholder="" label="Password" required/>

                <button type="submit" class="w-full bg-[#FDC936] text-[#000] px-6 py-3 rounded-full hover:bg-[#e0b22f] transition duration-300">Login</button>
            </form>

            <div class="mt-10">
                <p class="text-center text-sm text-gray-600 mb-4">Or sign up with</p>
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
