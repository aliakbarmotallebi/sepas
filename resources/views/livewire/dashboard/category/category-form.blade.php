
<x-modal title="ذخیره دسته بندی" wire:model="show">

    <div class="col-span-1">

        @if($isSuccess)
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            دسته بندی 
            <span class="font-medium">
                {{ $temp }}
            </span>
            با موفقیت ایجاد شد
        </div>
        @endif

        <form  wire:submit.prevent="store()" method="POST">
            <div>
                <div>
                    <label for="label" class="@error('label') text-red-700 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        نام دسته بندی
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <input type="text" id="label" wire:model="label" class="@error('label') bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('label')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="category_id" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        دسته بندی اصلی
                    </label>
                    <select id="category_id" wire:model="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>
                            دسته بندی خود را انتخاب کنید
                        </option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->label }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex items-center justify-start pt-4 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button type="submit" wire:click.prevent="store()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-1.5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-1">
                        ذخیره دسته بندی
                    </button>
                    <button  type="button" 
                        wire:click="show()"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-xs font-medium px-1.5 py-2 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        انصراف
                    </button>
                </div>
            </div>
        </form>
    </div>

    <x-slot name="footer"></x-slot>
</x-modal>