<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function() { 
Route::get('/blogs', [ApiController::class, 'blogs']);
Route::get('/videos', [ApiController::class, 'videos']);
Route::get('/partners', [ApiController::class, 'partners']);
Route::post('/contacts/store', [ApiController::class, 'storeContact']);
Route::post('/volunteers/store', [ApiController::class, 'storeVolunteer']);
Route::post('/applications/store', [ApiController::class, 'storeApplication']);
Route::get('/statistics', [ApiController::class, 'statistics']);

});

/* To create a user token, after creating the token login as the user and go to this route  */
// Route::get('/token', [ApiController::class, 'token']);