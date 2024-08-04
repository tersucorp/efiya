<x-layout>
    <div class="flex flex-col md:flex-row min-h-screen bg-customDark-200">
        <!-- Dashboard Navigation (Left Column) -->
        <x-dashboard-nav />

        <!-- Main Content (Right Column) -->
        <section class="flex-1 p-6 md:p-10 h-full overflow-x-scroll">
            <h1 class="text-3xl font-bold text-gray-100 mb-6">Dashboard</h1>
            <div class="bg-customDark-200 h-full rounded-lg shadow-md p-6">
                {{ $slot }}
            </div>
        </section>
    </div>
</x-layout>
