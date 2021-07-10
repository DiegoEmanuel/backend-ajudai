<?php
use App\Models\Donate;
use App\Models\Post;
use App\Http\Controllers\AjudaiController;
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


Route::get('/donors/show', [AjudaiController::class, 'index']);
Route::get('/donation/create', [AjudaiController::class, 'create'])->middleware('auth');
Route::get('/donors', [AjudaiController::class, 'store']);
Route::put('/donors/update/{id}',[AjudaiController::class,'update']);
// Route::delete('/donates/{donate}', [PostsApiController::class, 'destroy']);
