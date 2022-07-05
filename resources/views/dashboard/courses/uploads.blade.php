@extends('dashboard.layouts.base')

@section('title')
    مدیریت دوره ها
@endsection

@section('content')
    <section class="mt-4">

        <x-form.breadcrumb 
        label="لیست دوره ها" 
        route="{{ route('dashboard.courses.index') }}"/>

        <!-- Courses Table-->
        <x-dashboard.cart title="بارگذاری عکس برای دوره" >
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                @livewire('dashboard.image-upload', 
                    [ 'em' => $course ] 
                )

            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>

    <section class="mt-4">
        <!-- Courses Table-->
        <x-dashboard.cart title="بارگذاری ویدیو " >
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                @if($course->getVideoUrl())
                    <div class="p-2">
                        <video width="400" controls>
                            <source src="{{ asset($course->getVideoUrl()) }}" >
                        </video>
                    </div>
                @endif 
                    <form class="w-1/2 p-2" action="{{ route('dashboard.courses.uploads.video', $course) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-form.file label="ویدیو دوره" name="video" required/>
                        <div class="col-span-2 border-t">
                            <div class="flex justify-start">
                                <button  class="flex justify-center hover:bg-gray-300 cursor-pointer border-theme-32 rounded-md border font-medium px-2 py-1 text-center transition-all duration-200 hover:opacity-90 hover:border-opacity-90 block w-40 mx-auto mt-5 hover:bg-theme-31
                                focus:outline-2 focus:ring-4">
                                    <span class="text-xs">
                                        بارگذاری ویدیو
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>

            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>
@endsection