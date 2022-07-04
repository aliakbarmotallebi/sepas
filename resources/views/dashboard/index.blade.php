@extends('dashboard.layouts.base')

@section('title')
    Dashboard
@endsection

@section('content')

    <x-dashboard.box-report/>

    <!-- Filters Section -->
    <section>
        <div class="bg-rose-100/70 mt-12  rounded-xl px-5 sm:px-10  pt-8 pb-4 relative bg-no-repeat bg-right bg-contain ">
            <div class="text-rose-400 font-semibold text-lg">
                اطلاعیه سایت
            </div>

            <div class="mt-5 text-gray-500 text-sm ">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
            </div>
        </div>

    </section>
    <!-- /Filters Section -->

    <div class="grid grid-cols-3 gap-3">
        <!-- Users Latest Table-->
        <x-dashboard.cart title="لیست آخرین کاربران">
            <x-slot name="header">
                <div class="w-1/3 flex-none flex items-center mr-5 text-gray-600 text-sm">
                    <span>نام کاربری</span>
                </div>

                <div class="w-1/3 text-gray-600 text-sm">
                        <span>
                            تاریخ عضویت
                        </span>
                </div>

                <div class="w-auto mr-auto text-gray-600 text-sm">
                    <span>عملیات</span>
                </div>
            </x-slot>
            <x-slot name="content">
                @foreach ($users as $user)
                <x-dashboard.list-item>
                    <div class="flex items-center px-5 py-3 w-full">
                        <div class="w-1/3 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <p class="font-semibold text-sm">
                                {{ $user->username }}
                            </p>
                        </div>
                        <div class="w-1/3 mr-3 text-gray-600 text-sm">
                            <span>
                                {{ $user->getAge() }}
                            </span>
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <a href="{{ route('dashboard.users.edit', $user) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>
                @endforeach
            </x-slot>
        </x-dashboard.cart>
        <!-- Users Latest Table-->

        <div class="col-span-2">
            <!-- Products Latest Table-->
            <x-dashboard.cart title="لیست آخرین محصولات">
                <x-slot name="header">

                    <div class="w-2/5 flex-none flex items-center mr-5 text-gray-600 text-sm">
                        <span>نام محصول</span>
                    </div>


                    <div class="w-1/5 text-gray-600 text-sm">
                        <span>
                            قیمت محصول
                        </span>
                    </div>

                    <div class="w-1/5 text-gray-600 text-sm">
                            <span>
                                تاریخ ایجاد
                            </span>
                    </div>

                    <div class="w-1/5 sm:w-auto ml-3 text-gray-600 text-sm">
                            <span>
                                وضعیت محصول
                            </span>
                    </div>

                    <div class="w-auto mr-auto text-gray-600 text-sm">
                        <span>عملیات</span>
                    </div>
                </x-slot>
                <x-slot name="content">
                    @foreach ($products as $product)
                    <x-dashboard.list-item>
                        <div class="flex items-center px-5 py-3 w-full">
                            <div class="w-2/5 flex items-center text-gray-600 text-sm">
                                <div class="rounded w-12 h-12 overflow-hidden">
                                    <img src="{{ $product->getImageUrl() }}" 
                                        class="min-w-full min-h-full object-cover"
                                    >
                                </div>
                                <h3 class="font-semibold text-sm mr-2 truncate w-2/3">
                                    {{ $product->title }}
                                </h3>
                            </div>
                            <div class="w-1/5 text-gray-600 text-sm">
                                        <span>
                                            {{ $product->price }}
                                        </span>
                                <span class="text-xs font-semibold ml-1">
                                            تومان
                                        </span>
                            </div>
                            <div class="w-1/5 text-gray-600 text-sm">
                                <span>
                                    {{ $product->getCreatedAt() }}
                                </span>
                            </div>
                            <div class="w-1/5 sm:w-auto ml-3 text-gray-600 text-sm">
                                @if ($product->hasPublished() )
                                <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                    منتشر شده
                                </span>
                                @else
                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                    منتشر نشده
                                </span>
                                @endif
                            </div>
                            <div class="w-auto mr-auto text-gray-600 text-sm">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('dashboard.products.edit', $product) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </x-dashboard.list-item>
                    @endforeach
                </x-slot>
            </x-dashboard.cart>
            <!-- Products Latest Table-->
        </div>
    </div>

    <div class="grid grid-cols-1">

        @foreach ($orders as $order)
            
        <!-- Orders Latest Table-->
        <x-dashboard.cart title="لیست آخرین سفارشات" >
            <x-slot name="header">
                <div class="w-1/6 flex-none flex items-center mr-5 text-gray-600 text-sm">
                    <span>نام سفارش دهنده</span>
                </div>
                <div class="w-1/6 text-gray-600 text-sm">
                    <span>
                        تاریخ سفارش
                    </span>
                </div>
                <div class="w-1/6 text-gray-600 text-sm">
                    <span>
                        تعداد اقلام سفارش
                    </span>
                </div>
                <div class="w-1/6 ml-3 text-gray-600 text-sm">
                    <span>
                        مبلغ کل سفارش
                    </span>
                </div>
                <div class="w-1/6 sm:w-auto ml-3 text-gray-600 text-sm">
                    <span>
                        وضعیت پرداخت
                    </span>
                </div>
                <div class="w-auto mr-auto text-gray-600 text-sm">
                    <span>عملیات</span>
                </div>

            </x-slot>
            <x-slot name="content">
                <x-dashboard.list-item>
                    <div class="flex px-5 py-3 w-full">
                        <div class="w-1/6 flex-none flex items-center mr-5 text-gray-600 text-sm">
                            <span>{{ $order->owner->username }}</span>
                        </div>
                        <div class="w-1/6 text-gray-600 text-sm">
                            <span>
                                {{ $order->getCreatedAt() }}
                            </span>
                        </div>
                        <div class="w-1/6 text-gray-600 text-sm">
                            <span>
                                {{ $order->order_products_count }}
                            </span>
                        </div>
                        <div class="w-1/6 text-gray-600 text-sm">
                            <span>
                                {{ $order->total_price }}
                            </span>
                        </div>
                        <div class="w-1/6 ml-3 text-gray-600 text-sm">
                            @if ($order->isPaid() )
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                پرداخت شده
                            </span>
                            @else
                            <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                پرداخت نشده
                            </span>
                            @endif
                        </div>
                        <div class="w-auto mr-auto text-gray-600 text-sm">
                            <div class="flex item-center justify-center">
                                <a href="{{ route('dashboard.orders.show', $order) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </x-dashboard.list-item>
            
 
            </x-slot>
        </x-dashboard.cart>
        <!-- Orders Latest Table-->
        @endforeach
    </div>

@endsection
