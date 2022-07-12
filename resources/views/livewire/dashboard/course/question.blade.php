    <div class="mt-2 px-3">
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
        {{ session('message') }}
        </div>
    @endif

    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <span class="font-medium">نکته برای ایجاد سوالات انتخابی:</span> 
        <div class="mt-2">
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    گزینه اول
                </label>
            </div>
            <div class="flex items-center">
                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    گزینه دو
                </label>
            </div>
        </div>
        <div class="text-gray-800 pt-3">
            <p>
                 لطفا برای ایجاد سوال انتخابی از نقطه (.) استفاده کنید
                <span class="block font-semibold mt-1">
                    گزینه اول. گزینه دو. گزینه سه
                </span>
            </p>
        </div>
    </div>
    <div class="w-2/3">
        <form>
            <div class="grid grid-cols-3 gap-2 mt-4">
                <div>
                    <label for="type" class="@error('type.0') text-red-700 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        نوع سوال 
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <select id="type" wire:model="type.0" class="@error('type.0') bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>
                            انتخاب کنید
                        </option>
                        <option value="text">متن</option>
                        <option value="choice">انتخابی</option>
                    </select>
                    @error('type.0')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="label" class="@error('label.0') text-red-700 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        تیتر سوال
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <input type="text" id="label" wire:model="label.0" class="@error('label.0') bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('label.0')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="question" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        سوال
                    </label>
                    <input type="text" id="question" wire:model="question.0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="self-end justify-self-start">
                    <button class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm p-3 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" wire:click.prevent="add({{$counter}})">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </button>
                </div>
            </div>
            {{-- Add Form --}}
            @foreach ($rows as $key => $value)
            <div class="grid grid-cols-3 gap-2 justify-center items-center mt-4">
                <div>
                    <label for="type" class="@error('type.') text-red-700 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        نوع سوال
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <select id="type" wire:model="type.{{$value}}" class="@error('type') bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>
                        انتخاب کنید
                    </option>
                    <option value="text">متن</option>
                    <option value="choice">انتخابی</option>
                    </select>
                    @error('type.')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="label" class="@error('label.') text-red-700 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        تیتر سوال
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <input type="text" id="label" wire:model="label.{{$value}}" class="@error('label') bg-red-50 border-red-500 text-red-900 disabled:cursor-not-allowed placeholder-red-700 focus:ring-red-500 focus:border-red-500  @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('label.')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="question" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        سوال
                    </label>
                    <input type="text" id="question" wire:model="question.{{$value}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="self-end justify-self-start">
                    <button class="text-white bg-gray-200 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm p-3 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" wire:click.prevent="remove({{$key}})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="z-30 text-gray-800 w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>
            @endforeach
            <div class="my-5">
                <button type="button" class="px-4 py-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" wire:click.prevent="store()">
                    ذخیره سوالات
                </button>
            </div>
        </form>
    </div>
</div>

<div class="flex justify-center mb-6">
    <div class="w-1/2 ">
        <x-dashboard.table  title="لیست سوالات" >
                
            <x-slot name="header">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        نوع سوال
                    </th>
                    <th scope="col" class="px-6 py-3">
                        تیتر سوال
                    </th>
                    <th scope="col" class="px-6 py-3">
                        سوال انتخابی
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($questions as $question)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            {{ $question->type }}
                        </th>
                        <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            {{ $question->label }}
                        </th>
                        <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            {{ $question->question }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                <livewire:delete :entity="$question" :url="request()->fullUrl()"/>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-slot>

        </x-dashboard.table>
    </div>
</div>