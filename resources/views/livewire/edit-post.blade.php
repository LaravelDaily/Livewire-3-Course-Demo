<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form method="POST" wire:submit="update">
                    <div>
                        <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                        <input id="title" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" wire:model="form.title" />
                        @error('form.title')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="body" class="block font-medium text-sm text-gray-700">Body</label>
                        <textarea id="body" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" wire:model="form.body"></textarea>
                        @error('form.body')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                        Save
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
