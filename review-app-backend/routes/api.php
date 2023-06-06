<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use \App\Http\Controllers\Api\V1\Auth;



Route::post('auth/register', Auth\RegisterController::class);
Route::post('auth/login', Auth\LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
   Route::get('profile', [Auth\ProfileController::class, 'show']);
   Route::put('profile', [Auth\ProfileController::class, 'update']);
});



Route::apiResource('users', UserController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('comments', CommentController::class);



// Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'store']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::put('/users/{id}', [UserController::class, 'update']);
// Route::delete('/users/{id}', [UserController::class, 'destroy']);

// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{id}', [ProductController::class, 'show']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Route::get('/reviews', [ReviewController::class, 'index']);
// Route::post('/reviews', [ReviewController::class, 'store']);
// Route::get('/reviews/{id}', [ReviewController::class, 'show']);
// Route::put('/reviews/{id}', [ReviewController::class, 'update']);
// Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);

// Route::get('/comments', [CommentController::class, 'index']);
// Route::post('/comments', [CommentController::class, 'store']);
// Route::get('/comments/{id}', [CommentController::class, 'show']);
// Route::put('/comments/{id}', [CommentController::class, 'update']);
// Route::delete('/comments/{id}', [CommentController::class, 'destroy']);




// Route::get('welcome',function() {
//     return 'hello from apis';
// });