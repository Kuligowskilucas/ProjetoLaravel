<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/empresa', function(){
    return view('site/empresa');
});

Route::any('/any', function(){
    return 'esse tipo de rota permite qualquer requisição http, como o get,post,put e delete';
});

Route::match(['put'],'/match', function(){
    return 'esse tipo de rota permite definir as requisições http que serão aceitas';
});

Route::get('/produto/{id}/{categoria?}', function($id, $categoria = ''){
    return "o id do produto é: {$id}<br>
            e a categoria é: {$categoria}";
});
