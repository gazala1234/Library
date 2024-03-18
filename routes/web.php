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

<<<<<<< HEAD
Route::get('/addBook', function () {
    return view('addBook');
})->name('addBook');
=======
Route::get('/issueBook', function () {
    return view('issueBook');
})->name('issueBook');

Route::get('/nextIssueBk', function () {
    return view('nextIssueBk');
})->name('nextIssueBk');
>>>>>>> 56416c3a2415544cc0769cc955df1936f18f0788
