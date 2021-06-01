<?php

use App\Http\Controllers\admin\ControllerEquipes;
use App\Http\Controllers\admin\ControllerJoueurs;
use App\Http\Controllers\admin\ControllerLeagues;
use App\Http\Controllers\admin\ControllerMatch;
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
Route::group(['middleware' => ['api']], function () {

    Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\admin'],function() {

        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout')->middleware('auth.guard:api');
        
        Route::group(['prefix' => 'joueur'],function(){
            
            Route::get('','ControllerJoueurs@index');
            Route::post('add','ControllerJoueurs@create');
            Route::post('update','ControllerJoueurs@update');
            Route::delete('delete/{id}','ControllerJoueurs@destroy');
        });

        Route::group(['prefix' => 'equipe'],function(){
            
            Route::get('','ControllerEquipes@index');
            Route::post('add','ControllerEquipes@create');
            Route::post('update','ControllerEquipes@update');
            Route::delete('delete/{id}','ControllerEquipes@destroy');
        });

        Route::group(['prefix' => 'league'],function(){
            
            Route::get('','ControllerLeagues@index');
            Route::post('add','ControllerLeagues@create');
            Route::post('update','ControllerLeagues@update');
            Route::delete('delete/{id}','ControllerLeagues@destroy');
        });

        Route::group(['prefix' => 'match'],function(){
            
            Route::get('','ControllerMatch@index');
            Route::post('add','ControllerMatch@create');
            Route::post('update','ControllerMatch@update');
            Route::delete('delete/{id}','ControllerMatch@destroy');
        });

    });
});
