<x-layout>
    <div class="flex bg-customDark-200">
        <!-- Dashboard Navigation (Left Column) -->
        <x-dashboard-nav />

        <div class="flex-1 flex flex-col md:ml-64">
            <header class="text-white bg-customDark-200 p-3 border border-customDark-100 ">
                <p>Home > Dashboard</p>
                <div class="flex justify-between p-3">
                    <p class="text-4xl">Dashboard</p>
                    <div class="flex justify-center items center">
                        <span><img src="./alert.svg" class="w-6" /></span>
                        <span><img src="./message.svg" class="w-6" /></span>
                    </div>
                </div>
                <ul class="flex gap-2">
                    <li>page 1</li>
                    <li>page 2</li>
                    <li>page 3</li>
                    <li>page 4</li>
                </ul>
            </header>
            <main class="flex-1 p-4 w-[85vw] h-500px overflow-y-hidden">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layout>
