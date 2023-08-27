<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">

                <form method="POST" wire:submit="save">
                    <div>
                        <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                        <input id="name" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" wire:model="name" />
                        @error('name')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                        <textarea id="description" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" wire:model="description"></textarea>
                        @error('description')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="category">Category</label>
                        <select wire:model="category_id" name="category" id="category" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                            <option value="0">-- CHOOSE CATEGORY --</option>
                            @foreach($categories as $id => $category)
                                <option value="{{ $id }}">{{ $category }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                        Save Product
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
