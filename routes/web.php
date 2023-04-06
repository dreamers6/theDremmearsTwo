<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dreamersController ;


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

Route::get('/' , [ dreamersController::class , "index" ])->name("index") ;
// Route::get('/anass' , [ dreamersController::class , "anass" ])->name("anass") ;
// Route::get('/hamid' , [ dreamersController::class , "hamid" ])->name("hamid") ;
