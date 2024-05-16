<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('overons');
})->name('overons');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/recipes', function () {
    return view('recept');
})->name('recept');

Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');
