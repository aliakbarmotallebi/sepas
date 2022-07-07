<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Panel',

], function () {
    Route::group([
        'middleware' => [
            'auth',
        ],
        'prefix'     => 'panel',
        'as'         => 'panel.',
    ], function () {
        Route::get('/', 'ProfileController@index')
            ->name('index');

        Route::get('/profile', 'ProfileController@profileEdit')
            ->name('profile.edit');

        Route::put('/profile', 'ProfileController@profileUpdate')
            ->name('profile.update');

        Route::get('/courses', 'ProfileController@courses')
            ->name('courses');
        
        Route::get('/transactions', 'ProfileController@transactions')
            ->name('transactions');

        Route::get('/comments', 'ProfileController@comments')
            ->name('comments');

        Route::get('/campaigns', 'ProfileController@campaigns')
            ->name('campaigns');

        Route::get('/orders', 'ProfileController@orders')
            ->name('orders.index');
        
        Route::get('/orders/{order}', 'ProfileController@order')
            ->name('orders.show');

    });
});
