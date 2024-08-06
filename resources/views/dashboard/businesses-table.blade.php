<div class="bg-customDark-200 shadow sm:rounded-lg h-[80vh]">
    @include('dashboard.dashboard-actions')
    <div class="w-[100%] nowrap overflow-auto h-[85%]">
        <table class="w-fit divide-y divide-customDark-100 relative">
            <thead class="bg-customDark-200 sticky top-0">
                <x-table-header-row :headers="[
                    '',
                    'Business',
                    'Business Type',
                    'Description',
                    'Services',
                    'Address',
                    'State',
                    'Zip code',
                    'Email',
                    'Phone',
                    'Website',
                    'Twitter',
                    'Facebook',
                    'Instagram',
                    'Working Hours',
                    'Delivery Options',
                    'Return policy',
                    'Featured',
                    'Ratings count',
                    'Average Rating',
                    'Avatar',
                    'Banner'
                ]" />
            </thead>
            <tbody class="bg-customDark-200 divide-y divide-customDark-100">
                @foreach ($businesses as $business)
                    <x-table-row :business="$business" />
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-white max-w-[80vw] mx-auto py-8"> {{ $businesses->links() }} </div>
</div>
