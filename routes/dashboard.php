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

        Route::resource('/comments', 'CommentController');

        Route::post('/reply/{comment}', 'CommentController@replyStore')
            ->name('comments.reply.store');

        Route::resource('/courses', 'CourseController');

        Route::resource('/orders', 'OrderController');

        Route::resource('/messages', 'MessageController')
            ->only(['index']);

        Route::resource('/products', 'PorductController');
    });
});
