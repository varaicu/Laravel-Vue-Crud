<?php

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
Route::group(['prefix' => 'auth'], function() {
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
});

Route::group(['middleware' => 'auth.jwt'], function() {
    Route::apiResource('products', \App\Http\Controllers\ProductController::class);
});
Route::apiResource('categories', \App\Http\Controllers\CategoryController::class);
Route::apiResource('languages', \App\Http\Controllers\LanguageController::class);
Route::apiResource('languageKeywords', \App\Http\Controllers\LanguageKeywordController::class)->only(['update', 'destroy']);