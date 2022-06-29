
<div class="p-3">
    <ul class="pr-2">
    @foreach($categories as $category)
    <li>
        <div class="flex items-center text-right shadow-sm hover:bg-gray-100 px-3 py-2 border border-gray-300 rounded-lg w-full block mt-1">
            <button 
                class="flex items-center hover:text-blue-500">
                @if(count($category->childs))
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </div>
                @endif
                <span class="text-xs font-medium">
                    {{ $category->label }}
                </span>
            </button>
            <div class="mr-auto flex">                            
                <button class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                <svg
                    class="w-4 h-4"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                    </svg>
                </button>
                <livewire:delete :entity="$category" :url="request()->fullUrl()"/>
            </div>
        </div>
        @if(count($category->childs))
            @include('dashboard.categories.categorizable',['childs' => $category->childs])
        @endif
    </li>
    @endforeach
    </ul>

    @livewire('dashboard.category.category-form')

</div>