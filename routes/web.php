<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get(sha1('/home'), function () {
    return view('home');
})->name('home');
Route::get(sha1('/about'), function () {
    return view('about');
})->name('about.us');
Route::get('/contact/{id}', function ($id) {
    return 'contact' . $id;
})->name('contact_us');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
