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

        Route::get('/courses/uploads/{course}', 'CourseController@uploads')
            ->name('courses.uploads');

        Route::resource('/orders', 'OrderController');

        Route::get('/payments', 'PaymentController')
            ->name('payments.index');

        Route::get('/categories', 'CategoryController')
            ->name('categories.index');

        Route::get('/transactions', 'TransactionController')
            ->name('transactions.index');

        Route::resource('/messages', 'MessageController')
            ->only(['index']);

        Route::resource('/products', 'PorductController');

        Route::get('/products/uploads/{product}', 'PorductController@uploads')
            ->name('products.uploads');
    });
});
