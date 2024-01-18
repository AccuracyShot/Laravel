<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SeriesControllerApi; 
use App\Http\Controllers\Api\SeasonsControllerApi;
use App\Http\Controllers\Api\EpisodesControllerApi;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/series', SeriesControllerApi::class);
Route::get('/series/{series}/seasons', [SeasonsControllerApi::class, 'seasons']);
Route::get('/series/{series}/episodes', [EpisodesControllerApi::class, 'episodes']);
Route::patch('/episodes/{episode}', [EpisodesControllerApi::class, 'watched']);
