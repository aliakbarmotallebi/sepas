

<ul class="tree p-7">
    @foreach($categories as $category)
    <li>
        <div class="inline-flex items-center cursor-pointer text-xs px-6 py-2">
            {{ $category->label }}
            <span class="block mr-6">
                <button x-data="{}" x-on:click="window.livewire.emitTo('dashboard.category.category-edit', 'edit', '{{$category}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 hover:opacity-30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                @if(! $category->childs()->exists())
                    <button wire:click="remove({{$category}})" class="pr-1 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-rose-600 hover:opacity-30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </button>
                @endif
            </span>
        </div>
        @if(count($category->childs))
            @include('dashboard.categories.categorizable',['childs' => $category->childs])
        @endif
    </li>
    @endforeach
</ul>