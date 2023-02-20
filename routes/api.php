<?php

use App\Http\UserControllers\UserControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::controller(UserControllers::class)->group(function (): void {
	Route::post('/users', 'store');
	Route::put('/users/{user-id}', 'update');
	Route::post('/users/{user-id}', 'delete');
});