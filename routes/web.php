<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController as HomeController;
use \App\Http\Controllers\Admin\HomeController as AdminHomeController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

// // 1-Write a message with route

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// // 2-Call view in the route

// Route::get('/sampleview', function () {
//     return view('welcome');
// });

// // 3-Call the controller function

// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
Route::get('/', [HomeController::class, 'index'])->name('home');

// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
});
// // 4- Route->Controller->View

// Route::get('/test', [HomeController::class, 'test'])->name('test');

// // 5-Route with parameter

// Route::get('/param/{id}/{id2}', [HomeController::class, 'param'])->name('param');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
