<?php

use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\Admin\UserController as UserAdmin;

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

#HOMEPAGE

Route::get('/', [HomeController::class, 'index'])->name('index');

#USER
Route::prefix('/')->controller(UserController::class)->name('user.')->group(function (){
    Route::get('/voter','votePage')->name('vote');
    Route::post('/voter/{candidate}', 'publicVote')->name('publicVote')->middleware('Auth');
});


#AUTHENTIFICATION
Route::prefix('/auth')->name('auth.')->controller(AuthentificationController::class)->group( function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login','doLogin');
    Route::delete('/logout', 'logout')->name('logout');
});


#ADMINISTRATEUR
Route::prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function (){
    Route::get('/', 'login')->name('login');
    Route::post('/','doLogin');
    #DASHBOARD
    Route::prefix('/dash')->name('dash.')->middleware('Admin')->group(function (){
        Route::get('/','home')->name('index');
        #USER MANAGEMENT
        Route::prefix('/users')->controller(UserAdmin::class)->name('users.')->group(function (){
            Route::get('/register-users', 'create')->name('createUsers');
            Route::post('/register-users', 'store')->name('storeUsers');
        });
        #CAMDIDATE MANAGEMENT
        Route::resource('candidate', CandidateController::class)->except('show');
    });
});
