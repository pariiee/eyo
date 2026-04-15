<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontComplaintController; 
use App\Http\Controllers\ComplaintController;

//
    Route::get('/', [FrontComplaintController::class,'index'])->name ('home');
    Route::resource('/pengaduan', FrontComplaintController::class,)
    ->only(['index','create','store']);
    
Route::middleware('auth')->group(function () {
    //
Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

        Route::resource('/category', CategoryController::class,);
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
         Route::resource('/complaint', ComplaintController::class,)
    ->only(['index','edit','update','destroy']);


});

require __DIR__.'/auth.php';
