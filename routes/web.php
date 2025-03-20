<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\articleController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello', function () {
//     return " welcome to laravel Nahid";
// });

Route::get('/hello', [WelcomeController::class, 'sayHello']);
Route::get('/course', [WelcomeController::class, 'courseName']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/article/{id}', [articleController::class, 'index']);
Route::get('/article/page/{pageNumber}/display/{type}', [articleController::class, 'showArticle']);