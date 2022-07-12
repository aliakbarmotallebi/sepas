@extends('user.layouts.base')

@section('title')
    پروفایل
@endsection

@section('content')
  <div class="grid grid-cols-2 gap-3 mt-10">
    <div
        class="relative break-words bg-white w-full shadow rounded-xl">
        <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="w-full flex justify-center">
                    <div class="relative">
                        <span
                            class="flex items-center justify-center shadow-lg rounded-full w-32 h-32 align-middle bg-gray-100 border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-blue-600" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="w-full text-center mt-20 mb-4">
                    <div class="flex items-center justify-center flex-col gap-2 lg:pt-4 pt-8 pb-0">
                        <button
                            class="border border-blue-400 hover:border-blue-700  text-blue-600 hover:text-blue-900 text-xs py-1 px-7 rounded focus:shadow-outline ">
                            <svg class="w-4 h-4 inline-flex ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                            {{ $user->getWalletBalance() }}
                            <span class="mr-1 text-xs">
                                تومان 
                            </span>
                        </button>
                        <a href="{{ route('panel.profile.edit') }}"
                            class="border border-blue-400 hover:border-blue-700  text-blue-600 hover:text-blue-900 text-xs py-1 px-7 rounded focus:shadow-outline ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-flex ml-2" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-edit-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                            ویرایش اطلاعات
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2">
                <h3 class="text-base text-slate-700 font-bold leading-normal mb-1">
                    {{ $user->username }}
                </h3>
                <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                    {{ $user->fullname }}
                </div>
                <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                    {{ $user->address }}
                </div>
            </div>
            <div class="mt-6 py-6 border-t border-slate-200 text-center">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4">
                        <p class="font-light text-sm leading-relaxed text-slate-600 mb-4">
                            {{ $user->bio }}
                        </p>
                        <a href="javascript:;" class="font-normal text-xs text-rose-700 hover:text-rose-400">
                            خروج از حساب کاربری
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-rows-3 gap-1 ">
      <div class="hover:bg-black/5 transition-all delay-100 flex flex-row justify-between  items-center rounded-lg px-2 py-0 my-2 bg-white shadow-sm hover:border-solid"
          style="transform: translate(0px, 0px); opacity: 1;">

          <div class="flex flex-row">
              <div class="p-2 mx-4 my-auto bg-slate-200 rounded-lg items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-shopping-bag">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg>
              </div>
              <div class="flex flex-col">
                  <h3 class="text-gray-500 text-xs leading-4">
                      تعداد سفارشات
                  </h3>
                  <h2 class="text-dark text-sm text-3xl font-medium text-dark text-sm text-2xl font-medium leading-9">
                      {{ $orders }}
                  </h2>
              </div>
          </div>

          <a href="{{ route('panel.orders.index') }}"
              class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-blue-200 focus:outline-none focus:text-white focus:text-blue-200 transition duration-150 ease-in-out  float-right"
              aria-label="more">
              <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="feather feather-chevron-left">
                  <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
          </a>

      </div>

      <div class="hover:bg-black/5 transition-all delay-100 flex flex-row justify-between  items-center rounded-lg px-2 py-0 my-2 bg-white shadow-sm"
          style="transform: translate(0px, 0px); opacity: 1;">

          <div class="flex flex-row">
              <div class="p-2 mx-4 my-auto bg-slate-200 rounded-lg items-center">

                  <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-box">
                      <path
                          d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                      </path>
                      <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                      <line x1="12" y1="22.08" x2="12" y2="12"></line>
                  </svg>
              </div>
              <div class="flex flex-col">
                  <h3 class="text-gray-500 text-xs leading-4">
                      تعداد دوره های ثبت نام شده
                  </h3>
                  <h2 class="text-dark text-sm text-3xl font-medium text-dark text-sm text-2xl font-medium leading-9">
                      {{ $courses }}
                  </h2>
              </div>
          </div>

          <a href="{{ route('panel.courses') }}"
              class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-blue-200 focus:outline-none focus:text-white focus:text-blue-200 transition duration-150 ease-in-out  float-right"
              aria-label="more">

              <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="feather feather-chevron-left">
                  <polyline points="15 18 9 12 15 6"></polyline>
              </svg>

          </a>

      </div>

      <div class="hover:bg-black/5 transition-all delay-100 flex flex-row justify-between  items-center rounded-lg px-2 py-0 my-2 bg-white shadow-sm"
          style="transform: translate(0px, 0px); opacity: 1;">

          <div class="flex flex-row">
              <div class="p-2 mx-4 my-auto bg-slate-200 rounded-lg items-center">

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="18" cy="5" r="3"></circle>
                      <circle cx="6" cy="12" r="3"></circle>
                      <circle cx="18" cy="19" r="3"></circle>
                      <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                      <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                  </svg>

              </div>
              <div class="flex flex-col">
                  <h3 class="text-gray-500 text-xs leading-4">
                      تعداد کمپین ثبت شده
                  </h3>
                  <h2 class="text-dark text-sm text-3xl font-medium text-dark text-sm text-2xl font-medium leading-9">
                      {{ $campaigns }}
              </div>
          </div>

          <a href="{{ route('panel.campaigns') }}"
              class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-blue-200 focus:outline-none focus:text-white focus:text-blue-200 transition duration-150 ease-in-out  float-right"
              aria-label="more">

              <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="feather feather-chevron-left">
                  <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
          </a>
      </div>
    </div>
  </div>
@endsection
