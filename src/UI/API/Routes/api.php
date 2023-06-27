<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Pages\UI\API\Controllers\PageController;

Route::get('/pages', [PageController::class, 'index']);
Route::get('/pages/{id}', [PageController::class, 'show']);
