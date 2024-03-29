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
    return view('signin');
});

Route::get('/home', function () {
    return view('template');
});

Route::get('/membership', function () {
    return view('membership');
})->name('membership');

Route::get('/searchBook', function () {
    return view('searchBook');
})->name('searchBook');

Route::get('/addBook', function () {
    return view('addBook');
})->name('addBook');

Route::get('/nextAddBk', function () {
    return view('nextAddBk');
})->name('nextAddBk');

Route::get('/issueBook', function () {
    return view('issueBook');
})->name('issueBook');
