   <!-- Courses Table-->

           <form wire:click.prevent="store()" method="post">
               <div class="grid grid-cols-2 gap-x-4 gap-y-1 p-5">
                   <div class="mt-1">
                       <label class="inline-block mb-2">
                           عنوان دوره
                       </label>
                       <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                       <input type="text" wire:model="title" name="title"
                           class="shadow-sm border @error('title') border-rose-400 @enderror rounded-md py-2 px-3 w-full">
                   </div>

                   <div class="grid grid-cols-2 gap-x-4">
                       <div class="mt-1">
                           <label class="inline-block mb-2">
                               قیمت
                               <span class="text-sm text-gray-400">
                                   (ریال)
                               </span>
                               <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                           </label>
                           <input type="text" wire:model="price" name="price"
                               class="shadow-sm border @error('price') border-theme-6 @enderror rounded-md py-2 px-3 w-full">
                       </div>

                       <div class="mt-1">
                           <label class="inline-block mb-2">
                               دسته بندی
                               <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                           </label>
                           <select
                               class="form-select appearance-none
                        block
                        w-full
                        px-3 py-2 mt-1 mb-5 text-sm
                        bg-white
                        border
                        rounded-lg
                        transition
                        ease-in-out
                        text-gray-700
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('country') border-rose-400 @enderror"
                               wire:model="category_id" name="category_id">
                               <option selected> خود را انتخاب کنید</option>
                               @foreach ($categories as $category)
                                   <option value="{{ $category->id }}">
                                       {{ $category->label }}
                                   </option>
                               @endforeach
                           </select>
                           @error('country')
                               <div class="text-rose-400 mt-2 text-xs">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
                   </div>

                   <div class="mt-1 col-span-2">
                       <label class="inline-block mb-2">
                           توضیحات دوره
                           <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                       </label>
                       <textarea wire:model="description" name="description"
                           class="h-20 shadow-sm border @error('description') border-theme-6 @enderror rounded-md py-2 px-3 w-full"
                           name="" id="" cols="30" rows="10"></textarea>
                   </div>

                   <div class="mt-1">
                       <label class="inline-block mb-2">
                           سرفصل
                       </label>
                       <textarea wire:model="topics" name="topics"
                           class="h-20 shadow-sm border @error('description') border-theme-6 @enderror rounded-md py-2 px-3 w-full"
                           name="" id="" cols="30" rows="10"></textarea>
                   </div>


                   <div class="mt-1">
                       <label class="inline-block mb-2">
                           پیش نیازها
                       </label>
                       <textarea wire:model="requirements" name="requirements"
                           class="h-20 shadow-sm border @error('description') border-theme-6 @enderror rounded-md py-2 px-3 w-full"
                           name="" id="" cols="30" rows="10"></textarea>
                   </div>


                   <div class="mt-1 mb-4">
                       <div class="grid grid-cols-2 gap-5">
                           <div class="grid">
                               <label class="border-2 border-dashed border-gray-300 rounded-lg pt-4">
                                   <button class="px-4 pb-4 flex items-center flex-col justify-center h-full relative">
                                       <div wire:target="photo" wire:loading.class.add="hidden"
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
                                       <div wire:target="photo" wire:loading.class.remove="hidden"
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
                                           wire:model="photo" class="hidden">
                                   </button>
                               </label>
                           </div>
                           <div class="grid">
                               <label class="border-2 border-dashed border-gray-300 rounded-lg pt-4">
                                   <button class="px-4 pb-4 flex items-center justify-center flex-col h-full relative">
                                       <div wire:target="photo" wire:loading.class.add="hidden"
                                           class="flex flex-col items-center text-gray-400">
                                           <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                               viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                               stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                               <polygon points="23 7 16 12 23 17 23 7" />
                                               <rect x="1" y="5" width="15" height="14"
                                                   rx="2" ry="2" />
                                           </svg>
                                           <div class="text-center mt-1 text-xs">
                                               افزدون ویدیو
                                           </div>
                                       </div>
                                       <div wire:target="photo" wire:loading.class.remove="hidden"
                                           class="hidden flex flex-col items-center text-gray-400">
                                           <svg class="animate-spin h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                               fill="none" viewBox="0 0 24 24">
                                               <circle class="opacity-25" cx="12" cy="12"
                                                   r="10" stroke="currentColor" stroke-width="4"></circle>
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
                                           wire:model="photo" class="hidden">
                                   </button>
                               </label>
                           </div>
                       </div>
                   </div>



                   <div class="col-span-2 border-t">
                       <div class="flex justify-start">
                           <button wire:click="handle"
                               class="bg-theme-32 flex justify-center cursor-pointer border-theme-32 rounded-md border font-medium px-3 py-2 text-center transition-all duration-200 hover:opacity-90 hover:border-opacity-90 block w-40 mx-auto mt-5 hover:bg-theme-31
                        focus:outline-2 focus:ring-4">
                               <span wire:target="handle" wire:loading.class.add="hidden">
                                   ذخیره دوره
                               </span>
                               <svg wire:target="handle" wire:loading.class.remove="hidden"
                                   class="animate-spin hidden" width="16" height="16"
                                   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                   <circle class="opacity-25" cx="12" cy="12" r="10"
                                       stroke="currentColor" stroke-width="4"></circle>
                                   <path class="opacity-75" fill="currentColor"
                                       d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                   </path>
                               </svg>
                           </button>
                       </div>
                   </div>
           </form>

   <!-- /Courses Table-->
