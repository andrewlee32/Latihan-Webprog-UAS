<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/menus', [HomeController::class, 'menus'])->name('daftarmenu');
    Route::get('/searchMenu', [HomeController::class, 'searchmenu'])->name('searchMenu');
    Route::get('/menu/{id}', [HomeController::class, 'menudetail'])->name('detailmenuRedirect');
    Route::get('/restaurants', [HomeController::class, 'restaurants'])->name('daftarRest');
    Route::get('/searchRestaurant', [HomeController::class, 'searchrestaurant'])->name('searchRestaurant');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
    Route::get('/profile/{id}', [HomeController::class, 'profile'])->name('profile');
    Route::post('/editprofile/{id}', [HomeController::class, 'editprofile'])->name('editprofile');
    Route::get('/changepassword', [HomeController::class, 'changepassword'])->name('changepassword');
    Route::post('/updatepassword/{id}', [HomeController::class, 'updatepassword'])->name('updatepassword');
});
