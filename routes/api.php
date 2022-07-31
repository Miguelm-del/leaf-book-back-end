<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SynopsisController;

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
Route::get('users/{id}', [UserController::class,'show']);
Route::get('users/reviews/{id}', [UserController::class,'showReviews']);


// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', [AuthController::class,'login']);
//     Route::post('logout', [AuthController::class,'logout']);
//     Route::post('refresh', [AuthController::class,'refresh']);
//     Route::post('me', [AuthController::class,'me']);
//     Route::post('register', [AuthController::class,'register']);
// });
Route::post('auth/login', [AuthController::class,'login']);
Route::post('auth/register', [AuthController::class,'register']);

Route::group(['middleware' => ['apiJwt']], function(){
    Route::post('auth/me',[AuthController::class,'me']);
    Route::post('auth/logout', [AuthController::class,'logout']);

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
