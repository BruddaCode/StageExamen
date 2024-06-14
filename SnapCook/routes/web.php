<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;


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

Route::get('/wait', function () {
    return view('wait');
})->name('wait');

Route::get('/download/{id}', [ImageController::class, 'download'])->name('download');
Route::post('/upload', [ImageController::class, 'upload'])->name('image.upload');
Route::get('/status', [ImageController::class, 'status'])->name('upload.status');
Route::get('/job-status', [ImageController::class, 'jobStatus'])->name('job.status');
