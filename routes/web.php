<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;

Route::get('/',[HomeController::class,'Home']);
Route::get('/contactus',[ContactUsController::class,'ContactUs']);
Route::get('/aboutus',[AboutUsController::class,'AboutUs']);