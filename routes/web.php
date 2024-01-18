<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello'  , function () {
    return 'Hello World';
})->name('hello');
// naming the route to reference it later

Route::get('/user/{name}', function ($name) {
return 'hello'.$name;
});

    // fallback route
Route::fallback(function () {
return "This is the fallback route.";

});