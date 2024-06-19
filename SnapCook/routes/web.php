<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

// Define the route for the home page
Route::get('/', function () {
    return view('index');
})->name('index');

// Define the route for the about page
Route::get('/about', function () {
    return view('overons');
})->name('overons');

// Define the route for the contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Define the route for the recipes page
Route::get('/recipes', function () {
    return view('recept');
})->name('recept');

// Define the route for the scanner page
Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');

// Define the route for the waiting page
Route::get('/wait', function () {
    return view('wait');
})->name('wait');

// Define the route for liking a recipe, using ImageController
Route::post('/like/{id}', [ImageController::class, 'like'])->name('like');

// Define the route for disliking a recipe, using ImageController
Route::post('/dislike/{id}', [ImageController::class, 'dislike'])->name('dislike');

// Define the route for downloading a recipe, using ImageController
Route::get('/download/{id}', [ImageController::class, 'download'])->name('download');

// Define the route for uploading an image, using ImageController
Route::post('/upload', [ImageController::class, 'upload'])->name('image.upload');

// Define the route for checking the upload status, using ImageController
Route::get('/status', [ImageController::class, 'status'])->name('upload.status');

// Define the route for checking the job status, using ImageController
Route::get('/job-status', [ImageController::class, 'jobStatus'])->name('job.status');
