@extends('dashboard.layouts.base')

@section('title')
    Dashboard
@endsection

@section('content')

    <x-dashboard.box-report/>

    <!-- Filters Section -->
    <section>
        <div class="bg-rose-100/70 mt-12  rounded-xl px-5 sm:px-10  pt-8 pb-4 relative bg-no-repeat bg-right bg-contain ">
            <div class="text-rose-400 font-semibold text-lg">
                اطلاعیه سایت
            </div>

            <div class="mt-5 text-gray-500 text-sm ">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
            </div>
        </div>

    </section>
    <!-- /Filters Section -->

    <div class="grid grid-cols-2 gap-3">
        <!-- Users Latest Table-->
        <x-dashboard.cart title="لیست آخرین کاربران">
            <x-slot name="header">
                <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                    <span>نام کاربری</span>
                </div>

                <div class="ml-3 text-gray-600 text-sm">
                        <span>
                            تاریخ عضویت
                        </span>
                </div>

                <div class="w-auto mr-auto text-gray-600 text-sm">
                    <span>عملیات</span>
                </div>
            </x-slot>
            <x-slot name="content">
                <x-dashboard.list-item>
                    <div class="flex items-center px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <p class="font-semibold text-sm">Kylan Dorsey</p>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                            <span>
                                1401-10-10
                            </span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>

                <x-dashboard.list-item>
                    <div class="flex items-center px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <p class="font-semibold text-sm">Kylan Dorsey</p>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                            <span>
                                1401-10-10
                            </span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>
            </x-slot>
        </x-dashboard.cart>
        <!-- Users Latest Table-->

        <!-- Products Latest Table-->
        <x-dashboard.cart title="لیست آخرین محصولات">
            <x-slot name="header">

                <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                    <span>نام کاربری</span>
                </div>

                <div class="ml-3 text-gray-600 text-sm">
                        <span>
                            تاریخ عضویت
                        </span>
                </div>

                <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                        <span>
                            وضعیت کاربر
                        </span>
                </div>

                <div class="w-auto mr-auto text-gray-600 text-sm">
                    <span>عملیات</span>
                </div>
            </x-slot>
            <x-slot name="content">
                <x-dashboard.list-item>
                    <div class="flex items-center px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <div class="px-3 py-2 bg-gray-200 rounded ml-2">
                                <svg
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
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <polyline points="21 15 16 10 5 21" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-sm">Kylan Dorsey</h3>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                                    <span>
                                        120000
                                    </span>
                            <span class="text-xs font-semibold ml-1">
                                        تومان
                                    </span>
                        </div>
                        <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">
                                            منتشر شده
                                        </span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>

                <x-dashboard.list-item>
                    <div class="flex items-center px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <div class="px-3 py-2 bg-gray-200 rounded ml-2">
                                <svg
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
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <polyline points="21 15 16 10 5 21" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-sm">Kylan Dorsey</h3>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                                    <span>
                                        120000
                                    </span>
                            <span class="text-xs font-semibold ml-1">
                                        تومان
                                    </span>
                        </div>
                        <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">
                                            منتشر شده
                                        </span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>

                <x-dashboard.list-item>
                    <div class="flex items-center px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <div class="px-3 py-2 bg-gray-200 rounded ml-2">
                                <svg
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
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <polyline points="21 15 16 10 5 21" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-sm">Kylan Dorsey</h3>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                                    <span>
                                        120000
                                    </span>
                            <span class="text-xs font-semibold ml-1">
                                        تومان
                                    </span>
                        </div>
                        <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">
                                            منتشر شده
                                        </span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>
            </x-slot>
        </x-dashboard.cart>
        <!-- Products Latest Table-->
    </div>

    <div class="grid grid-cols-1">
        <!-- Orders Latest Table-->
        <x-dashboard.cart title="لیست آخرین سفارشات" >
            <x-slot name="header">
                <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                    <span>نام سفارش دهنده</span>
                </div>
                <div class="ml-3 text-gray-600 text-sm">
                        <span>
                           تاریخ سفارش
                        </span>
                </div>
                <div class="w-64 ml-3 text-gray-600 text-sm">
                        <span>
                           مبلغ کل سفارش
                        </span>
                </div>
                <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                                        <span>
                                            وضعیت سفارش
                                        </span>
                </div>
                <div class="w-auto mr-auto text-gray-600 text-sm">
                    <span>عملیات</span>
                </div>

            </x-slot>
            <x-slot name="content">
                <x-dashboard.list-item>
                    <div class="flex px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <span>Kylan Dorsey</span>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                                            <span>
                                                1400-10-11
                                            </span>
                        </div>
                        <div class="w-64 ml-3 text-gray-600 text-sm">
                                            <span>
                                               200000 تومان
                                            </span>
                        </div>
                        <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>

                <x-dashboard.list-item>
                    <div class="flex px-5 py-3 w-full">
                        <div class="w-72 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <span>Kylan Dorsey</span>
                        </div>
                        <div class="ml-3 text-gray-600 text-sm">
                                            <span>
                                                1400-10-11
                                            </span>
                        </div>
                        <div class="w-64 ml-3 text-gray-600 text-sm">
                                            <span>
                                               200000 تومان
                                            </span>
                        </div>
                        <div class="w-64 sm:w-auto ml-3 text-gray-600 text-sm">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>
            </x-slot>
        </x-dashboard.cart>
        <!-- Orders Latest Table-->
    </div>

@endsection
