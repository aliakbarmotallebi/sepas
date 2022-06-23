@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Messages')  }}
@endsection

@section('content')

    <!-- Comments Table-->
    <x-dashboard.table title="لیست پیام های کاربران" >
        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    نام و نام خانوادگی
                </th>
                <th scope="col" class="px-6 py-3">
                    متن پیام
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="font-semibold text-sm">
                        وضعیت پیام 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ ایجاد
                </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @foreach ($messages as $message)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $message->fullname }}
                    </th>
                    <td scope="row" class="px-6 py-4">
                        {{ $message->text }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        @if ( $message->hasPublished() )
                            <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-200 dark:text-green-800">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                        @else
                            <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-rose-800 bg-rose-100 rounded-full dark:bg-rose-200 dark:text-rose-800">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                        @endif
                    </td>
                    <td scope="row" class="px-6 py-4">
                        {{ $message->getAge() }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex text-center">
                            <button type="button" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg
                                    class="w-4 h-4"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    >
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                                    </svg>
                            </button>
                            <button type="button" class="flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 text-rose-500"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                >
                                <polyline points="3 6 5 6 21 6" />
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
