<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteApiController;
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


Route::get('/notes', [NoteApiController::class,'index']);
//Route::get('/notes/create', [NoteApiController::class,'create']);
Route::post('/notes', [NoteApiController::class,'store']);
//Route::get('/notes/{id}/edit', [NoteApiController::class,'edit']);
Route::get('/notes/{id}', [NoteApiController::class,'show']);
Route::put('/notes/{id}', [NoteApiController::class,'update']);
Route::delete('/notes/{id}',[NoteApiController::class,'destroy']);
