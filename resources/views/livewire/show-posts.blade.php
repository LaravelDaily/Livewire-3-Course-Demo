<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 space-y-1 dark:text-gray-100">

                <input type="search" wire:model.live="search" placeholder="Search..." class="block mb-2 w-full border-gray-300 rounded-md shadow-sm">

                @foreach($posts as $post)
                    <h2 class="text-lg">{{ $post->title }}</h2>
                @endforeach

            </div>
        </div>
    </div>
</div>
