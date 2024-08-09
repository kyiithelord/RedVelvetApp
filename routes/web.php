<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/item', function () {
//     return view('item.create');
// });

Route::resource('/item', ItemController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/person',PeopleController::class);
Route::resource('/phone',PhoneController::class);
