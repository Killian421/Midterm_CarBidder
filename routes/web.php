<?php
use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/bidders', [BidderController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
