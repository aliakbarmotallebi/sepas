@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Users')  }}
@endsection

@section('content')

<div class="mt-4 w-1/3">
    <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
        <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 group-hover:stroke-indigo-700"
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
        </div>
        <div class="sm:space-y-0 space-y-4 text-right global-rtl">
            <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                تعداد کاربران
            </h5>
            <div class="text-gray-500 text-xs font-medium flex items-center global-rtl">
                <div class="global-rtl">
                    تایید شده
                    <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                              13
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="mt-4">
        <a href="{{ route('dashboard.users.create') }}" class="inline-flex items-center py-2 px-4 text-xs font-medium text-gray-900 bg-white rounded-lg border border-gray-200 focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 copy-to-clipboard-button">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-2 w-4 h-4"
                >
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="8.5" cy="7" r="4" />
                <line x1="20" y1="8" x2="20" y2="14" />
                <line x1="23" y1="11" x2="17" y2="11" />
                </svg>
            <span class="mr-1">ثبت کاربر جدید</span>
        </a>
    </div>



    <!-- Comments Table-->
    <x-dashboard.table  title="لیست کاربران" >
        
        <div class="p-3">
            {!! $users->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    نام کاربری
                </th>
                <th scope="col" class="px-6 py-3">
                    ایمیل
                </th>
                <th scope="col" class="px-6 py-3">
                    نام و نام خانوادگی
                </th>
                <th scope="col" class="px-6 py-3">
                   نقش کاربر
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ ثبت نام
                </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @foreach ($users as $user)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                        {{ $user->username }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $user->email }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $user->fullname }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $user->getRoleName() }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $user->getCreatedAt() }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex text-center justify-end">
                            <a href="{{ route('dashboard.users.edit', $user) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
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
                                </a>
                            <livewire:delete :entity="$user" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
