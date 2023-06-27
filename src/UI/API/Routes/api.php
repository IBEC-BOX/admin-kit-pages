<?php

use AdminKit\Pages\UI\API\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/pages', [PageController::class, 'index']);
Route::get('/pages/{id}', [PageController::class, 'show']);
