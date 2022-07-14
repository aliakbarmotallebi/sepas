@extends('dashboard.layouts.base')

@section('title')
    پیام های تماس با ما
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
                    وضعیت پیام 
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
            @if ($messages->isEmpty())
            <tr class="bg-white border-b hover:bg-gray-100">
                <td colspan="100">
                    <div class="text-gray-400 flex flex-col justify-center items-center p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                        <span class="text-xs tracking-tight">
                            هیچ داده ای وجود ندارد!
                        </span>
                    </div>
                </td>
            </tr>
            @endif
            @foreach ($messages as $message)
                <tr class="bg-white border-b hover:bg-gray-100">
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
                            <livewire:delete :entity="$message" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
