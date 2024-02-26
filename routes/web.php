<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;



Route::get('/', [frontendController::class, 'index']);
