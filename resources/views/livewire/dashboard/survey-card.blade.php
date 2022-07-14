
<div class="focus:outline-none lg:mr-7 lg:mb-0 mb-7 bg-white px-6  shadow rounded">
    <div class="flex items-center border-b border-gray-200 py-3 ">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center justify-center bg-gray-100 rounded-full w-14 h-14 p-3 my-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
            </div>
            <div class="pr-3 w-full">
                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                    {{ $user->fullname }}
                </p>
                <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">
                    {{ $user->username }}
                </p>
            </div>
            <div class="flex gap-1">
                <a href="{{ route('dashboard.assessments.show', [$course, $user]) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </a>
                <livewire:delete :entity="$this->getTransaction()" :url="request()->fullUrl()"/>
            </div>                
        </div>
    </div>
    <div class="my-3">
        @if($this->getFellowName())
        <p class="inline text-gray-400 text-xs bg-gray-100 px-4 py-1 rounded">
            همیار ثبت شده
            <span class="font-semibold text-gray-500">
                {{ $this->getFellowName() }}
            </span>
        </p>
        @else
        <p class="inline text-rose-400 text-xs bg-rose-100 px-4 py-1 rounded">
            همیاری ثبت نشده
        </p>
        @endif
    </div>
    <label for="se" class="p-2 my-3 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-50 hover:bg-gray-100 cursor-pointer rounded">
        <p>تعیین همیار: </p>
        <div class="relative font-normal text-xs sm:text-sm flex items-center text-gray-600 mr-auto">
            <select wire:model="fellowId" class="cursor-pointer focus:text-gray-600 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-1 rounded-md focus:ring-gray-500 w-full appearance-none pl-8 py-1 pr-2">
                <option value="">
                    انتخاب کنید
                </option>
                @foreach ($fellows as $fellow)
                <option value="{{ $fellow->id }}">
                    {{ $fellow->fullname ?? $fellow->username }}
                </option>
                @endforeach
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute left-0 ml-2" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"></path>
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
    </label>
</div>         