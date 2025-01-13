<?php

use App\Livewire\AddCategories;
use App\Livewire\AddProductFrom;
use App\Livewire\AdminDeshboard;
use App\Livewire\AllProducts;
use App\Livewire\EditProduct;
use App\Livewire\ManageCategories;
use App\Livewire\ManageOrder;
use App\Livewire\ManageProduct;
use App\Livewire\ProductDetails;
use App\Livewire\About;
use App\Livewire\ShoppingCartComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', About::class);
Route::get('/product/{product_id}/details',  ProductDetails::class);
Route::get('/all/products', AllProducts::class);

Route::get('/shopping-cart',ShoppingCartComponent::class)->name('shopping-cart');



Route::group(['middleware'=> 'admin'], function () {
    
    Route::get('/admin/deshboard', AdminDeshboard::class)->name('deshboard');
    
    Route::get('/products', ManageProduct::class)->name('product');

    Route::get('/orders', ManageOrder::class)->name('order');

    Route::get('/add/product', AddProductFrom::class);

    Route::get('/manage/catagories', ManageCategories::class);
    //add catagories from 
    Route::get('/add/catagories', AddCategories::class);
    Route::get('edit/{id}/products', EditProduct::class);

});