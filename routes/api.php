<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('products', ProductController::class);
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::put('/Products', [ProductController::class, 'update'])->name('product.update');