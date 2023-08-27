<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <h1 class="text-lg font-bold mb-4">{{ $post->title }}</h1>

                <p>Comments: {{ $commentsCount }}</p>

{{--                <livewire:show-comments lazy :post="$post" />--}}
                <livewire:show-comments :post="$post" />

{{--                <livewire:create-comment :post="$post" />--}}
            </div>
        </div>
    </div>
</div>
