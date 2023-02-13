<?php

use Illuminate\Support\Facades\Route;
// import pages controller
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class,'index']);

// service route
Route::get('/services',[PagesController::class,'services']);

// about route
Route::get('/about', [PagesController::class,'about']);

// contact route
Route::get('/contact',[PagesController::class,'contact']);

// project route
Route::get('/projects',[PagesController::class,'projects']);

// Human Capital Development route
Route::get('/HumanCapitalDevelopment',[PagesController::class,'HumanCapitalDevelopment']);

// carriers route
// Route::get('/carriers',[PagesController::class,'carriers']);