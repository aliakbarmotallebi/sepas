@extends('dashboard.layouts.base')

@section('title')
    مدیریت دوره ها
@endsection

@section('content')
    <section class="mt-4">
        
        <x-form.breadcrumb 
        label="لیست کل دوره ها" 
        route="{{ route('dashboard.courses.index') }}"/>

        <!-- Courses Table-->
        <x-dashboard.cart title="ایجاد دوره جدید" >
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                <form action="{{ route('dashboard.courses.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-x-4 gap-y-1 p-5">

                        <x-form.input label="عنوان دوره" name="title" required/>

                        <div class="grid grid-cols-2 gap-x-4">

                            <x-form.input label="قیمت ریال" name="price" required/>

                            <x-form.select label="دسته بندی" name="category_id" placeholder="دسته بندی خودرا انتخاب کنید" required :options="$categories->pluck('label', 'id')->toArray()"/>                        
                        </div>
    
                        <div class="mt-1 col-span-2">
                            <x-form.textarea label="توضیحات دوره" name="description" required/>
                        </div>
                            
                        <x-form.textarea label="سرفصل" name="topics" required/>

                        <x-form.textarea label="پیش نیازها" name="requirements" required />

                        <x-form.select label="آموزشیار" name="instructor_id" placeholder="آموزشیار دوره را انتخاب کنید" required :options="$users->pluck('username', 'id')->toArray()"/>

                        <x-form.select label="واحد" name="unit" placeholder="واحد مبلغ پرداختی را انتخاب کنید" required :options="[
                            'IRR' => 'ریال',
                            'USD' => 'دلار'
                            ]"/>

                        <x-form.select label="نوع دوره" name="type" placeholder="نوع دوره را انتخاب کنید" required :options="[
                            'ONLINE' => 'انلاین',
                            'OFFLINE'=> 'آفلاین',
                            'BOTH'   => 'آنلاین و آفلاین'
                        ]"/>

                        <x-form.file label="تصویر شاخص" name="image" required/>


                        <div class="col-span-2 border-t">
                            <div class="flex justify-start">
                                <button  class="flex justify-center cursor-pointer border-theme-32 rounded-md border font-medium px-3 py-2 text-center transition-all duration-200 hover:opacity-90 hover:border-opacity-90 block w-40 mx-auto mt-5 hover:bg-theme-31
                                focus:outline-2 focus:ring-4">
                                    <span>
                                        ذخیره دوره
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

@section('scripts')
    <script>
            $(document).ready(function() {
                $('.categories').select2();
            });
    </script>
@endsection