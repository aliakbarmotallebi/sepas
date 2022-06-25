@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Messages')  }}
@endsection

@section('content')

    <div class="mt-4 w-1/3">
        <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
                <svg viewBox="0 0 24 24" class="h-6 w-6 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="8" y1="15" x2="16" y2="15"></line>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
            </div>
            <div class="sm:space-y-0 space-y-4 text-right global-rtl">
                <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                    تعداد نظرات
                </h5>
                <div class="text-gray-500 text-xs font-medium flex items-center global-rtl">
                    <div class="global-rtl">
                        تایید شده
                        <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                                  13
                              </span>
                    </div>
                    <i class="flex mx-2 h-5 border-l border-gray-50"></i>
                    <div class="global-rtl">
                        تایید نشده
                        <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                                  57
                              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Comments Table-->
    <x-dashboard.table title="لیست پیام های کاربران" >
        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Sliver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
