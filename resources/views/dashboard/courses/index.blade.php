@extends('dashboard.layouts.base')

@section('title')
    مدیریت دوره ها
@endsection

@section('content')
    <section class="mt-4">
        <div>
            <a href="{{ route('dashboard.courses.create') }}" class="flex border justify-between items-center bg-white text-sky-700 hover:bg-white px-3 py-2 rounded-lg hover:text-sky-700 text-sm">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 ml-1"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
                ایجاد دوره جدید
            </a>
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
                    <div class="w-28">
                        <img class="w-28 h-28 rounded-md object-cover" src="{{ asset('images/test.png') }}"/>
                    </div>
                    <div class="flex flex-col px-6">
                        <div class="flex h-8 flex-row">
                            <a href="" target="_blank">
                                <h2 class="text-lg font-semibold">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                </h2>
                            </a>
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
                        
                                    <span class="font-bold text-gray-600"> 100 </span>
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
                        
                                    <span class="font-bold text-gray-600"> 2 </span>
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
                        
                                    <span class="font-bold text-gray-600"> 1401-10-11 </span>
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
    
                            <button
                            class="ml-2 flex items-center rounded border border-rose-500 p-[4.8px] text-rose-500 transition-all duration-150 ease-in-out hover:text-white hover:bg-rose-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polyline points="3 6 5 6 21 6" />
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                    <line x1="10" y1="11" x2="10" y2="17" />
                                    <line x1="14" y1="11" x2="14" y2="17" />
                                </svg>
                            </button>

                            <button
                            class="ml-2 flex items-center rounded border border-gray-500 p-[4.8px] text-gray-500 transition-all duration-150 ease-in-out hover:text-white hover:bg-gray-800">
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
                            </button>

                        </div>
                    </div>
                </div>
                @endforeach

            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>
@endsection