<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">

                @if($selected)
                    <livewire:todo-info :todo="$selected" />
                @endif

                @foreach($todos as $todo)
                    <div wire:click="select({{ $todo->id }})" @class(['bg-slate-100 px-3 py-2', 'border border-slate-800' => $todo == $selected])>
                        {{ $todo->title }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>