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
        Route::get('/profile', 'ProfileController@index')
            ->name('profile.index');
    });
});
