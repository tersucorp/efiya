@props(['id', 'label', 'required' => false, 'nullable' => false])
<div class="col-span-full">
    <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-white">{{ $label }}</label>
    <div class="mt-2 flex items-center gap-x-3">
        <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
        </svg>
        <label for="{{ $id }}" class="cursor-pointer rounded-md bg-white px-4 py-2.5 text-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            Change
            <input id="{{ $id }}" name="{{ $id }}" type="file" class="sr-only" accept="image/*">
        </label>
    </div>
   @error($id)
    <p class="text-xs text-red-500 font-semibold m-1">{{ $message }}</p>
@enderror
</div>
