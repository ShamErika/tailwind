<?php

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

use App\Http\Controllers\GreetController;

Route::get('/greet/{name}', [GreetController::class, 'greet']);

use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
    return view('app');
});

Route::get('/', function () {
    return view('welcome');
});

