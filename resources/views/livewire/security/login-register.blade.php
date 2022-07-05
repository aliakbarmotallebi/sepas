<div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">

    @if( $this->hasRegister() )

        <section class="reg-form">
            <form action="" wire:submit.prevent="register">
                <div class="px-5 py-5">
                    <div class="reg-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">
                            کشور
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <select class="form-select appearance-none
                        block
                        w-full
                        px-3 py-2 mt-1 mb-5 text-sm
                        bg-white
                        border
                        rounded-lg
                        transition
                        ease-in-out
                        text-gray-700
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('country') border-rose-400 @enderror"
                                wire:model="country" name="country">
                            <option selected>کشور خود را انتخاب کنید</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->alpha_2_code }}">
                                    {{ $country->name_fa }}
                                </option>
                            @endforeach
                        </select>
                        @error('country')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>

                    @if( $displayFieldEmail )
                        <div class="reg-form__field mb-5">
                            <label class="font-semibold text-sm text-gray-600 pb-1 block">
                                ایمیل
                                <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                            </label>
                            <input name="email" wire:model="email" type="text" class="border @error('email') border-rose-400 @enderror rounded-lg px-3 py-2 mt-1 text-sm w-full" />
                            @error('email')
                            <div class="text-rose-400 mt-2 text-xs">
                                {{  $message  }}
                            </div>
                            @enderror
                        </div>
                    @else
                        <div class="reg-form__field mb-5">
                            <label class="font-semibold text-sm text-gray-600 pb-1 block">
                                شماره همراه
                                <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                            </label>
                            <input name="mobile" wire:model="mobile" type="text" class="border @error('mobile') border-rose-400 @enderror  rounded-lg px-3 py-2 mt-1 text-sm w-full" />
                            @error('mobile')
                            <div class="text-rose-400 mt-2 text-xs">
                                {{  $message  }}
                            </div>
                            @enderror
                        </div>
                    @endif

                    <div class="reg-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">
                            گذرواژه
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input name="password" wire:model="password" type="password" class="border @error('password') border-rose-400 @enderror rounded-lg px-3 py-2 mt-1 text-sm w-full" />
                        @error('password')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>

                    <div class="reg-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">
                            تکرار گذرواژه
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input name="password_confirmation" wire:model="password_confirmation" type="password" class="border @error('password_confirmation') border-rose-400 @enderror rounded-lg px-3 py-2 mt-1 text-sm w-full" />
                        @error('password_confirmation')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>

                    <div class="reg-form__field mb-5 px-2">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                            کد امنیتی
                        </label>
                        <img onclick="document.getElementById('captcha').src = 'captcha/flat?' + Math.random()" wire:ignore class="w-full rounded-md cursor-pointer" src="{{ captcha_src('flat') }}" alt="" id="captcha">
                    </div>
                    <div class="reg-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                            کد امنیتی را وارد کنید
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input name="captcha"  wire:model="captcha" type="text" class="border @error('password') border-rose-400 @enderror rounded-lg px-3 py-2 text-sm w-full" />
                        @error('captcha')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>

                    <button wire:click="registerStore" type="button" class="flex justify-center items-center transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">

                        <svg
                            wire:target="registerStore" wire:loading.class="hidden"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 inline-block"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="8.5" cy="7" r="4" />
                            <line x1="20" y1="8" x2="20" y2="14" />
                            <line x1="23" y1="11" x2="17" y2="11" />
                        </svg>

                        <span wire:target="registerStore" wire:loading.class="hidden" class="inline-block mr-2">
                    عضویت درسامانه
                    </span>
                        <svg wire:target="registerStore" wire:loading.class.remove="hidden" class="hidden animate-spin ml-1 mr-3 h-4 w-4      text-white"   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>

                </div>
                <div class="pb-4">
                    <div class="flex justify-center mb-2">
                        <div class="text-right whitespace-nowrap">
                            <button wire:click="register" class="text-xs hover:text-gray-700 p-1 border border-gray-200 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                                <span class="inline-block ml-1 tracking-tighter">
                            ورود به حساب کاربری
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    @else
        <section class="login-form">
            <form action="" wire:submit.prevent="login">
                <div class="px-5 py-4">
                    <div class="login-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                            نام کاربری
                            <span class="text-xs font-semibold tracking-tighter">( ایمیل یا شماره همراه )</span>
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input name="username" wire:model="username" type="text" class="border @error('username') border-rose-400 @enderror rounded-lg px-3 py-2 text-sm w-full" />
                        @error('username')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>
                    <div class="reg-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                            رمزعبور
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input name="password"  wire:model="password" type="password" class="border @error('password') border-rose-400 @enderror rounded-lg px-3 py-2 text-sm w-full" />
                        @error('password')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>
                    <div class="reg-form__field mb-5 px-2">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                            کد امنیتی
                        </label>
                        <img onclick="document.getElementById('captcha').src = 'captcha/flat?' + Math.random()" wire:ignore class="w-full rounded-md cursor-pointer" src="{{ captcha_src('flat') }}" alt="" id="captcha">
                    </div>
                    <div class="reg-form__field mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                            کد امنیتی را وارد کنید
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input name="captcha"  wire:model="captcha" type="text" class="border @error('password') border-rose-400 @enderror rounded-lg px-3 py-2 text-sm w-full" />
                        @error('captcha')
                        <div class="text-rose-400 mt-2 text-xs">
                            {{  $message  }}
                        </div>
                        @enderror
                    </div>
                    <button wire:target="login" wire:loading.attr="disabled" wire:click="login" type="button" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" wire:target="login" wire:loading.class="hidden" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        <span wire:target="login" wire:loading.class="hidden" class="inline-block mr-2">صفحه ورود کاربر</span>
                        <svg wire:target="login" wire:loading.class.remove="hidden" class="hidden animate-spin ml-1 mr-3 h-4 w-4      text-white"   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>

                </div>
                <div class="py-3 px-4 pb-4">
                    <div class="justify-center flex-col-reverse flex ">
                        <div class="text-center whitespace-nowrap">
                            <a href="#" class="text-xs hover:text-gray-700 tracking-tighter">
                                رمز عبورتان را گم کرده اید؟
                                <span class="inline-block ml-1 font-semibold">
                        ایجاد رمز جدید
                            </span>
                            </a>
                        </div>

                        <div class="text-center">
                            <button wire:click="register" class="text-xs hover:text-gray-700 tracking-tighter">
                                حساب کاربری ندارید؟
                                <span class="inline-block ml-1 font-semibold">
                                ثبت نام
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    @endif

</div>
