<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// We only need to access the drinks, as "orders" and "customers" are only intended for database-completeness
Route::get('/drinks', [DrinkController::class, 'index']);


// ---- Do not expose the below end-points ------------------------------------------------------
//   We should not expose these publicly, and do not need them in our project,
//   so this comment is only for educational purposes.
//
//   If you need these end-points, consider using a login middleware. E.g. "Sanctum",
//   so the end-points cannot be accessed without logging in first.
//   - Jacob (Turbulentarius)
// ----------------------------------------------------------------------------------------------
// Route::get('/orders', [OrderController::class, 'index']);
// Route::get('/customers', [CustomerController::class, 'index']);

