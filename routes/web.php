<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Supervisor\SupervisorController;
Route::get('/', function () {
    return view('dashboard.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::group(['prefix'=>'supervisor','middleware'=>['supervisor','auth'],'namespace'=>'supervisor'],function(){
    Route::get('dashboard', [SupervisorController::class, 'index'])->name('supervisor.dashboard');
});


Route::group(['prefix'=>'seller','middleware'=>['seller','auth'],'namespace'=>'seller'],function(){
    Route::get('dashboard', [SellerController::class, 'index'])->name('seller.dashboard');
});
