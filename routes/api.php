<?php
use App\Models\Donate;
use App\Models\Post;
use App\Http\Controllers\PostsApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/posts', [PostsApiController::class, 'index']);
// Route::post('/posts', [PostsApiController::class, 'store']);
// Route::put('/posts/{post}', [PostsApiController::class, 'update']);
// Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
Route::get('/donate', [PostsApiController::class, 'index']);
// Route::get('/donate/{donate}', [PostsApiController::class, 'show']);
Route::post('/donate', [PostsApiController::class, 'store']);
Route::put('/donates/{donate}', [PostsApiController::class, 'update']);
Route::delete('/donates/{donate}', [PostsApiController::class, 'destroy']);
