<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route de test simple
Route::get('/test-api', function () {
    return response()->json([
        'message' => 'API Laravel fonctionne !',
        'timestamp' => now()
    ]);
});

Route::get('/films', [FilmController::class, 'index']);
Route::post('/films/store', [FilmController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});