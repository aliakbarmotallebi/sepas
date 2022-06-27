<div class="mb-2">
    <label class="block border-2 border-dashed border-gray-300 rounded-lg pt-4">
        <div class="px-2 pb-2 flex items-center flex-col justify-center h-full relative">
            <div class="flex flex-col items-center text-gray-400">
                <div class="text-center mt-1 text-xs">
                    <svg aria-hidden="true" class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    افزدون تصویر
                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                </div>
            </div>
            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0 cursor-pointer" wire:model="photo" class="hidden" x-on:change="fileChosen">
        </div>
    </label>

    <div class="grid grid-cols-2 gap-2 pt-2">
        <div class="block border border-gray-300 rounded-lg px-5 py-2 hover:bg-gray-100">
            <input type="hidden" value="">
            <div class="flex items-center">
                <button class="flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-rose-500 hover:text-rose-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                </button>
                <span class="text-gray-500 ml-2 text-xs">image.png</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
            </div>
        </div>
    </div>
</div>

