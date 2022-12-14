<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::post('/login', [LoginController::class, 'index']);

//todo lo que haya en la ruta register va a pasar por middleware
/*
Route::group(['prefix'=>'admin', 'middleware'=>['jwt.verify']], function(){
    Route::post('/register', [UserController::class,'register']);
    Route::post('/ventas', [VentasController::class,'ventas']);
});

*/
Route::middleware('auth:sso')->group(function () {
    Route::get('/me', function (Request $request) {
        return $request->user();
    });
});


