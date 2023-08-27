<div class="mt-4">
    <form method="POST" wire:submit="save">
        <div>
            <label for="body" class="block font-medium text-sm text-gray-700">Body</label>
            <textarea id="body" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" wire:model="body"></textarea>
            @error('body')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
            Save
        </button>
    </form>
</div>
