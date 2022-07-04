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
                    upload video

            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>
@endsection