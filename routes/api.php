<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Controller;
use App\Http\Controllers\ItemsController;
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

// Joined Table Endpoints
Route::get('/item', [ItemsController::class, 'fetchItems']);

// Degault Endpoints
Route::get('/{endpoint}', [Controller::class, 'fetchData']);
Route::post('/{endpoint}', [Controller::class, 'store']);
Route::put('/{endpoint}', [Controller::class, 'store']);
Route::delete('/{endpoint}/{id}', [Controller::class, 'destroy']);