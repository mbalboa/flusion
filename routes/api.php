<?php

use Illuminate\Http\Request;

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

Route::resource('fabricants','FabricantController',['except'=>['edit','create'] ]);
Route::resource('flux','FluxController',[ 'only'=>['index','show'] ]);
Route::resource('fabricants.flux','FabricantFluxController',[ 'except'=>['show','edit','create'] ]);
