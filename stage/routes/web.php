<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\welcom;
use App\http\Controllers\connect_controller;
use App\http\Controllers\container;
use App\http\Controllers\gestion;

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

Route::get('/', [welcom::class, 'wc'] );

//connexion
Route::get('connect',[connect_controller::class, 'lg']); 
//<!-------------Posts--------------!>
//transport//
Route::post('transport',[gestion::class, 'transportInsertion']);
Route::post('conteneur',[container::class, 'insertNewCont']);
//commande//
Route::post('/command/{id}', [container::class, 'insertCommand']);
 //connection/
Route::post('connect',[connect_controller::class, 'conn']); 
Route::post('profile',[connect_controller::class, 'modify']);
////check in//     
Route::group(['middleware' => ['checklogin']], function () {
    Route::get('/transport',[gestion::class, 'tp']);
    Route::get('/display',[gestion::class, 'displaytp']);
     
    Route::get('/logout', [connect_controller::class,'deco']);
    Route::get('/stock',[container::class,'Allcont']);
   Route::get('/command/{id}',[container::class,'cmd']);
   Route::get('/profile',[connect_controller::class,'profile']);
   Route::get('/conteneur',[container::class,'cont']);
   Route::get('/command',[container::class, 'allcommand']);
});
