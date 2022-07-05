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
        <x-dashboard.cart title="ویرایش کمپین">
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                <form action="{{ route('dashboard.campaigns.update', $campaign) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-x-4 gap-y-1 p-5">

                        <x-form.input label="عنوان کمپین" :value="$campaign->title" name="title" required/>

                        <div class="grid grid-cols-2 gap-x-4">

                            <x-form.input label="قیمت ریال" :value="$campaign->getRawOriginal('total_price')" name="total_price" required/>

                        </div>
    
                        <div class="mt-1 col-span-2">
                            <x-form.textarea label="توضیحات کمپین" :value="$campaign->description" name="description" required/>
                        </div>
                        
                        <x-form.input label="نام سفیر" name="safir_name" :value="$campaign->safir_name" required/>

                        <div>
                            <x-form.file label="تصویر شاخص" name="image"/>
                            <a href="{{ $campaign->getImageUrl() }}" target="_blank" class="rounded-lg border-2 shadow-md hover:bg-gray-100 ">
                                <img class="object-cover w-full h-2/3 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $campaign->getImageUrl() }}" alt="">
                            </a>
                        </div>



                        <div class="col-span-2 border-t">
                            <div class="flex justify-start">
                                <button  class="flex justify-center cursor-pointer border-theme-32 rounded-md border font-medium px-3 py-2 text-center transition-all duration-200 hover:opacity-90 hover:border-opacity-90 block w-40 mx-auto mt-5 hover:bg-theme-31
                                focus:outline-2 focus:ring-4">
                                    <span>
                                        ویرایش کمپین
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
