<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('welcome');
})->name('about');

Route::get('service', function () {
    return view('welcome');
})->name('service');

Route::get('contact', function () {
    return view('welcome');
})->name('contact');

Route::get('/cc', function(){
Artisan::call('cache:clear');
Artisan::call('route:clear');
Artisan::call('config:clear');
Artisan::call('view:clear');
return "Cache is cleared";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('homepage');
