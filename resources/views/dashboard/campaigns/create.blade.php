@extends('dashboard.layouts.base')

@section('title')
    مدیریت کمپین ها
@endsection

@section('content')
    <section class="mt-4">
        
        <x-form.breadcrumb 
        label="لیست کل کمپین ها" 
        route="{{ route('dashboard.campaigns.index') }}"/>

        <!-- campaigns Table-->
        <x-dashboard.cart title="ایجاد کمپین جدید" >
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                <form action="{{ route('dashboard.campaigns.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-x-4 gap-y-1 p-5">

                        <x-form.input label="عنوان کمپین" name="title" required/>

                        <div class="grid grid-cols-2 gap-x-4">

                            <x-form.input label="قیمت ریال" name="total_price" required/>

                        </div>
    
                        <div class="mt-1 col-span-2">
                            <x-form.textarea label="توضیحات کمپین" name="description" required/>
                        </div>
                        
                        <x-form.input label="نام سفیر" name="safir_name" required/>

                        <x-form.file label="تصویر شاخص" name="image" required/>


                        <div class="col-span-2 border-t">
                            <div class="flex justify-start">
                                <button  class="flex justify-center cursor-pointer border-theme-32 rounded-md border font-medium px-3 py-2 text-center transition-all duration-200 hover:opacity-90 hover:border-opacity-90 block w-40 mx-auto mt-5 hover:bg-theme-31
                                focus:outline-2 focus:ring-4">
                                    <span>
                                        ذخیره کمپین
                                    </span>
                                </button>
                            </div>
                        </div>
                </form> 
            </x-slot>
        </x-dashboard.cart>
        <!-- /campaigns Table-->
    </section>
@endsection
