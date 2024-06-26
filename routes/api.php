<?php

use App\Http\Controllers\kategoriaController;
use App\Http\Controllers\tesztController;
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
Route::get('/tesztek',[tesztController::class,'teszt']);
Route::get('/tesztek/kategoria/{id}',[tesztController::class,'tesztkat']);
Route::get('/kategoria',[kategoriaController::class,'kategoria']);
