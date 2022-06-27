@extends('dashboard.layouts.base')

@section('title')
    {{ __('Dashboard Reply comment')  }}
@endsection

@section('content')

    <x-form.breadcrumb 
        label="لیست کل نظرات" 
        route="{{ route('dashboard.comments.index') }}"/>

    <!-- Comments Table-->
    <x-dashboard.cart  title="پاسخ به نظر" >
        
        <x-slot name="header"></x-slot>
        <x-slot name="content">
            <form action="{{ route('dashboard.comments.reply.store', $comment) }}" method="post">
                @csrf
                <div class="grid grid-cols-2 px-5 pb-5 gap-2">
            
                    <x-form.input label="عنوان محصول یا دوره" value="{{ $comment->commentable->title }}" readonly/>
            
                    <x-form.input label="کاربر ارسال کننده" value="{{ $comment->owner->username }}" readonly/>

                    <x-form.textarea label="متن نظر" value="{{ $comment->message }}" readonly/>

                    <x-form.textarea label="متن پاسخ" name="message" required/>
                
                    <div class="col-span-2 border-t">
                           <x-form.button label="ذخیره نظر"/>
                    </div>
                </div>
            </form>
        </x-slot>
   
    </x-dashboard.cart>
    <!-- /Comments Table-->
@endsection