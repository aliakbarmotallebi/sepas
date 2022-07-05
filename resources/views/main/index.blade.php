@extends('main.layouts.base')

@section('title')
    Home
@endsection

@section('content')


<div class="h-screen flex items-center justify-center bg-gray-900">
  
    <!-- Card -->
    <section class="bg-gray-800 rounded-lg w-72">
      
      <!-- Header -->
      <div class="grid grid-cols-3 text-gray-200 items-center px-5 pt-5">
        
        <!-- Header Title -->
        <div class="col-span-2 flex flex-row gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
          <p> دسترسی سریع </p>
        </div>
        
  
        
        
      </div>
      
      <!-- Content -->

      @if(auth()->check())
      <a href="{{ route('dashboard.index') }}">
        <p class="text-gray-200 justify-center items-center flex font-light bg-gray-700 text-center delay-50 duration-100 p-2 rounded-lg my-4 mx-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <span class="mr-2">
              ورود به پنل مدیریت
            </span>
        </p>
      </a>
      @else
      <a href="{{ route('auth') }}" class="">
        
        <p class="text-gray-200 font-light bg-gray-700 text-center delay-50 duration-100 p-2 rounded-lg my-4 mx-3">
          ورود به حساب کاربری
        </p>
      </a>
      @endif


        
    </section>
    
  </div>

  @endsection