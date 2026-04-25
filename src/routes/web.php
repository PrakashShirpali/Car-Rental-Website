<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllcarsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HatchbackController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\MpvController;
use App\Http\Controllers\SedanController;
use App\Http\Controllers\SuvController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/About_Us', [AboutController::class, 'aboutPage'])->name('about');
Route::get('/Cars', [CarController::class, 'carsPage'])->name('cars');
Route::get('/Contact_Us', [ContactController::class, 'contactPage'])->name('contact');
Route::get('/layout', [LayoutController::class, 'layoutPage'])->name('layout');

Route::get('/Cars/allcars', [AllcarsController::class, 'allcars'])->name('allcars');
Route::get('/Cars/hatchback', [HatchbackController::class, 'hatchback'])->name('hatchback');
Route::get('/Cars/mpv', [MpvController::class, 'mpv'])->name('mpv');
Route::get('/Cars/sedan', [SedanController::class, 'sedan'])->name('sedan');
Route::get('/Cars/suv', [SuvController::class, 'suv'])->name('suv');
