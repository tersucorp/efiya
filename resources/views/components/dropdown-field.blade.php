@props(['id', 'label', 'options', 'required' => false, 'nullable' => false])

<div class="relative flex-grow">
    <select
        id="{{ $id }}"
        name="{{ $id }}"
        class="peer w-full bg-zinc-900 border border-zinc-800 rounded-md px-5 py-4 text-white outline-0 focus:outline-0 focus:ring-2 focus:ring-zinc-950 focus:border-transparent"
        {{ $required ? 'required' : '' }}
        style="padding-top: 1.125rem; padding-bottom: 1.125rem; line-height: 1.5rem;"
    >
        <option value="">Select {{ $label }}</option>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}">{{ $text }}</option>
        @endforeach
    </select>
    <label
        for="{{ $id }}"
        class="absolute left-3 -top-2.5 text-white px-1 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-5 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-white">
        {{ $label }}{{ $required ? '*' : ($nullable ? ' (optional)' : '') }}
    </label>
</div>
