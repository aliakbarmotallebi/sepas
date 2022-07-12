@extends('dashboard.layouts.base')

@section('title')
سوالات دوره     
@endsection

@section('content')
    <section class="mt-4">

        <x-form.breadcrumb 
        label="سوالات دوره" 
        route="{{ route('dashboard.courses.index') }}"/>

        <!-- Courses Table-->
        <x-dashboard.cart title="سوالات دوره" >
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                @livewire('dashboard.course.question',
                    ['course' => $course]
                )
            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>

@endsection