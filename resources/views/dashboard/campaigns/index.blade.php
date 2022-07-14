@extends('dashboard.layouts.base')

@section('title')
    مدیریت کمپین ها
@endsection

@section('content')
<section class="mt-4">
    <x-form.breadcrumb 
    label="ایجاد کمپین جدید" 
    route="{{ route('dashboard.campaigns.create') }}"/>

    <div class="flex justify-between items-center my-5">
        <div class="flex-1">
            <div class="relative md:w-1/3">
                <form action="" method="get">
                    <input name="q" type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" 
                    placeholder="براساس عنوان و توضیحات" 
                    value="{{ request()->get('q') }}"
                    >
                    <button type="submit" class="absolute top-0 left-0 inline-flex items-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Comments Table-->
    <x-dashboard.table  title="لیست کمپین" >
        
        <div class="p-3">
            {!! $campaigns->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    تصویر کاور
                </th>
                <th scope="col" class="px-6 py-3">
                    عنوان
                </th>
                <th scope="col" class="px-6 py-3">
                    مبلغ
                    <span class="text-gray-400 text-xs">
                        (تومان) 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    مبلغ مازاد
                    <span class="text-gray-400 text-xs">
                        (تومان) 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    وضعیت محصول 
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ ایجاد
                </th>
                <th scope="col" class="px-6 py-3">
                    شمارنده
                </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @if ($campaigns->isEmpty())
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
            @foreach ($campaigns as $campaign)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <td scope="row" class="w-28 p-2">
                    <img class="mr-2 w-24 h-24 rounded-lg object-cover" src="{{ $campaign->getImageUrl() }}">
                    </td>
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $campaign->title }}
                    </th>
                    <td scope="row" class="px-6 py-4">
                        {{ $campaign->total_price }}
                    </td>
                    <td scope="row" class="px-6 py-4">
                        {{ $campaign->extra_price }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <livewire:status :entity="$campaign" />
                    </td>
                    <td scope="row" class="px-6 py-4">
                        {{ $campaign->getCreatedAt() }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex text-center justify-center">
                            <button class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                <span class="ml-1">
                                    {{ $campaign->comments_count ?? 0 }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </button>
                            <button class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                <span class="ml-1">
                                    {{ $campaign->sold_count ?? 0 }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>                            </button>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex text-center justify-center">
                            <a href="{{ route('dashboard.campaigns.edit', $campaign) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
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
                            <livewire:delete :entity="$campaign" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>

    </x-dashboard.table>
    <!-- /Comments Table-->
</section>


@endsection