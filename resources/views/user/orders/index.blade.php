
@extends('user.layouts.base')

@section('title')
  لیست سفارشات 
@endsection

@section('content')
 <div class="flex flex-col justify-between">
  <div class="w-full shadow px-6 py-6 bg-white rounded-lg">
      <div class="flex items-center justify-between mb-4 pb-4 border-b">
          <div class="text-left">
              <h2 class="font-semibold text-gray-900">
                لیست سفارشات
              </h2>
          </div>
      </div>

      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="text-right px-6 py-3">
                  شماره	سفارش
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  قیمت	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  وضعیت پرداخت	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                    تاریخ ایجاد	
                </th>
                <th scope="col" class="text-center px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th class="w-[20px] text-right px-2 py-1 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                     {{ $order->order_no }}
                  </th>
                  <td class="px-6 py-4 text-center">
                    {{ $order->total_price }}
                  </td>
                  <td class="px-6 py-4 text-center">
                    @if ($order->isPaid() )
                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                            پرداخت شده
                        </span>
                    @else
                        <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                            پرداخت نشده
                        </span>
                    @endif
                  </td>
                  <td class="px-6 py-4 text-center">
                    {{ $order->getCreatedAt() }}
                  </td>
                  <td class="px-6 py-4 text-center">
                    <a href="{{ route('panel.orders.show', $order) }}" target="_blank" class="inline-flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    </a>
                  </td>
              </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
      {!! $orders->links('pagination::tailwind') !!}
    </div>
  </div>
</div>
@endsection