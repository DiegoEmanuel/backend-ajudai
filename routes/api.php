<?php
use App\Models\Donate;
use App\Models\Post;
use App\Http\Controllers\AjudaiController;
use App\Http\Controllers\DonorsController;
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


Route::get('/donors/show', [DonorsController::class, 'index']);
Route::POST('/donors', [DonorsController::class, 'create']);
Route::get('/donors', [AjudaiController::class, 'store']);
Route::put('/donors/update/{id}',[AjudaiController::class,'update']);
// Route::delete('/donates/{donate}', [PostsApiController::class, 'destroy']);
