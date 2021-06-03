<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('back-office.layout.main');
});

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\admin'],function() {

    Route::post('add','ControllerAdmin@create');
    Route::post('login','AuthController@login');
    Route::post('logout','AuthController@logout');
    
    Route::group(['prefix' => 'joueur'],function(){
        
        Route::get('','ControllerJoueurs@index');
        Route::post('add','ControllerJoueurs@create');
        Route::post('update','ControllerJoueurs@update');
        Route::get('delete/{id}','ControllerJoueurs@destroy');
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

    Route::group(['prefix' => 'gallery'],function(){
        
        Route::get('','ControllerGallery@index');
        Route::post('add','ControllerGallery@create');
        
    });

});