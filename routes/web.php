<?php

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acomodacoes', 'AcomodacoesController@index')->name('acomodacoes');

Auth::routes();

Route::get('/sair', function(){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/home');
});

