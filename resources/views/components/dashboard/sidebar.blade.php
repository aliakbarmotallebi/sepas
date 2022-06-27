<!-- Sidebar -->
<aside class="bg-white w-1/5 py-10 pr-10 min-w-min border-r border-indigo-900/20 hidden md:block ">
    <div class=" font-bold text-2xl">
        وب سایت سپاس
    </div>

    <!-- Menu -->
    <div class="mt-12 flex flex-col space-y-7 text-gray-500 font-medium">


        <a href="{{ route('dashboard.index') }}" class="flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg class="h-5 w-5 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>

            </svg>
            <span class="pr-2">
                        داشبورد مدیریت
                    </span>
        </a>
        <a href="{{ route('dashboard.courses.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold ">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 group-hover:stroke-indigo-700"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                >
                <polyline points="21 8 21 21 3 21 3 8" />
                <rect x="1" y="3" width="22" height="5" />
                <line x1="10" y1="12" x2="14" y2="12" />
            </svg>
            <span class="pr-2">
                مدیریت دوره ها
            </span>
        </a>
        <a href="{{ route('dashboard.comments.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold ">
            <svg
                viewBox="0 0 24 24"
                class="h-5 w-5 group-hover:stroke-indigo-700"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                >
                <circle cx="12" cy="12" r="10" />
                <line x1="8" y1="15" x2="16" y2="15" />
                <line x1="9" y1="9" x2="9.01" y2="9" />
                <line x1="15" y1="9" x2="15.01" y2="9" />
            </svg>
            <span class="pr-2">
                مدیریت نظرات
            </span>
        </a>
        <a href="{{ route('dashboard.users.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 group-hover:stroke-indigo-700"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                >
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
            <span class="pr-2">
                            مدیریت کاربران
                        </span>
        </a>
        <a href="{{ route('dashboard.messages.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold ">
            <svg
                class="h-5 w-5 group-hover:stroke-indigo-700"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                >
                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
            </svg>
            <span class="pr-2">
                مدیریت پیام ها
            </span>
        </a>
        <a href="{{ route('dashboard.products.index') }}" class="flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:stroke-indigo-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
            <span class="pr-2">
                مدیریت محصولات
            </span>
        </a>
        <a href="{{ route('dashboard.orders.index') }}" class="flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:stroke-indigo-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>

            <span class="pr-2">
                        مدیریت سفارشات
                    </span>
        </a>
        <a href="{{ route('dashboard.courses.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg class="h-5 w-5 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
            <span class="pr-2">
                پرداختی ها
            </span>
        </a>
        <a href="{{ route('dashboard.courses.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg class="h-5 w-5 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
            <span class="pr-2">
                مدیریت دسته بندی
            </span>
        </a>
        <a href="{{ route('dashboard.courses.index') }}" class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg class="h-5 w-5 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
            <span class="pr-2">
                مدیریت تراکنش ها
            </span>
        </a>


        <a class=" flex items-center space-x-2 py-1  group hover:border-l-2 hover:border-l-indigo-700 hover:font-semibold " href="#">
            <svg class="h-5 w-5 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span class="pr-2">
                        تغییر رمز عبور
                    </span>
        </a>


    </div><!-- /Menu -->
</aside>
<!-- /Sidebar -->
