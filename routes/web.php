<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/customer',  [CustomerController::class, 'index']);
Route::get('/customer/{id}',  [CustomerController::class, 'show']);