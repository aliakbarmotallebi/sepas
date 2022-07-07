
@extends('user.layouts.base')

@section('title')
لیست محصولات سفارش
@endsection

@section('content')
 <div class="flex flex-col justify-between">
  <div class="w-full shadow px-6 py-6 bg-white rounded-lg">
      <div class="flex items-center justify-between mb-4 pb-4 border-b">
          <div class="text-left">
              <h2 class="font-semibold text-gray-900">
                لیست محصولات سفارش
              </h2>
          </div>
      </div>

        <div class="print:mb-5 m-3 flex items-center">

            @if($products->isUnpaid())
                <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                    پرداخت نشده
                </button>
            @else
                <button type="button" class="py-1 px-2 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <span class="text-xs ml-1 font-semibold">
                        کد رهگیری: 
                    </span>
                    {{ $products->payment->refid }}
                </button>

                <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                    پرداخت شده
                </button>
            @endif
            <button onclick="window.print()" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                    <span class="mr-1 text-xs">
                    پرینت فاکتور
                    </span>
                </div>
            </button>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="text-center font-semibold px-6 py-3">
                    نام و نام خانوادگی
                    </th>
                    <th scope="col" class="text-center font-semibold px-6 py-3">
                        آدرس محل سکونت
                    </th>
                    <th scope="col" class="text-center font-semibold px-6 py-3">
                        نام کاربری
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white print:border-y border-b hover:bg-gray-100">
                    <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $products->owner->fullname }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $products->owner->address }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $products->owner->username }}
                    </td>
                </tr>
            </tbody>
        </table>


        <table class="mt-5 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="print:mt-4">
                    <th scope="col" class="text-center font-semibold px-6 py-3">
                        نام محصول
                    </th>
                    <th scope="col" class="text-center font-semibold px-6 py-3">
                        قیمت واحد
                        <span class="text-gray-400 text-xs">
                            (تومان) 
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($products->order_products->count() > 0 )
                    @foreach ($products->order_products as $order)
                        <tr class="bg-white print:border-y border-b hover:bg-gray-100">
                            <th class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $order->product->title }}
                            </th>
                            <td scope="row" class="px-6 py-4 text-center">
                                {{ $order->price }}
                            </td>
                        </tr>
                    @endforeach
                    <tr class="bg-gray-100">
                        <th class="font-semibold px-6 py-3 text-left">
                            مبلغ قابل پرداخت
                            <span class="text-gray-400 text-xs">
                                (تومان) 
                            </span>
                        </th>
                        <th class="px-6 py-3 text-left font-bold">
                            {{ $products->total_price }}
                        </th>
                    </tr>
                @endif
            </tbody>
        </table>





  </div>
</div>
@endsection