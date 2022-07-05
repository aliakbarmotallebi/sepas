@extends('dashboard.layouts.base')

@section('title')
    مدیریت رویداد ها
@endsection

@section('content')
<section class="mt-4">

    <x-form.breadcrumb 
    label="ایجاد رویداد جدید" 
    route="{{ route('dashboard.events.create') }}"/>


    <!-- Comments Table-->
    <x-dashboard.table  title="لیست رویداد" >
        
        <div class="p-3">
            {!! $events->links('pagination::tailwind') !!}
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
                    تاریخ ایجاد
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ برگزاری
                </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @foreach ($events as $event)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <td scope="row" class="w-28 p-2">
                    <img class="mr-2 w-24 h-24 rounded-lg object-cover" src="{{ $event->getImageUrl() }}">
                    </td>
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $event->title }}
                    </th>
                    <td scope="row" class="px-6 py-4">
                        {{ $event->price }}
                    </td>
                    <td scope="row" class="px-6 py-4">
                        {{ $event->schedule_at }}
                    </td>
                    <td scope="row" class="px-6 py-4">
                        {{ $event->getCreatedAt() }}
                    </td>
                  
                    <td class="px-6 py-4">
                        <div class="flex text-center justify-center">
                            <a href="{{ route('dashboard.events.edit', $event) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
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
                            <livewire:delete :entity="$event" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>

    </x-dashboard.table>
    <!-- /Comments Table-->
</section>


@endsection