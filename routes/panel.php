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

    });
});
