<?php

use Illuminate\Support\Facades\Route;

// Named routes for each view
Route::view('/item', 'item')->name('item');
Route::view('/customer', 'customer')->name('customer');
Route::view('/order', 'order')->name('order');
Route::view('/order-details', 'order_details')->name('order.details');

// Optional: homepage for navigation
Route::get('/', function () {
    return view('welcome');
});
