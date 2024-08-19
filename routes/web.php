<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-producto',function(){
    $product = Product::find(1);
    //select from product WHERE id =
    return $product;
});


Route::get('/index-producto',function(){
   /*
    $product = new Product();
   $product->name='Corona';
   $product->product_number=12346;
   $product->desc='Cerveza de 100ml, clara lager';
   $product->branch='Corona';
   $product->price='25.00';
    $product->save();
   
   */
   $product = Product::orderBy('name')
   ->select('name','price')
   ->take(2)
   ->get();
   return $product;
});
Route::get('/index-producto-add',function(){
    $product = new Product();
    $product->name='Modelo';
    $product->product_number=123413;
    $product->desc='Cerveza de 200ml, oscura';
    $product->branch='Modelo';
    $product->price='23.50';
    $product->save();
    return $product;
});

Route::get('/index-producto',[ProductController::class,'index']);

Route::get('/create-producto',[ProductController::class,'create']);

Route::get('/show-producto',[ProductController::class,'show']);

