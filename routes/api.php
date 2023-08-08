<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ruta obtener informacion por codigo postal
Route::get('/cp/{cp}', function ($cp) {
    $codigos_postales_json = file_get_contents(public_path('data/codigos_postales.json'));
    dd($codigos_postales_json);
    $codigos_postales = json_decode($codigos_postales_json, true);
    $info = $codigos_postales[$cp];
    return $info;
});
