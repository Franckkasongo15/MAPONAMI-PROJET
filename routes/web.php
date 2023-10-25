<?php

use App\Http\Controllers\UserAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\AuthentificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthentificationController::class, 'home'])->name('index');

Route::prefix('/auth')->name('auth.')->controller(AuthentificationController::class)->group( function () {
    Route::get('/login', 'loadForm')->name('login');
    Route::post('/login','AuthVerification');
    Route::delete('/logout', 'logout');
    Route::get('/register', 'registerRedirect')->name('register');
    Route::post('/register','register');
});

Route::prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function (){
    Route::get('/', 'login')->name('login');
    Route::post('/','doLogin');
    Route::prefix('/dash')->name('dash.')->group(function (){
        Route::get('/','home')->name('index');
        Route::get('/registerUser', 'registerform')->name('registerUser');
        Route::post('/registerUser', 'storeUser');
       // Route::get('/jecree', [AdminController::class, 'AdminCreer']);

    })->middleware('auth');

});

Route::get('/registerUser', [AdminController::class, 'registerform'])->name('registerUser');

//Route::get('/jecree', [AdminController::class, 'AdminCreer']);

//Route::get('/registerUser', [AdminController::class, 'registerform'])->middleware('auth')->name('Admin.registerUser');
//Route::get('/jecree', [AdminController::class, 'AdminCreer']);


Route::prefix('/')->controller(UserAction::class)->name('user.')->group(function (){
    Route::get('/voter','votePage')->name('vote')->middleware('auth');
    Route::post('/voter', 'doVote');
});


Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});



