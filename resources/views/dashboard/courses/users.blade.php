@extends('dashboard.layouts.base')

@section('title')
    لیست کاربران ثبت نام شده
@endsection

@section('content')
<div class="grid grid-cols-3 gap-2 mt-5">
    @foreach ($users as $user)
        @livewire('dashboard.survey-card', 
            compact('course', 'user')
        )
    @endforeach
</div>
@endsection