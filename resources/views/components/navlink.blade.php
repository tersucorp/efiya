@props(['active' => false ])

<a
    class="{{ $active ? 'text-[#FDC936]':'hover:text-gray-500'}}"
    {{ $attributes }}
    aria-current="{{ $active? 'page' : 'false'}}
">
    {{ $slot }}
</a>
