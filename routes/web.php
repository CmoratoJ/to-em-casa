<?php

Route::get('/home', 'HomeController@index');

Route::get('/acomodacoes', 'AcomodacoesController@index');

Auth::routes();

Route::get('/sair', function(){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/home');
});

