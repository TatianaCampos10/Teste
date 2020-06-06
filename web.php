<?php

use App\Http\Controllers\Admin\RecadoController;
use Illuminate\Support\Facades\Route;

/*

|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::prefix('hello')->group(function () {
    Route::get('/en/{text}', 'HelloWorldController@index')->name('hello');
    Route::get('/br', 'HelloWorldController@digaOi')->name('oi');
});*/

//Route::resource('/user', 'UserController');

//No verbo match pode definir todos os métodos de uma vez, get,post,etc..
//Route::match(['get','post'],'oi', 'HelloWorldController@digaOi');

//Caso queira retornar uma view sem usar um controller
//Route::view('oi','hello.index',['text'=>'Oi']);

Route::prefix('admin')->namespace('Admin')->group(function () {

    /*Route::prefix('posts')->name('posts.')->group(function () {
       Route::get('/create', 'PostController@create')->name('create');
        Route::post('/store', 'PostController@store')->name('store');
    });

    Route::prefix('recados')->name('recados.')->group(function(){
          Route::get('/create', 'RecadoController@create')->name('create');
          Route::post('/store', 'RecadoController@store')->name('store');


    });*/

    Route::prefix('questoes')->name('questoes.')->group(function(){
        Route::get('/create','QuestaoController@create')->name('create');
        Route::post('/create','QuestaoController@store')->name('store');
    });
    
    /*Route::prefix('testes')->name('testes.')->group(function(){
        Route::get('/create','TesteController@create')->name('create');
        Route::post('/create','TesteController@store')->name('store');

    });*/
});
