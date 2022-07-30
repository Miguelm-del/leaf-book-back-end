<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



//----------------------About Users

Route::get('users', [UserController::class,'index']);

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});


//Teste Relationship

Route::get('users/review', [UserController::class,'showReviews']);



//----------------------About Others Functionality

Route::resource('posts', PostController::class)->only([
    'destroy', 'show', 'store', 'update','index'
 ]);

 Route::resource('books',BookController::class)->only([
    'destroy', 'show', 'store', 'update','index'
 ]);

 Route::resource('comments', CommentController::class)->only([
    'destroy', 'show', 'store', 'update','index'
 ]);
 Route::resource('reviews', ReviewController::class)->only([
    'destroy', 'show', 'store', 'update','index'
 ]);

 Route::resource('synopses', SynopsisController::class)->only([
     'destroy', 'show', 'store', 'update','index'
 ]);

 Route::get('book/search',[BookController::class,'search']);
