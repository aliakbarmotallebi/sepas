@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Messages')  }}
@endsection

@section('content')


<div class="mt-4 w-1/3">
    <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
        <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
            <svg class="h-6 w-6 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
        </div>
        <div class="sm:space-y-0 space-y-4 text-right global-rtl">
            <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                تعداد پیام ها
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
    <x-dashboard.table  title="لیست پیام های کاربران" >
        
        <div class="p-3">
            {!! $messages->links('pagination::tailwind') !!}
        </div>

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
                <tr class="bg-white border-b">
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $message->fullname }}
                    </th>
                    <td scope="row" class="px-6 py-4">
                        {{ $message->text }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <livewire:status :entity="$message" />
                    </td>
                    <td scope="row" class="px-6 py-4">
                        {{ $message->getAge() }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex text-center">
                            <button type="button" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
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
                            <livewire:delete :entity="$message" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
