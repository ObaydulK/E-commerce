<?php

use App\Livewire\AddCategories;
use App\Livewire\AddProductFrom;
use App\Livewire\AdminDeshboard;
use App\Livewire\ManageCategories;
use App\Livewire\ManageOrder;
use App\Livewire\ManageProduct;
use App\Livewire\ProductDetails;
use App\Livewire\About;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', About::class);

Route::group(['middleware'=> 'admin'], function () {
    Route::get('/product/details',  ProductDetails::class);
    
    Route::get('/admin/deshboard', AdminDeshboard::class)->name('deshboard');
    
    Route::get('/products', ManageProduct::class)->name('product');

    Route::get('/orders', ManageOrder::class)->name('order');

    Route::get('/add/product', AddProductFrom::class);

    Route::get('/manage/catagories', ManageCategories::class);
    //add catagories from 
    Route::get('/add/catagories', AddCategories::class);

});









