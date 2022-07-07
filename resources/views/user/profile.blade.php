
@extends('user.layouts.base')

@section('title')
ویرایش پروفایل
@endsection

@section('content')
 <div class="flex flex-col justify-between">
  <div class="max-w-sm w-full lg:max-w-full shadow px-6 py-6 bg-white rounded-lg">
    <form action="{{ route('panel.profile.update') }}" method="post">
      @csrf
      @method('PUT')
      <div class="flex items-center justify-between mb-4 pb-4 border-b">
          <div class="text-left">
              <h2 class="font-semibold text-gray-900">ویرایش اطلاعات</h2>
          </div>
          <div class="text-right">
              <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs py-1.5 px-8 rounded focus:shadow-outline shadow">
                  ویرایش 
              </button>
          </div>
      </div>
        <div class=" flex justify-center">
          <div class="w-1/2">
            <div class="mb-6">
                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    نام و نام خانوادگی
                <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                </label>
                <input type="fullname" name="fullname" id="fullname" value="{{ $user->fullname }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('fullname')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                      {{ $message }}
                  </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                  نام کاربری
                </label>
                <input type="username" id="username" value="{{ $user->username }}"  disabled readonly class="bg-gray-200  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                آدرس محل سکونت
              </label>
              <textarea id="address" name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $user->address }}</textarea>
            </div>
            <div class="mb-6">
                <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                  بیوگرافی
                </label>
                <textarea id="bio" name="bio" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $user->bio }}</textarea>
              </div>
              <div class="mb-6">
                <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                  گذرواژه جاری 
                  <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                </label>
                <input type="password" name="old_password" id="old_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('old_password')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                      {{ $message }}
                  </p>
                @enderror
              </div>
            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                گذرواژه جدید
              </label>
              <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              @error('password')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
              @enderror
            </div>
            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                تکرار گذرواژه جدید
              </label>
              <input type="password" name="password_confirmation" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              @error('password_confirmation')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
              @enderror
            </div>
          </div>
        </div>
      </form>
  </div>
</div>
@endsection