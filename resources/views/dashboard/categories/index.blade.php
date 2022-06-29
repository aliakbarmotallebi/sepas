
@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Category')  }}
@endsection

@section('content')
    <x-dashboard.cart  title="لیست دسته بندی ها" >
        <x-slot name="header">
            <div class="mt-4">
                <button 
                    x-data="{}" x-on:click="window.livewire.emitTo('dashboard.category.category-form', 'openerModal')"
                    class="inline-flex items-center py-2 px-4 text-xs font-medium text-gray-900 bg-white rounded-lg border border-gray-200 focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 copy-to-clipboard-button">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="mr-2 w-4 h-4"
                        >
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="8.5" cy="7" r="4" />
                        <line x1="20" y1="8" x2="20" y2="14" />
                        <line x1="23" y1="11" x2="17" y2="11" />
                        </svg>
                    <span class="mr-1">ثبت دسته بندی جدید</span>
                </button>
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-1 pb-3">
                @livewire('dashboard.category.category-form')
                @livewire('dashboard.category.category-list')
            </div>
        </x-slot>
    </x-dashboard.cart>
@endsection



