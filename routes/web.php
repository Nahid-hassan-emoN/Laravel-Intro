<?php

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FormController;
use App\Http\Middleware\secretMiddleWare;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
})->name('form.get');

Route::get("/secret", function () {
    return 'secret Message';
})->middleware(secretMiddleWare::class);
// Route::get('/hello', function () {
//     return " welcome to laravel Nahid";
// });

// Route::get('/hello', [WelcomeController::class, 'sayHello']);
// Route::post('/course', [WelcomeController::class, 'courseName']);
// Route::get('/dashboard', [DashboardController::class, 'dashboard']);
// Route::get('/article/{id}', [articleController::class, 'index']);
// Route::get('/article/page/{pageNumber}/display/{type}', [articleController::class, 'showArticle']);

route::view("/login", "forms.login");
route::view("/form", "forms.form");
route::view("/contract", "forms.contractForm");
route::view("/mainPage", "forms.mainPage");

route::post("/handleform", [FormController::class, 'handleFormSubmission'])->name('handle.post');

Route::post('/form', [ExtraController::class, 'checkValidation'])->name('form.post');
