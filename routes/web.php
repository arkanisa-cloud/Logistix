<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StockInController;
use App\Http\Controllers\StockOutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', CategoryController::class);
Route::resource('locations', LocationController::class);
Route::resource('items', ItemController::class);
Route::resource('stock-ins', StockInController::class)->only(['index', 'create', 'store']);
Route::resource('stock-outs', StockOutController::class)->only(['index', 'create', 'store']);
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');