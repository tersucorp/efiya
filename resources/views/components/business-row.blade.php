@props(['business'])

<tr class="hover:bg-customDark-100">
    <td class="px-6 py-4 whitespace-nowrap">
        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['business_name'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['business_type'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['description'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['services'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['house_number'] }} {{ $business['street'] }}, {{ $business['city'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['state'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['zip_code'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['email'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['phone'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['website_url'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['twitter'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['facebook'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['instagram'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['opening_hours'] }} - {{ $business['closing_hours'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['delivery_options'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['return_policy'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['is_featured'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['ratings_count'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['averate_rating'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['avatar'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $business['banner'] }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
</tr>
