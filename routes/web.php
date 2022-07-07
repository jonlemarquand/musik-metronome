<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Homepage', [
        'name' => 'Jon Le Marquand'
    ]);
});

Route::get('/timer', function () {
    return Inertia::render('Timer');
});

Route::get('/account', function () {
    return Inertia::render('Account');
});

Route::get('/account/new', function () {
    return Inertia::render('AccountRegister');
});
