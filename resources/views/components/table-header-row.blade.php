@props(['headers'])

<tr>
    @foreach ($headers as $index => $header)
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider {{ $index == 0 ? 'custom-class-for-first-element' : '' }}">
            @if ($index === 0)
                <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @else
                {{ $header }}
            @endif
        </th>
    @endforeach
    <th scope="col" class="relative px-6 py-3">
        <span class="sr-only">Edit</span>
    </th>
</tr>
