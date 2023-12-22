<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ItemsController; 
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ClassificationsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ITEMS
Route::get('/items', [ItemsController::class, 'fetchData']);
Route::post('/item', [ItemsController::class, 'store']);
Route::put('/item', [ItemsController::class, 'store']);
Route::delete('/item/{id}', [ItemsController::class, 'destroy']);

// SUPPLIER
Route::get('/suppliers', [SuppliersController::class, 'fetchData']);
Route::post('/supplier', [SuppliersController::class, 'store']);
Route::put('/supplier', [SuppliersController::class, 'store']);
Route::delete('/supplier/{id}', [SuppliersController::class, 'destroy']); 

// CUSTOMER
Route::get('/customers', [CustomersController::class, 'fetchData']);
Route::post('/customer', [CustomersController::class, 'store']);
Route::put('/customer', [CustomersController::class, 'store']);
Route::delete('/customer/{id}', [CustomersController::class, 'destroy']); 

Route::get('/classifications', [ClassificationsController::class, 'fetchData']);
Route::post('/classification', [ClassificationsController::class, 'store']);
Route::put('/classification', [ClassificationsController::class, 'store']);
Route::delete('/classification/{id}', [ClassificationsController::class, 'destroy']); 