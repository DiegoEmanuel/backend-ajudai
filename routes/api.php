<?php
use App\Models\Donate;
use App\Models\Post;
use App\Http\Controllers\AjudaiController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DonorsController;
use App\Http\Controllers\AddressController;
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
index – Lista os dados da tabela
show – Mostra um item específco
create – Retorna a View para criar um item da tabela
edit – Retorna a View para edição do dado
store – Salva o novo item na tabela
destroy – Remove o dado
update – Salva a atualização do dado


donor

address

cities

donations

donations_items

associations

campaigns

projects

social

|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [CitiesController::class, 'index']);
// Route::get('/donors/show', [DonorsController::class, 'show']);
Route::get('/donors', [DonorsController::class, 'create']);
Route::get('/donors', [DonorsController::class, 'index']);
Route::post('/donors', [DonorsController::class, 'store']);


Route::get('/cities', [CitiesController::class, 'index']);
Route::post('/cities', [CitiesController::class, 'store']);
Route::put('/cities/update/{id}',[CitiesController::class,'update']);
// Route::delete('/donates/{donate}', [PostsApiController::class, 'destroy']);


Route::get('/address', [AddressController::class, 'index']);
Route::post('/address', [AddressController::class, 'store']);
Route::put('/address/update/{id}', [AddressController::class, 'update']);


