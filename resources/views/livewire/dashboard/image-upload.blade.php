
<div class="grid grid-cols-6 gap-3 p-4">


    @foreach ($images as $image)
        <div class="transition-all duration-500 ease-in-out">
            <div class="rounded-md bg-gray-500 h-80 shadow-lg bg-cover bg-center relative overflow-hidden before:w-full before:h-full before:top-0 before:right-0 before:absolute before:z-10 before:bg-gradient-to-b before:from-transparent before:to-black/50"
                style="background-image:url({{$image->getImageUrl()}})">
                <div class="absolute px-5 pt-6 z-30 bottom-3">
                    <button wire:click="remove({{$image->id}})" class="cursor-pointer h-8 w-8 rounded-full bg-[#ffffff3d] flex items-center justify-center text-white hover:bg-black/30">
                        <svg xmlns="http://www.w3.org/2000/svg" wire:target="remove({{$image->id}})"" wire:loading.class.add="hidden" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 block mx-auto"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        <svg wire:target="remove({{$image->id}})" wire:loading.class.remove="hidden" class="animate-spin hidden" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endforeach

    <label class="grid place-content-center cursor-pointer hover:bg-gray-100/90 border-2 relative border-dashed border-gray-300 rounded-lg pt-4">
        <button class="w-full px-4 pb-4 flex items-center flex-col justify-center h-full">
            <div wire:target="rawImage" wire:loading.class.add="hidden"
                class="flex flex-col items-center text-gray-400">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18"
                        rx="2" ry="2" />
                    <circle cx="8.5" cy="8.5" r="1.5" />
                    <polyline points="21 15 16 10 5 21" />
                </svg>
                <div class="text-center mt-1 text-xs">
                    افزدون تصویر
                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                </div>
            </div>
            <div wire:target="rawImage" wire:loading.class.remove="hidden"
                class="hidden flex flex-col items-center text-gray-400">
                <svg class="animate-spin h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10"
                        stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <div class="text-center mt-1 text-xs">
                    درحال بارگذاری
                </div>    
            </div>
            <input type="file"
                class="w-full h-full top-0 left-0 absolute opacity-0 cursor-pointer"
                wire:model="rawImage" class="hidden">
        </button>
    </label>

</div>
  