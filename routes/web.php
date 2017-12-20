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
    return view('user/home');
})->name('home');

Route::get('brief', function () {
    return view('user/brief');
})->name('brief');

Route::get('principles', function () {
    return view('user/principles');
})->name('principles');

Route::get('field', function () {
    return view('user/field');
})->name('field');

Route::get('companies', function () {
    return view('user/companies');
})->name('companies');

Route::get('dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('content', function () {
    return view('admin/content');
})->name('content');






