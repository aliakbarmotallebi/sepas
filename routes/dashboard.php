<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Dashboard',
], function () {
    Route::group([
        'middleware' => [
            'auth',
            'is.admin',
        ],
        'prefix'     => 'dashboard',
        'as'         => 'dashboard.',
    ], function () {
        Route::get('/', 'AdminController')
            ->name('index');

        Route::resource('/users', 'UserController');

        Route::resource('/courses', 'CourseController');

        Route::resource('/comments', 'CommentController')
            ->only(['index', 'update', 'destroy']);

        Route::resource('/messages', 'MessageController')
            ->only(['index']);

        Route::resource('/products', 'PorductController');
    });
});
