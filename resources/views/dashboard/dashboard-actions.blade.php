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
