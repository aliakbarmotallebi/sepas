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
        <x-dashboard.cart title="ویرایش دوره">
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                <form action="{{ route('dashboard.courses.update', $course) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-x-4 gap-y-1 p-5">

                        <x-form.input label="عنوان دوره" name="title" required :value="$course->title"/>

                        <div class="grid grid-cols-2 gap-x-4">

                            <x-form.input label="قیمت ریال" name="price" :value="$course->getRawOriginal('price')" required/>

                            <x-form.select label="دسته بندی" name="category_id" :value="$course->title" placeholder="دسته بندی خودرا انتخاب کنید" required :options="$categories->pluck('label', 'id')->toArray()"
                                :selected="$course->categories->category_id??null" />                        
                        </div>
    
                        <div class="mt-1 col-span-2">
                            <x-form.textarea label="توضیحات دوره" name="description" :value="$course->description" required/>
                        </div>
                            
                        <x-form.textarea label="سرفصل" name="topics" :value="$course->topics" required/>

                        <x-form.textarea label="پیش نیازها" name="requirements" :value="$course->requirements" required />

                        <x-form.select label="آموزشیار" name="instructor_id" placeholder="آموزشیار دوره را انتخاب کنید" required :options="$users->pluck('username', 'id')->toArray()"
                            
                            :selected="$course->instructor_id"/>

                        <x-form.select label="واحد" name="unit" placeholder="واحد مبلغ پرداختی را انتخاب کنید" required :options="[
                            'IRR' => 'IRR',
                            'USD' => 'USD'
                            ]"
                            :selected="$course->unit"/>

                        <x-form.select label="نوع دوره" name="type" placeholder="نوع دوره را انتخاب کنید" required :options="[
                            'ONLINE' => 'ONLINE',
                            'OFFLINE' => 'OFFLINE'
                        ]"
                        :selected="$course->type"
                        />

                        <div>
                            <x-form.file label="تصویر شاخص" name="image"/>
                            <a href="{{ $course->getImageUrl() }}" target="_blank" class="rounded-lg border-2 shadow-md hover:bg-gray-100 ">
                                <img class="object-cover w-full h-2/3 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $course->getImageUrl() }}" alt="">
                            </a>
                        </div>


                        <div class="col-span-2 border-t mt-2">
                            <div class="flex justify-start">
                                <button  class="flex justify-center cursor-pointer border-theme-32 rounded-md border font-medium px-3 py-2 text-center transition-all duration-200 hover:opacity-90 hover:border-opacity-90 block w-40 mx-auto mt-5 hover:bg-theme-31
                                focus:outline-2 focus:ring-4">
                                    <span>
                                        ویرایش دوره
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