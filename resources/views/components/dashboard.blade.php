<x-layout>
    <div class="flex bg-customDark-200">
        <!-- Dashboard Navigation (Left Column) -->
        <x-dashboard-nav />

        <!-- Main Content (Right Column) -->
        <div class="flex-1 ml-64"> <!-- Add ml-64 to offset the fixed sidebar width -->
            <section class="p-6 md:p-10 min-h-screen overflow-y-auto">
                <h1 class="text-3xl font-bold text-gray-100 mb-6">Dashboard</h1>
                <div class="bg-customDark-200 rounded-lg shadow-md p-6">
                    {{ $slot }}
                </div>
            </section>
        </div>
    </div>
</x-layout>
