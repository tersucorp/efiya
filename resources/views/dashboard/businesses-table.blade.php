<div class="bg-customDark-200 shadow overflow-x-scroll sm:rounded-lg min-h-[70vh]">
    <div class="px-4 py-5 sm:px-6">
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <nav class="flex space-x-4" aria-label="Tabs">
                    <a href="#" class="bg-customDark-100 text-white px-3 py-2 font-medium text-sm rounded-md">All</a>
                    <a href="#" class="text-gray-200 hover:text-white px-3 py-2 font-medium text-sm rounded-md">Featured</a>
                    <a href="#" class="text-gray-200 hover:text-white px-3 py-2 font-medium text-sm rounded-md">New</a>
                </nav>

                <div class="flex flex-1 space-x-2 max-w-[70%] sm:w-auto">
                    <select class="block w-full pl-3 pr-10 py-2 text-sm mr-2 text-white bg-customDark-100 border-customDark-100 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md">
                        <option>Filter by...</option>
                        <option>Business Name</option>
                        <option>Business Type</option>
                        <option>City</option>
                        <option>State</option>
                    </select>
                    <select class="block w-full pl-3 pr-10 py-2 text-sm text-white bg-customDark-100 border-customDark-100 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md">
                        <option>Sort by...</option>
                        <option>Business Name</option>
                        <option>Date Created</option>
                        <option>City</option>
                        <option>State</option>
                    </select>
                    <div class="flex items-center whitespace-nowrap mr-2">
                        <input id="ascending" name="ascending" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-customDark-100 rounded bg-customDark-100">
                        <label for="ascending" class="ml-2 block text-sm text-white">
                            ASC
                        </label>
                    </div>
                    @include('form-elements.display-fields')
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-customDark-100 rounded-md shadow-sm text-sm font-medium text-white bg-customDark-100 hover:bg-customDark-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-customDark-100 rounded-md shadow-sm text-sm font-medium text-white bg-customDark-100 hover:bg-customDark-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="min-h-full">
        <table class="min-w-full min-h-full divide-y divide-customDark-100">
            <thead class="bg-customDark-200">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        Business
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        Business Type
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        City
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        State
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        Zip code
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                        Phone
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-customDark-200 divide-y divide-customDark-100">
                @foreach ($businesses as $business)
                    <x-business-row :business="$business" />
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-white max-w-[80vw] mx-auto py-8"> {{ $businesses->links() }} </div>

<script>
    const button = document.getElementById('display-fields-menu-button');
    const dropdown = document.getElementById('dropdown-menu');
    const closeButton = document.getElementById('close-button');

    function openDropdown() {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
    }

    function closeDropdown() {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
    }

    button.addEventListener('click', (event) => {
        event.stopPropagation();
        if (dropdown.classList.contains('hidden')) {
            openDropdown();
        } else {
            closeDropdown();
        }
    });

    closeButton.addEventListener('click', closeDropdown);

    document.addEventListener('click', (event) => {
        if (!dropdown.contains(event.target) && event.target !== button) {
            closeDropdown();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeDropdown();
        }
    });
</script>
