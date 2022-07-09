@extends('dashboard.layouts.base')

@section('title')
    ایجاد کاربر جدید
@endsection

@section('content')

    <section class="mt-4">

        <x-form.breadcrumb 
            label="لیست کل کاربران" 
            route="{{ route('dashboard.users.index') }}"/>


        <!-- Comments edit-->
        <x-dashboard.cart title="ذخیره کاربر">
            <x-slot name="header"></x-slot>
            <x-slot name="content">
                <form action="{{ route('dashboard.users.store') }}" method="post">
                   
                    @csrf
                    
                    <div class="grid grid-cols-2 px-5 pb-5 gap-2">
                
                        <x-form.input label="نام کاربری" name="username" required/>
                
                        <x-form.input label="ایمیل" name="email"/>
                
                        <x-form.input label="نام و نام خانوادگی" name="fullname"/>
                
                        <div>
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                نقش کاربر
                                <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                            </label>
                            <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>
                                    نقش را انتخاب کنید
                                </option>
                                @foreach ($roles as $role => $name)
                                <option value="{{$role}}">
                                    {{ $name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-2">
                            <div class="w-1/2">
                                <x-form.input label="تلفن همراه" name="mobile" required/>
                            </div>
                        </div>

                        <x-form.input label="رمزعبور" name="password" required/>
                        
                        <x-form.input label="تکرار رمزعبور"  name="password_confirmation" required/>


                        <x-form.textarea label="آدرس محل سکونت" name="address" />
                        
                        <x-form.textarea label="بیوگرافی"  name="bio" />


                        <div class="col-span-2 border-t">
                               <x-form.button label="ذخیره کاربر"/>
                        </div>
                
                    </div>
                </form>
            </x-slot>

        </x-dashboard.cart>
        <!-- /Comments edit-->
    </section>
@endsection
