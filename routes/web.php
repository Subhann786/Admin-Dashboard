<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\TemplateController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::get('temp' , [TemplateController::class, 'index'])->name('index');

//Route::get('login', 'AuthenticatedSessionController@login')->middleware('custom.auth');



Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
 
    //Route::namespace('Auth')->group(function(){
        //Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::GET('login', [AuthenticatedSessionController::class, 'show'])->name('login');
        Route::POST('login', [AuthenticatedSessionController::class, 'login'])->name('login');

    });
//});






//Route::get('login', 'Admin\Auth\AuthenticatedSessionController@create');

// Route::group(['prefix' => 'admin'], function () {
//     // Other admin routes can go here

//     // Route for AuthenticatedSessionController
//     Route::get('auth/login', 'Admin\Auth\AuthenticatedSessionController@index')
//          ->where('login', '.*');
// });


//Route::get('login', [AuthenticatedSessionController::class, 'login'])->name('login');