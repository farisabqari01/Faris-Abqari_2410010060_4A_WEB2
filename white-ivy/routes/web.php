<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocialController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/admin', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('admin/games', GameController::class);

Route::resource('admin/schedules', ScheduleController::class)
    ->names('schedules');

Route::get('/admin/about', [AboutController::class, 'edit'])
    ->name('about.edit');

Route::put('/admin/about', [AboutController::class, 'update'])
    ->name('about.update');

Route::resource('admin/socials', SocialController::class)
    ->names('socials');