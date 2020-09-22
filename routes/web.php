<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.templates.default');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


