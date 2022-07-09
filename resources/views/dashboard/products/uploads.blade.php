@extends('dashboard.layouts.base')

@section('title')
    بارگذاری عکس محصولات ها
@endsection

@section('content')
    <section class="mt-4">

        <x-form.breadcrumb 
        label="لیست محصولات ها" 
        route="{{ route('dashboard.products.index') }}"/>

        <!-- Courses Table-->
        <x-dashboard.cart title="بارگذاری عکس برای محصول" >
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                @livewire('dashboard.image-upload', 
                    [ 'em' => $product ] 
                )
            </x-slot>
        </x-dashboard.cart>
        <!-- /Courses Table-->
    </section>

@endsection