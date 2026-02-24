<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/articles/{id}', [PageController::class,'articles']);
