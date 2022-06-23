<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ورود به حساب کاربری</title>

    <link rel="stylesheet" href="{{ asset('styles/security/styles.css') }}">
    @livewireStyles
</head>
<body class="font-iran">

    <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-lg">
            <h1 class="font-bold text-center text-2xl mb-5">
                سایت سپاس
            </h1>
            @livewire('security.login-register')
            <div class="py-5">
                <a  href="{{ route('index') }}" class="flex items-center transition duration-200 mx-5 p-1 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span class="inline-block pr-1 font-semibold text-xs">
                        بازگشت به سایت
                    </span>
                </a> 
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    @livewireScripts
</body>
</html>

