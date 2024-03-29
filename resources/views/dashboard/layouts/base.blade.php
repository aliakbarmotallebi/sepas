<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('styles/dashboard/styles.css') }}">

    <title>پنل ادمین -  @yield('title')</title>
    @livewireStyles
    <style>
        [x-cloak] { 
            display: none !important;
         }
      </style>
</head>
<body>
    <div class="flex min-h-screen mx-auto border-x-2 border-indigo-50">
        <x-dashboard.sidebar/>
        <main class="bg-indigo-50/60 w-full py-10 px-3 sm:px-10">
                <x-dashboard.nav/>
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('javascripts/app.js') }}" defer></script>
    <script src="{{ asset('javascripts/ckeditor4/ckeditor.js') }}" defer></script>

    @include('sweetalert::alert')

    @livewireScripts
    @livewire('dashboard.edit-profile')
    @yield('scripts')
    <script type="text/javascript">
        window.onload = function () {
            CKEDITOR.replace( 'editor',{
                filebrowserUploadUrl: "{{route('dashboard.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
            $('#select2').select2();
        };
    </script>
</body>
</html>
