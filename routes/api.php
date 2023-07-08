<?php

use App\Http\Controllers\Api\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FullstackController;

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

//API Formulario CRUD

Route::get('/crudR',[CrudController::class,'read']);
Route::post('/crudC',[CrudController::class,'create']);
Route::patch('/crudU',[CrudController::class,'update']);
Route::delete('/crudD',[CrudController::class,'delete']);

//API Formulario de contacto

Route::get('/fullstackR',[FullstackController::class,'read']);
Route::post('/fullstackC',[FullstackController::class,'create']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
