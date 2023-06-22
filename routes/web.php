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
    return view('index');
})->name('home');
Route::get('about-us', function () {
    return view('about-us');
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
// Route::get('service-single', function () {
//     return view('service');
// })->name('service');
// Route::get('services-2-columns', function () {
//     return view('service');
// })->name('service-2');
Route::get('service-page', function () {
    return view('service-page');
})->name('service');
Route::get('services-single', function () {
    return view('services-single');
})->name('single-service');

Route::get('/search/{keyword}', function ($keyword) {
   echo $keyword;
})->where('keyword', '.*');

