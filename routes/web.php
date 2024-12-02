<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

Route::group(['prefix'=>'admin'],function(){

        Route::get('/login',[LoginController::class,'Login'])->name('login');
        Route::post('/login-submit',[LoginController::class,'LoginSubmit'])->name('login-submit');

Route::group(['middleware'=>'auth'],function(){
       
        Route::get('/logout',[LoginController::class,'Logout'])->name('logout');

        Route::get('/',[HomeController::class,'Home'])->name('dashboard');

        Route::get('/categories',[CategoryController::class,'Categories'])->name('categories');
        Route::get('/category-create',[CategoryController::class,'CategoryCreate'])->name('category-create');
        Route::post('/category-store',[CategoryController::class,'CategoryStore'])->name('category-store');

        Route::get('/sub-categories',[SubCategoryController::class,'SubCategories'])->name('sub-categories');
        Route::get('/sub-category-create',[SubCategoryController::class,'SubCategoryCreate'])->name('sub-category-create');
        Route::post('/sub-category-store',[SubCategoryController::class,'SubCategoryStore'])->name('sub-category-store');

        Route::get('/products',[ProductController::class,'Products'])->name('products');
        Route::get('/product-create-form',[ProductController::class,'ProductCreate'])->name('product-create');
        Route::post('/product-store',[ProductController::class,'ProductStore'])->name('product-store');

        Route::get('/brands',[BrandController::class,'Brands'])->name('brands');
        Route::get('/brand-create',[BrandController::class,'BrandCreate'])->name('brand-create');
        Route::post('/brand-store',[BrandController::class,'BrandStore'])->name('brand-store');

        Route::get('/orders',[OrderController::class,'Orders'])->name('orders');

    });

});


           
        
    