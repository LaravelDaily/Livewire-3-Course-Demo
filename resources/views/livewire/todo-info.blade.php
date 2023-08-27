<div>
    <div><span class="text-gray-500">Title:</span> {{ $todo->title }}</div>
    <div><span class="text-gray-500">Body:</span> {{ $todo->body }}</div>
    <div><span class="text-gray-500">Due at:</span> {{ $todo->due_at }}</div>
    <button wire:click="$parent.deselect()" class="mt-2 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
        Deselect
    </button>
</div>
