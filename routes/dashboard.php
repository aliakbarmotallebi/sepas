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
        
        Route::get('/', 'AdminController@index')
            ->name('index');
        
        Route::post('/upload', 'AdminController@upload')
            ->name('upload');

        Route::resource('/users', 'UserController');

        Route::resource('/comments', 'CommentController');

        Route::post('/reply/{comment}', 'CommentController@replyStore')
            ->name('comments.reply.store');

        Route::resource('/courses', 'CourseController');

        Route::get('/courses/uploads/{course}', 'CourseController@uploads')
            ->name('courses.uploads');

        Route::get('/courses/users/{course}', 'CourseController@users')
            ->name('courses.users');

        Route::get('/assessments/course/{course}/user/{user}', 'AssessmentController@show')
            ->name('assessments.show');
        
        Route::post('/assessments/course/{course}/user/{user}', 'AssessmentController@store')
            ->name('assessments.store');

        Route::get('/courses/questions/{course}', 'CourseController@questions')
            ->name('courses.questions');

        Route::post('/courses/uploads/video/{course}', 'CourseController@uploadVideo')
            ->name('courses.uploads.video');

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

        Route::resource('/campaigns', 'CampaignController');

        Route::resource('/events', 'EventController');
    });
});
