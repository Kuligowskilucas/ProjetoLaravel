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
    return redirect()->route('admin.clientes');
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

Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');
//Route::get('sobre', function(){
//    return redirect('/empresa');
//});

Route::get('/news',function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});


Route::group(['prefix' => 'admin','as' => 'admin.'], function(){

    Route::get('dashboard', function(){
        return 'dashboard';
    })->name('dasboard');
    
    Route::get('users', function(){
        return 'users';
    })->name('users');
    
    Route::get('clientes', function(){
        return 'clientes';
    })->name('clientes');
});

