<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiBookController;
use App\Http\Controllers\Api\ApiAuthorController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ApiBookController::class)->group(function () {
    Route::get('/books', 'index');
    Route::get('/book/{slug}', 'show');
    Route::get('/my-books', 'myBooks')->middleware('auth:sanctum');
});

Route::controller(ApiAuthorController::class)->group(function () {
    Route::get('/authors', 'index');
    Route::get('/author/{slug}', 'show');
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json([
        'token' => $user->createToken($request->device_name)->plainTextToken,
    ]);
});
