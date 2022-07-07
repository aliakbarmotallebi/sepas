
@extends('user.layouts.base')

@section('title')
لیست تراکنش ها    
@endsection

@section('content')
 <div class="flex flex-col justify-between">
  <div class="max-w-sm w-full lg:max-w-full shadow px-6 py-6 bg-white rounded-lg">
    <div class="flex items-center justify-between mb-4 pb-4 border-b">
        <div class="text-left">
            <h2 class="font-semibold text-gray-900">
              لیست تراکنش ها
            </h2>
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr class="border border-gray-200">
              <th scope="col" class="text-right px-6 py-3">
                شماره تراکنش	
              </th>
              <th scope="col" class="text-center px-6 py-3">
                مبلغ تراکنش 
                <span class="text-gray-400">
                  (تومان)  
                </span>	
              </th>
              <th scope="col" class="text-center px-6 py-3">
                نوع تراکنش	
              </th>
              <th scope="col" class="text-center px-6 py-3">
                وضعیت پرداخت	
              </th>
              <th scope="col" class="text-center px-6 py-3">
                  تاریخ ایجاد	
              </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($transactions as $transaction)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 last:border-b-0">
                <td class="text-right px-2 py-1 font-medium text-blue-400 dark:text-white whitespace-nowrap">
                   {{ $transaction->transaction_code }}
                </td>
                <td class="px-6 py-4 text-center">
                  {{ $transaction->amount }}
                </td>
                <td class="px-6 py-4 text-center">
                  {{ $transaction->getNameService() }}#{{ $transaction->transactable_id }}
                </td>
                <td class="px-6 py-4">
                  @if ($transaction->hasPublished() )
                      <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                          منتشر شده
                      </span>
                  @else
                      <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                          منتشر نشده
                      </span>
                  @endif
                </td>
                <td class="px-6 py-4">
                  {{ $transaction->getCreatedAt() }}
                </td>
            </tr>
          @endforeach
      </tbody>
  </table>

  <div class="mt-3">
    {!! $transactions->links('pagination::tailwind') !!}
  </div>

  </div>
</div>
@endsection