@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Products Edit') }}
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

        <!-- Comments edit-->
        <x-dashboard.cart title="لیست محصولات">
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                <form action="{{ route('dashboard.products.update', $product) }}" method="post">
                   
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-2 px-5 pb-5 gap-2">

                        <x-form.input label="عنوان محصول" name="title" value="{{ $product->title }}" required/>

                        <x-form.input label="قیمت محصول" name="price" value="{{ $product->getRawOriginal('price') }}" required/>

                        <div class="col-span-2"> 
                            <x-form.textarea label="توضیحات محصول" value="{{ $product->description }}" name="description" required/>
                        </div>

                        <div class="col-span-2 border-t">
                               <x-form.button label="ویرایش محصول"/>
                        </div>

                    </div>
                </form>
            </x-slot>

        </x-dashboard.cart>
        <!-- /Comments edit-->
    </section>
@endsection
