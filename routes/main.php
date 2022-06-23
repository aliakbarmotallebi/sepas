<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Main',
], function () {
    Route::get('/', 'HomeController@index')
        ->name('index');
});
