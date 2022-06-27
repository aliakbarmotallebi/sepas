@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Orders')  }}
@endsection

@section('content')


    <!-- Comments Table-->
    <x-dashboard.table  title="لیست سفارشات" >
        
        <div class="p-3">
            {!! $orders->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
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
                        {{ $order->order_no }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $order->total_price }}
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
                            <a href="{{ route('dashboard.orders.edit', $order) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
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
