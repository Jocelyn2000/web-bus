<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VoyageController;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/services",[PagesController::class,'services']);
Route::get("/lignes",[PagesController::class,'lines']);
Route::get("/apropos",[PagesController::class,'about']);
Route::get("/contacts",[PagesController::class,'contacts']);

Route::post('/inscription',[ClientController::class,'store'])->name('inscription');

//page pour consulter la liste de voyage
Route::get('/services/reservations',[VoyageController::class,'index'])->name('reservations');
//nombre de places disponibles
Route::get('/services/reservations/voyages',[VoyageController::class,'index'])->name('places-disponibles');
//reservez une place
Route::post('/services/reservations/reserver',[VoyageController::class,'reserver'])->name('reserver');
Route::get('/services/expeditions',[VoyageController::class,'expeditions'])->name('expeditions');
Route::post('/services/reservations/reserver',[VoyageController::class,'expedier'])->name('expedier');

Route::get('/services',function(){
    return view('services');
})->name('services');

Route::get('/lignes',function(){
    return view('lines');
})->name('lines');

Route::get('/contacts',function(){
    return view('contacts');
})->name('contacts');

Route::get('/about',function(){
    return view('about');
})->name('about');




