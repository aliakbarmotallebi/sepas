@extends('dashboard.layouts.base')

@section('title')
    مدیریت دوره ها
@endsection

@section('content')
    <section class="mt-4">

        
        <x-form.breadcrumb 
        label="ایجاد دوره جدید" 
        route="{{ route('dashboard.courses.create') }}"/>

        <div class="flex justify-between items-center my-5">
            <div class="flex-1">
                <div class="relative md:w-1/3">
                    <form action="" method="get">
                        <input name="q" type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" 
                        placeholder="براساس عنوان و توضیحات" 
                        value="{{ request()->get('q') }}"
                        >
                        <button type="submit" class="absolute top-0 left-0 inline-flex items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <circle cx="10" cy="10" r="7"></circle>
                                <line x1="21" y1="21" x2="15" y2="15"></line>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Courses Table-->
        <x-dashboard.cart title="لیست دوره ها" >
            <x-slot name="header">
                <div class="flex justify-end w-full">
                    {!! $courses->links('pagination::tailwind') !!}
                </div>
            </x-slot>
            <x-slot name="content">

                @foreach ($courses as $course)
                <div class="w-full flex flex-row border border-gray-200/80 bg-white p-4">
                    <div class="w-28 relative">
                        <div class="absolute left-2 bottom-2 bg-black/20 p-1 rounded-full">
                            <livewire:status :entity="$course" />
                        </div>
                        <img class="w-28 h-28 rounded-md object-cover" src="{{ $course->getImageUrl() }}"/>
                    </div>
                    <div class="flex flex-col px-6">
                        <div class="flex h-8 flex-row">
                            <a href="" target="_blank">
                                <h2 class="text-lg font-semibold">
                                   {{ $course->title }}
                                </h2>
                            </a>
                            
                        </div>

                        <div class="text-gray-600 text-xs p-1">
                            {{ $course->body }}
                        </div>

                        <div class="mt-2 flex flex-row items-center">
                            <a href="#"
                                class="flex px-2 py-1 ml-1 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">
                                    <svg class="w-4 h-4 ml-1 fill-gray-500/95" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                        d="M12,23A1,1 0 0,1 11,22V19H7A2,2 0 0,1 5,17V7A2,2 0 0,1 7,5H21A2,2 0 0,1 23,7V17A2,2 0 0,1 21,19H16.9L13.2,22.71C13,22.89 12.76,23 12.5,23H12M13,17V20.08L16.08,17H21V7H7V17H13M3,15H1V3A2,2 0 0,1 3,1H19V3H3V15M9,9H19V11H9V9M9,13H17V15H9V13Z" />
                                        </svg>
                        
                                    <span class="font-bold text-gray-600"> 
                                        {{ $course->comments_count }}    
                                    </span>
                                </div>
                            </a>
                            <a href="#"
                                class="flex ml-1 px-2 py-1 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 ml-1 stroke-gray-500/95"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        >
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                        <circle cx="12" cy="12" r="3" />
                                        </svg>
                        
                                    <span class="font-bold text-gray-600"> {{ $course->visit_count }}  </span>
                                </div>
                            </a>
                            <a href="#"
                                class="flex ml-1 px-2 py-1 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 ml-1 stroke-gray-500/95"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        >
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12 6 12 12 16 14" />
                                        </svg>
                        
                                    <span class="font-bold text-gray-600"> 
                                        {{ $course->getCreatedAt() }}
                                    </span>
                                </div>
                            </a>

                            @if ($course->hasPublished() )
                                <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                    منتشر شده
                                </span>
                            @else
                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                    منتشر نشده
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="mr-auto">
                        <div class="flex flex-row">
    
                            <div class="flex text-center">
                                <a href="{{ route('dashboard.courses.uploads', $course) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                                </a>

                                <a href="{{ route('dashboard.courses.edit', $course) }}" target="_blank" class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
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
                                <livewire:delete :entity="$course" :url="request()->fullUrl()"/>
                            </div>
        
                        </div>
                    </div>
                </div>
                @endforeach

            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>
@endsection