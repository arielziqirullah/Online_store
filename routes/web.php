<?php

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Route;


Route::get('/' , \App\Http\Livewire\Home::class)->name('index');
Route::get('/product/{product:slug}' , \App\Http\Livewire\ProductDetail::class)->name('product.detail');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


