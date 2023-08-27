<?php


use App\Http\Controllers\IndustrijaController;
use App\Http\Controllers\KremaController;
use App\Http\Controllers\ProizvodjacController;
use App\Http\Controllers\ProizvodjacKremaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/users/{id}', [UserController::class, 'show']);
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/industrije', [IndustrijaController::class, 'index']);
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/industrija/{industrija}', [IndustrijaController::class, 'show']);
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/proizvodjaci', [ProizvodjacController::class, 'index']);
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/proizvodjaci/{proizvodjac}', [ProizvodjacController::class, 'show']);
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/kreme', [KremaController::class, 'index']);
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/kremeOdredjenogProizvodjaca/{id}', [ProizvodjacKremaController::class, 'index']);
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::delete('/industrije/{id}', [IndustrijaController::class, 'destroy']);
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});

Route::group(['middleware'=> ['auth:sanctum']], function() {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::put('kreme/{id}', [KremaController::class, 'update']);
    Route::delete('kreme/{id}', [KremaController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});



?>

