<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', PortfolioController::class)->name('home');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])
    ->where('slug', '[a-z0-9\-]+')
    ->name('projects.show');
