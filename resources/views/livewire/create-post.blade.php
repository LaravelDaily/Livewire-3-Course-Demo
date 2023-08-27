<div>
    @if($success)
        <span class="block mb-4 text-green-500">Post saved successfully.</span>
    @endif

    <form method="POST" wire:submit="save">
        <div>
            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
            <input id="title" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" wire:model.blur="form.title" />
            {{--<button type="button" wire:click="validateTitle" class="block mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Validate title
            </button>--}}
            @error('form.title')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="body" class="block font-medium text-sm text-gray-700">Body</label>
            <textarea id="body" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" wire:model.blur="form.body"></textarea>
            @error('form.body')
                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
            Save
        </button>
    </form>
</div>
