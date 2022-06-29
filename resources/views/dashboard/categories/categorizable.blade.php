
<ul class="pr-2">
    @foreach($childs as $child)
        <li>
            <div class="flex items-center text-right shadow-sm hover:bg-gray-100 px-3 py-2 border border-gray-300 rounded-lg w-full mt-1">
                <button
                    class="flex items-center hover:text-blue-500"> 
                    @if(count($child->childs))
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </div>
                    @endif           
                    <span class="text-xs font-medium">
                        {{ $child->label }}
                    </span>
                </button>
                <div class="mr-auto">
                    <livewire:delete :entity="$child" :url="request()->fullUrl()"/>
                </div>
            </div>
            @if(count($child->childs))
                @include('dashboard.categories.categorizable',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>

