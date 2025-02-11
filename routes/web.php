<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/index-1', function () {
    return view('pages/index-1');
})->name('index-1');

Route::get('/index-2', function () {
    return view('pages/index-2');
})->name('index-2');

Route::get('/index-3', function () {
    return view('pages/index-3');
})->name('index-3');

Route::get('/index-4', function () {
    return view('pages/index-4');
})->name('index-4');
