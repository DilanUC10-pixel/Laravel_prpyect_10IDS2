<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('login',[LoginController::class,'login']);
Route::apiResource('productos', \App\Http\Controllers\ProductController::class)->parameters([
    'productos' => 'product'
]);