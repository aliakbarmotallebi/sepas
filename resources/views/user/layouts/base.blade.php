<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>حساب کاربری - @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('styles/security/styles.css') }}">
    @livewireStyles
  </head>
<body class="bg-gray-100 h-screen antialiased">
  <div id="app">
    <nav class="bg-white shadow print:hidden">
        <div class="md:max-w-7xl mx-auto flex justify-between items-center py-6">
            <a href="{{route('panel.index')}}" class="block uppercase flex item-center"> 
              <span class="inline-block text-sm font-bold ml-2">
                <span class="text-gray-700">
                  پنل حساب کاربری
                </span>
              </span> 
            </a>
            <div class="flex justify-between  item-center">
                <a href="{{route('panel.index')}}" class="block text-xs tracking-tight text-gray-700 hover:text-blue-600 px-4">
                  <span class="font-bold">نام کاربری</span>
                    ({{ auth()->user()->username }})
                </a>
                <a href="{{route('logout')}}" class="block text-xs  tracking-tighter text-gray-700 hover:text-blue-600">
                   خروج از حساب کاربری
                </a>
            </div>
        </div>
    </nav>
    <div class="py-3 md:max-w-7xl mx-auto flex mb-4 w-full">
        <div class="w-3/12 p-2 print:hidden {{ request()->routeIs('panel.index') ? 'mt-11'  : '' }} ">
          <div class="text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <a href="{{ route('panel.profile.edit') }}" 
                class="{{ request()->routeIs('panel.profile.edit') ? 'bg-blue-700 text-white border-b border-gray-200 hover:bg-blue-800 hover:text-white'  : '' }} relative inline-flex items-center w-full px-4 py-4 text-sm border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                ویرایش پروفایل
            </a>
            <a href="{{ route('panel.courses') }}" 
              class="{{ request()->routeIs('panel.courses') ? 'bg-blue-700 text-white border-b border-gray-200 hover:bg-blue-800 hover:text-white'  : '' }} relative inline-flex items-center w-full px-4 py-4 text-sm border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                              دوره های ثبت شده
            </a>
            <a href="{{ route('panel.orders.index') }}" 
              class="{{ request()->routeIs('panel.orders.index') ? 'bg-blue-700 text-white border-b border-gray-200 hover:bg-blue-800 hover:text-white'  : '' }} relative inline-flex items-center w-full px-4 py-4 text-sm border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
              سفارشات
            </a>
            <a href="{{ route('panel.transactions') }}" 
              class="{{ request()->routeIs('panel.transactions') ? 'bg-blue-700 text-white border-b border-gray-200 hover:bg-blue-800 hover:text-white'  : '' }} relative inline-flex items-center w-full px-4 py-4 text-sm border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>                لیست تراکنش ها
            </a>
            <a href="{{ route('panel.comments') }}" 
            class="{{ request()->routeIs('panel.comments') ? 'bg-blue-700 text-white border-b border-gray-200 hover:bg-blue-800 hover:text-white'  : '' }} relative inline-flex items-center w-full px-4 py-4 text-sm border-b hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>        
              لیست نظرات
            </a>
            <a href="{{ route('panel.campaigns') }}" 
            class="{{ request()->routeIs('panel.campaigns') ? 'bg-blue-700 text-white border-b border-gray-200 hover:bg-blue-800 hover:text-white'  : '' }} relative inline-flex items-center w-full px-4 py-4 text-sm rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
               کمپین های ثبت نام شده
            </a>
          </div>
        </div>
        <div class="flex-1 px-4 py-3">
          @yield('content')
        </div>
  @include('sweetalert::alert')
  @livewireScripts
</body>
</html>