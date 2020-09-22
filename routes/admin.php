<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'dashboard';
})->name('dashboard');

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');

Route::get('data/categories', 'DataTable\CategoryController')->name('categories.data');
Route::get('data/products', 'DataTable\ProductController')->name('products.data');