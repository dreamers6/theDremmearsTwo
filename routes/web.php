<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dreamersController ;
use App\Http\Controllers\hahaController ;
use App\Http\Controllers\getFromApi ;
use App\Http\Controllers\UserController ;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hihi' , [ getFromApi::class , "packages" ])->name("hihi") ;
Route::get('/' , [ dreamersController::class , "index" ])->name("index") ;
// Route::get('/register2' , [ dreamersController::class , "services" ])->name("register2") ;
// Route::get('/anass' , [ dreamersController::class , "anass" ])->name("anass") ;
// Route::get('/hamid' , [ dreamersController::class , "hamid" ])->name("hamid") ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index']);

Route::get('/services',[ dreamersController::class , "services" ])->name("services");

Route::get('/api' , function() {
    return view('api.api');
});
