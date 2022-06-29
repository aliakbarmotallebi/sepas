@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Products Order')  }}
@endsection

@section('content')



    <x-form.breadcrumb 
        label="لیست کل سفارشات دیگر" 
        route="{{ route('dashboard.orders.index') }}"/>

    <!-- Comments Table-->
    <x-dashboard.table  title="لیست محصولات سفارش" >
        <div class="m-3 flex items-center">

            @if($orders->isUnpaid())
                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                    پرداخت نشده
                </button>
            @else
                <button type="button" class="py-1 px-2 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <span class="text-xs ml-1 font-semibold">
                        کد رهگیری: 
                    </span>
                    {{ $orders->payment->refid }}
                </button>

                <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                    پرداخت شده
                </button>

                <button onclick="window.print()" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                        <span class="mr-1 text-xs">
                        پرینت فاکتور
                        </span>
                    </div>
                </button>
            @endif
        </div>
        


            <x-dashboard.table  title="مشخصات سفارش دهنده" >
                <x-slot name="header">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                           نام و نام خانوادگی
                        </th>
                        <th scope="col" class="px-6 py-3">
                            آدرس محل سکونت
                        </th>
                        <th scope="col" class="px-6 py-3">
                            نام کاربری
                        </th>
                    </tr>
                </x-slot>
                <x-slot name="content">

                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                               {{ $orders->owner->fullname }}
                            </th>
                            <td scope="row" class="px-6 py-4 text-center">
                                {{ $orders->owner->address }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $orders->owner->username }}
                            </td>
                        </tr>
                    
                </x-slot>
            </x-dashboard.table>
        </div>

        
        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    نام محصول
                </th>
                <th scope="col" class="px-6 py-3">
                    قیمت واحد
                    <span class="text-gray-400 text-xs">
                        (تومان) 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @if($orders->order_products->count() > 0 )
                @foreach ($orders->order_products as $order)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $order->product->title }}
                        </th>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $order->price }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end text-center">
                                <livewire:delete :entity="$order" :url="request()->fullUrl()"/>
                            </div>
                        </td>
                    </tr>
                @endforeach
                    <tr class="bg-gray-100">
                        <th colspan="2"  class="px-6 py-3 text-left font-bold">
                            مبلغ قابل پرداخت
                            <span class="text-gray-400 text-xs">
                                (تومان) 
                            </span>
                        </th>
                        <th class="px-6 py-3 text-left font-bold">
                            {{ $order->price }}
                        </th>
                    </tr>
            @endif
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
