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

// Lanre Profile route
Route::get('/lanre',[PagesController::class,'profileLanre']);

// Grace Profile route
Route::get('/grace',[PagesController::class,'profileGrace']);

// carriers route
// Route::get('/carriers',[PagesController::class,'carriers']);


// Project routes starts here

Route::get('/IntelligentTransportationSystemImplementation',[PagesController::class,'ITS_Implementation']);

Route::get('/BusinessTechnologyInvestmentAdvise',[PagesController::class,'BusinessTechnologyInvestmentAdvise']);

Route::get('/SoftwareDevelopmentandImplementation',[PagesController::class,'SoftwareDevelopmentandImplementation']);

Route::get('/SelfServiceportal',[PagesController::class,'SelfServiceportal']);

Route::get('/ValueAddedServiceServiceDeliveryPortal',[PagesController::class,'ValueAddedServiceServiceDeliveryPortal']);

Route::get('/DataCenterMigration',[PagesController::class,'DataCenterMigration']);

Route::get('/SubscriberRegistration',[PagesController::class,'SubscriberRegistration']);

Route::get('/KnowYourCustomerSystemDevelopment',[PagesController::class,'KnowYourCustomerSystemDevelopment']);

Route::get('/Rebranding',[PagesController::class,'Rebranding']);

Route::get('/ProcessAutomationAndDataSolutions',[PagesController::class,'ProcessAutomationAndDataSolutions']);