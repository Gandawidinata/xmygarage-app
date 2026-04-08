<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\TestimonialController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (tanpa login)
|--------------------------------------------------------------------------
*/
Route::post('/login', function (Request $request) {
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user = Auth::user();
    $token = $user->createToken('token')->plainTextToken;

    return response()->json([
        'user' => $user,
        'token' => $token
    ]);
});

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (harus login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('services', ServiceController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('bookings', BookingController::class);
    Route::apiResource('articles', ArticleController::class);
    Route::apiResource('testimonials', TestimonialController::class);

});