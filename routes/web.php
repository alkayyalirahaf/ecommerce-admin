<?php


use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.index')->name('dashboard');

Route::view('/users', 'dashboard.index')->name('users');
Route::view('/sellers', 'dashboard.index')->name('sellers');
Route::view('/categories', 'dashboard.index')->name('categories');
Route::view('/products', 'dashboard.index')->name('products');
Route::view('/orders', 'dashboard.index')->name('orders');
Route::view('/order-items', 'dashboard.index')->name('orderitems');