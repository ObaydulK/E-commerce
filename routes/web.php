<?php

use App\Livewire\AdminDeshboard;
use App\Livewire\ProductDetails;
use App\Livewire\About;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details',  ProductDetails::class);
Route::get('/about', About::class);

Route::get('/admin/deshboard', AdminDeshboard::class)->middleware('admin');











