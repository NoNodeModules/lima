<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/cbt/login');
});

//route halaman soal

Auth::routes();
Route::get('/cbt/login','LoginController@index');
Route::patch('/cbt/login','LoginController@login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cbt/{id}/{no}','SoalController@soal1');
Route::get('/cbt/{id}/{no}/{jawab}','JawabController@jawab');


Route::get('/cbt/break1','BreakController@break1');