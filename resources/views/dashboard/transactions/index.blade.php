@extends('dashboard.layouts.base')

@section('title')
    مدیریت تراکنش ها
@endsection

@section('content')


    <div class="mt-4 w-1/3">
        <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
            <div class="sm:space-y-0 space-y-4 text-right global-rtl">
                <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                    تعداد تراکنش ها
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
    <x-dashboard.table  title="لیست تراکنش ها" >
        
        <div class="p-3">
            {!! $transactions->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    شماره تراکنش
                </th>
                <th scope="col" class="px-6 py-3">
                    مبلغ تراکنش
                    <span class="text-gray-400 text-xs">
                        (تومان) 
                    </span>
                </th>
                <th scope="col" class="px-6 py-3">
                    نوع سرویس
                 </th>
                <th scope="col" class="px-6 py-3">
                    کاربرایجاد کننده
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
            @foreach ($transactions as $transaction)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $transaction->id }}
                    </td>
                    <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $transaction->transaction_code }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $transaction->amount }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $transaction->getNameService() }}#{{ $transaction->transactable_id }}
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $transaction->owner->username }}
                    </td>
                    <td class="px-6 py-4 text-center">

                        @if($transaction->status == $transaction::PENDING_STATUS)
                            <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $transaction->getStatusName() }}
                            </span>
  
                        @elseif($transaction->status == $transaction::COMPLETED_STATUS)
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                {{ $transaction->getStatusName() }}
                            </span>

                        @elseif($transaction->status == $transaction::REJECTED_STATUS)
                            <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                {{ $transaction->getStatusName() }}
                            </span>
                        @endif
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $transaction->getCreatedAt() }}
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
