@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Orders')  }}
@endsection

@section('content')


    <div class="mt-4 w-1/3">
        <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:stroke-indigo-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
            </div>
            <div class="sm:space-y-0 space-y-4 text-right global-rtl">
                <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                    تعداد سفارشات
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
    <x-dashboard.table  title="لیست سفارشات" >
        
        <div class="p-3">
            {!! $orders->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    شماره سفارش
                </th>
                <th scope="col" class="px-6 py-3">
                    قیمت کل
                    <span class="text-gray-400 text-xs">
                        (تومان) 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    تعداد محصول
                </th>
                <th scope="col" class="px-6 py-3">
                    کاربر ایجاد کننده
                </th>
                <th scope="col" class="px-6 py-3">
                    وضعیت سفارش 
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
            @foreach ($orders as $order)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        #{{ $order->id }}
                    </th>
                    <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->order_no }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $order->total_price }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $order->products_order_count }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $order->owner->username }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <livewire:status :entity="$order" />
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $order->getCreatedAt() }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end text-center">
                            <a href="{{ route('dashboard.orders.show', $order) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                </a>
                            <livewire:delete :entity="$order" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
