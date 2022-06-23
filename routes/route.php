<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Security',
], function () {
    Route::get('/auth', 'SecurityController@auth')
        ->name('auth');

    Route::get('/logout', 'SecurityController@logout')
        ->name('logout');
});
