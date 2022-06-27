@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Comments')  }}
@endsection

@section('content')

    <div class="mt-4 w-1/3">
        <div class="shadow bg-white rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center global-rtl">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:stroke-indigo-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            </div>
            <div class="sm:space-y-0 space-y-4 text-right global-rtl">
                <h5 class="text-gray-500 mb-1.5 text-xs font-medium global-rtl">
                    تعداد محصولات
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
    <x-dashboard.table  title="لیست نظرات" >
        
        <div class="p-3">
            {!! $comments->links('pagination::tailwind') !!}
        </div>

        <x-slot name="header">
            <tr>
                <th scope="col" class="px-6 py-3">
                    نام کاربری
                </th>
                <th scope="col" class="px-6 py-3">
                    متن نظر
                </th>
                <th scope="col" class="px-6 py-3">
                    محصول یا دوره مرتبط
                </th>

                <th scope="col" class="px-6 py-3">
                   وضعیت نظر
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ ایجاد
                </th>
                <th scope="col" class="px-6 py-3">
                    شمارنده
                 </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
        </x-slot>
        <x-slot name="content">
            @foreach ($comments as $comment)
                <tr class="bg-white border-b hover:bg-gray-100">
                    <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                        {{ $comment->owner->username }}
                    </th>
                    <td scope="row" class="px-6 py-4 text-center">
                        @if($comment->parent_id)
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg>
                        @endif
                        {{ $comment->message }}
                    </td>

                    <td scope="row" class="px-6 py-4 text-center">
                        <a href="{{ $comment->commentable->slug }}">
                            {{ $comment->commentable->title }}
                        </a>
                    </td>

                    <td class="px-6 py-4 text-center">
                        <livewire:status :entity="$comment" />
                    </td>
                    <td scope="row" class="px-6 py-4 text-center">
                        {{ $comment->getCreatedAt() }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex text-center justify-end">
                            <button class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                <span class="ml-1">
                                    {{ $comment->replies->count() ?? 0 }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </button>
                            <button class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                <span class="ml-1">
                                    {{ $comment->averageRating ?? 0 }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </button>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex text-center justify-end">
                            <a href="{{ route('dashboard.comments.show', $comment) }}" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                            </a>
                            <livewire:delete :entity="$comment" :url="request()->fullUrl()"/>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
   
    </x-dashboard.table>
    <!-- /Comments Table-->
@endsection
