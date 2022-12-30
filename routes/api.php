<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
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

URL::forceScheme(env('FORCE_SCHEME'));

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json([
        "development" => true,
    ]);
});

Route::get('/appointment/request', function () {
    return response()->json([
        "status" => 200,
        "executed" => "APPOINTMENT_REQUESTED",
        "message" => "The appointment has been requested",
        "instance" => [
            "uuid" => Str::uuid(),
            "status" => "APPOINTMENT_REQUESTED",
            "created_at" => now(),
            "updated_at" => now(),
        ]
    ]);
});
