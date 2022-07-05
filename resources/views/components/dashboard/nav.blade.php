<!-- Nav -->
<nav class="print:hidden text-lg flex items-center justify-between content-center ">
    <div class=" font-semibold text-xl text-gray-800 flex space-x-4 items-center">
        <a href="#">
            <span class="md:hidden">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7">
                    </path>
                </svg>

            </span>
        </a>
        <span>
            @yield('title')
        </span>
    </div>

    <div class="flex space-x-5 md:space-x-10 text-gray-500 items-center content-center text-base ">
        <a class="flex items-center space-x-3 px-3 py-2 rounded border border-gray-400 ml-2" href="#">
            <span>
                <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>{{--  --}}
            <span class="hidden sm:block text-sm pr-2">
                تنظیمات
            </span>
        </a>
        <a href="{{ route('logout') }}"
            class="px-3 py-2 border border-rose-400 rounded flex items-center space-x-2 text-indigo-500 hover:bg-indigo-200"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-rose-400" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                <polyline points="16 17 21 12 16 7" />
                <line x1="21" y1="12" x2="9" y2="12" />
            </svg>
        </a>
    </div>
</nav>
<!-- /Nav -->
