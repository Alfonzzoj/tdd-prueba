<?php

use App\Http\Controllers\ProductsController;
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

// Listar todos los productos
Route::get('products', [ProductsController::class, 'index']);

// Obtener un producto específico
Route::get('products/{id}', [ProductsController::class, 'show']);
// Crear un nuevo producto
Route::post('products', [ProductsController::class, 'store']);
// Actualizar un producto existente
Route::put('products/{id}', [ProductsController::class, 'update']);
// Eliminar un producto existente
Route::delete('products/{id}', [ProductsController::class, 'destroy']);
