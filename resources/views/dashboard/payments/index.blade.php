@extends('dashboard.layouts.base')

@section('title')
    مدیریت پرداختی ها
@endsection

@section('content')


    <div class="mt-4 w-1/3">
        <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
            <div class="sm:space-y-0 space-y-4 text-right global-rtl">
                <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                    تعداد پرداختی ها
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
    <x-dashboard.table  title="لیست پرداختی ها" >
        
        <div class="p-3">
            {!! $payments->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    کدرهگیری
                </th>
                <th scope="col" class="px-6 py-3">
                    مبلغ پرداختی
                    <span class="text-gray-400 text-xs">
                        (تومان) 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    نوع سرویس
                 </th>
                <th scope="col" class="px-6 py-3">
                   نوع درگاه
                </th>
                <th scope="col" class="px-6 py-3">
                    پاسخ درگاه
                </th>
                <th scope="col" class="px-6 py-3">
                    وضعیت پرداخت
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ ایجاد
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @if ($payments->isEmpty())
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
            @foreach ($payments as $payment)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $payment->refid }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $payment->amount }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $payment->getNameService() }}#{{ $payment->paymentable_id }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $payment->type }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $payment->result }}
                    </td>
                    <td class="px-6 py-4 text-center">

                        @if($payment->status == $payment::PENDING_STATUS)
                            <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $payment->getStatusName() }}
                            </span>
  
                        @elseif($payment->status == $payment::COMPLETED_STATUS)
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                {{ $payment->getStatusName() }}
                            </span>

                        @elseif($payment->status == $payment::REJECTED_STATUS)
                            <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                {{ $payment->getStatusName() }}
                            </span>
                        @endif
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $payment->getCreatedAt() }}
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
