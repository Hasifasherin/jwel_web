<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('home');
});

Route::get('/about',function (){
    return view ('about');
});

Route::get('/contact',function (){
    return view ('contact');
});
Route::get('/category/{slug}', function ($slug) {
    return view('category.show', compact('slug'));
})->name('category');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/admin/login', [AdminController::class,'loginPage'])->name('admin.login');
Route::post('/admin/login', [AdminController::class,'login']);

Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');