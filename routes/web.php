<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LicencesController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ZipCodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[AuthController::class,'login'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget_password');
    Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');
    Route::post('/signup',[AuthController::class,'signup'])->name('signup');
});

Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/lang/{lang}',[ LanguageController::class,'switchLang'])->name('switch_lang');
Route::get('/pagination-per-page/{per_page}',[ PaginationController::class,'set_pagination_per_page'])->name('pagination_per_page');

// Codigos postales / ZipCodes
Route::post('zip_codes/upload_csv', [ZipCodeController::class,'uploadCSV'])->name('zip_codes.upload_csv');
Route::get('zip_codes', [ZipCodeController::class,'index'])->name('zip_codes.index');





Route::group(['prefix'=>'{language}'],function(){
    // ==> Clientes / Clients
    Route::resource('clients', ClientController::class);

    // TODO: eliminar si no hace falta
    Route::get('clients/{id}/show2',function(){
        $title = 'Clientes';
        $description = 'Clientes management';
        return view('clients.show_temporal',compact('title','description'));
    })->name('clients.show2');

    // ==> Empresas / Enterprises
    Route::resource('enterprises', EnterpriseController::class);

    // ==> Items / items
    Route::resource('items', ItemController::class);

    // ==> Metodos de pago / PaymentMEthods
    Route::resource('payment_methods', PaymentMethodController::class);

    // ==> Licencias / Licences
    Route::resource('licences', LicencesController::class);


    // Route::get('items/{tipo?}', ItemController::class)->name('items.index');
    // Route::group(['items'=> 'items'],function(){
    //     // => Tejidas

    // });

});
