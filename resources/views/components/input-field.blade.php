@props(['type' => 'text', 'id', 'label', 'placeholder' => '', 'required' => false, 'nullable' => false])

<div class="relative flex-grow">
    <input
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $id }}"
        class="peer w-full bg-zinc-900 border border-zinc-800 rounded-md px-5 py-4 text-white outline-0 focus:outline-0 focus:ring-2 focus:ring-zinc-950 focus:border-transparent"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        style="padding-top: 1.125rem; padding-bottom: 1.125rem; line-height: 1.5rem;"
    />
    <label
        for="{{ $id }}"
        class="absolute left-3 -top-2.5 text-white px-1 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-5 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-white">
        {{ $label }}
        @if($required)
            <span class="text-red-700">*</span>
        @elseif($nullable)
            (optional)
        @endif
    </label>
   @error($id)
    <p class="text-xs text-red-500 font-semibold m-1">{{ $message }}</p>
@enderror
</div>
