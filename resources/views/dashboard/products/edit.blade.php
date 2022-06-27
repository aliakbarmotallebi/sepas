@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Products Edit') }}
@endsection

@section('content')

    <section class="mt-4">

        <x-form.breadcrumb 
            label="لیست کل محصولات" 
            route="{{ route('dashboard.products.index') }}"/>


        <!-- Comments edit-->
        <x-dashboard.cart title="لیست محصولات">
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                @livewire('dashboard.product.create', [
                    'product' => $product
                ])
            </x-slot>

        </x-dashboard.cart>
        <!-- /Comments edit-->
    </section>
@endsection
