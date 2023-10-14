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

Route::get('home', [AuthentificationController::class, 'home'])->name('index');

Route::get('/login', [AuthentificationController::class, 'loadForm'])->name('login');

Route::post('/loginSendData',[AuthentificationController::class, 'AuthVerification']);
/*
Route::get('/login', function(){
    return view('Auth.log
});
*/

Route::get('voter', [UserAction::class, 'voterPage'])->name('voter');

Route::post('/jevote', [UserAction::class, 'voting']);

Route::get('/register', [AuthentificationController::class, 'registerRedirect'])->name('Auth.register');




Route::controller(ImageController::class)->group(function(){

    Route::get('image-upload', 'index');

    Route::post('image-upload', 'store')->name('image.store');

});

Route::post('/register',[AuthentificationController::class, 'register']);


Route::get('/admin2023', [AdminController::class, 'login'])->name('Admin.login');

Route::post('/admin2023', [AdminController::class, 'Dologin']);

Route::get('/adminDash', [AdminController::class, 'home'])->middleware('auth')->name('Admin.dash');



Route::get('/registerUser', [AdminController::class, 'registerform'])->middleware('auth')->name('Admin.registerUser');

Route::post('/registerUser', [AdminController::class, 'storeUser']);
Route::get('/logout', [AuthentificationController::class, 'logout'])->name('logout');

Route::get('/jecree', [AdminController::class, 'AdminCreer']);



