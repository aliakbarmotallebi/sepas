@extends('dashboard.layouts.base')

@section('title')
   ارزیابی کاربر
@endsection

@section('content')

    <section class="mt-4">
        <x-form.breadcrumb 
            label="برگشت به صفحه قبل" 
            route="{{ route('dashboard.courses.users', $course) }}"/>
    </section>

    <div class="grid grid-cols-2 gap-2 mt-1">
        <x-dashboard.table  title="پاسخ سوالات دوره" >
            <x-slot name="header">
                <tr>
                    <th scope="col" class="pr-4 text-center">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        سوال
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        پاسخ کاربر
                    </th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($answers as $answer)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <td scope="row" class="pr-4 text-right">
                            {{ $loop->iteration }}
                        </td>
                        <td class="text-right px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{  $answer->questionnaire_answer->label }}
                        </td>
                        <td scope="row" class="text-right px-6 py-4">
                            {{  $answer->answer }}
                        </td>
                    </tr>
                @endforeach

            </x-slot>
        </x-dashboard.table>

        <x-dashboard.cart title="لیست گزارش ها" >
            <x-slot name="header">
                <div class="w-full">
                    @foreach ($assessments as $assessment)
                        <div class="mt-2 rounded flex flex-col bg-white border p-3 gap-2 items-center">
                            <div class="w-full">
                                <div class="flex items-center">
                                    <div class="ml-auto flex-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    </div>
                                    <div class="mb-3 flex">
                                        <div class="border border-gray-300 dark:border-gray-700 rounded-full px-3 py-1 dark:text-gray-400 text-gray-600 text-xs flex items-center" aria-label="due on" role="contentinfo">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <circle cx="12" cy="13" r="7"></circle>
                                                <polyline points="12 10 12 13 14 13"></polyline>
                                                <line x1="7" y1="4" x2="4.25" y2="6"></line>
                                                <line x1="17" y1="4" x2="19.75" y2="6"></line>
                                            </svg>
                                            <p class="mr-2 dark:text-gray-400">
                                                {{ $assessment->getCreatedAt() }}
                                            </p>
                                        </div>
                                        <span class="flex items-center bg-gray-100 px-3 py-1 mx-1 rounded-full text-xs font-medium text-gray-700">
                                            {{ $assessment->fellow->fullname }}
                                        </span>
                                        <livewire:delete :entity="$assessment" :url="request()->fullUrl()"/>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2">
                                <p class="text-gray-700 text-sm text-justify"> 
                                    {{ $assessment->message }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-slot>
            <x-slot name="content">

                <form action="{{ route('dashboard.assessments.store', [ $course, $user ]) }}" method="post" class="mb-2 p-4 w-full">
                    @csrf
                    <textarea name="message" placeholder="متن گزارش..." class=" focus:outline-none  w-full rounded-lg p-2 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400"></textarea>
                    <footer class="flex justify-between mt-2">
                        <button type="submit" class="flex items-center py-2 px-4 rounded-lg text-sm bg-blue-600 text-white">
                            ثبت گزارش ارزیابی
                        </button>
                    </footer>
                </form>
            </x-slot>
        </x-dashboard.cart>

    </div>
@endsection