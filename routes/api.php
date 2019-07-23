<?php

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users/{user}', function (App\Models\User $user) {
    return $user;
});
*/

Route::resource('players', 'Api\PlayerController');


Route::fallback(function(){
    return response()->json([
        'message' => 'Route not found'], 404);
});
