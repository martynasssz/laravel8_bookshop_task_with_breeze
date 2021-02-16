<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){ //grouping routes because use the same ['middleware' => 'auth'] in these routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //'prefix' => 'user' responsible for that user part will be in url
    //'as' =>'user.' for applying in controller when is requets to route for example <form action="{{route('user.books.store)}}"
    Route::group(['prefix' => 'user', 'as' =>'user.'], function(){ //separate route group for books
        Route::resource('books', \App\Http\Controllers\User\BookController::class);  //controller in subfolder user     
    });
});



require __DIR__.'/auth.php';
