
@extends('user.layouts.base')

@section('title')
    پروفایل
@endsection

@section('content')
 <div class="flex flex-col justify-between">
  <div class="max-w-sm w-full lg:max-w-full shadow px-6 py-6 bg-white rounded-lg">
      <div class="flex items-center justify-between mb-4 pb-4 border-b">
          <div class="text-left">
              <h2 class="font-semibold text-gray-900">
               کمپین های ثبت نام شده
              </h2>
          </div>
      </div>

      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="border border-gray-200">
                <th scope="col" class="text-right px-2 py-1">
                  نام کمپین
                </th>
                <th scope="col" class="text-center px-6 py-3">
                   نام سفیر	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  مبلغ پرداختی 
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  وضعیت	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  تاریخ ایجاد	
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campaigns as $campaign)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 last:border-b-0">
                  <td class="text-right px-2 py-1 font-medium text-blue-400 dark:text-white whitespace-nowrap">
                     <a href="{{  $campaign->transactable->slug }}">
                        {{ $campaign->transactable->title }}
                     </a>
                  </td>
                  <td class="px-6 py-4 text-center">
                    {{ $campaign->transactable->safir_name }}
                  </td>
                  <td class="px-6 py-4 text-center">
                    {{ $campaign->amount }}
                  </td>
                  <td class="px-6 py-4 text-center">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900">
                        {{ $campaign->getStatusName() }}
                    </span>
                  </td>
                  <td class="px-6 py-4 text-center">
                    {{ $campaign->getCreatedAt() }}
                  </td>
              </tr>
            @endforeach
        </tbody>
    </table>
  
    <div class="mt-3">
      {!! $campaigns->links('pagination::tailwind') !!}
    </div>

  </div>
</div>
@endsection