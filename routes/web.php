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
    return view('main.landing');
});

Route::get('/team', function () {
    return view('main.team');
});

Route::get('/si', function () {
    return view('main.systemintegration');
});

Route::get('/pmt', function () {
    return view('main.managementoffice');
});

Route::get('/software', function () {
    return view('main.software');
});

Route::get('/gallery', function () {
    return view('main.gallery');
});

Route::get('/contact', function () {
    return view('main.contact');
});
