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



Route::get('/ftvbpresentation',function(){
    return view('front-office.ftvb presentation');

});

Route::get('/contact',function(){
    return view('front-office.contact');

});


Route::get('/bureaufederale',function(){
    return view('front-office.bureau federale');

});


Route::get('/commutionArbitrage',function(){
    return view('front-office.commution Arbitrage');

});

Route::get('/commutionMedicale',function(){
    return view('front-office.commution Arbitrage');

});


Route::get('/media-video',function(){
    return view('front-office.media-video');

});



Route::post('/login','App\Http\Controllers\admin\AuthController@login');
Route::get('/login',[App\Http\Controllers\admin\AuthController::class,'show'])->name('login');
Route::get('/register',[App\Http\Controllers\admin\AuthController::class,'showRegister']);
Route::post('/register',[App\Http\Controllers\admin\AuthController::class,'create']);
Route::get('/logout',[App\Http\Controllers\admin\AuthController::class,'logout']);
Route::group(['middleware' => 'auth','prefix' => 'admin', 'namespace' => 'App\Http\Controllers\admin'],function() {
    
    Route::get('/', function () {
        return view('back-office.layout.main');
    })->name('admin');
    
    Route::post('add','ControllerAdmin@create');
 
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
        Route::get('delete/{id}','ControllerEquipes@destroy');
    });

    Route::group(['prefix' => 'league'],function(){
        
        Route::get('','ControllerLeagues@index');
        Route::post('add','ControllerLeagues@create');
        Route::post('update','ControllerLeagues@update');
        Route::get('delete/{id}','ControllerLeagues@destroy');

    });

    Route::group(['prefix' => 'match'],function(){
        
        Route::get('','ControllerMatch@index');
        Route::post('add','ControllerMatch@create');
        Route::post('update','ControllerMatch@update');
        Route::get('delete/{id}','ControllerMatch@destroy');

    });

    Route::group(['prefix' => 'article'],function(){
        
        Route::get('','ControllerArticle@index');
        Route::post('add','ControllerArticle@create');
        Route::post('update','ControllerArticle@update');
        Route::get('delete/{id}','ControllerArticle@destroy');

    });

    Route::group(['prefix' => 'gallery'],function(){
        
        Route::get('','ControllerGallery@index');
        Route::post('add','ControllerGallery@create');

    });

});

Route::group(['namespace' => 'App\Http\Controllers\frontOffice'],function() {

    
    Route::get('/','ControllerArticle@welcomeindexArticle');
    Route::get('/equipenationaleseniorhommes','controllerEquipe@index');
    Route::get('/equipenationaleseniorDames','controllerEquipe@indexDames');
    Route::get('/equipenationalejeunegarcons','controllerEquipe@indexgarcon');
    Route::get('/equipenationalejeunefilles','controllerEquipe@indexfilles');
    Route::get('/Coupetunisieseniorhomme','controllerEquipe@indexCoupeHomme');
    Route::get('/CoupetunisieseniorDame','controllerEquipe@indexCoupeDame');
    Route::get('/ChampionnatNationaleAseniorhomme','controllerChampionnat@indexHommeA');
    Route::get('/ChampionnatNationaleAseniorDame','controllerChampionnat@indexDameA');
    Route::get('/ChampionnatNationaleBseniorhomme','controllerChampionnat@indexHommeB');
    Route::get('/ChampionnatNationaleBseniorDame','controllerChampionnat@indexDameB');
    Route::get('/beachvolleycircuitnationale','controllerBeachVolley@circuitnationale');
    Route::get('/beachvolleylesequipesnationale','controllerBeachVolley@equipesnationale');
    Route::get('/mediaImages','controllerMedia@gallery');
    Route::post('/email', 'EmailController@sendEmail')->name('send.email');


});

