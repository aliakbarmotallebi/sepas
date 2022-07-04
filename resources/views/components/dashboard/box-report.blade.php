<!-- BoxReport -->
<div class="grid grid-cols-12 items-center mb-8 sm:gap-4 xl:gap-y-0 gap-y-5 mt-4">
    <div class="shadow bg-white xl:col-span-4 md:col-span-12 col-span-24 rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center">
        <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <div class="sm:space-y-0 space-y-4 text-right">
            <h5 class="text-gray-500 mb-1.5 text-xs font-medium">
                تعداد کاربران
            </h5>
            <div class="text-gray-500 text-xs font-medium flex items-center">
                <div>
                    مدیر سایت
                    <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                              {{ $countAdmins  }}
                          </span>
                </div>
                <i class="flex mx-2 h-5 border-l border-gray-50"></i>
                <div>
                    کاربر عادی
                    <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                              {{ $countUsers }}
                          </span>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow bg-white xl:col-span-5 md:col-span-12 col-span-24 rounded-lg xl:px-6 sm:px-4 px-2 py-7 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center">
        <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-green-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="1" x2="12" y2="23"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
        </div>
        <div class="sm:space-y-0 space-y-4  text-right">
            <h5 class="text-gray-500 mb-1.5 text-xs font-medium">
                گزارشات مالی
            </h5>
            <div class="text-gray-500  text-xs font-medium  flex items-center">
                <div>
                    پرداخت شده
                    <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                            {{ number_format($countPaid) }}
                        </span>
                </div>
                <i class="flex mx-2 h-5 border-l border-gray-50"></i>
                <div>
                    در انتظار پرداخت
                    <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                        {{ number_format($countUnpaid) }}
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow bg-white md:col-span-3 sm:col-span-9 col-span-24  rounded-lg xl:px-6 sm:px-4 px-2 py-6 flex sm:flex-row sm:space-y-0 space-y-5 flex-col items-center ">
        <div class="w-10 h-10 rounded-lg flex items-center justify-center sm:ml-4 bg-yellow-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                <line x1="8" y1="21" x2="16" y2="21"></line>
                <line x1="12" y1="17" x2="12" y2="21"></line>
            </svg>
        </div>
        <div class="sm:space-y-0 space-y-4  text-center">
            <h5 class="text-gray-500 mb-1.5 text-xs font-medium">
                تعداد کل محصولات
            </h5>
            <div class="text-gray-500  text-xs font-medium  flex items-center">
                <div>
                    محصول
                    <span class=" text-gray-800 sm:text-21 text-lg mr-1 font-bold">
                            {{ $countProducts }}
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /BoxReport -->
