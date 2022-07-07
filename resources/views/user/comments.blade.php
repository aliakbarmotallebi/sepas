
@extends('user.layouts.base')

@section('title')
  لیست نظرات 
@endsection

@section('content')
 <div class="flex flex-col justify-between">
  <div class="w-full shadow px-6 py-6 bg-white rounded-lg">
      <div class="flex items-center justify-between mb-4 pb-4 border-b">
          <div class="text-left">
              <h2 class="font-semibold text-gray-900">
                لیست نظرات
              </h2>
          </div>
      </div>

      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="border border-gray-200">
                <th scope="col" class="w-[10px] text-right px-6 py-3">
                  متن نظر	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  محصول یا دوره مرتبط	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                  وضعیت نظر	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                    تاریخ ایجاد	
                </th>
                <th scope="col" class="text-center px-6 py-3">
                    امتیاز
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 last:border-b-0">
                  <th colspan="2" class="w-[20px] text-right px-2 py-1 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                     {{ $comment->message }}
                     <a class="block text-xs text-blue-400 underline" href="{{ $comment->commentable->slug }}">
                      {{ $comment->commentable->title }}
                      </a>
                  </th>
                  <td class="px-6 py-4">
                    @if ($comment->hasPublished() )
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
                    {{ $comment->getCreatedAt() }}
                  </td>
                  <td class="px-6 py-4 text-right">
                    <button class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                        <span class="ml-1">
                            {{ $comment->averageRating ?? 0 }}
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </button>
                  </td>
              </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
      {!! $comments->links('pagination::tailwind') !!}
    </div>
  </div>
</div>
@endsection