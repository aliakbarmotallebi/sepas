
@extends('user.layouts.base')

@section('title')
    پروفایل
@endsection

@section('content')
 <div class="flex flex-col justify-between">
    <div class="side-card flex flex-row justify-between  items-center rounded-lg px-2 py-4 my-2 bg-white shadow-sm hover:border-solid" style="transform: translate(0px, 0px); opacity: 1;">

      <div class="flex flex-row">
        <div class="p-2 mx-4 my-auto bg-blue-200 rounded-lg items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
        </div>
        <div class="flex flex-col">
          <h3 class="text-gray-500 text-xs leading-4"> 
            تعداد سفارشات  
          </h3>
          <h2 class="text-dark text-sm text-3xl font-medium text-dark text-sm text-2xl font-medium leading-9">200</h2>
        </div>
      </div>

      <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-blue-200 focus:outline-none focus:text-white focus:text-blue-200 transition duration-150 ease-in-out  float-right" aria-label="more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
        
      </button>

    </div>

    <div class="side-card flex flex-row justify-between  items-center rounded-lg px-2 py-4 my-2 bg-white shadow-sm" style="transform: translate(0px, 0px); opacity: 1;">

      <div class="flex flex-row">
        <div class="p-2 mx-4 my-auto bg-blue-200 rounded-lg items-center">

          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
        </div>
        <div class="flex flex-col">
          <h3 class="text-gray-500 text-xs leading-4"> 
            تعداد دوره های ثبت نام شده  
          </h3>
          <h2 class="text-dark text-sm text-3xl font-medium text-dark text-sm text-2xl font-medium leading-9">3400</h2>
        </div>
      </div>

      <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-blue-200 focus:outline-none focus:text-white focus:text-blue-200 transition duration-150 ease-in-out  float-right" aria-label="more">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
        
      </button>

    </div>

    <div class="side-card flex flex-row justify-between  items-center rounded-lg px-2 py-4 my-2 bg-white shadow-sm" style="transform: translate(0px, 0px); opacity: 1;">

      <div class="flex flex-row">
        <div class="p-2 mx-4 my-auto bg-blue-200 rounded-lg items-center">

          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>

        </div>
        <div class="flex flex-col">
          <h3 class="text-gray-500 text-xs leading-4"> 
            تعداد کمپین ثبت شده  
          </h3>
          <h2 class="text-dark text-sm text-3xl font-medium text-dark text-sm text-2xl font-medium leading-9">200</h2>
        </div>
      </div>

      <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-blue-200 focus:outline-none focus:text-white focus:text-blue-200 transition duration-150 ease-in-out  float-right" aria-label="more">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
      </button>
    </div>
  </div>
</div>
@endsection