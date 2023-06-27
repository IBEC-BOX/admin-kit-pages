<?php

use Illuminate\Support\Facades\Route;
use VendorName\Skeleton\UI\API\Controllers\SingleNameController;

Route::get('/:package_slug_without_prefix', [SingleNameController::class, 'index']);
Route::get('/:package_slug_without_prefix/{id}', [SingleNameController::class, 'show']);
